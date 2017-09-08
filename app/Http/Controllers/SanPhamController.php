<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use DB;
use File;
class SanPhamController extends Controller
{
    public function getDanhSachSanPham(){
    	$danhSachSP = DB::table('products')
        ->select('products.*','type_products.catename')
    	->join('type_products','products.id_type','=','type_products.id')
        ->orderby('products.id','desc')
    	->get();
    	//print_r($danhSachSP);
    	//die();
        //
    	return view('admin.sanpham.danhsach',compact('danhSachSP'));
    }
    
    public function getThemSanPham(){
        $nhomsp = ProductType::all();
    	return view('admin.sanpham.them',compact('nhomsp'));
    }
    public function postThemSanPham(Request $req){
         $this->validate($req,
            [
                'name'=>'required|unique:products,name|min:6|max:50',
                'image'=>'required',
                'unit_price'=>'required|integer|between:1000,9999999',
                'promotion_price'=>'integer|between:1000,9999999',
                
            ],
            [
                'name.required'=>"Vui lòng điền tên sản phẩm",
                'name.unique'=>"Tên thể loại đã bị trùng",
                'name.min'=>"Tên thể loại ít nhất 6 kí tự",
                'name.max'=>"Tên thể loại không dài quá 50 kí tự",
                'image.required'=>"Vui lòng chọn hình ảnh",
                'unit_price.required'=>"Vui lòng điền giá sản phẩm",
               
                'unit_price.between'=>"Giá sản phẩm phải nằm từ 1000 đồng đến 9999999 đồng",
               
                'promotion_price.between'=>"Giá sản phẩm phải nằm từ 1000 đồng đến 9999999 đồng",
                'unit.required'=>"Vui lòng nhập đơn vị sản phẩm",
                
                'image.required'=>"Vui lòng chọn hình ảnh",
            ]
            );
        $sanPham = new Product();

        $sanPham->name = $req->name;
        $sanPham->id_type= $req->id_type;
        $sanPham->slug = str_slug($req->name);
        $sanPham->description = $req->description;
        $sanPham->unit_price = $req->unit_price;
        $sanPham->promotion_price = $req->promotion_price;
        $sanPham->unit = $req->unit;
        $sanPham->new = $req->news;
        if ($req->hasFile('image')) {
            $f = $req->file('image')->getClientOriginalName();

            $filename = time().'_'.$f;

            $sanPham->image = $filename;

            $req->file('image')->move('public/source/image/product/',$filename);
        }
       
        $sanPham->save();
        return redirect()->route('danhsachsanpham')->with('thongbao','Thêm thành công');
    }
    public function getSuaSanPham($id){
        $sanPham = Product::find($id);
        $nhomsp = ProductType::all();
        return view('admin.sanpham.sua',compact('sanPham','nhomsp'));
    }
    public function postSuaSanPham(Request $req,$id){
        $this->validate($req,
            [
                'name'=>'required|min:6|max:50',
                'unit_price'=>'required|integer|between:1000,9999999',
                'promotion_price'=>'integer|between:1000,9999999',
                
            ],
            [
                'name.required'=>"Vui lòng điền tên sản phẩm",
               
                'name.min'=>"Tên thể loại ít nhất 6 kí tự",
                'name.max'=>"Tên thể loại không dài quá 50 kí tự",
                'unit_price.required'=>"Vui lòng điền giá sản phẩm",
               
                'unit_price.between'=>"Giá sản phẩm phải nằm từ 1000 đồng đến 9999999 đồng",
               
                'promotion_price.between'=>"Giá sản phẩm phải nằm từ 1000 đồng đến 9999999 đồng",
                'unit.required'=>"Vui lòng nhập đơn vị sản phẩm",
                
            ]
            );
        $sanPham = Product::find($id);

        $sanPham->name = $req->name;
        $sanPham->id_type= $req->id_type;
        $sanPham->slug = str_slug($req->name);
        $sanPham->description = $req->description;
        $sanPham->unit_price = $req->unit_price;
        $sanPham->promotion_price = $req->promotion_price;
        $sanPham->unit = $req->unit;
        $sanPham->new = $req->news;
        $file_path = 'public/source/image/product/'.$sanPham->image;   
        
             
        if ($req->hasFile('image')) {
            if (File::exists($file_path))
                {
                    File::delete($file_path);
                }
            
            $f = $req->file('image')->getClientOriginalName();
            $filename = time().'_'.$f;
            $sanPham->image = $filename;       
            $req->file('image')->move('public/source/image/product/',$filename);
        }       
      
        $sanPham->save();
        return redirect()->route('danhsachsanpham')->with('thongbao','Sửa thành công');
    }
    public function getXoaSanPham($id){
        $sanPham = Product::find($id);
        $sanPham->delete();
        return redirect()->back()->with('thongbao','Xóa thành công');
    }
}
