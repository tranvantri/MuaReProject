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
    	$services = DB::table('services')->leftJoin('users', 'users.id', '=', 'services.idUser')->where('services.status', 1)->orderBy('services.id', 'desc')->take(18)->get();

        return view('user.trangchu',compact('services'));
    }
}
