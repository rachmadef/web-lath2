<?php
namespace App\Http\Controllers;

use App\Models\Post;

class ProfilController extends Controller
{
    public function show(int $id)
    {
        $post = Post::with(['author', 'category'])
            ->where('id', $id)
            ->where('status', 'published')
            ->firstOrFail();

        return view('profil.show', compact('post'));
    }
}