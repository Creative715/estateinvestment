<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('app.category.index', compact('categories'));
    }


    public function category($slug)
    {
        $categories = Category::findBySlug($slug);
        $posts = $categories->posts()->orderBy('created_at', 'desc')->with('city')->paginate(10);
        return view('app.category.category', compact('categories','posts'));
    }
}
