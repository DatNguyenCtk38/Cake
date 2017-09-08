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
use DB;
use App\Mail\SendMail;
class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	$new_product = Product::where('new',1)->paginate(4);
    	$promotion_product = Product::where('promotion_price','<>',0)->paginate(8);
    	//print_r($new_product);
    	//die();
    	//return view('page.trangchu',['slide'=>$slide]);
    	return view('page.trangchu',compact('slide','new_product','promotion_product'));
    }
    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
        $loai = ProductType::all();
        $loai_sp = ProductType::where('id',$type)->first();
        //print_r($loai_sp);
        //die();
    	return view('page.loaisanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }
    public function getChiTietSanPham(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        $sanphamtuongtu = Product::where('id_type',$sanpham->id_type)->paginate(6);
    	return view('page.chitietsanpham',compact('sanpham','sanphamtuongtu'));
    }
    public function getLienHe(){
    	return view('page.lienhe');
    }
    public function getGioiThieu(){
      
    	return view('page.gioithieu');
    }
    public function getAddToCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back(); 
    }
    public function getAddcartajax(Request $req){
        $id = $req->id;
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        echo Session('cart')->totalQty;
    }
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items)>0) {
            Session::put('cart',$cart);
        }
        else {
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getCheckout(){
        
        return view('page.dathang');
    }
    public function postCheckout(Request $req){
        $cart = Session::get('cart');
        //var_dump($cart);
        //die();
        $customer = new Customer;
        $customer->name =$req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->status = 0;
        $bill->save();
        
       
        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = $value['price']/$value['qty'];
            $bill_detail->save();
        }
        //--------------------------MAIL-------------------
        //Mail::send(new newMail());
        //$listBill = BillDetail::where('id_bill',$bill->id)->get();
        $listBill= DB::table('bill_detail')
                ->join('products','products.id','bill_detail.id_product')
                ->select('bill_detail.*','products.name','products.image')
                ->where('bill_detail.id_bill','=',$bill->id)
                ->get();
        //print_r($listBill);
        //die();
        Mail::send(new SendMail($listBill,$req->name,$req->phone,$req->address,$bill->created_at,$bill->total, $customer->email));
        //__________________________MAIL___________________
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
       
    }
    public function getLogin(){
        return view('page.dangnhap');
    }
    public function getSignin(){
        return view('page.dangky');
    }
    public function postSignin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email', 
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ]
            ,
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Vui lòng nhập đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                're_password.required'=>'Vui lòng điền mật khẩu',
                're_password.same'=>'Password không giống nhau',
                'password.min'=>'Password phải có ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        
            if(Auth::attempt($credentials)){

            return redirect()->route('trang-chu');
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        
    public function postLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
    public function getTimKiem(Request $req){
        $product = Product::where('name','like','%'.$req->key.'%')->orWhere('unit_price',$req->key)->get();
        return view('page.timkiem',compact('product'));
    }
}
