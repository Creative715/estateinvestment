<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $this->activeLinks();
    }

    public function  activeLinks() {
        View::composer('app.includes.header', function($view) {
            $view->with('mainLink', request()->is('/') ? 'active' : '');
            $view->with('estateLink', (request()->is('estates') or  request()->is('estate/*')) ? 'active' : '');
            $view->with('categoryLink', (request()->is('category') or  request()->is('category/*')) ? 'active' : '');
            $view->with('cityLink', (request()->is('city') or  request()->is('city/*')) ? 'active' : '');
        });
    }
}
