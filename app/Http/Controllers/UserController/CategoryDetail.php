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

	public function getCustomCategory($nameCate, $idCate, $hienthi, $tinhtrang, $gia, $sapxep){
		$categoryCurrent = Categories::find($idCate);//lay danh muc
		$idPlace = 1;
		if(Cookie::get('place')!= null){//eu ton lai cookie thi set idpplace = value cua cookie
			$idPlace = Cookie::get('place');
		}
		else{
			$idPlace = 1;//mac dinh laf id cua HaNoi
		}

		echo $nameCate ."</br>";
		echo $idCate ."</br>";
		echo $hienthi ."</br>";
		echo $tinhtrang ."</br>";
		echo $gia ."</br>";
		echo $sapxep ."</br>";

		// switch(){

		// }

		// if($categoryCurrent->idParent == 0){//neu danh muc la danh muc cha
		// 	$categoryParent = $categoryCurrent;//gan cho de dung
		// 	$place = Places::find($idPlace);
		// 	$childCate = DB::table('categories')->where('idParent', $categoryCurrent->id)->where('enable',1)->get();
		// 	$products = DB::table('products')
		// 	->join('categories', function ($join) use ($categoryCurrent){
		// 		$join->on('products.idCate','=','categories.id')
		// 		->where('categories.idParent','=', $categoryCurrent->id);//lay all sp thuoc danh muc cha
		// 	})			
		// 	->join('place_product', function($join) use ($idPlace){
		// 		$join->on('products.id', '=', 'place_product.idProduct')
		// 		->where('place_product.idPlace','=', $idPlace);
		// 	})
		// 	->join('users','products.idUser','=','Users.id')
		// 	->where('products.status',1)
  //           ->select('products.*','users.name as tenchushop')
  //           ->paginate(20);            
  // 			return view('user.chitietdanhmuc',compact('categoryParent', 'categoryCurrent', 'childCate','products','place'));
		// }else{
		// 	$categoryParent = Categories::find($categoryCurrent->idParent);//gan cho de dung
		// 	$place = Places::find($idPlace);
		// 	$childCate = DB::table('categories')->where('idParent', $categoryCurrent->idParent)->where('enable',1)->get();
		// 	$products = DB::table('products')
		// 	->join('categories', function ($join) use ($categoryCurrent){
		// 		$join->on('products.idCate','=','categories.id')
		// 		->where('categories.id','=', $categoryCurrent->id);//lay all sp thuoc danh muc cha
		// 	})			
		// 	->join('place_product', function($join) use ($idPlace){
		// 		$join->on('products.id', '=', 'place_product.idProduct')
		// 		->where('place_product.idPlace','=', $idPlace);
		// 	})
		// 	->join('users','products.idUser','=','Users.id')
		// 	->where('products.status',1)
  //           ->select('products.*','users.name as tenchushop')
  //           ->paginate(20);            
  // 			return view('user.chitietdanhmuc',compact('categoryParent','categoryCurrent', 'childCate','products','place'));
		// }
	}	
   
}
