<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Places;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
class PlacesController extends Controller
{
    //
    public function getPlaces()
    {
        $places = Places::where('enable',1)->get();
        return view('user.layouts.index',compact('places'));
    }

    public function setCookie($id){
    	Cookie::queue('place', $id, 2628000);
    }

}
