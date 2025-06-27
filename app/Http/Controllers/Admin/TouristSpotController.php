<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TouristSpot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TouristSpotController extends Controller
{
  public function index()
  {
    $spots = TouristSpot::orderBy('created_at', 'desc')->paginate(10);
    return view('admin.tourist-spots.index', compact('spots'));
  }

  public function create()
  {
    return view('admin.tourist-spots.create');
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'required|string',
      'short_description' => 'required|string|max:200',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
      'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
      'location' => 'required|string|max:255',
      'price' => 'nullable|numeric|min:0',
      'category' => 'required|string|max:100',
      'facilities' => 'nullable|array',
      'contact' => 'nullable|string|max:255',
      'opening_hours' => 'nullable|string|max:255',
      'is_featured' => 'boolean',
      'is_active' => 'boolean',
      'rating' => 'nullable|numeric|min:0|max:5',
    ], [
      'image.max' => 'Gambar utama maksimal 5MB.',
      'gallery.*.max' => 'Setiap gambar galeri maksimal 5MB.',
      'image.required' => 'Gambar utama wajib diupload.',
      'image.image' => 'File gambar utama harus berformat gambar.',
      'gallery.*.image' => 'File galeri harus berformat gambar.',
    ]);

    // Handle checkboxes
    $validated['is_featured'] = $request->has('is_featured');
    $validated['is_active'] = $request->has('is_active');

    // Handle price default
    if (!isset($validated['price'])) {
      $validated['price'] = 0;
    }

    // Filter empty facilities
    if (isset($validated['facilities'])) {
      $validated['facilities'] = array_filter($validated['facilities']);
    }

    // Handle main image upload
    if ($request->hasFile('image')) {
      $validated['image'] = $request->file('image')->store('tourist-spots', 'public');
    }

    // Handle gallery upload
    if ($request->hasFile('gallery')) {
      $gallery = [];
      foreach ($request->file('gallery') as $file) {
        $gallery[] = $file->store('tourist-spots/gallery', 'public');
      }
      $validated['gallery'] = $gallery;
    }

    TouristSpot::create($validated);

    return redirect()->route('admin.tourist-spots.index')
      ->with('success', 'Tempat wisata berhasil ditambahkan! 🎉');
  }

  public function show(TouristSpot $touristSpot)
  {
    return view('admin.tourist-spots.show', compact('touristSpot'));
  }

  public function edit(TouristSpot $touristSpot)
  {
    return view('admin.tourist-spots.edit', compact('touristSpot'));
  }

  public function update(Request $request, TouristSpot $touristSpot)
  {
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'required|string',
      'short_description' => 'required|string|max:200',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
      'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
      'location' => 'required|string|max:255',
      'price' => 'nullable|numeric|min:0',
      'category' => 'required|string|max:100',
      'facilities' => 'nullable|array',
      'contact' => 'nullable|string|max:255',
      'opening_hours' => 'nullable|string|max:255',
      'is_featured' => 'boolean',
      'is_active' => 'boolean',
      'rating' => 'nullable|numeric|min:0|max:5',
      'delete_main_image' => 'nullable|string',
      'deleted_gallery_images' => 'nullable|string',
    ], [
      'image.max' => 'Gambar utama maksimal 5MB.',
      'gallery.*.max' => 'Setiap gambar galeri maksimal 5MB.',
      'image.image' => 'File gambar utama harus berformat gambar.',
      'gallery.*.image' => 'File galeri harus berformat gambar.',
    ]);

    // Handle checkboxes
    $validated['is_featured'] = $request->has('is_featured');
    $validated['is_active'] = $request->has('is_active');

    // Handle price default
    if (!isset($validated['price'])) {
      $validated['price'] = 0;
    }

    // Filter empty facilities
    if (isset($validated['facilities'])) {
      $validated['facilities'] = array_filter($validated['facilities']);
    }

    // Handle main image deletion
    if ($request->input('delete_main_image') == '1' && $touristSpot->image) {
      Storage::disk('public')->delete($touristSpot->image);
      $validated['image'] = null;
    }

    // Handle main image upload
    if ($request->hasFile('image')) {
      if ($touristSpot->image) {
        Storage::disk('public')->delete($touristSpot->image);
      }
      $validated['image'] = $request->file('image')->store('tourist-spots', 'public');
    }

    // Handle gallery images deletion
    $currentGallery = $touristSpot->gallery ?? [];
    if ($request->input('deleted_gallery_images')) {
      $deletedImages = explode(',', $request->input('deleted_gallery_images'));
      $deletedImages = array_filter($deletedImages); // Remove empty values

      foreach ($deletedImages as $deletedImage) {
        Storage::disk('public')->delete($deletedImage);
        $currentGallery = array_values(array_filter($currentGallery, function ($img) use ($deletedImage) {
          return $img !== $deletedImage;
        }));
      }
    }

    // Handle new gallery upload
    if ($request->hasFile('gallery')) {
      $newGallery = [];
      foreach ($request->file('gallery') as $file) {
        $newGallery[] = $file->store('tourist-spots/gallery', 'public');
      }
      $validated['gallery'] = array_merge($currentGallery, $newGallery);
    } else {
      $validated['gallery'] = $currentGallery;
    }

    $touristSpot->update($validated);

    return redirect()->route('admin.tourist-spots.index')
      ->with('success', 'Tempat wisata berhasil diperbarui! ✨');
  }

  public function destroy(TouristSpot $touristSpot)
  {
    // Delete images
    if ($touristSpot->image) {
      Storage::disk('public')->delete($touristSpot->image);
    }
    if ($touristSpot->gallery) {
      foreach ($touristSpot->gallery as $image) {
        Storage::disk('public')->delete($image);
      }
    }

    $touristSpot->delete();

    return redirect()->route('admin.tourist-spots.index')
      ->with('success', 'Tempat wisata berhasil dihapus! 🗑️');
  }
}
