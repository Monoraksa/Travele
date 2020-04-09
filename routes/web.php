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
// Route::get('/', function () {
//     return view('travel.index');
// })->name('travel.index');
// Route::get('/about', function(){
//     return view('travel.about');
// });
// Route::get('/destination', function(){
//     return view('travel.destination');
// });
// Route::get('/hotel-resto', function(){
//     return view('travel.hotel-resto');
// });
// Route::get('/contact', function(){
//     return view('travel.contact');
// });
// Route::get('/bookingcomplete', function(){
//     return view('travel.bookingcomplete');
// });
Route :: get('/','TraveleController@index');
Route :: get('/about','TraveleController@about');
Route :: get('/destination','TraveleController@destination');
Route :: get('/hotel_resto','TraveleController@hotel_resto');
Route :: get('/booking','TraveleController@contact');
Route :: get('/bookingcomplete','TraveleController@bookingcomplete');
// Booking
Route::get('/bookchina', 'BookingController@chinaBooking');

// Store Booking
Route::post('/processbooking', 'BookingController@processbooking');
// Admin 
Route::get('/dashboard', function(){
    return view('admin.index');
});
// Admin Place trip
Route::get('/addPlace', function(){
    return view('admin.add_place');
});
Route::resource('/place', 'PlaceController');
