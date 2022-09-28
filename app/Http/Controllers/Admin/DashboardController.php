<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $posts_count = Post::all()->count();
        $pages_count = Page::all()->count();
        $cat_count = Category::all()->count();
        $user_count = User::all()->count();

        return view('admin.home.index', [
            'posts_count' => $posts_count,
            'pages_count' => $pages_count,
            'cat_count' => $cat_count,
            'user_count' => $user_count
        ]);
    }
}
