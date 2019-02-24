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
        $services = DB::table('services')
            ->join('categories', 'services.idCate','=','categories.id')          
            ->join('users','services.idUser','=','Users.id')
            ->select('services.*', 'users.id as idchushop', 'categories.name as namecate')->get();
        return view('admin.service.list',compact('services'));
    }
    
    public function getEnable($id, $option)
    {
        $service = Services::find($id);     
        $thongbao='';  
        if($option == 0){
            $service->adminCheck = 0;  //chua duyet   
            $thongbao="chưa duyệt";
        }elseif($option == 1){
            $service->adminCheck = 1;  //da duyet
            $thongbao="đã duyệt";            
        }else{
            $service->adminCheck = 2;//khoas
            $thongbao="khóa";            
        }
        $service->save();    
        return redirect('admin/service/list')->with("thongbao", "Đã chỉnh sửa trạng thái của ".$service->name." thành ".$thongbao);        
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

    public function getInforService($id){
        $service = DB::table('services')
        ->join('categories', 'services.idCate','=','categories.id')
        ->join('places', 'services.idPlace','=','places.id')
        ->where('services.id', $id)
        ->select('services.*', 'categories.name as namecate', 'places.name as nameplace')->get();

        foreach($service as $child){
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
                <div><label>Mã: </label><span> '.$child->id.'</span></div>                
                <div><label>Tiêu đề: </label><span> '.$child->name.'</span></div>                
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
