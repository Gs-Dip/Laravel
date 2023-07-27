<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // cache()->put("hello","world");
    // dd(cache()->get("hello"));
                                        ///////commented codes are un-neassary...i have done it just for practice
    // Cache::put("hello","world");
    // dd(cache()->get("hello"));
    
    return view('welcome');
});

Route::get('/test', function () {
    return "i'm test route";
});

Route::get('/facade', function () {
    Hunter::test();
});


Route::get('/test2', function () {
    app()->make('first_service_provider');
});


Route::get('/about',function (){
    return view('about');
    //return redirect('/contruct');
});


Route::get('/contruct', function () {
    return view('contruct');
});



Route::view('/service','service'); //////aivabe sora sori view function call kore dile r function likhte hoy na....prothom /service ta hocche amar route ar nam abong porer service ta hocche amar resources ar views file moddhe je service.blade.php ache oi file ta...jodi amar service.blade.php file ta kono folder ar moddhe thakto tahole amake oi forlder ar nam like . chinho diye tar por file ar nam ta dite hoto jemon udahoron dip.service   


////////////route paramiters-------------------------------------
Route::get('/amni/{roll}', function ($roll) { /////akhon ami jodi browser a giye localhost/amni/20 dei tahole Your Roll is  20 dekhabe browser a
    return "Your Roll is  $roll";
});
///////////-------------------------------------------------------




/////////////Name Route-------------------------------------------
Route::get(md5('/productDlkjauioghioujgoijoij'), function () { ////md5() ar kaj holo md5() ar moddhe ja thakbe takhe # kore dewa ba encript kore dewa////jokhon amra niche neme() diye aita ke name route baniye felbo tokhon r aikhane je route name dibo tar r kono value thakbe na
    return view('product');
})->name('product.us'); ////ai route tar name ami diyechi product.us ai name ai route take ami sobjaigai bebohar korte pari ...ta chara ami je kono nam dite pari ar moddhe 
////////////------------------------------------------------------


//////////route for middleware perpase----------------------------
Route::get('/country',function() {
    return view('country');
})->middleware('Dip'); ///////Dip name ami amar banano middleware ta ke app/Http/ kernel.php ar moddhe register kore diyechi tai aikhane oi nam tai diyechi  



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
