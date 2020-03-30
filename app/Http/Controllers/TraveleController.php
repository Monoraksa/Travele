<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use lluminate\Routing\Controllerl;
use Illuminate\Support\Facades\DB;

//use Illuminate\Contracts\Container\BindingResolutionException;



class TraveleController extends Controller
{
    function index(){
        return view("Travele.index");
    }
    function hotelresto(){
        return view("Travele.hotelresto");
    }
}
?>
