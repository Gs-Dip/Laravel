<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class JogfolServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('jogfol',function(){
            return new \App\RepositoryDip\dip;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
