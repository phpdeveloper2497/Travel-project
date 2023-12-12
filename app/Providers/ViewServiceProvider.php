<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('components.footer', function ($view) {
            $view->with('galleries', Gallery::all());
        });
        View::composer('home', function ($view) {
            $view->with('posts', Post::latest()->limit(3)->get());
        });
    }
}
