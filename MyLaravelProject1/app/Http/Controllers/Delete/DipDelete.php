<?php

namespace App\Http\Controllers\Delete;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Delete\DipDelete2Controller; 


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
        //dd($request->all()); 


        /////Redirect concept-------------------------------
        $data=array();
        $data['name']=$request->name; ////$request->name akhane request theke je nam ta pacchi sheitake $data['name'] ar moddhe rakhchi
        $data['email']=$request->email;
        $data['phone']=$request->phon;

          ///database a save korte hobe akhane tarpor

        //return redirect('/');  /////kono name route redirect korte hole take return redirect()->route('name route ar nam dite hobe akhane')
        
        ////or we can redirect to another controller
        //return redirect()->action ([DipDelete2Controller::class , 'test']); //// akhane redirect kora hoyeche onno r akta controller DipDelete2Controller ar test method a abong ai controller ar test method ta ke dekhbo tai ai controller ke routes ar moddhe web.php ar moddhe akta get route create korechi jehetu ami aita dekhbo tai get method use korechi route a    
        
        //////or we can redirect to another link like (google.com) 
        return redirect()->away('https://www.google.com'); ////(Redirecting To External Domains)akhane google.com a redirect kore debe
    }



     ////__Response__////
    public function Response( Request $request){
        return response('hello world');

        
    }

}
