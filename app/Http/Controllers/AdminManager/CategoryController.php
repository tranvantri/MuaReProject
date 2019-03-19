<?php
namespace App\Http\Controllers\AdminManager;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Auth;
class CategoryController extends Controller
{
    public function getList()
    {
        $cateParent = Categories::where('idParent', 0)->get();
        $catechild = Categories::where('idParent','<>', 0)->get();
        return view('admin.category.list', compact('cateParent', 'catechild'));
    }
    public function getAdd()
    {
        $cateParent = Categories::where('idParent', 0)->get();
        return view('admin.category.add', compact('cateParent'));
    }


    
    public function postAdd(CategoryRequest $req)
    {
        $cate = new Categories;
        $cate->name = $req->Ten;
        $cate->enable = $req->enable;
        $cate->idParent = $req->parent;
        $cate->image = substr($req->img, 1, strlen($req->img));
        $cate->save();              
        return redirect('admin/category/add')->with('thongbao','Thêm thành công!');
    }
    public function getEdit($id)
    {
        $cateCurrent = Categories::find($id);
        $cateParent = Categories::where('idParent', 0)->get();

        return view('admin.category.edit',compact('cateCurrent','cateParent'));
    }

   
    public function postEdit(CategoryRequest $req,$id)
    {
        $cate = Categories::find($id);
        $cate->name = $req->Ten;
        $cate->enable = $req->enable;    
        $cate->image = substr($req->img, 1, strlen($req->img));
        $cate->save();       
        return redirect('admin/category/edit/'.$id)->with('thongbao','Sửa thành công!');
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
