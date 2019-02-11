<?php
namespace App\Http\Controllers\AdminManager;
use App\Http\Requests\PlaceRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Places;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Auth;
class PlaceController extends Controller
{
    public function getList()
    {
        $places = Places::all();
        return view('admin.place.list', compact('places'));
    }
    public function getAdd()
    {
        return view('admin.place.add');
    }
    
    public function postAdd(PlaceRequest $req)
    {
        $place = new Places;
        $place->name = $req->Ten;
        $place->enable = $req->enable;
        $place->save();              
        return redirect('admin/place/add')->with('thongbao','Thêm thành công!');
    }
    public function getEdit($id)
    {
        $place = Places::find($id);
        return view('admin.place.edit',compact('place'));
    }

   
    public function postEdit(PlaceRequest $req,$id)
    {
        $place = Places::find($id);
        $place->name = $req->Ten;
        $place->enable = $req->enable;    
        $place->save();       
        return redirect('admin/place/edit/'.$id)->with('thongbao','Sửa thành công!');
    }
    public function getEnable($id)
    {
        $place = Places::find($id);       
        if($place->enable == 1){
            $place->enable = 0;  
            $place->save();    
            return redirect('admin/place/list')->with('thongbao','Đã tắt hoạt động cho danh mục '. $place->name);
        }else{
            $place->enable = 1;  
            $place->save();
            return redirect('admin/place/list')->with('thongbao','Đã bật hoạt động cho danh mục '. $place->name);
        }
        
    }

    
}
