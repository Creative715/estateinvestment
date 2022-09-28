<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->take('4')->get();
        return view('app.main', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function post($slug)
    {
        $posts = Post::findBySlug($slug);
        return view('app.post', compact('posts'));
    }
    public function category($slug)
    {
        $categories = Category::findBySlug($slug);
        return view('app.category', compact('categories'));
    }
}
