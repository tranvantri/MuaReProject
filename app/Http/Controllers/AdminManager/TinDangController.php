<?php
namespace App\Http\Controllers\AdminManager;
use Illuminate\Http\Request;
use App\TinDang;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
class TinDangController extends Controller
{
    public function getList()
    {
        $tindang = DB::table('tindang')
            ->join('categories', 'tindang.idCate','=','categories.id')          
            ->join('users','tindang.idUser','=','Users.id')
            ->select('tindang.*', 'users.id as idchushop', 'categories.name as namecate')->get();
        return view('admin.tindang.list',compact('tindang'));
    }
    
    public function getEnable($id, $option)
    {
        $tindang = TinDang::find($id);       
        $tb = '';
        if($option == 0){
            $tindang->adminCheck = 0;  //chua duyet  
             $tb = 'Đã hủy duyệt tin đăng "'. $tindang->name.'"';          
        }elseif($option == 1){
            $tindang->adminCheck = 1;  //da duyet
            $tb = 'Đã duyệt tin đăng "'. $tindang->name.'"';
        }else{
            $tindang->adminCheck = 2;//khoas
            $tb = 'Đã khóa tin đăng "'. $tindang->name.'"';
        }
        $tindang->save();    
        return redirect('admin/tindang/list')->with('thongbao',$tb);     
    }

    public function getVip($id)
    {
        $tindang = TinDang::find($id);       
        $tb = '';
        if($tindang->vip == 0){
            $tindang->vip = 1;  //kich hoat     
            $tb = 'Đã kích hoạt vip của tin đăng "'. $tindang->name.'"';
        }else{
            $tindang->vip = 0;//chưa kich hoat
            $tb = 'Đã tắt vip của tin đăng "'. $tindang->name.'"';
        }
        $tindang->save();    
        return redirect('admin/tindang/list')->with('thongbao',$tb);   
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

    public function getInforTinDang($id){
        $tindang = DB::table('tindang')
        ->join('categories', 'tindang.idCate','=','categories.id')
        ->join('places', 'tindang.idPlace','=','places.id')
        ->where('tindang.id', $id)
        ->select('tindang.*', 'categories.name as namecate', 'places.name as nameplace')->get();

        foreach($tindang as $child){
            $trangthai = '';
            $tinhtrang = '';
            if($child->status == 1){
                $trangthai = 'Hoạt động';
            }else{
                $trangthai = 'Ngừng hoạt động';
            }
            if($child->statusTinDang == 1){
                $tinhtrang = 'Mới';
            }elseif($child->statusTinDang == 2){
                 $tinhtrang = '90%';
            }elseif($child->statusTinDang == 3){
                 $tinhtrang = '80%';
            }elseif($child->statusTinDang == 4){
                 $tinhtrang = 'Cũ';
            }
            

            echo '
                <div><label>Mã sản phẩm: </label><span> '.$child->id.'</span></div>                
                <div><label>Tên sản phẩm: </label><span> '.$child->name.'</span></div>                
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
