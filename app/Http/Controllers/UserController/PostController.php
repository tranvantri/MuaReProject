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
class PostController extends Controller
{
	public function postProduct(){
		$cateParents = Categories::where('idParent', 0)->where('ten-khong-dau','<>','cong-dong')->get();
		$cateChilds = Categories::where('idParent','<>', 0)->get();
		$places = DB::table('places')->where('enable',1)->get();
		return view('user.dangtinsanpham',compact('cateParents','cateChilds','places'));
	}

	/*Khi nguoi dung dang tin:
		- Tao tin dang
		- Tao Product
		- Kiem tra User da co chua
	*/
	public function addNewProduct(Request $request){

		//- Kiem tra User
			// nếu chưa có thì tạo mới
			// đã có rồi thì lấy id của user đó
	    $name = strip_tags($request->input('name', 'Lỗi tên User'));
	    $phone = strip_tags($request->input('phone', 'Lỗi sdt'));
	    $email = strip_tags($request->input('email', 'Lỗi Email'));
	    $addressUser = strip_tags($request->input('addressUser', 'Lỗi địa chỉ'));
	    
	    #tìm user trong DB
	    $user = DB::table('users')->where('phone',$phone)->orWhere('email',$email)->where('status',1)->first();

	    

	    if(isset($user)){
	    	$this->createService($request,$user->id);
	    	$this->createProduct($request,$user->id);
	    	$new_service_user = DB::table('tindang')->where('status',1)->where('idUser',$user->id)->orderBy('id', 'desc')->first();
	    	return redirect()->route('chitiettindang', ['id' => $new_service_user->id]); 
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
			$this->createService($request,$idUser);
	    	$this->createProduct($request,$idUser);
	    	$new_service_user = DB::table('tindang')->where('status',1)->where('idUser',$idUser)->orderBy('id', 'desc')->first();
	    	return redirect()->route('chitiettindang', ['id' => $new_service_user->id]); 

	    }
	    
	}

	public static  function createService(Request $request,$idUser){
		//- Tao tin dang
		$nameService = strip_tags($request->input('nameService', 'Lỗi tên tin dịch vụ'));
		$descriptionService = strip_tags($request->input('descriptionService', 'Lỗi mô tả dịch vụ'));
		$priceService = strip_tags($request->input('priceService', -1));
	    $tatus_Service = 1; // cot status
	    $date_added = Carbon::now('Asia/Ho_Chi_Minh');
	    $idCateService = strip_tags($request->input('idCateService', -1));
	    $idPlaceService = strip_tags($request->input('idPlaceService', -1));
	    $adminCheck = 0;
	    $statusService = 0;
	    $addressUser = strip_tags($request->input('addressUser', 'Lỗi địa chỉ'));


	    /*------------------------chưa lấy dc filepath*/
	    $image = $request->input('image', 'Null');

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
		    	'statusService' => $statusService,
		    )
		);
	}

	public static  function createProduct(Request $request,$idUser){
		//- Tao Product
	    $nameProduct = strip_tags($request->input('nameProduct', 'Lỗi tên sản phẩm'));
	    $descriptionProduct = strip_tags($request->input('descriptionProduct', 'Lỗi mô tả sản phẩm'));
	    $priceProduct = strip_tags($request->input('priceProduct', -1));
	    $idCateProduct = strip_tags($request->input('idCateProduct', -1));
	    # 1: còn hàng, -1: hết hàng, 0: ngừng hàng
	    $status = strip_tags($request->input('status', 0));
		# 1: mới, 2: mới 90%, 3: 80%, 4: cũ
	    $statusProduct = strip_tags($request->input('statusProduct', 1));
		$date_added = Carbon::now('Asia/Ho_Chi_Minh');
		$adminCheck = 1;
		$addressUser = strip_tags($request->input('addressUser', 'Lỗi địa chỉ'));

	    #địa điểm bán sản phẩm đó
	    $locationItem = $request->input('locationItem', -1);
	    foreach ($locationItem as $childLoc=>$value) {
	    	echo "Hobby : ".$value."<br />";
	    }

	    /*------------------------chưa lấy dc hình ảnh path*/
	    $imageProduct = $request->input('imageProduct', 'Null');

	    DB::table('products')->insert(array(
	    		'name' 			=> $nameProduct, 
		    	'description' 	=> $descriptionProduct,
		    	'title_tindang' => 'NULL',
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


}