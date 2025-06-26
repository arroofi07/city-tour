<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AirManisPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AirManisPhotoController extends Controller
{
  public function index()
  {
    $photos = AirManisPhoto::orderBy('order')->get();
    return view('admin.air-manis-photos.index', compact('photos'));
  }

  public function create()
  {
    return view('admin.air-manis-photos.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'description' => 'nullable|string',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
      'order' => 'nullable|integer|min:0',
      'is_active' => 'boolean'
    ]);

    $imagePath = $request->file('image')->store('air-manis-photos', 'public');

    AirManisPhoto::create([
      'title' => $request->title,
      'description' => $request->description,
      'image_path' => $imagePath,
      'order' => $request->order ?? 0,
      'is_active' => $request->is_active ?? true
    ]);

    return redirect()->route('admin.air-manis-photos.index')
      ->with('success', 'Foto berhasil ditambahkan');
  }

  public function edit(AirManisPhoto $photo)
  {
    return view('admin.air-manis-photos.edit', compact('photo'));
  }

  public function update(Request $request, AirManisPhoto $photo)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'description' => 'nullable|string',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      'order' => 'nullable|integer|min:0',
      'is_active' => 'boolean'
    ]);

    $data = [
      'title' => $request->title,
      'description' => $request->description,
      'order' => $request->order ?? 0,
      'is_active' => $request->is_active ?? true
    ];

    if ($request->hasFile('image')) {
      // Hapus foto lama
      if ($photo->image_path) {
        Storage::disk('public')->delete($photo->image_path);
      }
      // Upload foto baru
      $data['image_path'] = $request->file('image')->store('air-manis-photos', 'public');
    }

    $photo->update($data);

    return redirect()->route('admin.air-manis-photos.index')
      ->with('success', 'Foto berhasil diperbarui');
  }

  public function destroy(AirManisPhoto $photo)
  {
    if ($photo->image_path) {
      Storage::disk('public')->delete($photo->image_path);
    }

    $photo->delete();

    return redirect()->route('admin.air-manis-photos.index')
      ->with('success', 'Foto berhasil dihapus');
  }

  public function updateOrder(Request $request)
  {
    $request->validate([
      'photos' => 'required|array',
      'photos.*.id' => 'required|exists:air_manis_photos,id',
      'photos.*.order' => 'required|integer|min:0'
    ]);

    foreach ($request->photos as $photoData) {
      AirManisPhoto::where('id', $photoData['id'])->update(['order' => $photoData['order']]);
    }

    return response()->json(['message' => 'Urutan foto berhasil diperbarui']);
  }
}
