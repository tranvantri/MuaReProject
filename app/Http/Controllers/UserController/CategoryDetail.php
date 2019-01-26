<?php
namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Categories;
use App\Places;
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
		$place = Places::find($idPlace);
		$childCate = DB::table('categories')->where('idParent', $id)->where('enable',1)->get();
		$products = DB::table('products')
			->join('categories', function ($join) use ($id){
				$join->on('products.idCate','=','categories.id')
				->where('categories.idParent','=', $id);
			})			
			->join('place_product', function($join) use ($idPlace){
				$join->on('products.id', '=', 'place_product.idProduct')
				->where('place_product.idPlace','=', $idPlace);
			})
			->join('users','products.idUser','=','Users.id')
			->where('products.status',1)
            ->select('products.*','users.name as tenchushop')
            ->paginate(9);            
  		return view('user.chitietdanhmuc',compact('categoryParent', 'childCate','products','place'));
	}   	
   
}
