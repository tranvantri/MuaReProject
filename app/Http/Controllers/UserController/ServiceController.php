<?php

namespace App\Http\Controllers\UserController;
use Auth;
use Illuminate\Http\Request;
use App\Places;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
use Illuminate\Support\Facades\DB;
header("Content-Type: application/json");

class ServiceController extends Controller
{
	// lấy tất cả tin đăng từ db
	//
	public function viewAllServices(){
		$services = DB::table('tindang')->join('users','users.id','=','tindang.idUser')->where('tindang.status',1)->where('tindang.adminCheck',1)->where('users.status',1)->select('tindang.*','users.username as username')->orderBy('id', 'desc')->get();

		return view('user.tatcatindang',compact('services'));
	}
    
	// lấy chi tiết tin đăng
	// đầu vào: id của tin đăng
	//đầu ra: chi tiet cua tin dang theo id
	public function getTinDang($id){

		$services = DB::table('tindang')->join('users', 'users.id', '=', 'tindang.idUser')
		->where('tindang.id',$id)
		->where('tindang.status',1)
		->where('users.status',1)
		->select('users.id as idChuShop', 'tindang.*','users.email as emailChuShop','users.phone as phoneChuShop','users.address as addressChuShop','users.name as tenChuShop','users.avatar as avatarChuShop','users.username as username')
		->get();

		$service_category = DB::table('tindang')
		->join('categories','categories.id','=','tindang.idCate')
		->where('tindang.id',$id)
		->where('tindang.status',1)
		->select('categories.name as nameCate','categories.id as idCate')->get();

		$service_relate = DB::table('tindang')
		->join('categories','categories.id','=','tindang.idCate')
		->join('users', 'users.id', '=', 'tindang.idUser')
		->where('users.status',1)
		->where('categories.name','smartphone')->where('tindang.status',1)
		->inRandomOrder()->limit(3)
		->select('tindang.*','users.name as nameChuShop')->get();


		$randSer = DB::table('tindang')->where('tindang.status',1)->inRandomOrder()->limit(6)->get();


		/*Truyền id của user đã đăng nhập vào đây*/
		$getService = DB::table('tindang')->where('id', $id)->first();
		$service_user = DB::table('tindang')->join('users','users.id','=','tindang.idUser')->join('categories','categories.id','=','tindang.idCate')->where('tindang.status',1)->where('users.status',1)
		->where('users.id',$getService->idUser)->where('tindang.id','<>',$id)->select('tindang.*','categories.id as idCate','categories.name as nameCate')->get();
        
  		return view('user.chitietsanpham',compact('services','service_category','service_relate','randSer','service_user'));
	}
    
    public function getTDUserId(Request $request)
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
    
    /*public function getTDSeller(Request $request)
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
    }*/
    public function getTinDangComment(Request $request)
    {
        //$number = htmlspecialchars($_GET["idProduct"]);
        $idTindang = $request->idProduct;         
        $comments = DB::table('comments')
                        ->join('tindang','tindang.id','=','comments.idTinDang')
                        ->join('users','users.id','=','comments.idUser')
                        ->where('tindang.id',$idTindang)
                        ->select('comments.id as idComment', 'comments.value as content', 'comments.idParent as idParent', 'users.avatar as userAvatar', 'users.name as userName', 'comments.idTinDang as idProduct', 'users.id as idUser', 'comments.idBlock as idBlock', 'comments.date_added as date_added', 'comments.parentName as parentName')
                        ->get();
                    //$this->myJson($comments);
                header("Content-type: application/json");
                $comments = json_encode($comments);
                echo  $comments;
    }
    public function getSubTDComment(Request $request)
    {
        //$number = htmlspecialchars($_GET["idProduct"]);
        $idComment = $request->idComment;         
        $comments = DB::table('comments')
                        ->join('tindang','tindang.id','=','comments.idTinDang')
                        ->join('users','users.id','=','comments.idUser')
                        ->where('comments.idBlock',$idComment)
                        ->select('comments.id as idComment', 'comments.value as content', 'comments.idParent as idParent', 'users.avatar as userAvatar', 'users.name as userName', 'comments.idTinDang as idProduct', 'users.id as idUser', 'comments.idBlock as idBlock', 'comments.date_added as date_added', 'comments.parentName as parentName')
                        ->get();
                    //$this->myJson($comments);
                header("Content-type: application/json");
                $comments = json_encode($comments);
                echo  $comments;
    }
    public function deleteTDComment(Request $request)
    {
        //$number = htmlspecialchars($_GET["idProduct"]);
        $idComment = $request->idComment;
        DB::table('comments')->where('id', $idComment)->delete();
        header("Content-type: application/json");
        echo json_encode(0);
    }
    public function postSubTDComment(Request $request)
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
                'idProduct' => 0,
                'idTinDang' => $idProduct,
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
    }
}