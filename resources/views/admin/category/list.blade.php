@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục
                    <small>Danh sách</small>

                    <small><a href="admin/category/add" class="btn btn-success btn-them"><i class="fa fa-plus"></i> Thêm mới</a></small>

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
                    <tr align="center">
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Trạng thái</th>                    
                        
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($cateParent as $child)
                    <tr class="odd gradeX" align="center" style="font-weight: bold;">
                        <td>{{$child->id}}</td>
                        <td>{{$child->name}}</td>
                        @if($child->enable == 1)
                            <td style="color: blue"><a style="width: 90px;" class="btn btn-primary" href="admin/category/enable/{{$child->id}}">Hoạt động</a></td>
                        @else
                            <td style="color: red"><a style="width: 90px;" class="btn btn-danger" href="admin/category/enable/{{$child->id}}">Khóa</a></td>
                        @endif
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/category/edit/{{$child->id}}">Edit</a></td>
                    </tr> 
                        @foreach($catechild as $child2)
                        @if($child2->idParent == $child->id)
                        <tr class="odd gradeX" align="center">
                        <td>{{$child2->id}}</td>
                        <td>{{$child2->name}}</td>
                        @if($child2->enable == 1)
                            <td style="color: blue"><a style="width: 90px;" class="btn btn-primary" href="admin/category/enable/{{$child2->id}}">Hoạt động</a></td>
                        @else
                            <td style="color: red"><a style="width: 90px;" class="btn btn-danger" href="admin/category/enable/{{$child2->id}}">Khóa</a></td>
                        @endif
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/category/edit/{{$child2->id}}">Edit</a></td>
                        </tr> 
                        @endif
                        @endforeach
                    @endforeach                  
                </tbody>
            </table>
        </div>
        
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

{{-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog my-modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lịch sử cập nhật</h4>
        </div>
        <div class="modal-body">
            <h3 id="loadding" class="text-center"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Loadding...</h3>
            <h3 id="error" class="text-center"><i style="color: red;" class="fa fa-exclamation-circle" aria-hidden="true"></i> Có sự cố xảy ra. </h3>
            <table class="table table-striped table-bordered table-hover table-list" id="dataTables-history">
                <thead>
                    <tr align="center">
                        <th>Mã QT viên</th>
                        <th>Tên QT viên</th>
                        <th>Điện thoại</th>
                        <th>Thao tác</th>
                        <th>Tên nhóm DM</th>
                        <th>Trạng thái</th>
                        <th>Ngày</th>
                    </tr>
                </thead>
                <tbody id="cateGroupHistory">    
                    

                </tbody>
            </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div> --}}
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