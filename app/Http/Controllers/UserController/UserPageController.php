<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Quotation;


class UserPageController extends Controller
{
    // Trang Gian hàng của người dùng
    /* 
	Đầu vào: id của khách hàng
	Đầu ra: thông tin của User
    */
    public function getView(){
        if(Auth::id()) {
            $id = Auth::id();
            // truyền id của khách hàng đã đăng nhập vào đây -------------
            $user = DB::table('users')->where('adminCheck', 1)->where('users.id', $id)->get();

            $tindang = DB::table('tindang')
                ->join('places', 'places.id', '=', 'tindang.idPlace')
                ->where('tindang.adminCheck', 1)->where('tindang.idUser', $id)->where('places.enable', 1)
                ->select('tindang.*', 'places.name as namePlace', 'places.id as idPlace')
                ->get();
            $soluongTinDang = $tindang->count();

            $products = DB::table('products')->where('adminCheck', 1)->where('idUser', $id)->get();
            $soluongProducts = $products->count();

            return view('user.gianhangcuanguoidung', compact('user', 'tindang', 'soluongTinDang', 'products', 'soluongProducts'));
        }
        else{
            return redirect('login');
        }
    }

    // Trang quản lý đơn hàng
    // Đầu vào: 
    // Đầu ra:
    public function getQuanLyDonHang(){
        if(Auth::id()){
            $idUser = Auth::id(); // id của chủ shop
            $bills = DB::table('bills')
                    ->join('users','users.id','=','bills.idUser')
                    ->where('users.id',$idUser)
                    ->where('users.status',1)->where('users.adminCheck',1)
                    ->select('bills.nameCus as tenKhach','bills.phoneCus as sdtKhach','bills.addressCus as diaChiKhach',
                            'noteCus as ghiChuKhach','bills.status as trangThaiBill'
                        )
                    ->get();
            $b_details = DB::table('bill_detail')
                ->join('bills','bills.id','=','bill_detail.idBill')
                ->where('bills.idUser',$idUser)
                ->get();

            return view('user.trangquanlydonhang',compact('bills'));
        }
        else{
            return redirect('login');
        }

    }

    // trang quan ly kho hang cua user.(yeu caud ang nhap)
    // dau vao: id cua user
    // dau ra: thong tin cua san pham cua user
    public function getUserQuanLyKhoHang(){
        if(Auth::id()) {
            $id = Auth::id();
            $products = DB::table('products')->where('adminCheck',1)->where('idUser',$id)->get();
            $soluongProducts = $products->count();

            $cateParent = DB::table('categories')->where('enable',1)->where('idParent',0)->get();
            $cateChild = DB::table('categories')->where('enable',1)->where('idParent','<>',0)->get();
            $place_product = DB::table('products')->join('place_product','place_product.idProduct','=','products.id')->where('products.adminCheck',1)->where('products.idUser',$id)->select('place_product.*')->get();

            return view('user.userquanlykhohang',compact('products','soluongProducts','cateParent','cateChild','place_product'));
        }
        else{
            return redirect('login');
        }
    }

    public function viewUserQuanLyTinDang(){
        if(Auth::id())
        {
            $id = Auth::id();
            $tindang = DB::table('tindang')
                ->join('categories','categories.id','=','tindang.idCate')
                ->join('places','places.id','=','tindang.idPlace')
                ->where('status',1)
                ->where('adminCheck',1)
                ->where('idUser',$id)
                ->select('tindang.*','categories.name as tenDanhMuc','places.name as diadiem')
                ->get();

            return view('user.quan-ly-tin-dang',compact('tindang'));

        }
        else{
            return redirect('login');
        }
    }

    //    xóa tin đăng
    public function xoaTinDang(Request $request){
        DB::table('tindang')->where('id',$request->idTinDang)->update(array('status' => -1));
        return redirect('quan-ly-tin-dang')->with('thongbao','Xóa tin đăng thành công');
    }

}
