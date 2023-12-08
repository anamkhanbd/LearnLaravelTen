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

Route::view('/about-us','about');
Route::view('/contact','contactpage');
Route::view('/sell','sellproduct');
Route::view('/service','services');



/* Testing Route with Parameters */
Route::get('/post/{id?}',function(string $id = null){
    if ($id) {
    return "<h1> This is ID :" . $id . "</h1>";
    } else {
        return "Not Found Valid ID" ;
    }; 
    
});