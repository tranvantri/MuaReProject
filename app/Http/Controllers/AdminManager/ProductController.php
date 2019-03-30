<?php
namespace App\Http\Controllers\AdminManager;
use Illuminate\Http\Request;
use App\Products;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
class ProductController extends Controller
{
    public function getList()
    {
        $products = DB::table('products')
            ->join('categories', 'products.idCate','=','categories.id')          
            ->join('users','products.idUser','=','Users.id')
            ->select('products.*', 'users.id as idchushop', 'categories.name as namecate')->get();
        return view('admin.product.list',compact('products'));
    }
    
    public function getEnable($id, $option)
    {
        $pro = Products::find($id);  
        $tb = '';     
        if($option == 0){
            $pro->adminCheck = 0;  //chua duyet   
            $tb = 'Đã hủy duyệt sản phẩm "'. $pro->name.'"';         
        }elseif($option == 1){
            $pro->adminCheck = 1;  //da duyet
            $tb = 'Đã duyệt sản phẩm "'. $pro->name.'"';
        }else{
            $pro->adminCheck = 2;//khoas
            $tb = 'Đã khóa sản phẩm "'. $pro->name.'"';
        }
        $pro->save();    
        return redirect('admin/product/list')->with('thongbao',$tb);        
    }

    public function getInforUser($id){
        $user = User::find($id);
        echo '
        <div><label>Mã người đăng: </label><span> '.$user->id.'</span></div>                
        <div><label>Họ và tên: </label><span> '.$user->name.'</span></div>                
        <div><label>Email: </label><span> '.$user->email.'</span></div>                
        <div><label>Điện thoại: </label><span> '.$user->phone.'</span></div>                
        <div><label>Địa chỉ: </label><span> '.$user->address.'</span></div>
        ';
    }

    public function getInforPro($id){
        $product = DB::table('products')
        ->join('categories', 'products.idCate','=','categories.id')
        ->where('products.id', $id)
        ->select('products.*', 'categories.name as namecate')->get();
        $places = DB::table('places')
        ->join('place_product', function ($join) use ($id){
                $join->on('places.id','=','place_product.idPlace')
                ->where('place_product.idProduct',$id);
        })
        ->select('places.name')->get();

        $khuvuc = '';
        foreach($places as $place){
            $khuvuc .=$place->name. ', ';
        }

        foreach($product as $pro){
            $trangthai = '';
            $tinhtrang = '';
            if($pro->status == 1){
                $trangthai = 'Đang bán';
            }else{
                $trangthai = 'Ngừng bán';
            }
            if($pro->statusProduct == 1){
                $tinhtrang = 'Mới';
            }elseif($pro->statusProduct == 2){
                 $tinhtrang = '90%';
            }elseif($pro->statusProduct == 3){
                 $tinhtrang = '80%';
            }elseif($pro->statusProduct == 4){
                 $tinhtrang = 'Cũ';
            }

            echo '
                <div><label>Mã sản phẩm: </label><span> '.$pro->id.'</span></div>                
                <div><label>Tên sản phẩm: </label><span> '.$pro->name.'</span></div>                
                <div><label>Giá: </label><span> '.number_format($pro->price,0).'đ</span></div>                
                <div><label>Danh mục: </label><span> '.$pro->namecate.'</span></div>                
                <div><label>Trạng thái: </label><span> '.$trangthai.'</span></div>                
                <div><label>Tình trạng: </label><span> '.$tinhtrang.'</span></div>  
                <div><label>Mô tả: </label></div>  
                <div><textarea style="width: 100%" rows="8">'.$pro->description.'</textarea></div>
                <div><label>Ngày đăng: </label><span> '.$pro->date_added.'</span></div>
                <div><label>Nơi bán: </label><span> '.$pro->address.'</span></div>       
                <div><label>Khu vực bán: </label><span> '.$khuvuc.'</span></div>
             ';
        }
    }

}
