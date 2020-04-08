<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function chinaBooking(){
        $price = 1850;
        return view('travel.contact')->with('price', $price);
    }

    public function processbooking(Request $request){

    }
}
