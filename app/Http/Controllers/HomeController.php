<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Cari kategori berdasarkan slug
        $categoryProfil = Category::where('slug', 'profil')->first();
        $categorySejarah = Category::where('slug', 'sejarah')->first();

        // Ambil data profil jika kategori ditemukan
        $profil = null;
        if ($categoryProfil) {
            $profil = Post::with('category')
                ->where('status', 'published')
                ->where('category_id', $categoryProfil->id)
                ->first();
        }

        // Ambil data sejarah jika kategori ditemukan
        $sejarah = null;
        if ($categorySejarah) {
            $sejarah = Post::with('category')
                ->where('status', 'published')
                ->where('category_id', $categorySejarah->id)
                ->first();
        }

        // Kategori berita (asumsi category_id 1 atau sesuaikan)
        $posts = Post::with('category')
            ->where('status', 'published')
            ->where('category_id', 1)
            ->latest('published_at')
            ->take(6)
            ->get();

        $recentPosts = Post::where('status', 'published')
            ->latest('published_at')
            ->take(2)
            ->get();

        return view('home', compact('posts', 'recentPosts', 'profil', 'sejarah'));
    }
}
