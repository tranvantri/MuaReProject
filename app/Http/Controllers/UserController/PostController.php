<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
use Illuminate\Support\Facades\DB;
use App\Categories;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use File;
class PostController extends Controller
{
	public function postProduct(){
		$cateParents = Categories::where('idParent', 0)->where('name','<>','Cộng đồng')->get();
		$cateChilds = Categories::where('idParent','<>', 0)->get();
		$places = DB::table('places')->where('enable',1)->get();
		return view('user.dangtinsanpham',compact('cateParents','cateChilds','places'));
	}

	/*Khi nguoi dung dang tin:
		- Tao tin dang
		- Tao Product
		- Kiem tra User da co chua



	*/

	public static function upLoadFiles(Request $req,$path)
    {
    	//path 'upload/images/'
    	if($req->hasFile('files')){
    		$imageFiles = $req->file('files');
    		$arrayImg= array();
    		foreach($imageFiles as $imageFile){
    			$imageName = uniqid().$imageFile->getClientOriginalName();
    			$imageFile->move($path,$imageName);
    			array_push($arrayImg, $path.$imageName);
    		}    
    		$arrayImg= json_encode($arrayImg,true);
    		// echo "done";
    	}
    	return $arrayImg;

    	// echo 'sss '.$req->category;

    }
	public function addNewProduct(Request $request){

		//- Kiem tra User
		// nếu chưa có thì tạo mới
		// đã có rồi thì lấy id của user đó

		// echo $request;
	    $name = strip_tags($request->name);
	    $phone = strip_tags($request->phone);
	    $email = strip_tags($request->emailEmail);
	    $addressUser = strip_tags($request->addressUser);
	    
	    #tìm user trong DB
	    $user = DB::table('users')->where('phone',$phone)->orWhere('email',$email)->where('status',1)->first();

	    if($request->hasFile('files')){
			$image = $this->upLoadFiles($request,'upload/imageuser/products/');
		}else{
			$image = "null";
		}

	    if(isset($user)){
	    	
	    	$this->createService($request,$user->id,$image);
	    	$this->createProduct($request,$user->id,$image);
	    	$new_service_user = DB::table('tindang')->where('status',1)->where('idUser',$user->id)->orderBy('id', 'desc')->first();
	    	return url('/').'/chi-tiet-tin-dang/'.$new_service_user->id;
	    }
	    else{
	    	/*Thêm user vào bảng Users*/
   		$idUser = DB::table('users')->insertGetId(array(
		    	'name' => $name, 
		    	'phone' => $phone, 
		    	'email' => $email, 
		    	'address' => $addressUser,
		    	'password' => Hash::make($phone),
		    	'username' => $phone,
		    	'status' => 1,
		    	'adminCheck' => 1,
		    	'provider' => Null,
		    	'provider_id' => Null,
		    )
		);

		$this->createService($request,$idUser,$image);
	    	$this->createProduct($request,$idUser,$image);
	    	$new_service_user = DB::table('tindang')->where('status',1)->where('idUser',$idUser)->orderBy('id', 'desc')->first();
	    	return url('/').'/chi-tiet-tin-dang/'.$new_service_user->id;
	    	
	    }
	    
	}



	public static  function createService(Request $request,$idUser, $image){
		//- Tao tin dang
		$nameService = strip_tags($request->nameService);
		$descriptionService = strip_tags($request->descriptionService);
		$priceService = strip_tags($request->priceService);
	    $tatus_Service = 1; // cot status
	    $date_added = Carbon::now('Asia/Ho_Chi_Minh');
	    $idCateService = strip_tags($request->idCateService);
	    $idPlaceService = strip_tags($request->idPlaceService);
	    $adminCheck = 0;
	    $statusService = 0;
	    $addressUser = strip_tags($request->addressUser);


	    /*------------------------chưa lấy dc filepath*/
	 //    if($request->hasFile('files')){
		// 	$image = $this->upLoadFiles($request,'upload/imageuser/services/');
		// }else{
		// 	$image = "null";
		// }

	    

	    DB::table('tindang')->insert(
		    array('name' => $nameService, 
		    	'description' => $descriptionService,
		    	'images' => $image,
		    	'address' => $addressUser,
		    	'price' => $priceService,
		    	'idPlace' => $idPlaceService,
		    	'status' => $tatus_Service,
		    	'date_added' => $date_added,
		    	'idUser' => $idUser,
		    	'idCate' => $idCateService,
		    	'adminCheck' => $adminCheck,
		    	'statusTinDang' => $statusService,
		    )
		);
	}

	 

