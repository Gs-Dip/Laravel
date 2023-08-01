<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokDip extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return "This Is Your Invock Controller!";
    }
}
