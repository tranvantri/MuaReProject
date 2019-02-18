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
		$services = DB::table('tindang')->join('users','users.id','=','tindang.idUser')->where('tindang.status',1)->where('tindang.adminCheck',1)->where('users.adminCheck',1)->select('tindang.*','users.username as username')->orderBy('id', 'desc')->get();

		return view('user.tatcatindang',compact('services'));
	}

	// lấy chi tiết tin đăng
	// đầu vào: id của tin đăng
	//đầu ra: chi tiet cua tin dang theo id
	public function getTinDang($id){
		$services = DB::table('tindang')->join('users', 'users.id', '=', 'tindang.idUser')->where('tindang.id',$id)->where('tindang.status',1)->select('users.id as idChuShop', 'tindang.*','users.email as emailChuShop','users.phone as phoneChuShop','users.address as addressChuShop','users.name as tenChuShop','users.avatar as avatarChuShop','users.username as username')->get();

		$service_category = DB::table('tindang')->join('categories','categories.id','=','tindang.idCate')->where('tindang.id',$id)->where('tindang.status',1)->select('categories.name as nameCate','categories.id as idCate')->get();


		/*Thế đéo nào lại truyền smartphone vào categories.name??????*/
		$service_relate = DB::table('tindang')->join('categories','categories.id','=','tindang.idCate')->join('users', 'users.id', '=', 'tindang.idUser')->where('categories.name','smartphone')->where('tindang.status',1)->inRandomOrder()->limit(3)->select('tindang.*','users.name as nameChuShop')->get();


		$randSer = DB::table('tindang')->where('tindang.status',1)->inRandomOrder()->limit(6)->get();


		/*Truyền id của user đã đăng nhập vào đây*/
		$getService = DB::table('tindang')->where('id', $id)->first();
		$service_user = DB::table('tindang')->join('users','users.id','=','tindang.idUser')->join('categories','categories.id','=','tindang.idCate')->where('tindang.status',1)->where('users.adminCheck',1)
		->where('users.id',$getService->idUser)->where('tindang.id','<>',$id)->select('tindang.*','categories.id as idCate','categories.name as nameCate')->get();

  		return view('user.chitietsanpham',compact('services','service_category','service_relate','randSer','service_user'));
	}

}