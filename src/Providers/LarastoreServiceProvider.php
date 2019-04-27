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
        $this->loadMigrationsFrom(__DIR__.'./database/migrations');


    }
}
