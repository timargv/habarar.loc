<?php

namespace App\Providers;

use App\Ayat;
use App\Sura;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */



    public function boot()
    {
        //
        view()->composer('_sidebar', function ($view) {
            $view->with('suras', Sura::all());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
