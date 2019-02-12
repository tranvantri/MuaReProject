<?php
namespace App\Http\Controllers\AdminManager;
use App\Http\Requests\LogoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logo;
use Illuminate\Database\QueryException;
class LogoController extends Controller
{
    public function getList()
    {
        $logo = Logo::all();
        return view('admin.logo.list',compact('logo'));
    }
    
    public function getEdit($id)
    {
        $logo = Logo::find($id);

        return view('admin.logo.edit',compact('logo'));
    } 

    public function postEdit(LogoRequest $req, $id)
    {
        $slide = Logo::find($id);
        $slide->title = $req->tieude;
        $slide->image = $req->img;
        $slide->save();       
        return redirect('admin/logo/edit/'.$id)->with('thongbao','Sửa thành công!');
    }
}
