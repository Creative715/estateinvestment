<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::allPaginate(20);
        return view('app.post.index', [
            'posts' => $posts
        ]);
    }

    public function post($slug)
    {
        $posts = Post::findBySlug($slug);
        return view('app.post.post', compact('posts'));
    }
}
