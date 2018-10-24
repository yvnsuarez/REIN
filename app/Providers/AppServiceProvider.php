<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // \URL::forceRootUrl(\Config::get('app.url'));

        // if (str_contains(\Config::get('app.url'), 'https://'))
        // {
        //     \URL::forceScheme('https');
        // }
        
       Schema::defaultStringLength(191);
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
