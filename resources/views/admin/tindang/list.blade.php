@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Đăng
                    <small>Danh sách</small>
                    {{-- <small><a href="admin/product/add" class="btn btn-success btn-them"><i class="fa fa-plus"></i> Thêm sản phẩm</a></small> --}}
                </h1>
                @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
                @endif
                @if(session('loi')) 
                <div class="alert alert-danger">{{session('loi')}}</div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            
            <table class="table table-striped table-bordered table-hover table-list" id="dataTables-example">
                <thead>
                    <tr align="center" style="font-size: 12px">
                        <th>MãTĐ</th>
                        <th>TênTĐ</th>
                        <th>Ảnh mẫu</th>
                        <th>Danh mục</th>        
                        <th>Trạng thái</th>                                        
                        <th>Xem chi tiết</th>                                        
                        <th>Thông tin người đăng</th>                                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($tindang as $child)
                    @if($child->adminCheck == 0)
                    <tr class="odd gradeX" align="center" style="font-size: 12px">
                        <td>{{$child->id}}</td>
                        <td style="width: 250px;">{{$child->name}}</td>   
                        <td>
                            <?php 
                                $images = json_decode($child->images);
                              ?>
                            <a target="_blank" href="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}">
                              <img class="img-avatar" src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" alt="Forest"> <i class="fa fa-external-link" aria-hidden="true"></i>
                            </a>                            
                        </td>   
                        <td>{{$child->namecate}}</td>                                        
                        <td>
                            <div class="dropdown">
                                <button style="width: 100px" class="btn

                                @if($child->adminCheck == 0)
                                    btn-dark
                                @elseif($child->adminCheck == 1)
                                    btn-success
                                @else
                                    btn-danger
                                @endif

                                 dropdown-toggle" type="button" data-toggle="dropdown">
                                    @if($child->adminCheck == 0)
                                        Chưa duyệt
                                    @elseif($child->adminCheck == 1)
                                        Đã duyệt
                                    @else
                                        Khóa
                                    @endif
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="admin/tindang/enable/{{$child->id}}/{{1}}">Đã duyệt</a></li>
                                    <li><a href="admin/tindang/enable/{{$child->id}}/{{0}}">Chưa duyệt</a></li>
                                    <li><a href="admin/tindang/enable/{{$child->id}}/{{2}}">Khóa</a></li>
                                </ul>
                            </div>
                        </td>                                         
                        <td><button class="view-info-tindang btn btn-info" data="{{$child->id}}" data-toggle="modal" data-target="#myModalProInfo">Xem</button></td>
                        <td><button class="view-info-user btn btn-info" data="{{$child->idchushop}}" data-toggle="modal" data-target="#myModalUserInfo">Xem</button></td>
                    </tr> 
                    @endif
                    @endforeach  
                    @foreach($tindang as $child)
                    @if($child->adminCheck == 1 || $child->adminCheck == 2)
                    <tr class="odd gradeX" align="center" style="font-size: 12px">
                        <td>{{$child->id}}</td>
                        <td style="width: 250px;">{{$child->name}}</td>   
                        <td>
                            <?php 
                                $images = json_decode($child->images);
                              ?>
                            <a target="_blank" href="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}">
                              <img class="img-avatar" src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" alt="Forest"> <i class="fa fa-external-link" aria-hidden="true"></i>
                            </a>                            
                        </td>   
                        <td>{{$child->namecate}}</td>                                        
                        <td>
                            <div class="dropdown">
                                <button style="width: 100px" class="btn

                                @if($child->adminCheck == 0)
                                    btn-dark
                                @elseif($child->adminCheck == 1)
                                    btn-success
                                @else
                                    btn-danger
                                @endif

                                 dropdown-toggle" type="button" data-toggle="dropdown">
                                    @if($child->adminCheck == 0)
                                        Chưa duyệt
                                    @elseif($child->adminCheck == 1)
                                        Đã duyệt
                                    @else
                                        Khóa
                                    @endif
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="admin/tindang/enable/{{$child->id}}/{{1}}">Đã duyệt</a></li>
                                    <li><a href="admin/tindang/enable/{{$child->id}}/{{0}}">Chưa duyệt</a></li>
                                    <li><a href="admin/tindang/enable/{{$child->id}}/{{2}}">Khóa</a></li>
                                </ul>
                            </div>
                        </td>                                         
                        <td><button class="view-info-tindang btn btn-info" data="{{$child->id}}" data-toggle="modal" data-target="#myModalProInfo">Xem</button></td>
                        <td><button class="view-info-user btn btn-info" data="{{$child->idchushop}}" data-toggle="modal" data-target="#myModalUserInfo">Xem</button></td>
                    </tr> 
                    @endif
                    @endforeach                 
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<div class="modal fade" id="myModalUserInfo" role="dialog">
    <div class="modal-dialog my-modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thông tin người đăng</h4>
        </div>
        <div class="modal-body">
            <h3 id="loadding" class="text-center"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Loadding...</h3>
            <h3 id="error" class="text-center"><i style="color: red;" class="fa fa-exclamation-circle" aria-hidden="true"></i> Có sự cố xảy ra. </h3>
            <div id="info-user">
                                
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModalProInfo" role="dialog">
    <div class="modal-dialog my-modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thông tin tin đăng</h4>
        </div>
        <div class="modal-body">
            <h3 id="loadding2" class="text-center"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Loadding...</h3>
            <h3 id="error2" class="text-center"><i style="color: red;" class="fa fa-exclamation-circle" aria-hidden="true"></i> Có sự cố xảy ra. </h3>
            <div id="info-tindang">

            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable().destroy();
                $('#dataTables-example').dataTable({
                  "ordering": false
                });
            });
            
        </script>
@endsection