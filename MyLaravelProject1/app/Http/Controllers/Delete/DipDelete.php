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

    ////__Request mathod__////
    public function Request(){
        return view('request');
    }

    ////__Postdata mathod__////
    public function Postdata(Request $request){
        //dd($request->all());///sob data dekhar jonno  
       
        //ai data gulo database a pass korte hobe   
        //success massage dekhate hobe
        //rederect kore dite hobe oono page aaaaa  


        // dd($request-> name ); ///shudhu name input ar value ta dekhar jonno
        //dd($request-> phon); ///shudhu phon input ar value ta dekhar jonno
        //dd($request->path()); ///data gulo amra kon route theke pacchi ta browser a dekhar jonno
        //dd($request->url()); ///request ar url browser a  dekhar jonno 
        //dd($request->ip()); ///request ar ip dekhar jonno
        //dd($request->collect()); ///amader request ar data gulo akta collection aakare dekhar jonno
        dd($request->all()); 
    }

}
