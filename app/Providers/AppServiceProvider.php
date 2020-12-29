<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer(['home.includes.menu',],function ($view){
            $view
                ->with(
                    'menus',Category::select('title','slug','id')
                    ->orderBy('rank','ASC')
                    ->limit(5)
                    ->get()
                );
        });
    }
}
