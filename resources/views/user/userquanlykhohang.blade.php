@extends('user.layouts.index')
@section('title')
	<title>Quản lý kho hàng</title>
@endsection
@section('content')
<section class="storage_shop">
        <div class="container">
           
                <section id="top_loc_san_pham_tomiot"> 
                   <div class="row">
                    <!-- MEnu lef quản trị -->
                    <section id="menu-left-L" class="col-md-3 col-lg-2 col-sm-4" style="width: 100%;">
                       @include('user.core.menu-left-user-quanly')
                    </section>
                    <!-- Kết  thúc menu left quản trị -->
                        <div class="col-md-9  col-lg-10 col-sm-8 ">
                            <div class="row">
                                <div id="thong_bao_tomiot" class="col-md-9">
                                    <p>Hiện đang có {{$soluongProducts}} sản phẩm trong kho</p>
                                </div>
                                <div class="loc_san_pham_tomiot col-md-3" >
                                    <p class="thong_tin_loc_tomiot">Lọc theo</p>
                                    <select  class="combo_loc_tomiot custom-select ">
                                        <option>Toàn bộ</option>
                                        <option>Còn hàng</option>
                                        <option>Hết hàng</option>
                                        <option>Hàng cũ</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="content_quan_ly_cua_hang display_table_tomiot col-md-12">
                                <div class="row" >
                                    <div class="them_moi_san_pham_kho_hang_tomiot col-md-3 display_table_cell_tomiot">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewProduct2">
                                      Thêm sản phẩm
                                    </button>

                                  <!-- Modal -->
                                   @include('user.core.modalThemSanPham')

                                    </div>
                                    <fieldset></fieldset>
                                    @foreach($products as $child)
                                    <div class="col-md-3  display_table_cell_tomiot">
                                        <div class="card" >
                                              <img class="img_sp_kho_hang_tomiot card-img-top" src="{{$child->images}}" alt="{{$child->name}}">
                                              <div class="card-body">
                                                <h5 class="can_giua_tomiot card-title">{{$child->name}}</h5>
                                                
                                              </div>
                                              <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><p class="can_giua_tomiot red_text_tomiot card-text">{{number_format($child->price,0)}} đ</p></li>
                                                <li class="list-group-item can_giua_tomiot ">
                                                    <i class="fas fa-heart"></i> 69
                                                    <i class="fas fa-comment"></i> 96

                                                </li>
                                                
                                              </ul>
                                              <div class="can_giua_tomiot card-body">
                                                <button type="button" class="btn btn-primary button_inline_tomiot" data-toggle="modal" data-target="#myModal{{$child->id}}">
                                                   <i class="fas fa-pencil-alt"></i> Chỉnh sửa
                                                </button>
                                                
                                                @include('user.core.modalSuaSanPham')

                                              </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                            <hr>
                        </div> 
                    </div>
                </section>
                
            
        </div>
    </section>

@endsection