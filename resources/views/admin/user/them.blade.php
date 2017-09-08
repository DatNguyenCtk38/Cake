@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" style="min-height: 323px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh mục
                        <small>Thêm mới</small>
                    </h1>
                </div>
                                
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form method="POST">
                        <div class="form-group">
                            <label>Tên danh mục:</label>
                            <input class="form-control" name="catename" placeholder="Nhập tên danh mục">
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