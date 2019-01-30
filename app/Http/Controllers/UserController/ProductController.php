<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Places;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
	/* 	Lấy chi tiết sản phẩm theo id truyền vào
		- 	đầu vào: id của sản phẩm
		-	đầu ra: sản phẩm, người bán sp đó
	*/
	public function getProduct($id){
		$products = DB::table('products')->join('users', 'users.id', '=', 'products.idUser')->where('products.id',$id)->where('products.adminCheck',1)->select('users.id as idChuShop', 'products.*','users.email as emailChuShop','users.phone as phoneChuShop','users.address as addressChuShop','users.name as tenChuShop','users.avatar as avatarChuShop','users.username as username')->get();

		$product_category = DB::table('products')->join('categories','categories.id','=','products.idCate')->where('products.id',$id)->where('products.adminCheck',1)->select('categories.name as nameCate','categories.id as idCate')->get();

		$product_relate = DB::table('products')->join('categories','categories.id','=','products.idCate')->join('users', 'users.id', '=', 'products.idUser')->where('categories.name','smartphone')->where('products.adminCheck',1)->inRandomOrder()->limit(3)->select('products.*','users.name as nameChuShop')->get();

		$randPro = DB::table('products')->where('products.adminCheck',1)->inRandomOrder()->limit(6)->get();



  		return view('user.chitietsanpham',compact('products','product_category','product_relate','randPro'));
	}   	


}