<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
use Illuminate\Support\Facades\DB;
class UserPageController extends Controller
{
    // Trang Gian hàng của người dùng
    /* 
	Đầu vào: id của khách hàng
	Đầu ra: thông tin của User
    */
    public function getView($id){

    	// truyền id của khách hàng đã đăng nhập vào đây -------------
    	$user = DB::table('users')->where('adminCheck',1)->where('users.id',$id)->get();

    	$services = DB::table('tindang')
    				->join('places','places.id','=','tindang.idPlace')
    				->where('tindang.adminCheck',1)->where('tindang.idUser',$id)->where('places.enable',1)
    				->select('tindang.*','places.name as namePlace','places.id as idPlace')
    				->get();
    	$soluongService = $services->count();

    	$products =  DB::table('products')->where('adminCheck',1)->where('idUser',$id)->get();
    	$soluongProducts = $products->count();

    	return view('user.gianhangcuanguoidung',compact('user','services','soluongService','products','soluongProducts'));
    }

    // Trang quản lý đơn hàng
    // Đầu vào: 
    // Đầu ra:
    public function getQuanLyDonHang(){
        return view('user.trangquanlydonhang');
    }

    // trang quan ly kho hang cua user.(yeu caud ang nhap)
    // dau vao: id cua user
    // dau ra: thong tin cua san pham cua user
    public function getUserQuanLyKhoHang(){
        // thông tin các sản phẩm user bán, truyền id của khách hàng = 1. Yêu cầu lấy id của Auth:id() đã đăng nhập
        $products = DB::table('products')->where('adminCheck',1)->where('idUser',1)->get();
        $soluongProducts = $products->count();
        
        $cateParent = DB::table('categories')->where('enable',1)->where('idParent',0)->get();
        $cateChild = DB::table('categories')->where('enable',1)->where('idParent','<>',0)->get();

        //$place_product = DB::table('products')->join('place_product','place_product.idProduct','=','products.id')->where('adminCheck',1)->where('idUser',1)->select('products.*','place_product.idPlace as placeProduct')->get();

        $place_product = DB::table('products')->join('place_product','place_product.idProduct','=','products.id')->where('products.adminCheck',1)->where('products.idUser',1)->select('place_product.*')->get();

        return view('user.userquanlykhohang',compact('products','soluongProducts','cateParent','cateChild','place_product'));
    }
}
