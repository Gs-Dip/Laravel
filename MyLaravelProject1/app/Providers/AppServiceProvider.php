<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind("first_service_provider",function($app){ ///// aivabe service toiri korte hoy (eeeta sohoj niyom)
            dd("this is my first service container");
        });

        App::getFacadeApplication()-> bind("second_service_provider",function($app){ ///aivabe oo service toiri kora jai
            dd("this is my second service container");
        });



    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
