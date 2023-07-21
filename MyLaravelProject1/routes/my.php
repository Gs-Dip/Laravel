<?php

 
use Illuminate\Support\Facades\Route;
 

Route::get('/my', function () {
    
    return view('my');
});
