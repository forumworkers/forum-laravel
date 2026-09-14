<?php

namespace App\Repository\PostFree;


use Illuminate\Support\ServiceProvider;


class PostFreeRepoServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('App\Repositories\User\UserInterface', 'App\Repositories\User\UserInterface');

    	// no se esta cargando
        // $this->app->bind('App\Repository\Post\PostInterface',
        //  'App\Repository\Post\PostInterface');
    }
}