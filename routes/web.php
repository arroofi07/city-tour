<?php

use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\TouristSpotController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Image serving route for Windows compatibility - MUST BE FIRST!
// This is needed because php artisan serve on Windows has issues with symlinks
Route::get('/storage/{path}', function ($path) {
    $path = str_replace('../', '', $path); // Prevent directory traversal
    $filePath = storage_path('app/public/' . $path);

    if (!file_exists($filePath)) {
        abort(404);
    }

    // Get file extension
    $extension = pathinfo($filePath, PATHINFO_EXTENSION);

    // Determine mime type
    $mimeTypes = [
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
        'webp' => 'image/webp',
        'svg' => 'image/svg+xml',
    ];

    $mimeType = $mimeTypes[$extension] ?? 'application/octet-stream';

    // Return the file
    return response()->file($filePath, [
        'Content-Type' => $mimeType,
        'Cache-Control' => 'public, max-age=31536000'
    ]);
})->where('path', '.*')->name('storage.file');

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/spots', [HomeController::class, 'spots'])->name('spots.index');
Route::get('/spots/{spot}', [HomeController::class, 'show'])->name('spots.show');
Route::get('/stories', [HomeController::class, 'stories'])->name('stories.index');
Route::get('/stories/{story}', [HomeController::class, 'showStory'])->name('stories.show');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery.index');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes (Protected)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'check.post.size'])->group(function () {
    Route::resource('tourist-spots', TouristSpotController::class);
    Route::resource('stories', StoryController::class);
    Route::get('/', function () {
        return redirect()->route('admin.tourist-spots.index');
    })->name('dashboard');
});

// Air Manis Photos Routes
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('air-manis-photos', \App\Http\Controllers\Admin\AirManisPhotoController::class);
    Route::post('air-manis-photos/update-order', [\App\Http\Controllers\Admin\AirManisPhotoController::class, 'updateOrder'])
        ->name('air-manis-photos.update-order');
});

// Debug upload test - TEMPORARY
Route::post('/test-upload', function(\Illuminate\Http\Request $request) {
    \Log::info('Test upload received:', [
        'method' => $request->method(),
        'has_file' => $request->hasFile('image'),
        'all_data' => $request->except(['image']),
        'files' => $request->allFiles()
    ]);

    if ($request->hasFile('image')) {
        try {
            $path = $request->file('image')->store('test-uploads', 'public');
            return response()->json(['success' => true, 'path' => $path]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    return response()->json(['error' => 'No file uploaded']);
});

Route::get('/test-form', function() {
    return '
    <form action="/test-upload" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="' . csrf_token() . '">
        <input type="file" name="image" required>
        <button type="submit">Test Upload</button>
    </form>';
});

