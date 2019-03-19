@extends('user.layouts.index')
@section('title')
  <title>Quản lý đơn hàng của bạn</title>
@endsection
@section('content')
      <section class="storage_shop" style="margin-top: 4%;margin-bottom: 4%;">
         <div class="container">
            <section id="top_loc_san_pham_tomiot">
               <div class="row">
                  <!-- MEnu lef quản trị -->
                   <section id="menu-left-L" class="col-md-3 col-lg-2 col-sm-4" style="width: 100%;">
                       @include('user.core.menu-left-user-quanly');
                  </section>
                  <!-- Kết  thúc menu left quản trị -->
                  <div class="col-md-9 col-lg-10 col-sm-8 ">
                      <div id="qlcomment">
                          <div class="row">
                              <div id="thong_bao_cmt_L" class="col-md-5 col-sm-5 col-lg-8 thong_bao_cmt_L">
                                 <p>Bạn có {{$bills->count()}} đơn hàng</p>
                              </div>
                              <div class="loc_san_pham_tomiot col-md-7 col-sm-7 col-lg-4" style="float: right;">
                                 <p class="thong_tin_loc_tomiot" style="float: left;padding: 8px;">Lọc theo:</p>
                                 <select  class="combo_loc_tomiot custom-select" style="width: 140px;">
                                    <option>Chưa xử lý</option>
                                    <option>Đang xử lý</option>
                                    <option>Đã xử lý</option>
                                 </select>
                              </div>
                           </div>
                        
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#menu1">Đơn hàng bán ({{$bills->count()}})</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#menu2">Sản phẩm đặt mua (1)</a>
                            </li>
                          </ul>

                            <div class="tab-content tab-content-L">
                               <div id="menu1" class="tab-pane active" id="post_cmt" role="tabpanel">
                                   <table class="table table-bordered table-order-L">
                                    <thead>
                                      <tr>
                                        <th width="5%">Mã HĐ</th>
                                        <th width="65%">Sản phẩm</th>
                                        <th width="30%">Shop</th>
                                      </tr>
                                    </thead>
                                       @foreach($bills as $child)
                                    <tbody>
                                      <tr>
                                        <td class="td-center-L">H{{$child->idBill}}</td>

                                        <td>
                                            <?php
                                                $tongtien = 0;
                                            ?>
                                            @foreach($bill_details as $childD)
                                                @if($childD->billId == $child->idBill)
                                            <div class="product-in-order-L">
                                                <a target="_blank" href="{{ route('sanpham', ['id' => $childD->sanphamId]) }}"> <img class="lazy-image avatar" src="{{$childD->hinhanhSP}}" alt="{{$childD->tenSP}}" width="48px" height="48px" style="display: inline;float: left;padding-right: 8px;"></a>
                                                <a target="_blank" href="{{ route('sanpham', ['id' => $childD->sanphamId]) }}" class=" product-name-L">{{$childD->tenSP}}</a>
                                                <p class="price-order-L">Số lượng: {{$childD->slSP}}&#160;&#160;<abbr>Đơn giá: {{number_format($childD->giaSP,0)}} VNĐ  </abbr>&#160;&#160; Thành tiền: {{ number_format($childD->slSP * $childD->giaSP,0) }} VNĐ</p>

                                                <?php
                                                $tongtien+= $childD->slSP * $childD->giaSP;
                                                ?>
                                            </div>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="td-center-L" style="padding: 16px;">

                                            <p>Họ tên: {{$child->tenKhach}}</p>
                                            <p>Số điện thoại : {{$child->sdtKhach ?? 'Lỗi SDT'}}</p>
                                            <p>Địa chỉ : {{$child->diaChiKhach ?? 'Lỗi địa chỉ'}}</p>
                                            <p>Thông tin thêm : {{$child->ghiChuKhach ?? 'không'}}</p>
                                            <p style="color: green; font-weight: bold;">Tổng tiền: {{ number_format($tongtien,0) }} VNĐ</p>

                                            <div style="text-align: center;">
                                                <p class="state-order-L">Trạng thái:</p>
                                                <select data-id="{{$child->idBill}}" class="combo-status-bill combo_loc_tomiot custom-select " style="width: 110px;text-align: center;">
                                                     <option value="-1"
                                                        @if($child->trangThaiBill == -1)
                                                            selected
                                                        @endif
                                                     >Chưa xử lý</option>
                                                     <option value="0" @if($child->trangThaiBill == 0)
                                                     selected
                                                             @endif>Đang xử lý</option>
                                                     <option value="1" @if($child->trangThaiBill == 1)
                                                     selected
                                                             @endif>Đã xử lý</option>
                                                </select>
                                            </div>
                                        </td>

                                      </tr>

                                    </tbody>
                                       @endforeach
                                  </table>
                               </div>

                                {{--Sản phẩm đặt mua--}}

                                <div id="menu2" class="tab-pane fade" id="comment_item" role="tabpanel">
                                    <table class="table table-bordered table-order-L">
                                        <thead>
                                        <tr>
                                            <th width="5%">STT</th>
                                            <th width="65%">Sản phẩm</th>
                                            <th width="30%">Khách hàng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="td-center-L">1</td>
                                            <td>
                                                <div class="product-in-order-L">
                                                    <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://muare.vn/images/avatars/avatar_male_s.png?v=2" alt="" width="48px" height="48px" style="display: inline;float: left;padding-right: 8px;">
                                                    <a href="#" class="product-name-L">ASUS P008 – Tablet giá tốt, cấu hình ổn</a>
                                                    <p class="price-order-L">Số lượng: 2&#160;&#160;&#160;&#160;&#160;&#160;<abbr>Giá: 2,000,000 VNĐ</abbr></p>
                                                </div>
                                                <div class="product-in-order-L">
                                                    <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://muare.vn/images/avatars/avatar_male_s.png?v=2" alt="" width="48px" height="48px" style="display: inline;float: left;padding-right: 8px;">
                                                    <a href="#" class="product-name-L">ASUS P008 – Tablet giá tốt, cấu hình ổn</a>
                                                    <p class="price-order-L">Số lượng: 2&#160;&#160;&#160;&#160;&#160;&#160;<abbr>Giá: 2,000,000 VNĐ</abbr></p>
                                                </div>
                                                <h5 class="avgprice-order-L">Tổng: 4,000,000 VNĐ</h5>
                                            </td>
                                            <td class="td-center-L" style="padding: 16px;">
                                                <p>Chủ shop: <a href="#">Hot Girl Quận Cam</a></p>
                                                <p>Số điện thoại : 0123456789</p>
                                                <p>Địa chỉ : Hồ Chí minh</p>
                                                <p>Trạng thái: <abbr class="stateorder-color-L">Chưa xử lý</abbr></p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                      </div>                     
                   </div>
               </div>
            </section>
         </div>
      </section>


      <section class="content mt-1">
         <div class="container">
            <div class="row">
            </div>
         </div>
      </section>



@endsection