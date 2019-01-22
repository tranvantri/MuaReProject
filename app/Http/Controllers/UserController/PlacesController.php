<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Places;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
class PlacesController extends Controller
{
    //
    public function getPlaces()
    {
        $places = Places::all();
        return view('user.layouts.index',compact('places'));
    }
}
