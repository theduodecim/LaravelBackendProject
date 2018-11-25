<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;




Class BackendServiceProvider extends ServiceProvider

{
    /*
*
* Register the repository lookups in the IoC container.
*
    */

    public function register() 
    {

        $this->app->bind(
            \App\Repositories\UserRepositoryInterface::class,
            \App\Repositories\DbUserRepository::class
        );

    }


}