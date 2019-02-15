<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
class LoginUserController extends Controller
{
     public function getDangNhap()
    {
        return view('user/login');
    }

    public function postDangNhap(Request $req)
    {
    	switch($req->typelogin){
    		case 'username':
    			if(Auth::attempt(['username'=>$req->username,'password'=>$req->password])){
		            //kiểm tra ngdung có bị khóa hay không
		            if(Auth::user()->status == 1) 
		            {                
		                return Redirect('/home');
		            }
		            // người dùng bị khóa
		            else
		            {
		                return redirect('/login')->with('loi','Đăng nhập không thành công. Tài khoản đã bị khóa.');
		            }
		        }else {
		            return redirect()->back()->with('loi','Đăng nhập không thành công. Kiểm tra lại thông tin.');
		        }
		        break;
    		case 'email':
    			if(Auth::attempt(['email'=>$req->email,'password'=>$req->password])){
		            //kiểm tra ngdung có bị khóa hay không
		            if(Auth::user()->status == 1) 
		            {                
		                return Redirect('/home');
		            }
		            // người dùng bị khóa
		            else
		            {
		                return redirect('/login')->with('loi','Đăng nhập không thành công. Tài khoản đã bị khóa.');
		            }
		        }else {
		            return redirect()->back()->with('loi','Đăng nhập không thành công. Kiểm tra lại thông tin.');
		        }
		        break;
    		case 'phone':
    			if(Auth::attempt(['phone'=>$req->phone,'password'=>$req->password])){
		            //kiểm tra ngdung có bị khóa hay không
		            if(Auth::user()->status == 1) 
		            {                
		                return Redirect('/home');
		            }
		            // người dùng bị khóa
		            else
		            {
		                return redirect()->back()->with('loi','Đăng nhập không thành công. Tài khoản đã bị khóa.');
		            }
		        }else {
		            return redirect()->back()->with('loi','Đăng nhập không thành công. Kiểm tra lại thông tin.');
		        }
		        break;
    	}
        
    }
    
    public function getUserLogout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function postUserRegister(Request $req){

        // $this->validate($req,
        //     [
        //         'username'=>'required|max:50',
        //         'email'=>'required|unique:users,email|email',
        //         'password'=>'required|min:6|max:50',
        //         'repassword'=>'required|same:password',
        //         'phone'=>'required|numeric|max:11',
        //         // 'address'=>'required'
        //     ],
        //     [
        //         'username.required'=>'Bạn chưa nhập Tên.',
        //         'username.max'=> 'Tên có độ dài không quá 50 ký tự.',
        //         'email.required'=>'Bạn chưa nhập Email.',
        //         'email.unique'=>'Email đã tồn tại. Bạn vui lòng đăng nhập nhé.',
        //         'email.email'=>'Email không hợp lệ.',

        //         'password.min' => 'Mật khẩu có độ dài từ 6-50 ký tự.',
        //         'password.max'=> 'Mật khẩu có độ dài từ 6-50 ký tự.',
        //         'password.required' => 'Bạn chưa nhập mật khẩu',               

        //         'repassword.same' => 'Mật khẩu chưa trùng khớp.',
        //         'repassword.required' => 'Bạn chưa nhập lại mật khẩu', 

        //         'phone.required' => 'Bạn chưa nhập số điện thoại liên hệ',
        //         'phone.numeric' => 'Vui lòng chỉ nhập ký tự số',
        //         'phone.max' => 'Số điện thoại có độ dài 10-11 ký tự',
        //         // 'address.required'=> 'Vui lòng điền địa chỉ của bạn.'

        //     ]);
        $user = new User;
        $user->username= $req->username;
        $user->name= $req->username;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->phone = $req->phone;    

        $user->provider = 'Null';
        $user->provider_id = 'Null';

        $user->save();
        
        
        return redirect('/login')->with('thongbao','Đăng ký thành công. Mời bạn đăng nhập');

    }
}
