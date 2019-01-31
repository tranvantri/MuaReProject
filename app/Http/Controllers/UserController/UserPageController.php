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
    /* 
	Đầu vào: id của khách hàng đã đăng nhập
	Đầu ra: thông tin của User(đã đăng nhập)



    */
    public function getView(){

    	// truyền id của khách hàng đã đăng nhập vào đây -------------
    	$user = DB::table('users')->where('adminCheck',1)->where('users.id',1)->get();

    	$user_service =  DB::table('users')->join('services','services.idUser','=','users.id')->where('adminCheck',1)->where('users.id',1)->get();

    	$user_product =  DB::table('users')->where('adminCheck',1)->where('users.id',1)->get();




    	return view('user.gianhangcuanguoidung',compact('user'));
    }
}
