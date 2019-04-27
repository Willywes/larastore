<?php

namespace Willywes\Larastore\Providers;

use Illuminate\Support\ServiceProvider;

class LarastoreServiceProvider extends ServiceProvider
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
       // dd('loadied');
        // migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        //routes
        $this->loadRoutesFrom(__DIR__."/../routes/api.php");
        $this->loadRoutesFrom(__DIR__."/../routes/backoffice.php");
        $this->loadRoutesFrom(__DIR__."/../routes/web.php");

        //views
        $this->loadViewsFrom(__DIR__."/../resources/views", "Larastore");


    }
}
