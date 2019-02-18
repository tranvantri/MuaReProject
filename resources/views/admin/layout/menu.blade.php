<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            {{-- <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
             
            </li> --}}
            {{-- <li>
                <a ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li> --}}
            

            <!-- Nhóm sản phẩm, một danh mục có nhiều sản phẩm -->
            <li>
                <a href="admin/category/list"><i class="fa fa-tasks fa-fw"></i>Quản lý danh mục<span class="fa arrow"></span></a>
                {{-- <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/categoryproduct/list"><i class="fa fa-list"></i> Danh sách</a>
                    </li>
                    
                </ul> --}}
                <!-- /.nav-second-level -->
            </li>
            <!-- comment -->
            <li>
                <a href="admin/tindang/list"><i class="fa fa-cube fa-fw"></i>Duyệt tin đăng <span class="
                notifi">{{$tindangchuaduyet}}</span><span class="fa arrow"></span></a>
                
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/product/list"><i class="fa fa-cube fa-fw"></i>Duyệt sản phẩm <span class="
                notifi">{{$spchuaduyet}}</span><span class="fa arrow"></span></a>
                
                <!-- /.nav-second-level -->
            </li>
            

            <li>
                <a href="admin/place/list"><i class="fa fa-tasks fa-fw"></i> Quản lý khu vực<span class="fa arrow"></span></a>
                {{-- <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/promotion/list"><i class="fa fa-list"></i> Danh sách khuyến mãi</a>
                    </li>
                    
                </ul> --}}
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="admin/logo/list"><i class="fa fa-picture-o"></i> Quản lý logo<span class="fa arrow"></span></a>
               {{--  <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/slide/list"><i class="fa fa-list"></i> Danh sách slide</a>
                    </li>
                    
                </ul> --}}
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/user/list"><i class="fa fa-users fa-fw"></i> Quản lý người dùng<span class="fa arrow"></span></a>
                {{-- <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/user/list"><i class="fa fa-list"></i> Danh sách User</a>
                    </li>
                   
                </ul> --}}
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>