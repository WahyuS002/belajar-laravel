<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('public.post.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('public.post.show', compact('post'));
    }

    public function category(Category $category)
    {
        return view('public.category.show', compact('category'));
    }
}
