<?php

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
    return view('home');
});

Route::view('/about-us-mia','about')->name('about');
Route::view('/contact','contactpage')->name('contact');
Route::view('/sell','sellproduct')->name('sell');
Route::view('/service','services')->name('service');



/* Testing Route with Parameters */
Route::get('/post/{id?}',function(string $id = null){
    if ($id) {
    return "<h1> This is ID :" . $id . "</h1>";
    } else {
        return "Not Found Valid ID" ;
    }; 
    
});

/* Testing 2 cild peramiiter with Route */
Route::get("/posts/{name?}/commant/{cname?}", function(string $name = null , string $cname = null){
    if ($name) {
        return"<h1> This is ID : ". $name . "</h1>" . "$cname";
    } else {
      return '<h1> ID not Found !' ; 
    };
});

/* Some Extra Routing Mathod use psth of Require */
/*  ->whereNumaric ;
    ->whereAlpha ;
    ->whereAlphaNeumaric ;
*/