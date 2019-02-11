@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Khu vực
                    <small>Chỉnh sửa</small>
                </h1>                
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
                @endif
                @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
                @endif
            </div>
            <form action="admin/place/edit/{{$place->id}}" method="POST" id="formCategoryGroup">
                {{ csrf_field() }}
                <div class="col-lg-7" style="padding-bottom:120px">  
                    <div class="form-group">
                        <label>Tên khu vực</label>
                        <input class="form-control" type="text" name="Ten" placeholder="Nhập tên danh mục mới" required maxlength="100" minlength="3" value="{{$place->name}}" />
                    </div>  
                    
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <label class="radio-inline">
                            <input name="enable" value="1"
                            @if($place->enable == 1)
                             checked
                             @endif
                             type="radio">Hoạt động
                        </label>
                        <label class="radio-inline">
                            <input name="enable" value="0" 
                            @if($place->enable == 0)
                             checked
                             @endif
                            type="radio">Khóa
                        </label>
                    </div>                
                    <button type="submit"  id="submit" class="btn btn-warning">Chỉnh sửa</button>
                                   
                </div>
                
            <form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
