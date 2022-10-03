<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Post;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()
    {
        $cities = City::all();
        return view('app.city.index', compact( 'cities'));
    }

    public function city($slug)
    {
        $cities = City::findBySlug($slug);
        $posts = $cities->posts()->paginate(10);
        return view('app.city.city', compact('cities','posts'));
    }
}
