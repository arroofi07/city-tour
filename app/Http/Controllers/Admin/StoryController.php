<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
  public function index()
  {
    $stories = Story::orderBy('order')->orderBy('created_at', 'desc')->get();
    return view('admin.stories.index', compact('stories'));
  }

  public function create()
  {
    return view('admin.stories.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'subtitle' => 'nullable|string|max:255',
      'description' => 'required|string',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      'order' => 'required|integer|min:0',
      'is_active' => 'boolean'
    ]);

    $data = $request->only(['title', 'subtitle', 'description', 'order', 'is_active']);
    $data['is_active'] = $request->has('is_active');

    if ($request->hasFile('image')) {
      $data['image_path'] = $request->file('image')->store('stories', 'public');
    }

    Story::create($data);

    return redirect()->route('admin.stories.index')
      ->with('success', 'Story berhasil dibuat!');
  }

  public function show(Story $story)
  {
    return view('admin.stories.show', compact('story'));
  }

  public function edit(Story $story)
  {
    return view('admin.stories.edit', compact('story'));
  }

  public function update(Request $request, Story $story)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'subtitle' => 'nullable|string|max:255',
      'description' => 'required|string',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      'order' => 'required|integer|min:0',
      'is_active' => 'boolean'
    ]);

    $data = $request->only(['title', 'subtitle', 'description', 'order', 'is_active']);
    $data['is_active'] = $request->has('is_active');

    if ($request->hasFile('image')) {
      // Delete old image
      if ($story->image_path) {
        Storage::disk('public')->delete($story->image_path);
      }
      $data['image_path'] = $request->file('image')->store('stories', 'public');
    }

    $story->update($data);

    return redirect()->route('admin.stories.index')
      ->with('success', 'Story berhasil diupdate!');
  }

  public function destroy(Story $story)
  {
    // Delete image if exists
    if ($story->image_path) {
      Storage::disk('public')->delete($story->image_path);
    }

    $story->delete();

    return redirect()->route('admin.stories.index')
      ->with('success', 'Story berhasil dihapus!');
  }
}
