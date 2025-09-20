<?php

namespace App\Http\Controllers;

use App\Models\AirManisPhoto;
use App\Models\Story;
use App\Models\TouristSpot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredSpots = TouristSpot::where('is_featured', true)
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $spots = TouristSpot::where('is_active', true)
            ->latest()
            ->take(6)
            ->get();

        $airManisPhotos = AirManisPhoto::where('is_active', true)
            ->orderBy('order')
            ->get();

        $stories = Story::active()->ordered()->get();

        return view('welcome', compact('featuredSpots', 'spots', 'airManisPhotos', 'stories'));
    }

    public function spots(Request $request)
    {
        $query = TouristSpot::where('is_active', true);

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }

        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%");
            });
        }

        $spots = $query->latest()->paginate(9);

        return view('spots.index', compact('spots'));
    }

    public function show(TouristSpot $spot)
    {
        if (! $spot->is_active) {
            abort(404);
        }

        $relatedSpots = TouristSpot::where('is_active', true)
            ->where('category', $spot->category)
            ->where('id', '!=', $spot->id)
            ->latest()
            ->take(3)
            ->get();

        return view('spots.show', compact('spot', 'relatedSpots'));
    }

    public function stories()
    {
        $stories = Story::active()->ordered()->get();

        return view('stories.index', compact('stories'));
    }

    public function showStory(Story $story)
    {
        if (! $story->is_active) {
            abort(404);
        }

        $relatedStories = Story::active()
            ->where('id', '!=', $story->id)
            ->ordered()
            ->take(3)
            ->get();

        return view('stories.show', compact('story', 'relatedStories'));
    }

    public function gallery(Request $request)
    {
        // Get all images from public/assets folder
        $photos = collect();
        $assetsPath = public_path('assets');

        if (file_exists($assetsPath)) {
            $assetFiles = glob($assetsPath.'/*.{jpg,jpeg,png,gif,webp,JPG,JPEG,PNG,GIF,WEBP}', GLOB_BRACE);
            foreach ($assetFiles as $assetFile) {
                $filename = basename($assetFile);
                $relativePath = 'assets/'.$filename;

                // Extract a readable title from filename
                $title = str_replace(['_', '-'], ' ', pathinfo($filename, PATHINFO_FILENAME));
                $title = ucwords($title);

                $photos->push([
                    'id' => 'asset-'.md5($filename),
                    'title' => $title,
                    'image' => $relativePath,
                    'type' => 'asset',
                    'description' => 'Koleksi foto galeri',
                ]);
            }
        }

        // Shuffle photos for better gallery experience
        $photos = $photos->shuffle();

        return view('gallery.index', compact('photos'));
    }
}
