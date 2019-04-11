<?php
namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Places;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
     public function viewSpecialProducts(){
     	$idPlace = 1;
        if(Cookie::get('place')!= null){
            $idPlace = Cookie::get('place');
        }
        else{
            $idPlace = 1;
        }
     	$products =  DB::table('products')
            ->join('users','users.id','=','products.idUser')
            ->join('place_product','products.id','=','place_product.idProduct')
            ->where('users.status',1)
            ->where('place_product.idPlace', $idPlace)
            ->where('products.adminCheck', 1)
            ->where('products.special', 1)
            ->where('products.status', 1)
            ->orderBy('products.id','desc')
            ->select('products.*')
            ->paginate(36);
         $cates = DB::table('categories')
         	->where('idParent', 0)
         	->where('enable',1)
         	->select('name','id')
         	->get();
        return view('user.sanphamdocdao.sanphamdocdao',compact('products','cates'));
     }

     public function viewSpecialProductsCustom($nameCate, $idCate){
     	$idPlace = 1;
        if(Cookie::get('place')!= null){
            $idPlace = Cookie::get('place');
        }
        else{
            $idPlace = 1;
        }
        $idcurrent =$idCate;
        if($nameCate == 'moi-nhat'){
        	
        	$products =  DB::table('products')
	            ->join('users','users.id','=','products.idUser')
	            ->join('place_product','products.id','=','place_product.idProduct')
	            ->where('users.status',1)
	            ->where('place_product.idPlace', $idPlace)
	            ->where('products.adminCheck', 1)
	            ->where('products.special', 1)
	            ->where('products.status', 1)
	            ->orderBy('products.id','desc')
	            ->select('products.*')
	            ->paginate(36);
	         $cates = DB::table('categories')
	         	->where('idParent', 0)
	         	->where('enable',1)
	         	->select('name','id')
	         	->get();
	        return view('user.sanphamdocdao.sanphamdocdao',compact('products','cates','idcurrent'));
        }else{
        	
        	$products =  DB::table('products')
	            ->join('users','users.id','=','products.idUser')
	            ->join('place_product','products.id','=','place_product.idProduct')
	            ->join('categories', function ($join) use ($idCate){
						$join->on('products.idCate','=','categories.id')
						->where('categories.idParent','=', $idCate);//lay all sp thuoc danh muc cha
					})	
	            ->where('users.status',1)
	            ->where('place_product.idPlace', $idPlace)
	            ->where('products.adminCheck', 1)
	            ->where('products.special', 1)
	            ->where('products.status', 1)
	            ->orderBy('products.id','desc')
	            ->select('products.*')
	            ->paginate(36);
	         $cates = DB::table('categories')
	         	->where('idParent', 0)
	         	->where('enable',1)
	         	->select('name','id')
	         	->get();
	        return view('user.sanphamdocdao.sanphamdocdao',compact('products','cates','idcurrent'));
        }
     }
}