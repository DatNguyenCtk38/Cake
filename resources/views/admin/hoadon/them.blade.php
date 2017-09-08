@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" style="min-height: 323px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sản phẩm
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
                    <form method="POST" enctype="multipart/form-data" action="{{ route('addProduct') }}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Tên sản phẩm:</label>
                            <input class="form-control" required name="name" placeholder="Nhập tên danh mục">
                            <label>Mô tả:</label>
                            <textarea class="form-control" rows="5" required name="description" placeholder="Mô tả"></textarea>
                            <label>Ảnh sản phẩm: </label>
                            <input type="file" class="form-control"  name="image" />
                            <label for="input-id">Chọn danh mục</label>
                                <select name="id_type" id="inputSltCate" required class="form-control">
                                    <option value="">--Chọn thương hiệu--</option>
                                    @foreach($nhomsp as $nhom)
                                        <option value="{{ $nhom->id }}" >{{ $nhom->catename }}</option>  
                                    @endforeach 
                                </select>
                            <label>Giá:</label>
                            <input type="number" required class="form-control" name="unit_price" placeholder="Giá">
                            <label>Giá KM:</label>
                            <input type="number" required class="form-control" name="promotion_price" placeholder="Giá khuyến mãi">
                            <label>Đơn vị:</label>
                            <input class="form-control" required name="unit" placeholder="Đơn vị">
                            <label>Nổi bật:</label>
                            <label class="radio-inline">
                                <input name="news" value="1" type="radio">Có
                            </label>
                            <label class="radio-inline">
                                <input name="news" value="0" checked type="radio">Không
                            </label>
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