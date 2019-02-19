<?php
namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Categories;
use App\Places;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
class SearchController extends Controller
{
    //
    public function getIndex(Request $req)
    {
    	$hienthi='tin-dang'; //loai hien thi
    	$sapxep = 'tin-moi-nhat'; //sap theo tin moi nhat
    	$idPlace = 1;
		if(Cookie::get('place')!= null){ //lay id khu vuc
			$idPlace = Cookie::get('place');
		}
		else{
			$idPlace = 1;
		}
		$place = Places::find($idPlace);
    	$idCate = $req->category_id;
    	$textSearch = $req->text;

    	if(is_null($idCate)){ // truong hop tat ca danh muc
    		$products = DB::table('tindang')
    		->join('users','users.id','tindang.idUser')
    		->where('tindang.idPlace',$idPlace)
    		->when($textSearch, function($query) use ($textSearch){ //thuc hien khi text search khac null
    			return $query->where('tindang.name','like',$textSearch);
    		})
    		->select('tindang.*','users.name as tenschushop', 'users.id as idchushop')
    		->get();
    		$coutPro = count($products);

    		$categories = DB::table('tindang')
    		->join('categories','categories.id','tindang.idCate')
    		->where('tindang.idPlace',$idPlace)  
    		->distinct('categories.id')  		
    		->select('categories.*')
    		->get();
    	}else{ //tìm kiem theo danh muc
    		$products = DB::table('tindang')
    		->join('categories', function ($join) use ($idCate){
    			$join->on('categories.id','tindang.idCate')
    			->where('categories.id', $idCate);
    		})
    		->join('users','users.id','tindang.idUser')
    		->where('tindang.idPlace',$idPlace)
    		->when($textSearch, function($query) use ($textSearch){ //thuc hien khi text search khac null
    			return $query->where('tindang.name','like',$textSearch);
    		})
    		->select('tindang.*','users.name as tenschushop', 'users.id as idchushop')
    		->get();
    		$coutPro = count($products);

    		$cateinput = Categories::find($idCate);
    		$categories= '';
    		if($cateinput->idParent == 0){
    			$categories = Categories::where('idParent', $cateinput->id)->get();
    		}else{
    			$categories = $cateinput;
    		}
    		echo '<pre>';
    		var_dump($categories);
    		echo '</pre>';

    		// $categories = DB::table('tindang')
    		// ->join('categories','categories.id','tindang.idCate')
    		// ->where('tindang.idPlace',$idPlace)  
    		// ->distinct('categories.id')  		
    		// ->select('categories.*')
    		// ->get();
    	}
    	
    	

        return view('user.timkiem',compact('products', 'place', 'categories', 'hienthi', 'sapxep', 'textSearch','coutPro'));
    }



}
