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

    	$services = DB::table('services')
    				->join('places','places.id','=','services.idPlace')
    				->where('services.adminCheck',1)->where('services.idUser',1)->where('places.enable',1)
    				->select('services.*','places.name as namePlace','places.id as idPlace')
    				->get();

    	$soluongService = $services->count();





    	$products =  DB::table('products')->where('adminCheck',1)->where('idUser',1)->get();
    	$soluongProducts = $products->count();



    	return view('user.gianhangcuanguoidung',compact('user','services','soluongService','products','soluongProducts'));
    }
}