	public static  function createProduct(Request $request,$idUser,$imageProduct){
		//- Tao Product
	    $nameProduct = strip_tags($request->nameProduct);
	    $descriptionProduct = strip_tags($request->descriptionProduct);
	    $priceProduct = strip_tags($request->priceProduct);
	    $idCateProduct = strip_tags($request->idCateProduct);
	    # 1: còn hàng, -1: hết hàng, 0: ngừng hàng
	    $status = strip_tags($request->status);
		# 1: mới, 2: mới 90%, 3: 80%, 4: cũ
	    $statusProduct = strip_tags($request->statusProduct);
		$date_added = Carbon::now('Asia/Ho_Chi_Minh');
		$adminCheck = 0;
		$addressUser = strip_tags($request->addressUser);

	    #địa điểm bán sản phẩm đó
	    
	    $locationItem = (array)$request->locationItem;
	    // foreach ($locationItem as $childLoc) {
	    // 	echo "Hobby : ".$childLoc."<br />";
	    // }

	    /*------------------------chưa lấy dc hình ảnh path*/
	 //    if($request->hasFile('files')){
		// 	$imageProduct = $this->upLoadFiles($request,'upload/imageuser/products/');
		// }else{
		// 	$imageProduct = "null";
		// }

	    DB::table('products')->insert(array(
	    		'name' 			=> $nameProduct, 
		    	'description' 	=> $descriptionProduct,
		    	'title_tindang' => $nameProduct,
		    	'images' 		=> $imageProduct,
		    	'price' 		=> $priceProduct,
		    	'status' 		=> $status,
		    	'statusProduct' => $statusProduct,
		    	'date_added' 	=> $date_added,
		    	'idCate' 		=> $idCateProduct,
		    	'idUser' 		=> $idUser,		    	
		    	'adminCheck' 	=> $adminCheck,
		    	'address' 		=> $addressUser,
		    )
		);
	}

	// đầu ra: trang chitiet dich vu
	public function getDichVu($id){
	    // thong tin cua dich vu theo id
		$services = DB::table('services')->join('users', 'users.id', '=', 'services.idUser')
            ->where('services.id',$id)->where('services.status',1)->where('services.adminCheck',1)
            ->select('users.id as idChuShop', 'services.*','users.email as emailChuShop','users.phone as phoneChuShop','users.address as addressChuShop','users.name as tenChuShop','users.avatar as avatarChuShop','users.username as username')
            ->get();

		$countService = $services->count();
        if($countService == 0){
            return redirect()->route('trangchu');
        }

        $services_category = DB::table('services')->join('categories','categories.id','=','services.idCate')
            ->where('services.id',$id)->where('services.adminCheck',1)
            ->select('categories.name as nameCate','categories.id as idCate')->first();

        $services_relate = DB::table('services')
                            ->join('categories','categories.id','=','services.idCate')
                            ->join('users', 'users.id', '=', 'services.idUser')
                            ->where('categories.id',$services_category->idCate)
                            ->where('services.adminCheck',1)->inRandomOrder()->limit(3)
                            ->select('services.*','users.name as nameChuShop')->get();


        $randPro = DB::table('products')->where('products.status',1)->inRandomOrder()->limit(6)->get();

        $getService = DB::table('services')->where('id', $id)->first();
        $product_user = DB::table('products')->join('users','users.id','=','products.idUser')
            ->join('categories','categories.id','=','products.idCate')
            ->where('products.adminCheck',1)->where('users.adminCheck',1)
            ->where('users.id',$getService->idUser)->where('products.id','<>',$id)
            ->select('products.*','categories.id as idCate','categories.name as nameCate')->get();

        return view('user.chitietdichvu',compact('services','services_category',
                'services_relate','randPro','product_user'));

	}

		
}