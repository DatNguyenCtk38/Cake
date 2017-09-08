<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="http://localhost:8080/linhkiendt/admin/index.php"><i class="fa fa-dashboard fa-fw"></i> Bảng điều khiển</a>
                </li>
                
				<li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i> Thể loại<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('danhsachtheloai')}}">Danh sách</a>
                        </li>
                        <li>
                            <a href="{{route('themtheloai')}}">Thêm thể loại</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> Sản phẩm<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('danhsachsanpham')}}">Danh sách</a>
                        </li>
                        <li>
                            <a href="{{ route('themsanpham') }}">Thêm sản phẩm</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Hóa đơn<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('danhsachhoadon') }}">Danh sách</a>
                        </li>
                       
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Thành viên<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="http://localhost:8080/linhkiendt/admin/index.php?ac=thanhvien&mt=lists">Danh sách thành viên</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>