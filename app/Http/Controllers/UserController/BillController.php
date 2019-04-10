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

class BillController extends Controller
{
     public function createBill(Request $request){
          $infoKH = $request->name;
          if(Auth::id()){
               $idUserBuy = Auth::id();
          }
          else{
               $idUserBuy = 0;
          }
          // return $infoKH;
          $idBill = DB::table('bills')->insertGetId(
               array(
                    'nameCus' => $request->name, 
                    'phoneCus' => $request->SDTKH, 
                    'addressCus' => $request->DiaChiKH, 
                    'noteCus' => $request->ThongTinThemKH, 
                    'idUserBuy' => $idUserBuy 
                    
               )
           );

          foreach(Cart::content() as $row){
               DB::table('bill_detail')->insertGetId(
                    array(
                         'idBill' => $idBill, 
                         'idProduct' => $row->id, 
                         'idShop' => $row->options->idShop, 
                         'nameProduct' => $row->name, 
                         'quantity' => $row->qty,
                         'price' => $row->price,
                         
                    )
               ); 
          }
          Cart::destroy();
     }
}