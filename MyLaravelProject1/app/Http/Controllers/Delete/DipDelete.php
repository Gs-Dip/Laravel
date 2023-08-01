<?php

namespace App\Http\Controllers\Delete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DipDelete extends Controller
{
    ////__index mathod__////
    public function index() {
        return view('controller');
    }

    ////__Country mathod__////
    public function Country() {
        return view('country');
    }
}
