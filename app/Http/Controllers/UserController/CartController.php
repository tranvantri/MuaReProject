<?php
namespace App\Http\Controllers\UserController;
use Gloudemans\Shoppingcart\Facades\Cart;   
use Illuminate\Http\Request;
use App\Quotation;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Cookie;


class CartController extends Controller
{
    public function getAddCart(Request $request)
    {
        $product = DB::table('products')
                    ->where('products.id',$request->id)
                    ->where('products.status',1)
                    ->select("products.name as tensp", "products.price as giasp","products.images as hinhanhsp")
                    ->first();
        $images = json_decode($product->hinhanhsp);            
        Cart::add($request->id, $product->tensp, 1,$product->giasp, 
        ['hinhanhsp' => $images[0]?? "assets/images/chitietsanpham/logo_muare.png"]);
    }
    
    public function remove($item_id)
    {
        \Cart::remove($item_id);
        return back();
    }


    public function update($item_id, Request $request)
    {
        Cart::update($item_id, $request->soLuongSp);
        return back();
    }

}
