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
		-	đầu ra: sản phẩm, người bán sp đó, các sp của shop đó
	*/
	public function getProduct($id){
		$products = DB::table('products')->join('users', 'users.id', '=', 'products.idUser')->where('products.id',$id)->where('products.adminCheck',1)->select('users.id as idChuShop', 'products.*','users.email as emailChuShop','users.phone as phoneChuShop','users.address as addressChuShop','users.name as tenChuShop','users.avatar as avatarChuShop','users.username as username')->get();

		$product_category = DB::table('products')->join('categories','categories.id','=','products.idCate')->where('products.id',$id)->where('products.adminCheck',1)->select('categories.name as nameCate','categories.id as idCate')->get();

		$product_relate = DB::table('products')->join('categories','categories.id','=','products.idCate')->join('users', 'users.id', '=', 'products.idUser')->where('categories.name','smartphone')->where('products.adminCheck',1)->inRandomOrder()->limit(3)->select('products.*','users.name as nameChuShop')->get();


		$randPro = DB::table('products')->where('products.adminCheck',1)->inRandomOrder()->limit(6)->get();


		/*Truyền id của user đã đăng nhập vào đây*/
		$product_user = DB::table('products')->join('users','users.id','=','products.idUser')->join('categories','categories.id','=','products.idCate')->where('products.adminCheck',1)->where('users.adminCheck',1)->where('users.id',1)->select('products.*','categories.id as idCate','categories.name as nameCate')->get();

  		return view('user.chitietsanpham',compact('products','product_category','product_relate','randPro','product_user'));
	}   	

	public function viewProduct($id){
		// Thông tin của sản phẩm +  Thông tin người bán sản phẩm
		$products = DB::table('products')->join('users', 'users.id', '=', 'products.idUser')->where('products.id',$id)->where('products.adminCheck',1)->select('users.id as idChuShop', 'products.*','users.email as emailChuShop','users.phone as phoneChuShop','users.address as addressChuShop','users.name as tenChuShop','users.avatar as avatarChuShop','users.username as usernameChuShop','users.created_at as ngayTaoChuShop')->get();


		// Đề xuất sản phẩm cùng chuyên mục 5 sp
		$getCate = DB::table('products')->where('id', $id)->first();
		$product_offer = DB::table('products')->where('products.adminCheck',1)->where('products.id','<>',$id)->where('products.idCate',$getCate->idCate)->inRandomOrder()->limit(5)->get();
		// đếm số lượng pro lấy ra
		$soluongOffer = $product_offer->count();
		// nếu nhỏ hơn 5, lấy thêm 5-soluong
		if ($soluongOffer < 5) {
			$more = 5 - $soluongOffer;
			$more_product_offer = DB::table('products')->where('products.adminCheck',1)->where('products.id','<>',$id)->inRandomOrder()->take($more)->get();
			$product_offer = $product_offer->merge($more_product_offer);
		}


		// Sản phẩm ngẫu nhiên 5sp
		$randPro = DB::table('products')->where('products.adminCheck',1)->inRandomOrder()->limit(5)->get();
		


		return view('user.product-info',compact('products','randPro','product_offer'));
	}

}