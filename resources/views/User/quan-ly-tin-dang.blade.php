@extends('user.layouts.index')
@section('title')
    <title>Quản lý tin đăng của bạn</title>
@endsection
@section('content')
    <section class="storage_shop" style="margin-top: 4%;margin-bottom: 4%;">
        <div class="container">

            <section id="top_loc_san_pham_tomiot"> 
                 <div class="row">

                   <!-- MEnu lef quản trị -->
                     <section id="menu-left-L" class="col-md-3 col-lg-2 col-sm-4"
                              style="width: 100%;">
                         @include('user.core.menu-left-user-quanly')
                     </section>


                    <!-- Kết  thúc menu left quản trị -->   
                        <div class="col-md-9 col-lg-10 col-sm-8 ">
                            @if(session('thongbao'))
                                <div class="alert alert-success col-md-12">{{session('thongbao')}}</div>
                            @endif
                            <div class="row">
                                <div id="thong_bao_cmt_L" class="col-md-5 col-sm-5 col-lg-8 thong_bao_cmt_L">
                                    <p>Bạn có {{$tindang->count()}} tin đăng</p>
                                </div>
                                <div class="loc_san_pham_tomiot col-md-7 col-sm-7 col-lg-4" style="float: right;">
                                  <p class="thong_tin_loc_tomiot" style="float: left;padding: 8px;">Lọc theo:</p>
                                  <select  class="combo_loc_tomiot custom-select" style="width: 140px;">
                                        <option>Up mới nhất</option>
                                        <option>Up cũ nhất</option>
                                        <option>Đăng mới nhất</option>
                                        <option>Đăng cũ nhất</option>
                                  </select>
                                </div>
                            </div>
                            <hr>

                            @foreach($tindang as $child)
                                <div class="row">
                                    {{--Hien thi danh sach tin dang--}}
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="chi-tiet-tin-dang/{{$child->id}}">
                                                    <img style="height: 150px; width: 100%;" src="{{$child->images}}" title="{{$child->name}}" alt="{{$child->name}}">
                                                </a>
                                            </div>
                                            <div class="post-info-v col-md-9">
                                                <div class="title-v">
                                                    <a href="chi-tiet-tin-dang/{{$child->id}}" style="text-decoration: none; font-weight: bold;color: #176093;" title="{{$child->name}}">
                                                        {{$child->name}}
                                                    </a>
                                                </div>
                                                <div class="position-v">
                                                    {{--<div class="vi-tri-v"style="display: inline"><span>Vị trí:</span> <span>63</span></div>--}}
                                                    <div class="forum-name-v" style="display: inline;"> Trong chuyên mục
                                                        <b>{{$child->tenDanhMuc}}</b>  ({{$child->diadiem}})
                                                    </div>

                                                </div>
                                                <div class="edit-tool-v">
                                                    <div class="tool-table-v">
                                                        <div class="cel-v edit-button-v">
                                                                <a href="{{$child->id}}">
                                                                    <i class="fas fa-edit"></i>
                                                                    <span>Chỉnh sửa</span>
                                                                </a>
                                                        </div>
                                                        <div class="cel-v delete-button-v">
                                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                                    data-target="#myModal{{$child->id}}"><i class="fas fa-trash"></i></button>


                                                            <div class="modal" id="myModal{{$child->id}}">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">

                                                                        <!-- Modal Header -->
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Xác nhận</h4>
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>

                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                            <h3>Bạn chuẩn bị xóa tin đăng <br/> <strong>{{$child->name}}</strong></h3>
                                                                        </div>

                                                                        <!-- Modal footer -->
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Hủy</button>

                                                                            <form action="{{ route('xoatindang') }}" method="post">
                                                                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                                                                <input type="hidden" name="idTinDang" value="{{$child->id}}" />
                                                                                <button type="submit"  class="btn btn-danger xulyXoaTinDang_tomiot">Xác nhận</button>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>
                                                        
                                                    </div>
                                                    <div class="tool-table-v">
                                                        <div class="cel-v view-v">
                                                            <div style="padding-top: 4px;">
                                                                <span title="Tổng số lượt xem"><i class="fas fa-eye"></i> {{$child->view}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="cel-v create-date-v">
                                                                <div>

                                                                    <span title="Đăng lúc {{ date("H:i:s",strtotime($child->date_added)) }}">
                                                                        <i class="far fa-clock"></i> đăng vào {{date('d-m-Y', strtotime($child->date_added))}}</span>
                                                                </div>
                                                        </div>
                                                        <div class="cel-v edit-button-v comment-v">
                                                                <a href="">
                                                                    <span><i class="far fa-comment"></i> Bình luận</span>
                                                                </a>
                                                        </div>
                                                        <div class="cel-v edit-button-v comment-v">
                                                                <a href="">
                                                                    <span><i class="far fa-comment-dots"></i> Bình luận mới</span>
                                                                </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    {{--Ket thuc danh sach tin dang--}}
                                    {{--Chuc nang uptin--}}
                                    <div class="col-md-3 post-tool-v">
                                        <div class="button-layout-v">
                                            <a class="up-v" href="">
                                                <div class="up-this-post-v up-button-v up" onclick="return confirm('Bạn muốn up tin này?')">
                                                    <span class="mp-up-v"></span>Up tin lên
                                                </div>
                                            </a>

                                            <a class="auto-v" href="">
                                                    <div class="up-this-post-v auto-up-v" onclick="return confirm('Bạn muốn lên lịch up tự động cho tin này?')">
                                                        <span><i class="far fa-clock"></i></span>Up tự động
                                                    </div>
                                            </a>
                                            <a class="ha-v" href="">
                                                    <div class="up-this-post-v ha-this-post-v ha-up-v" onclick="return confirm('Bạn muốn lên lịch up tự động cho tin này?')">
                                                        <span><i class="fas fa-lock"></i></span>Hạ tin đăng
                                                    </div>
                                            </a>
                                            <a class="muadichvu-v dichvu-post-v show-v" href="">
                                                    <div class="up-this-post-v muadichvu-v">Mua dịch vụ tin đăng</div>
                                            </a>

                                        </div>

                                    </div>
                                    {{--Ket thuc menu uptin--}}
                                </div>
                                <hr>
                            @endforeach
                        </div>
                </div>
            </section>
        </div>
    </section>

@endsection
