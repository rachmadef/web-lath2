<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with('category')
            ->latest('event_date')
            ->paginate(12);

        $categories = GalleryCategory::withCount('galleries')->get();

        return view('gallery.index', compact('galleries', 'categories'));
    }
    public function show(Gallery $gallery)
    {
        // Batasi maksimal 10 foto
        $images = collect($gallery->images)->take(10);

        return view('gallery.show', compact('gallery', 'images'));
    }
}


