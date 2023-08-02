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


    ////__Form mathod__////
    public function Form() {
        return view('form');
    }


    ////__Formdata mathod__////
    public function Formdata(Request $request) { //// akhane Request ar maddhome form theke data dhora hoyeche
        dd($request->all());
    }
}
