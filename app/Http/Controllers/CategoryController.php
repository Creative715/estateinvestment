<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{
    public function category($slug)
    {
        $categories = Category::findBySlug($slug);
        $posts = $categories->posts()->paginate(10);
        return view('app.category.category', compact('categories','posts'));
    }
}
