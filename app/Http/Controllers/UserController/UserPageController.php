<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
use Illuminate\Support\Facades\DB;
class UserPageController extends Controller
{
    //
    public function getView(){
    	return view('user.gianhangcuanguoidung',compact(varname));
    }
}
