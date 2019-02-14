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
	public function getTinDang(){
		
	}

}