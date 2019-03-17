<?php
namespace App\Http\Controllers\AdminManager;
use Illuminate\Http\Request;
use App\Services;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
class ServiceController extends Controller
{
    public function getList()
    {
        $dichvu = DB::table('services')
            ->join('categories', 'services.idCate','=','categories.id')          
            ->join('users','services.idUser','=','Users.id')
            ->select('services.*', 'users.id as idchushop', 'categories.name as namecate')->get();
        return view('admin.dichvu.list',compact('dichvu'));
    }
    
    public function getEnable($id, $option)
    {
        $dichvu = Services::find($id);       
        if($option == 0){
            $dichvu->adminCheck = 0;  //chua duyet            
        }elseif($option == 1){
            $dichvu->adminCheck = 1;  //da duyet
        }else{
            $dichvu->adminCheck = 2;//khoas
        }
        $dichvu->save();    
        return redirect('admin/dichvu/list');        
    }

    // public function getInforUser($id){
    //     $user = User::find($id);
    //     echo '
    //     <div><label>Mã người đăng: </label><span> '.$user->id.'</span></div>                
    //     <div><label>Họ và tên: </label><span> '.$user->name.'</span></div>                
    //     <div><label>Email: </label><span> '.$user->email.'</span></div>                
    //     <div><label>Điện thoại: </label><span> '.$user->phone.'</span></div>                
    //     <div><label>Địa chỉ: </label><span> '.$user->address.'</span></div>
    //     ';
    // }

    public function getInforDichVu($id){
        $dichvu = DB::table('services')
        ->join('categories', 'services.idCate','=','categories.id')
        ->join('places', 'services.idPlace','=','places.id')
        ->where('services.id', $id)
        ->select('services.*', 'categories.name as namecate', 'places.name as nameplace')->get();

        foreach($dichvu as $child){
            $trangthai = '';
            $tinhtrang = '';
            if($child->status == 1){
                $trangthai = 'Hoạt động';
            }else{
                $trangthai = 'Ngừng hoạt động';
            }
            if($child->statusService == 1){
                $tinhtrang = 'Mới';
            }elseif($child->statusService == 2){
                 $tinhtrang = '90%';
            }elseif($child->statusService == 3){
                 $tinhtrang = '80%';
            }elseif($child->statusService == 4){
                 $tinhtrang = 'Cũ';
            }
            

            echo '
                <div><label>Mã DV: </label><span> '.$child->id.'</span></div>                
                <div><label>Tên DV: </label><span> '.$child->name.'</span></div>                
                <div><label>Giá: </label><span> '.number_format($child->price,0).'đ</span></div>                
                <div><label>Danh mục: </label><span> '.$child->namecate.'</span></div>                
                <div><label>Trạng thái: </label><span> '.$trangthai.'</span></div>                
                <div><label>Tình trạng: </label><span> '.$tinhtrang.'</span></div>  
                <div><label>Mô tả: </label></div>  
                <div><textarea style="width: 100%" rows="8">'.$child->description.'</textarea></div>
                <div><label>Ngày đăng: </label><span> '.$child->date_added.'</span></div> 
                <div><label>Nơi bán: </label><span> '.$child->address.'</span></div>       
                <div><label>Khu vực bán: </label><span> '.$child->nameplace.'</span></div>
             ';
        }
    }

}
