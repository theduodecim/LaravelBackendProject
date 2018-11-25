<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema; //Import Schema
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
        Schema::defaultStringLength(191); //Solved by increasing StringLength
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(
            \App\Repositories\UserRepository::class, // we are dealing with repositories
            \App\Repositories\DbUserRepository::class// multi ways to feaching and storing users
        );

        //or
        // $this->app->bind('foo')

        /*
    app()->singleton('foo')
    $this->app->singleton('foo')
     */

    }
}
