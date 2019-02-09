@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">

                <!-- thông báo errors -->
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
                @endif

                <!-- thông báo thêm thành công -->
                @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
                @endif
                <!-- kết thúc thông báo thêm thành cong -->

            </div>
            <form action="admin/category/add" method="POST" id="formCategory">
                {{ csrf_field() }}
                <div class="col-lg-7" style="padding-bottom:120px">   

                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input class="form-control" type="text" name="Ten" placeholder="Nhập tên danh mục"  value="{{ old('Ten') }}" required maxlength="100" />
                    </div>

                    <div class="form-group">
                        <label>Thuộc danh mục</label>
                        <select class="form-control" name="parent">
                            <!-- lấy danh sách các danh mục -->
                            <option value="0">----------------------</option>
                            @foreach($cateParent as $child)
                            <option value="{{$child->id}}">{{$child->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <label class="radio-inline">
                            <input name="enable" value="1" checked type="radio">Hoạt động
                        </label>
                        <label class="radio-inline">
                            <input name="enable" value="0" type="radio">Khóa
                        </label>
                    </div>
                    <button type="submit" class="btn btn-warning"  id="submit">Thêm mới</button>
                                    
                </div>
                
            <form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
