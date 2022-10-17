<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cities = City::all();
        $posts = Post::allFront();
        return view('app.main', [
            'posts' => $posts,
            'categories' => $categories,
            'cities' => $cities
        ]);
    }

}
