<?php
namespace App\Http\Controllers;

use App\Models\Post;

class ProfilController extends Controller
{
    public function show(string $section, string $slug)
    {
        $post = Post::with(['author', 'category'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('profil.show', compact('post', 'section'));
    }
}