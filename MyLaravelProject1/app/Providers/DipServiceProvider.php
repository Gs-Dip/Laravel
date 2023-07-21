<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DipServiceProvider extends ServiceProvider
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
        // $data=database theke data anlam,
        $data=array();
        $data['a']=10;
        $data['b']=20;
        $data['c']=30;
        $data['d']=40;
        view()->share('number',$data); //////akhane amra number name aaa $data ke pass korchi
      
    }

    
}
