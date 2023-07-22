<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class Dip1ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $app=database theke data anlam dhoren
        $app['num']="017523106545";
        $app['addres']="Dhaka";
        $app['ocupation']="student";
        $app['roll']=8;

        view() ->share('dip',$app);
    }
}
