<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Places;
use App\Categories;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
class HomePageController extends Controller
{
    //
    public function getHomePage()
    {

        return view('user.trangchu',compact('places','cates','catesChilds'));
    }
}
