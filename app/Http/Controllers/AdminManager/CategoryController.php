<?php
namespace App\Http\Controllers\AdminManager;
use App\Http\Requests\CategoryGroupRequest;
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
        return view('admin.categorygroup.add');
    }


    
    public function postAdd(CategoryGroupRequest $req)
    {
        $cateGroup = new Categories;
        $cateGroup->name = $req->Ten;
        $cateGroup->enable = $req->enable;
        $cateGroup->save();              
        return redirect('admin/categorygroup/add')->with('thongbao','Thêm thành công!');
    }
    public function getEdit($id)
    {
        $cateGroup = Categories::find($id);

        return view('admin.categorygroup.edit',compact('cateGroup'));
    }

   
    public function postEdit(CategoryGroupRequest $req,$id)
    {
        $cate = Categories::find($id);
        $cate->name = $req->Ten;
        $cate->enable = $req->enable;
        
        
       
        $cate->save();       
        return redirect('admin/categorygroup/edit/'.$id)->with('thongbao','Sửa thành công!');
    }
    public function getDelete($id)
    {
        $cate= CategoryGroup::find($id);
        try {
            $check = $cate->delete();
            if(!$check)
                throw new QueryException;
        } catch (QueryException $e) {
            return redirect('admin/category/list')->with('loi','Không thể xóa!');
        }
        
        return redirect('admin/category/list')->with('thongbao','Xóa thành công!');
    }

    
}
