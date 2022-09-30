<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function city($slug)
    {
        $cities = City::findBySlug($slug);
        $posts = $cities->posts()->paginate(10);
        return view('app.city.city', compact('cities','posts'));
    }
}
