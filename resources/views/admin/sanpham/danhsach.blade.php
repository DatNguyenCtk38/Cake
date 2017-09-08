@extends('admin.layout.index')
@section('content')
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript"> 
      $(document).ready( function() {
        $('#notify').delay(2000).fadeOut();
      });
    </script>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh mục
                        <small>Sản Phẩm</small>
                    </h1>
               
                </div>
                @if(count($errors)>0)
                        <div id ="notify" class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                @endif
                @if(Session::has('thongbao'))
                        <div id ="notify" class="alert alert-success">{{Session::get('thongbao')}}</div>
                    @endif  
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Nhóm</th>
                           
                            <th>Hình ảnh</th>
                            
                            <th>Giá</th>
                            <th>KM</th>
                            <th>Đơn vị</th>
                            <th>Mới</th>
                            <th>Xóa</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($danhSachSP as $sanpham)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$sanpham->id}}</td>
                                    <td>{{$sanpham->name}}</td>
                                    <td>{{$sanpham->catename}}</td>
                                    
                                    <td><img width="100px" height="100px" src="public/source/image/product/{{$sanpham->image}}"></td>
                                    
                                    <td>{{$sanpham->unit_price}}</td>
                                    <td>{{$sanpham->promotion_price}}</td>
                                    <td>{{$sanpham->unit}}</td>
                                    <td>{{$sanpham->new}}</td>
                                   
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoasanpham',$sanpham->id)}}"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('suasanpham',$sanpham->id)}}">Sửa</a></td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
     
@endsection
  @section('script')
    <script type="text/javascript">
      $('#example').dataTable( 
{
"bSort" : false,
"searching": true,
" paging": false
} );
    </script>
    {{-- expr --}}
@endsection