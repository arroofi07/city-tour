<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        \Log::info('Story store method called', [
            'method' => $request->method(),
            'has_file_image' => $request->hasFile('image'),
            'request_data' => $request->except(['image', '_token']),
            'content_length' => $request->header('Content-Length'),
            'content_type' => $request->header('Content-Type')
        ]);

        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'nullable|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'order' => 'required|integer|min:0',
                'is_active' => 'boolean',
            ], [
                'image.max' => 'Gambar maksimal 2MB.',
                'image.image' => 'File harus berformat gambar.',
                'title.required' => 'Judul story wajib diisi.',
                'description.required' => 'Deskripsi story wajib diisi.',
                'order.required' => 'Urutan story wajib diisi.',
            ]);

            $data = $request->only(['title', 'subtitle', 'description', 'order', 'is_active']);
            $data['is_active'] = $request->has('is_active');

            if ($request->hasFile('image')) {
                $data['image_path'] = $request->file('image')->store('stories', 'public');

                // Windows compatibility: Copy to public folder
                $sourcePath = storage_path('app/public/' . $data['image_path']);
                $destPath = public_path('storage/' . $data['image_path']);
                $destDir = dirname($destPath);
                if (!File::exists($destDir)) {
                    File::makeDirectory($destDir, 0755, true);
                }
                File::copy($sourcePath, $destPath);
            }

            $story = Story::create($data);

            return redirect()->route('admin.stories.index')
                ->with('success', 'Story berhasil dibuat! 🎉');

        } catch (\Exception $e) {
            \Log::error('Story creation failed: ' . $e->getMessage(), [
                'request_data' => $request->except(['image']),
                'error' => $e->getTraceAsString()
            ]);

            return back()->withErrors([
                'error' => 'Terjadi kesalahan saat menyimpan story. Silakan coba lagi.'
            ])->withInput();
        }
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
            'is_active' => 'boolean',
        ]);

        $data = $request->only(['title', 'subtitle', 'description', 'order', 'is_active']);
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($story->image_path) {
                Storage::disk('public')->delete($story->image_path);
                // Also delete from public folder
                $publicPath = public_path('storage/' . $story->image_path);
                if (File::exists($publicPath)) {
                    File::delete($publicPath);
                }
            }
            $data['image_path'] = $request->file('image')->store('stories', 'public');

            // Windows compatibility: Copy to public folder
            $sourcePath = storage_path('app/public/' . $data['image_path']);
            $destPath = public_path('storage/' . $data['image_path']);
            $destDir = dirname($destPath);
            if (!File::exists($destDir)) {
                File::makeDirectory($destDir, 0755, true);
            }
            File::copy($sourcePath, $destPath);
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
