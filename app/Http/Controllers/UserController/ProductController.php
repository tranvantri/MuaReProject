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
		$getProduct = DB::table('products')->where('id', $id)->first();
		$product_user = DB::table('products')->join('users','users.id','=','products.idUser')->join('categories','categories.id','=','products.idCate')->where('products.adminCheck',1)->where('users.adminCheck',1)
		->where('users.id',$getProduct->idUser)->where('products.id','<>',$id)->select('products.*','categories.id as idCate','categories.name as nameCate')->get();

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
        
        //biến nhận biết đang ở trang chi tiết sản phẩm hay đang dùng modal
        $chitietsp = 0;
        
		return view('user.product-info',compact('products','randPro','product_offer','chitietsp'));
	}
    
    
	/*public function getCTSPUserId(Request $request)
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
    public function getCTSPSeller(Request $request)
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
    public function getProductInfo(Request $request)
    {
        //$number = htmlspecialchars($_GET["idProduct"]);
        $idPro = $request->idProduct;          
        $comments = DB::table('products')
                        ->where('products.id',$idPro)
                        ->select('products.name as productName', 'products.description as description', 'products.images as productImage', 'products.price as productPrice', 'products.idUser as productUserId')
                        ->get();
                    //$this->myJson($comments);
        if($comments != null || $comments != ''){
             header("Content-type: application/json");
            $comments = json_encode($comments);
            echo  $comments;
        } else {
             header("Content-type: application/json");
                $comments = json_encode(0);
                echo  $comments;
        }
               
    }
    public function getChiTietSPComment(Request $request)
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
        if($comments != null || $comments != ''){
             header("Content-type: application/json");
            $comments = json_encode($comments);
            echo  $comments;
        } else {
             header("Content-type: application/json");
                $comments = json_encode(0);
                echo  $comments;
        }
               
    }
    public function getSubCTSPComment(Request $request)
    {
        //$number = htmlspecialchars($_GET["idProduct"]);
        $idComment = $request->idComment;          
        $comments = DB::table('comments')
                        ->join('products','products.id','=','comments.idProduct')
                        ->join('users','users.id','=','comments.idUser')
                        ->where('comments.idBlock',$idComment)
                        ->select('comments.id as idComment', 'comments.value as content', 'comments.idParent as idParent', 'users.avatar as userAvatar', 'users.name as userName', 'comments.idProduct as idProduct','products.name as productName','users.id as idUser','comments.idBlock as idBlock', 'comments.date_added as date_added', 'comments.parentName as parentName')
                        ->get();
                    //$this->myJson($comments);
                header("Content-type: application/json");
                $comments = json_encode($comments);
                echo  $comments;
    }
    public function deleteCTSPComment(Request $request)
    {
        //$number = htmlspecialchars($_GET["idProduct"]);
        $idComment = $request->idComment;
        DB::table('comments')->where('id', $idComment)->delete();
        header("Content-type: application/json");
        echo json_encode(0);
    }
    public function postSubCTSPComment(Request $request)
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
            $userId = "Vui lòng đăng nhập trước khi bình luận!"; //not login
            header("Content-type: application/json");
            $userId = json_encode($userId);
            echo  $userId;
        }


        
    }*/
}