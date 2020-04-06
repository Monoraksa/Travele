<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Frontend User 
Route::get('/', function () {
    return view('travel.index');
})->name('travel.index');
Route::get('/about', function(){
    return view('travel.about');
});
Route::get('/destination', function(){
    return view('travel.destination');
});
Route::get('/hotel-resto', function(){
    return view('travel.hotel-resto');
});
Route::get('/contact', function(){
    return view('travel.contact');
});



// Admin 
Route::get('/dashboard', function(){
    return view('admin.index');
});
Route::get('/book',function(){
    return view('admin.book');
});



// Route :: get('/Travele','TraveleController@index');
// Route :: get('/hotelresto','TraveleController@hotelresto');
// Route :: get('/destination','TraveleController@destination');

