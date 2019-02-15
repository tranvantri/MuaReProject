<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Places;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
	// lấy tất cả tin đăng từ db
	//
	public function viewAllServices(){
		$services = DB::table('services')->join('users','users.id','=','services.idUser')->where('services.status',1)->where('services.adminCheck',1)->where('users.adminCheck',1)->select('services.*','users.username as username')->orderBy('id', 'desc')->get();

		return view('user.tatcatindang',compact('services'));
	}

	// lấy chi tiết tin đăng
	// đầu vào: id của tin đăng
	//đầu ra: chi tiet cua tin dang theo id
	public function getTinDang($id){
		$services = DB::table('services')->join('users', 'users.id', '=', 'services.idUser')->where('services.id',$id)->where('services.status',1)->select('users.id as idChuShop', 'services.*','users.email as emailChuShop','users.phone as phoneChuShop','users.address as addressChuShop','users.name as tenChuShop','users.avatar as avatarChuShop','users.username as username')->get();

		$service_category = DB::table('services')->join('categories','categories.id','=','services.idCate')->where('services.id',$id)->where('services.status',1)->select('categories.name as nameCate','categories.id as idCate')->get();


		/*Thế đéo nào lại truyền smartphone vào categories.name??????*/
		$service_relate = DB::table('services')->join('categories','categories.id','=','services.idCate')->join('users', 'users.id', '=', 'services.idUser')->where('categories.name','smartphone')->where('services.status',1)->inRandomOrder()->limit(3)->select('services.*','users.name as nameChuShop')->get();


		$randSer = DB::table('services')->where('services.status',1)->inRandomOrder()->limit(6)->get();


		/*Truyền id của user đã đăng nhập vào đây*/
		$getService = DB::table('services')->where('id', $id)->first();
		$service_user = DB::table('services')->join('users','users.id','=','services.idUser')->join('categories','categories.id','=','services.idCate')->where('services.status',1)->where('users.adminCheck',1)
		->where('users.id',$getService->idUser)->where('services.id','<>',$id)->select('services.*','categories.id as idCate','categories.name as nameCate')->get();

  		return view('user.chitietsanpham',compact('services','service_category','service_relate','randSer','service_user'));
	}

}