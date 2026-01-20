<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

class NewsController extends Controller
{
    public function index(Category $category)
    {
        $posts = Post::with(['author', 'category'])
            ->where('status', 'published')
            ->where('category_id', $category->id)
            ->latest('published_at')
            ->paginate(12);

        return view('news.index', compact('posts', 'category'));
    }

    public function show(string $slug)
    {
        $post = Post::with(['author', 'category'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        // Get related posts for sidebar
        $relatedPosts = Post::with(['author', 'category'])
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->latest('published_at')
            ->take(4)
            ->get();

        return view('news.show', compact('post', 'relatedPosts'));
    }
}