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
class TheLoaiController extends Controller
{
    public function getDanhSachTheLoai(){
    	$danhSachTheLoai = ProductType::all();
    	return view('admin.theloai.danhsach',compact('danhSachTheLoai'));
    }
    public function getThemTheLoai(){
        return view('admin.theloai.them');
    }
    public function postThemTheLoai(Request $req){
        $this->validate($req,
            [
                'catename'=>'required|unique:type_products,catename|min:6|max:20'
            ],
            [
                'catename.required'=>"Vui lòng điền tên thể loại",
                'catename.unique'=>"Tên thể loại đã tồn tại",
                'catename.min'=>"Tên thể loại ít nhất 6 kí tự",
                'catename.max'=>"Tên thể loại không dài quá 20 kí tự"
            ]
            );
        $tl = new ProductType;
        $tl->catename = $req->catename;
        $tl->slug = str_slug($req->catename,'-');
        $tl->save();
        return redirect()->route('danhsachtheloai')->with('thongbao','Thêm thành công');
    }
    public function getSuaTheLoai($id){
        $theloai = ProductType::find($id);
        return view('admin.theloai.sua',compact('theloai'));
    }
    public function postSuaTheLoai(Request $req,$id){
        $this->validate($req,
            [
                'catename'=>'required|unique:type_products,catename|min:6|max:20'
            ],
            [
                'catename.unique'=>"Tên thể loại đã tồn tại",
                'catename.required'=>"Vui lòng điền tên thể loại",
                'catename.min'=>"Tên thể loại ít nhất 6 kí tự",
                'catename.max'=>"Tên thể loại không dài quá 20 kí tự"
            ]
            );
            $theloai = ProductType::find($id);
            $theloai->catename = $req->catename;
            $theloai->slug = str_slug($req->catename,'-');
            $theloai->save();
            return redirect()->route('danhsachtheloai')->with('thongbao','Sửa thành công');
    }
    public function getXoaTheLoai($id){
        $theloai = ProductType::find($id);
        $theloai->delete();
        return redirect()->back()->with('thongbao','Xóa thành công');
    }
   
}
