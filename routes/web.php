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

Route::view('/about','/pages/about')->name('about');
Route::view('/contact','/pages/contact')->name('contact');
Route::view('/developer','/pages/developer')->name('developer');
Route::view('/product','/pages/product')->name('product');
Route::view('/service','/pages/service')->name('service');



