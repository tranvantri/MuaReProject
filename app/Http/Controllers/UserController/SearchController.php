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
    	if(is_null($idCate) || $idCate == 'tat-ca'){ // truong hop tat ca danh muc
    		$products = DB::table('tindang')
    		->join('users','users.id','tindang.idUser')
    		->where('tindang.idPlace',$idPlace)
    		->when($textSearch, function($query) use ($textSearch){ //thuc hien khi text search khac null
    			$query->where('tindang.name','like','%'.$textSearch.'%');
    		})
    		->orderBy('tindang.id','desc')
    		->select('tindang.*','users.name as tenschushop', 'users.id as idchushop')
    		->paginate(20);  
    		$countPro = count($products);

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
    		->join('users','users.id','tindang.idUser')//lay thong tin chu shop
    		->where('tindang.idPlace',$idPlace)
    		->when($textSearch, function($query) use ($textSearch){ //thuc hien khi text search khac null
    			$query->where('tindang.name','like','%'.$textSearch.'%');
    		})
    		->orderBy('tindang.id','desc')
    		->select('tindang.*','users.name as tenschushop', 'users.id as idchushop')
    		->paginate(20);  
    		$countPro = count($products);

    		$categories = DB::table('categories')->where('id','=',$idCate)->first();
    		if($categories->idParent == 0){
    			$categories =  DB::table('categories')->where('idParent', $categories->id)->get();
    		}else{
    			$categories =  DB::table('categories')->where('id', $idCate)->get();
    		}
    	}   	
        return view('user.timkiem',compact('products', 'place', 'idCate', 'categories', 'hienthi', 'textSearch','countPro'));
    }

    public function getSearchPost($hienthi, $textSearch, $idCate, $sapxep){
    	$idPlace = 1;
		if(Cookie::get('place')!= null){//eu ton lai cookie thi set idpplace = value cua cookie
			$idPlace = Cookie::get('place');
		}
		else{
			$idPlace = 1;//mac dinh laf id cua HaNoi
		}
		$place = Places::find($idPlace);

		if($textSearch == 'tim-kiem'){
			$textSearch = null;
		}

		$sortBy= '';
		$dir='';
		switch($sapxep){
			case 'tin-moi-nhat':
				$sortBy= 'tindang.id';
				$dir='desc';
				break;
			case 'xem-nhieu-nhat':
				$sortBy= 'tindang.view';
				$dir='desc';
				break;
			case 'gia-cao-nhat':
				$sortBy= 'tindang.price';
				$dir='desc';
				break;
			case 'gia-thap-nhat':
				$sortBy= 'tindang.price';
				$dir='asc';
				break;
			default:
				$sortBy= 'tindang.id';
				$dir='desc';
		}

		if($idCate == 'tat-ca'){ // truong hop tat ca danh muc
    		$products = DB::table('tindang')
    		->join('users','users.id','tindang.idUser')
    		->where('tindang.idPlace',$idPlace)
    		->when($textSearch, function($query) use ($textSearch){ //thuc hien khi text search khac null
    			$query->where('tindang.name','like','%'.$textSearch.'%');
    		})
    		->orderBy($sortBy,$dir)// sap xep theo truongw hop cua switch
    		->select('tindang.*','users.name as tenchushop', 'users.id as idchushop')//chu shop
    		->paginate(20);
    		$countPro = count($products);

    		$categories = DB::table('tindang') // lay danh muc cua cac tin dang trong khu vuc
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
    		->join('users','users.id','tindang.idUser')//lay thong tin chu shop
    		->where('tindang.idPlace',$idPlace)
    		->when($textSearch, function($query) use ($textSearch){ //thuc hien khi text search khac null
    			$query->where('tindang.name','like','%'.$textSearch.'%');
    		})
    		->orderBy($sortBy,$dir)
    		->select('tindang.*','users.name as tenchushop', 'users.id as idchushop')
    		->paginate(20);
    		$countPro = count($products);

    		$categories = DB::table('categories')->where('id','=',$idCate)->first();
    		if($categories->idParent == 0){//neu la danh muc cha thi lay tat ca danh muc con
    			$categories =  DB::table('categories')->where('idParent', $categories->id)->get();
    		}else{
    			$categories =  DB::table('categories')->where('id', $idCate)->get();//lay 1 danh muc
    		}
    	}   	
    	return view('user.timkiem',compact('products', 'place', 'idCate', 'categories', 'hienthi', 'sapxep', 'textSearch','countPro'));
    }


    public function getSearchProduct($hienthi, $textSearch, $idCate, $tinhtrang, $gia, $sapxep){
    	$idPlace = 1;
		if(Cookie::get('place')!= null){//eu ton lai cookie thi set idpplace = value cua cookie
			$idPlace = Cookie::get('place');
		}
		else{
			$idPlace = 1;//mac dinh laf id cua HaNoi
		}
		$place = Places::find($idPlace);

		if($textSearch == 'tim-kiem'){
			$textSearch = null;
		}

		$sortBy= '';
		$dir='';
		switch($sapxep){
			case 'tin-moi-nhat':
				$sortBy= 'products.id';
				$dir='desc';
				break;
			case 'xem-nhieu-nhat':
				$sortBy= 'products.view';
				$dir='desc';
				break;
			case 'gia-cao-nhat':
				$sortBy= 'products.price';
				$dir='desc';
				break;
			case 'gia-thap-nhat':
				$sortBy= 'products.price';
				$dir='asc';
				break;
			default:
				$sortBy= 'products.id';
				$dir='desc';
		}

		if($idCate == 'tat-ca'){ // truong hop tat ca danh muc
    		$products = DB::table('products')
    		->join('users','users.id','products.idUser')
    		->join('place_product', function($join) use ($idPlace){
				$join->on('products.id', '=', 'place_product.idProduct')
				->where('place_product.idPlace','=', $idPlace);
			})
    		->when($textSearch, function($query) use ($textSearch){ //thuc hien khi text search khac null
    			$query->where('products.name','like','%'.$textSearch.'%');
    		})
    		->where(function($query) use ($tinhtrang){
				switch($tinhtrang){
					case 'tinh-trang-moi':
						$query->where('products.statusProduct', '=', 1);
						break;
					case 'tinh-trang-90':
						$query->where('products.statusProduct', '=', 2);
						break;
					case 'tinh-trang-80':
						$query->where('products.statusProduct', '=', 3);
						break;
					case 'tinh-trang-cu':
						$query->where('products.statusProduct', '=', 4);
						break;
					default:
						$query->whereIn('products.statusProduct', [1,2,3,4]);
				}
			})
			->where(function($query) use ($gia){
				switch($gia){
					case '0-200000':
						$query->whereBetween('products.price', [0, 200000]);
						break;
					case '200000-500000':
						$query->whereBetween('products.price', [200000, 500000]);
						break;
					case '500000-2000000':
						$query->whereBetween('products.price', [500000, 2000000]);
						break;
					case '2000000-5000000':
						$query->whereBetween('products.price', [2000000, 5000000]);
						break;
					case '5000000-10000000':
						$query->whereBetween('products.price', [5000000, 10000000]);
						break;
					case '10000000-20000000':
						$query->whereBetween('products.price', [10000000, 20000000]);
						break;
					case '20000000-50000000':
						$query->whereBetween('products.price', [20000000, 50000000]);
						break;
					case '50000000-2000000000':
						$query->where('products.price','>=', 50000000);
						break;
					default:
						// $this->$gia = 'gia-tot';
						$query->where('products.price','>=', 0);								
				}
			})
    		->orderBy($sortBy,$dir)// sap xep theo truongw hop cua switch
    		->select('products.*','users.name as tenchushop', 'users.id as idchushop')//chu shop
    		->paginate(20);
    		$countPro = count($products);

    		$categories = DB::table('products') // lay danh muc cua cac tin dang trong khu vuc
    		->join('categories','categories.id','products.idCate')
    		->join('place_product', function($join) use ($idPlace){
				$join->on('products.id', '=', 'place_product.idProduct')
				->where('place_product.idPlace','=', $idPlace);
			})  
    		->distinct('categories.id')  		
    		->select('categories.*')
    		->get();
    	}else{ //tìm kiem theo danh muc
    		$products = DB::table('products')
    		->join('categories', function ($join) use ($idCate){
    			$join->on('categories.id','products.idCate')
    			->where('categories.id', $idCate);
    		})
    		->join('users','users.id','products.idUser')//lay thong tin chu shop
    		->when($textSearch, function($query) use ($textSearch){ //thuc hien khi text search khac null
    			$query->where('products.name','like','%'.$textSearch.'%');
    		})
    		->where(function($query) use ($tinhtrang){
				switch($tinhtrang){
					case 'tinh-trang-moi':
						$query->where('products.statusProduct', '=', 1);
						break;
					case 'tinh-trang-90':
						$query->where('products.statusProduct', '=', 2);
						break;
					case 'tinh-trang-80':
						$query->where('products.statusProduct', '=', 3);
						break;
					case 'tinh-trang-cu':
						$query->where('products.statusProduct', '=', 4);
						break;
					default:
						$query->whereIn('products.statusProduct', [1,2,3,4]);
				}
			})
			->where(function($query) use ($gia){
				switch($gia){
					case '0-200000':
						$query->whereBetween('products.price', [0, 200000]);
						break;
					case '200000-500000':
						$query->whereBetween('products.price', [200000, 500000]);
						break;
					case '500000-2000000':
						$query->whereBetween('products.price', [500000, 2000000]);
						break;
					case '2000000-5000000':
						$query->whereBetween('products.price', [2000000, 5000000]);
						break;
					case '5000000-10000000':
						$query->whereBetween('products.price', [5000000, 10000000]);
						break;
					case '10000000-20000000':
						$query->whereBetween('products.price', [10000000, 20000000]);
						break;
					case '20000000-50000000':
						$query->whereBetween('products.price', [20000000, 50000000]);
						break;
					case '50000000-2000000000':
						$query->where('products.price','>=', 50000000);
						break;
					default:
						// $this->$gia = 'gia-tot';
						$query->where('products.price','>=', 0);								
				}
			})
    		->orderBy($sortBy,$dir)
    		->select('products.*','users.name as tenchushop', 'users.id as idchushop')
    		->paginate(20);
    		$countPro = count($products);

    		$categories = DB::table('categories')->where('id','=',$idCate)->first();
    		if($categories->idParent == 0){//neu la danh muc cha thi lay tat ca danh muc con
    			$categories =  DB::table('categories')->where('idParent', $categories->id)->get();
    		}else{
    			$categories =  DB::table('categories')->where('id', $idCate)->get();//lay 1 danh muc
    		}
    	}   	
    	return view('user.timkiem',compact('products', 'place', 'idCate', 'categories', 'hienthi','tinhtrang', 'gia', 'sapxep', 'textSearch','countPro'));
    }



}
