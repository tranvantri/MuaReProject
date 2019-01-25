<?php
namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Categories;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
class CategoryDetail extends Controller
{
	public function getDanhMuc($name, $id){
		$categoryParent = Categories::find($id);
		$idPlace = 1;
		if(Cookie::get('place')!= null){
			$idPlace = Cookie::get('place');
		}
		else{
			$idPlace = 1;
		}
		$childCate = DB::table('categories')->where('idParent', $id)->where('enable',1)->get();
		$products = DB::table('products')->join('place_product', 'products.id', '=', 'place_product.idProduct')->where('place_product.idPlace', $idPlace)->where('status',1)
            ->select('products.*')
            ->get();
  		return view('user.chitietdanhmuc',compact('categoryParent', 'childCate','products'));
	}   	
   
}
