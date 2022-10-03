<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('estates', [\App\Http\Controllers\PostController::class, 'index'])->name('estates');
Route::get('post/{slug}', [\App\Http\Controllers\PostController::class, 'post'])->name('post.more');
Route::get('category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('category/{slug}', [\App\Http\Controllers\CategoryController::class, 'category'])->name('category.more');
Route::get('city', [\App\Http\Controllers\CityController::class, 'index'])->name('city');
Route::get('city/{slug}', [\App\Http\Controllers\CityController::class, 'city'])->name('city.more');
Route::match(['post','get'], '/phone', [ContactController::class, 'phone'])->name('phone');
Route::match(['post','get'], '/send', [ContactController::class, 'send'])->name('send');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'inside', 'middleware'=>['auth']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('mainAdmin');
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('city', CityController::class);
    Route::resource('page', PageController::class);
});
