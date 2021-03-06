<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use Hash;
use Auth;
use Session;
use Mail;
class AjaxController extends Controller
{
   	public function getAddcartajax(Request $req){
        $id = $req->id;
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        echo Session('cart')->totalQty;
    }

    public function getUpdatecartajax(Request $req){
      	 $id =$req->id;
      	 $oldCart = Session::has('cart')?Session::get('cart'):null;
       	 $cart = new Cart($oldCart);
         $product = Product::find($id);
         if($req->sl>$cart->items[$id]['qty']){
           $cart->add($product,$id);
          }
          else{
            $cart->reduceByOne($id);
          }
         $req->session()->put('cart',$cart);
         return response()->json($cart);
          //  echo number_format($cart->items[$id]['qty']*$req->dg,0, ',', '.').' VNĐ';
            
        

       	//echo "<script>console.log( 'Debug Objects: " . $id . "' );</script>";
    }
    public function getDeletecartajax(Request $req){
         $id =$req->id;
         $oldCart = Session::has('cart')?Session::get('cart'):null;
         $cart = new Cart($oldCart);
         $cart->removeItem($id);
         $req->session()->put('cart',$cart);
          return response()->json($cart);
    }
}
