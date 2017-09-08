@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" style="min-height: 195px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh mục
                        <small>Thể Loại</small>
                    </h1>
                                </div>
                <!-- /.col-lg-12 -->
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                    <thead>
                        <tr align="center" role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 141px;">ID</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Tên danh mục: activate to sort column ascending" style="width: 387px;">Tên danh mục</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Xóa: activate to sort column ascending" style="width: 178px;">Xóa</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Sửa: activate to sort column ascending" style="width: 183px;">Sửa</th></tr>
                    </thead>
                    <tbody>
      
                                            <tr class="gradeX odd" align="center" role="row">
                                    <td class="sorting_1">1</td>
                                    <td>TiVi</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=1"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=1">Sửa</a></td>
                                </tr><tr class="gradeX even" align="center" role="row">
                                    <td class="sorting_1">2</td>
                                    <td>Tủ lạnh</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=2"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=2">Sửa</a></td>
                                </tr><tr class="gradeX odd" align="center" role="row">
                                    <td class="sorting_1">3</td>
                                    <td>Máy lạnh</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=3"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=3">Sửa</a></td>
                                </tr><tr class="gradeX even" align="center" role="row">
                                    <td class="sorting_1">4</td>
                                    <td>Máy giặt</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=4"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=4">Sửa</a></td>
                                </tr><tr class="gradeX odd" align="center" role="row">
                                    <td class="sorting_1">5</td>
                                    <td>Gia dụng</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=5"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=5">Sửa</a></td>
                                </tr><tr class="gradeX even" align="center" role="row">
                                    <td class="sorting_1">6</td>
                                    <td>Máy nước nóng</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=6"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=6">Sửa</a></td>
                                </tr><tr class="gradeX odd" align="center" role="row">
                                    <td class="sorting_1">7</td>
                                    <td>Điện thoại</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=7"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=7">Sửa</a></td>
                                </tr><tr class="gradeX even" align="center" role="row">
                                    <td class="sorting_1">8</td>
                                    <td>Laptop</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=8"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=8">Sửa</a></td>
                                </tr><tr class="gradeX odd" align="center" role="row">
                                    <td class="sorting_1">9</td>
                                    <td>Tablet</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=9"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=9">Sửa</a></td>
                                </tr><tr class="gradeX even" align="center" role="row">
                                    <td class="sorting_1">10</td>
                                    <td>Máy in</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?ac=theloai&amp;mt=delete&amp;pr=10"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?ac=theloai&amp;mt=edit&amp;pr=10">Sửa</a></td>
                                </tr></tbody>
                </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 13 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection