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
        app()->bind('jogfolser',function(){ 
            return new \App\Repository\jogfol; //////akhane ami app\repository path ar moddhe thaka jogfol class take call korechi
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
