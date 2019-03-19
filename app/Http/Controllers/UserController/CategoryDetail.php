<?php
namespace App\Http\Controllers\UserController;
use Auth;
use Illuminate\Http\Request;
use App\Categories;
use App\Places;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
header("Content-Type: application/json");


class CategoryDetail extends Controller
{   
    
	public function getDanhMuc($name, $id){
		$categoryParent = Categories::find($id);
		$categoryCurrent = $categoryParent;
		$idPlace = 1;
		if(Cookie::get('place')!= null){
			$idPlace = Cookie::get('place');
		}
		else{
			$idPlace = 1;
		}
		$hienthi = 'tin-dang';
		$tinhtrang = 'moi-va-cu';
		$gia = 'gia-tot';
		$sapxep = 'tin-moi-nhat';
		$place = Places::find($idPlace);
		$childCate = DB::table('categories')->where('idParent', $id)->where('enable',1)->get();
		$products = DB::table('tindang')
			->join('categories', function ($join) use ($id){
				$join->on('tindang.idCate','=','categories.id')
				->where('categories.idParent','=', $id); // lấy sp có idCate = $id truyền vào
			})	
			->where('tindang.idPlace','=', $idPlace)			
			->join('users','tindang.idUser','=','Users.id')
			->where('tindang.status',1)
			->where('tindang.adminCheck',1)
            ->select('tindang.*','users.name as tenchushop')
            ->paginate(20);

  		return view('user.chitietdanhmuc',compact('categoryParent', 'categoryCurrent', 'childCate','products','place','hienthi', 'tinhtrang', 'gia', 'sapxep'));
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

		switch($hienthi){
			case 'tin-dang':
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
				if($categoryCurrent->idParent == 0){//neu danh muc la danh muc cha
					$categoryParent = $categoryCurrent;//gan cho de dung
					$place = Places::find($idPlace);
					$childCate = DB::table('categories')
                        ->where('idParent', $categoryCurrent->id)
                        ->where('enable',1)->get();

					$products = DB::table('tindang')
					->join('categories', function ($join) use ($categoryCurrent){
						$join->on('tindang.idCate','=','categories.id')
						->where('categories.idParent','=', $categoryCurrent->id);//lay all sp thuoc danh muc cha
					})			
					->join('users','tindang.idUser','=','Users.id')

					->where('tindang.status',1)
					->where('tindang.adminCheck',1)
					->where('tindang.idPlace',$idPlace)
					->where(function($query) use ($tinhtrang){
						switch($tinhtrang){
							case 'tinh-trang-moi':
								$query->where('tindang.statusTinDang', '=', 1);
								break;
							case 'tinh-trang-90':
								$query->where('tindang.statusTinDang', '=', 2);
								break;
							case 'tinh-trang-80':
								$query->where('tindang.statusTinDang', '=', 3);
								break;
							case 'tinh-trang-cu':
								$query->where('tindang.statusTinDang', '=', 4);
								break;
							default:
								$query->whereIn('tindang.statusTinDang', [1,2,3,4]);
						}
					})
					->where(function($query) use ($gia){
						switch($gia){
							case '0-200000':
								$query->whereBetween('tindang.price', [0, 200000]);
								break;
							case '200000-500000':
								$query->whereBetween('tindang.price', [200000, 500000]);
								break;
							case '500000-2000000':
								$query->whereBetween('tindang.price', [500000, 2000000]);
								break;
							case '2000000-5000000':
								$query->whereBetween('tindang.price', [2000000, 5000000]);
								break;
							case '5000000-10000000':
								$query->whereBetween('tindang.price', [5000000, 10000000]);
								break;
							case '10000000-20000000':
								$query->whereBetween('tindang.price', [10000000, 20000000]);
								break;
							case '20000000-50000000':
								$query->whereBetween('tindang.price', [20000000, 50000000]);
								break;
							case '50000000-2000000000':
								$query->where('tindang.price','>=', 50000000);
								break;
							default:
								// $this->$gia = 'gia-tot';
								$query->where('tindang.price','>=', 0);								
						}
					})
					->orderBy($sortBy,$dir)
		            ->select('tindang.*','users.name as tenchushop')
		            ->paginate(20);


		  			return view('user.chitietdanhmuc',compact('categoryParent', 'categoryCurrent', 'childCate','products','place','hienthi', 'tinhtrang', 'gia', 'sapxep'));
				}else{					
					$categoryParent = Categories::find($categoryCurrent->idParent);//gan cho de dung
					$place = Places::find($idPlace);
					$childCate = DB::table('categories')->where('idParent', $categoryCurrent->idParent)->where('enable',1)->get();
					$products = DB::table('tindang')
					->join('categories', function ($join) use ($categoryCurrent){
						$join->on('tindang.idCate','=','categories.id')
						->where('categories.id','=', $categoryCurrent->id);//lay all sp thuoc danh muc cha
					})			
					->join('users','tindang.idUser','=','Users.id')
					->where('tindang.status',1)
					->where('tindang.adminCheck',1)
					->where('tindang.idPlace',$idPlace)
					->where(function($query) use ($tinhtrang){
						switch($tinhtrang){
							case 'tinh-trang-moi':
								$query->where('tindang.statusTinDang', 1);
								break;
							case 'tinh-trang-90':
								$query->where('tindang.statusTinDang', 2);
								break;
							case 'tinh-trang-80':
								$query->where('tindang.statusTinDang', 3);
								break;
							case 'tinh-trang-cu':
								$query->where('tindang.statusTinDang', 4);
								break;
							default:
								$query->whereIn('tindang.statusTinDang', [1,2,3,4]);
						}
					})
					->where(function($query) use ($gia){
						switch($gia){
							case '0-200000':
								$query->whereBetween('tindang.price', [0, 200000]);
								break;
							case '200000-500000':
								$query->whereBetween('tindang.price', [200000, 500000]);
								break;
							case '500000-2000000':
								$query->whereBetween('tindang.price', [500000, 2000000]);
								break;
							case '2000000-5000000':
								$query->whereBetween('tindang.price', [2000000, 5000000]);
								break;
							case '5000000-10000000':
								$query->whereBetween('tindang.price', [5000000, 10000000]);
								break;
							case '10000000-20000000':
								$query->whereBetween('tindang.price', [10000000, 20000000]);
								break;
							case '20000000-50000000':
								$query->whereBetween('tindang.price', [20000000, 50000000]);
								break;
							case '50000000-2000000000':
								$query->where('tindang.price','>=', 50000000);
								break;
							default:
								// $this->$gia = 'gia-tot';
								$query->where('tindang.price','>=', 0);
						}
					})					
					->orderBy($sortBy,$dir)					
		            ->select('tindang.*','users.name as tenchushop')
		            ->paginate(20);

		  			return view('user.chitietdanhmuc',compact('categoryParent','categoryCurrent', 'childCate','products','place','hienthi', 'tinhtrang', 'gia', 'sapxep'));
				}
				break;
			case 'dich-vu':
				$sortBy= '';
				$dir='';
				switch($sapxep){
					case 'tin-moi-nhat':
						$sortBy= 'services.id';
						$dir='desc';
						// $query->orderBy('products.id', 'desc');
						break;
					case 'xem-nhieu-nhat':
						$sortBy= 'services.view';
						$dir='desc';
						// $query->orderBy('products.view', 'desc');
						break;
					case 'gia-cao-nhat':
						$sortBy= 'services.price';
						$dir='desc';
						// $query->orderBy('products.price','desc');
						break;
					case 'gia-thap-nhat':
						$sortBy= 'services.price';
						$dir='asc';
						// $query->orderBy('products.price', 'asc');
						break;
					default:
						$sortBy= 'services.id';
						$dir='desc';
						// $query->orderBy('products.id', 'desc');
				}
				if($categoryCurrent->idParent == 0){//neu danh muc la danh muc cha
					$categoryParent = $categoryCurrent;//gan cho de dung
					$place = Places::find($idPlace);
					$childCate = DB::table('categories')->where('idParent', $categoryCurrent->id)->where('enable',1)->get();
					$products = DB::table('services')
					->join('categories', function ($join) use ($categoryCurrent){
						$join->on('services.idCate','=','categories.id')
						->where('categories.idParent','=', $categoryCurrent->id);//lay all sp thuoc danh muc cha
					})			
					// ->join('place_product', function($join) use ($idPlace){
					// 	$join->on('products.id', '=', 'place_product.idProduct')
					// 	->where('place_product.idPlace','=', $idPlace);
					// })
					->join('users','services.idUser','=','Users.id')
					->where('services.status',1)
					->where('services.adminCheck',1)
					->where('services.idPlace',$idPlace)
					->where(function($query) use ($tinhtrang){
						switch($tinhtrang){
							case 'tinh-trang-moi':
								$query->where('services.statusService', '=', 1);
								break;
							case 'tinh-trang-90':
								$query->where('services.statusService', '=', 2);
								break;
							case 'tinh-trang-80':
								$query->where('services.statusService', '=', 3);
								break;
							case 'tinh-trang-cu':
								$query->where('services.statusService', '=', 4);
								break;
							default:
								$query->whereIn('services.statusService', [1,2,3,4]);
						}
					})
					->where(function($query) use ($gia){
						switch($gia){
							case '0-200000':
								$query->whereBetween('services.price', [0, 200000]);
								break;
							case '200000-500000':
								$query->whereBetween('services.price', [200000, 500000]);
								break;
							case '500000-2000000':
								$query->whereBetween('services.price', [500000, 2000000]);
								break;
							case '2000000-5000000':
								$query->whereBetween('services.price', [2000000, 5000000]);
								break;
							case '5000000-10000000':
								$query->whereBetween('services.price', [5000000, 10000000]);
								break;
							case '10000000-20000000':
								$query->whereBetween('services.price', [10000000, 20000000]);
								break;
							case '20000000-50000000':
								$query->whereBetween('services.price', [20000000, 50000000]);
								break;
							case '50000000-2000000000':
								$query->where('services.price','>=', 50000000);
								break;
							default:
								// $this->$gia = 'gia-tot';
								$query->where('services.price','>=', 0);								
						}
					})
					->orderBy($sortBy,$dir)
		            ->select('services.*','users.name as tenchushop')
		            ->paginate(20);

		  			return view('user.chitietdanhmuc',compact('categoryParent', 'categoryCurrent', 'childCate','products','place','hienthi', 'tinhtrang', 'gia', 'sapxep'));
				}else{					
					$categoryParent = Categories::find($categoryCurrent->idParent);//gan cho de dung
					$place = Places::find($idPlace);
					$childCate = DB::table('categories')->where('idParent', $categoryCurrent->idParent)->where('enable',1)->get();
					$products = DB::table('services')
					->join('categories', function ($join) use ($categoryCurrent){
						$join->on('services.idCate','=','categories.id')
						->where('categories.id','=', $categoryCurrent->id);//lay all sp thuoc danh muc cha
					})			
					// ->join('place_product', function($join) use ($idPlace){
					// 	$join->on('products.id', '=', 'place_product.idProduct')
					// 	->where('place_product.idPlace','=', $idPlace);
					// })
					->join('users','services.idUser','=','Users.id')
					->where('services.status',1)
					->where('services.adminCheck',1)
					->where('services.idPlace',$idPlace)
					->where(function($query) use ($tinhtrang){
						switch($tinhtrang){
							case 'tinh-trang-moi':
								$query->where('services.statusService', 1);
								break;
							case 'tinh-trang-90':
								$query->where('services.statusService', 2);
								break;
							case 'tinh-trang-80':
								$query->where('services.statusService', 3);
								break;
							case 'tinh-trang-cu':
								$query->where('services.statusService', 4);
								break;
							default:
								$query->whereIn('services.statusService', [1,2,3,4]);
						}
					})
					->where(function($query) use ($gia){
						switch($gia){
							case '0-200000':
								$query->whereBetween('services.price', [0, 200000]);
								break;
							case '200000-500000':
								$query->whereBetween('services.price', [200000, 500000]);
								break;
							case '500000-2000000':
								$query->whereBetween('services.price', [500000, 2000000]);
								break;
							case '2000000-5000000':
								$query->whereBetween('services.price', [2000000, 5000000]);
								break;
							case '5000000-10000000':
								$query->whereBetween('services.price', [5000000, 10000000]);
								break;
							case '10000000-20000000':
								$query->whereBetween('services.price', [10000000, 20000000]);
								break;
							case '20000000-50000000':
								$query->whereBetween('services.price', [20000000, 50000000]);
								break;
							case '50000000-2000000000':
								$query->where('services.price','>=', 50000000);
								break;
							default:
								// $this->$gia = 'gia-tot';
								$query->where('services.price','>=', 0);
						}
					})					
					->orderBy($sortBy,$dir)					
		            ->select('services.*','users.name as tenchushop')
		            ->paginate(20);

		  			return view('user.chitietdanhmuc',compact('categoryParent','categoryCurrent', 'childCate','products','place','hienthi', 'tinhtrang', 'gia', 'sapxep'));
				}
				break;
			case 'san-pham':
				$sortBy= '';
				$dir='';
				switch($sapxep){
					case 'tin-moi-nhat':
						$sortBy= 'products.id';
						$dir='desc';
						// $query->orderBy('products.id', 'desc');
						break;
					case 'xem-nhieu-nhat':
						$sortBy= 'products.view';
						$dir='desc';
						// $query->orderBy('products.view', 'desc');
						break;
					case 'gia-cao-nhat':
						$sortBy= 'products.price';
						$dir='desc';
						// $query->orderBy('products.price','desc');
						break;
					case 'gia-thap-nhat':
						$sortBy= 'products.price';
						$dir='asc';
						// $query->orderBy('products.price', 'asc');
						break;
					default:
						$sortBy= 'products.id';
						$dir='desc';
						// $query->orderBy('products.id', 'desc');
				}
				if($categoryCurrent->idParent == 0){//neu danh muc la danh muc cha
					$categoryParent = $categoryCurrent;//gan cho de dung
					$place = Places::find($idPlace);
					$childCate = DB::table('categories')->where('idParent', $categoryCurrent->id)->where('enable',1)->get();
					$products = DB::table('products')
					->join('categories', function ($join) use ($categoryCurrent){
						$join->on('products.idCate','=','categories.id')
						->where('categories.idParent','=', $categoryCurrent->id);//lay all sp thuoc danh muc cha
					})			
					->join('place_product', function($join) use ($idPlace){
						$join->on('products.id', '=', 'place_product.idProduct')
						->where('place_product.idPlace','=', $idPlace);
					})
					->join('users','products.idUser','=','Users.id')
					->where('products.status',1)
					->where('products.adminCheck',1)
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
		            ->select('products.*','users.name as tenchushop')
		            ->paginate(20);
                    
                    
		  			return view('user.chitietdanhmuc',compact('categoryParent', 'categoryCurrent', 'childCate','products','place','hienthi', 'tinhtrang', 'gia', 'sapxep'));
				}else{					
					$categoryParent = Categories::find($categoryCurrent->idParent);//gan cho de dung
					$place = Places::find($idPlace);
					$childCate = DB::table('categories')->where('idParent', $categoryCurrent->idParent)->where('enable',1)->get();
					$products = DB::table('products')
					->join('categories', function ($join) use ($categoryCurrent){
						$join->on('products.idCate','=','categories.id')
						->where('categories.id','=', $categoryCurrent->id);//lay all sp thuoc danh muc cha
					})			
					->join('place_product', function($join) use ($idPlace){
						$join->on('products.id', '=', 'place_product.idProduct')
						->where('place_product.idPlace','=', $idPlace);
					})
					->join('users','products.idUser','=','Users.id')
					->where('products.status',1)
					->where('products.adminCheck',1)
					->where(function($query) use ($tinhtrang){
						switch($tinhtrang){
							case 'tinh-trang-moi':
								$query->where('products.statusProduct', 1);
								break;
							case 'tinh-trang-90':
								$query->where('products.statusProduct', 2);
								break;
							case 'tinh-trang-80':
								$query->where('products.statusProduct', 3);
								break;
							case 'tinh-trang-cu':
								$query->where('products.statusProduct', 4);
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
		            ->select('products.*','users.name as tenchushop')
		            ->paginate(20);            
		  			return view('user.chitietdanhmuc',compact('categoryParent','categoryCurrent', 'childCate','products','place','hienthi', 'tinhtrang', 'gia', 'sapxep'));
				}
				break;

		}

		
	}	

	public function getUserId(Request $request)
    {
        if(Auth::id())
        {
            // userId là id của User đã đăng nhập
            $userId = Auth::id();
            header("Content-type: application/json");
            $userId = json_encode($userId);
            echo  $userId;
        }
        else{
        // chưa đăng nhập, điều hướng về trang login
            //return redirect('/login');
            $userId = 0; //not login
            header("Content-type: application/json");
            $userId = json_encode($userId);
            echo  $userId;
            
        }
    }
    public function getSeller(Request $request)
    {
        //$number = htmlspecialchars($_GET["idProduct"]);
        $productUserId = $request->productUserId;          
        $seller = DB::table('users')
                        ->where('users.id',$productUserId)
                        ->select('users.name as userName', 'users.phone as userPhone')
                        ->get();
                    //$this->myJson($comments);
                header("Content-type: application/json");
                $seller = json_encode($seller);
                echo  $seller;
    }
    public function getComment(Request $request)
    {
        //$number = htmlspecialchars($_GET["idProduct"]);
        $idPro = $request->idProduct;          
        $comments = DB::table('comments')
                        ->join('products','products.id','=','comments.idProduct')
                        ->join('users','users.id','=','comments.idUser')
                        ->where('products.id',$idPro)
                        ->select('comments.id as idComment', 'comments.value as content', 'comments.idParent as idParent', 'users.avatar as userAvatar', 'users.name as userName', 'comments.idProduct as idProduct','products.name as productName', 'users.id as idUser', 'comments.idBlock as idBlock', 'comments.date_added as date_added', 'comments.parentName as parentName', 'products.name as productName', 'products.description as description', 'products.images as productImage', 'products.price as productPrice', 'products.idUser as productUserId')
                        ->get();
                    //$this->myJson($comments);
                header("Content-type: application/json");
                $comments = json_encode($comments);
                echo  $comments;
    }
    public function getSubComment(Request $request)
    {
        //$number = htmlspecialchars($_GET["idProduct"]);
        $idUser = $request->idUser;          
        $comments = DB::table('comments')
                        ->join('products','products.id','=','comments.idProduct')
                        ->join('users','users.id','=','comments.idUser')
                        ->where('comments.idBlock',$idUser)
                        ->select('comments.id as idComment', 'comments.value as content', 'comments.idParent as idParent', 'users.avatar as userAvatar', 'users.name as userName', 'comments.idProduct as idProduct','products.name as productName','users.id as idUser','comments.idBlock as idBlock', 'comments.date_added as date_added', 'comments.parentName as parentName')
                        ->get();
                    //$this->myJson($comments);
                header("Content-type: application/json");
                $comments = json_encode($comments);
                echo  $comments;
    }
    public function postSubComment(Request $request)
    {
        $idUser = $request->idUser_post; 
        $value = $request->content_post; 
        $date_added = $request->date_post; 
        $idParent = $request->idParent_post; 
        $parentName = $request->parentName_post; 
        $idProduct = $request->idProduct_post; 
        $idBlock = $request->idBlock_post;
        
        if(Auth::id())
        {
            // userId là id của User đã đăng nhập
            $userId = Auth::user()->id;
            if($userId == $idUser){
                $idComment = DB::table('comments')->insertGetId(
                [
                'value' => $value,
                'idUser' => $idUser,
                'idProduct' => $idProduct,
                'idService' => 0,
                'idParent' => $idParent,
                'date_added' => $date_added,
                'parentName' => $parentName,
                'idBlock' => $idBlock
                ]
                );
                
                $userId = 0; //succeed post
                header("Content-type: application/json");
                $userId = json_encode($userId);
                echo  $userId;
            } else {
                $userId = "Bình luận không thành công!"; //not login
                header("Content-type: application/json");
                $userId = json_encode($userId);
                echo  $userId;
            }
        }
        else{
        // chưa đăng nhập, điều hướng về trang login
            //return redirect('/login');
            $userId = "Bình luận không thành công2!"; //not login
            header("Content-type: application/json");
            $userId = json_encode($userId);
            echo  $userId;
        }


        
    }
   
}
