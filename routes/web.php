<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TouristSpotController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/spots', [HomeController::class, 'spots'])->name('spots.index');
Route::get('/spots/{spot}', [HomeController::class, 'show'])->name('spots.show');
Route::get('/stories', [HomeController::class, 'stories'])->name('stories.index');
Route::get('/stories/{story}', [HomeController::class, 'showStory'])->name('stories.show');

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
