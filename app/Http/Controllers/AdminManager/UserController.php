<?php
namespace App\Http\Controllers\AdminManager;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function getList()
    {
        $user = User::all();
        return view('admin.user.list',compact('user'));
    }

    /*-------------- Add new ------------------------------*/
    // public function getAdd()
    // {
    //     return view('admin.user.add');
    // }   
    // public function postAdd(UserRequest $req)
    // {
    //     $user = new User;
    //     $user->name = $req->Ten;
    //     $user->email = $req->Email;
    //     $user->password = bcrypt($req->Password);
    //     $user->address = $req->DiaChi;
    //     $user->phone = $req->SoDT;  
    //     $user->provider = 'Null';
    //     $user->provider_id = 'Null';  
    //     $user->save();
       
    //     return redirect('admin/user/add')->with('thongbao','Thêm thành công!');
    // }

    /*---------------Edit Item ----------------------------------*/
    public function getEdit($id)
    {
        $user = User::find($id);
        
        return view('admin.user.edit',compact('user'));
    }
    public function postEdit(UserEditRequest $req, $id)
    {
        $user = User::find($id);        
        $user->name = $req->Ten;
        if($req->changepass == "on"){
           $user->password = bcrypt($req->Password);
        }
        $user->address = $req->DiaChi;
        $user->phone = $req->SoDT;
        $user->enable = $req->enable;    
        $user->save();
       
        return redirect('admin/user/edit/'.$id)->with('thongbao','Sửa thành công!');
    }
    public function getEnable($id)
    {
        $cate = Categories::find($id);       
        if($cate->enable == 1){
            $cate->enable = 0;  
            $cate->save();    
            return redirect('admin/category/list')->with('thongbao','Đã tắt hoạt động cho danh mục '. $cate->name);
        }else{
            $cate->enable = 1;  
            $cate->save();
            return redirect('admin/category/list')->with('thongbao','Đã bật hoạt động cho danh mục '. $cate->name);
        }
        
    }
}
