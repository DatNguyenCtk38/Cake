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
                        <small>Hóa đơn</small>
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
                            <th>Khách hàng</th>
                            <th>Thời gian</th>
                           
                            <th>Tình trạng</th>
                            
                            <th>Xóa</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($danhSachHoaDon as $hoadon)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$hoadon->id}}</td>
                                    <td>{{$hoadon->name}}</td>
                                    <td>{{$hoadon->created_at}}</td>
                                    <td>@if ($hoadon->status == 0)
                                        Chưa xử lý
                                        @else
                                        Đã xử lý
                                    @endif</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoasanpham',$hoadon->id)}}"> Xóa</a></td>
                                  
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