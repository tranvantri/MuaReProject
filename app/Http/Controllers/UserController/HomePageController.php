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
        $places = Places::all();
        $cates = DB::table('categories')->where('idParent', 0)->where('enable',1)->get();
        $catesChilds = DB::table('categories')->where('idParent','<>', 0)->where('enable',1)->get();
        return view('user.trangchu',compact('places','cates','catesChilds'));
    }
}
