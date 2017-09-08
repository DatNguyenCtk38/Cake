@extends('admin.layout.index')
@section('content')
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript"> 
      $(document).ready( function() {
        $('#notify').delay(2000).fadeOut();
      });
    </script>
<div id="page-wrapper" style="min-height: 323px;">
        <div class="container-fluid">
            <div class="row">
                    
                <div class="col-lg-12">
                    <h1 class="page-header">Danh mục
                        <small>Thêm mới</small>
                    </h1>
                </div>
                @if(count($errors)>0)
                        <div id ="notify" class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::get('thongbao'))
                        <div id ="notify" class="alert alert-success">{{Session::get('thongbao')}}</div>
                    @endif     
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route('addProductType')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Tên danh mục:</label>
                            <input class="form-control" required name="catename" placeholder="Nhập tên danh mục">
                        </div>
                        <button type="submit" name="themdanhmuc" class="btn btn-default">Thêm </button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    
                </form></div>
            </div>
            <!-- /.row -->
        </div>
      
        <!-- /.container-fluid -->
</div>
@endsection