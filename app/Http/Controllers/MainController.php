<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cities = City::all();
        $posts = Post::orderBy('created_at', 'desc')->where('published', '1')->take('4')->get();
        return view('app.main', [
            'posts' => $posts,
            'categories' => $categories,
            'cities' => $cities
        ]);
    }

    public function category($slug)
    {
        $categories = Category::findBySlug($slug);
        return view('app.category', compact('categories'));
    }
}
