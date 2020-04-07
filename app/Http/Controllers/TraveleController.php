<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use lluminate\Routing\Controllerl;
use Illuminate\Support\Facades\DB;

//use Illuminate\Contracts\Container\BindingResolutionException;



class TraveleController extends Controller
{
    function index(){
        return view("travel.index");
    }
    function about(){
        return view("travel.about");
    }
    function destination(){
        return view("travel.destination");
    }
    function hotel_resto(){
        return view("travel.hotel_resto");
    }
    function contact(){
        return view("travel.contact");
    }
    function bookingcomplete(){
        return view("travel.bookingcomplete");
    }
}
?>
