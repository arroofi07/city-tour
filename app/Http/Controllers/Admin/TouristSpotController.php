<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TouristSpot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        \Log::info('TouristSpot store method called', [
            'method' => $request->method(),
            'has_file_image' => $request->hasFile('image'),
            'has_file_gallery' => $request->hasFile('gallery'),
            'request_data' => $request->except(['image', 'gallery', '_token']),
            'content_length' => $request->header('Content-Length'),
            'content_type' => $request->header('Content-Type')
        ]);

        try {
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
            if (! isset($validated['price'])) {
                $validated['price'] = 0;
            }

            // Filter empty facilities
            if (isset($validated['facilities'])) {
                $validated['facilities'] = array_filter($validated['facilities']);
            }

            // Handle main image upload
            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('tourist-spots', 'public');

                // Windows compatibility: Copy to public folder
                $sourcePath = storage_path('app/public/' . $validated['image']);
                $destPath = public_path('storage/' . $validated['image']);
                $destDir = dirname($destPath);
                if (!File::exists($destDir)) {
                    File::makeDirectory($destDir, 0755, true);
                }
                File::copy($sourcePath, $destPath);
            }

            // Handle gallery upload
            if ($request->hasFile('gallery')) {
                $gallery = [];
                foreach ($request->file('gallery') as $file) {
                    $path = $file->store('tourist-spots/gallery', 'public');
                    $gallery[] = $path;

                    // Windows compatibility: Copy to public folder
                    $sourcePath = storage_path('app/public/' . $path);
                    $destPath = public_path('storage/' . $path);
                    $destDir = dirname($destPath);
                    if (!File::exists($destDir)) {
                        File::makeDirectory($destDir, 0755, true);
                    }
                    File::copy($sourcePath, $destPath);
                }
                $validated['gallery'] = $gallery;
            }

            $touristSpot = TouristSpot::create($validated);

            return redirect()->route('admin.tourist-spots.index')
                ->with('success', 'Tempat wisata berhasil ditambahkan! 🎉');

        } catch (\Exception $e) {
            \Log::error('Tourist spot creation failed: ' . $e->getMessage(), [
                'request_data' => $request->except(['image', 'gallery']),
                'error' => $e->getTraceAsString()
            ]);

            return back()->withErrors([
                'error' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.'
            ])->withInput();
        }
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
        if (! isset($validated['price'])) {
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
                // Also delete from public folder
                $publicPath = public_path('storage/' . $touristSpot->image);
                if (File::exists($publicPath)) {
                    File::delete($publicPath);
                }
            }
            $validated['image'] = $request->file('image')->store('tourist-spots', 'public');

            // Windows compatibility: Copy to public folder
            $sourcePath = storage_path('app/public/' . $validated['image']);
            $destPath = public_path('storage/' . $validated['image']);
            $destDir = dirname($destPath);
            if (!File::exists($destDir)) {
                File::makeDirectory($destDir, 0755, true);
            }
            File::copy($sourcePath, $destPath);
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
                $path = $file->store('tourist-spots/gallery', 'public');
                $newGallery[] = $path;

                // Windows compatibility: Copy to public folder
                $sourcePath = storage_path('app/public/' . $path);
                $destPath = public_path('storage/' . $path);
                $destDir = dirname($destPath);
                if (!File::exists($destDir)) {
                    File::makeDirectory($destDir, 0755, true);
                }
                File::copy($sourcePath, $destPath);
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
