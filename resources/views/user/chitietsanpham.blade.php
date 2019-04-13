@extends('user.layouts.index')
@section('title')
  <title>
    @foreach($services as $child)
      {{$child->name}}
    @endforeach
  </title>
@endsection
@section('content')

<section class="content mt-1">

  <div class="container">
   <div class="row">

    <div class="col-md-9">
      @include('user.chitietsanpham.mualuotclick')

      @foreach($services as $child)
      <div class="new_title_header_tomiot col-md-12">
        <div class="row">
          <div class="col-md-10">
            <b><strong><p style="margin-bottom: 0rem;">{{$child->name}}</p></strong></b>
            @if(isset($service_category))
              <p class="timePost_tomiot">Cập nhật: {{ date("d-m-Y",strtotime($child->date_added))  }} lúc {{date("H:i:s",strtotime($child->date_added))}} - 
                <a href="danh-muc/{{str_slug($service_category->nameCate)}}/{{$service_category->idCate}}/tin-dang/moi-va-cu/gia-tot/tin-moi-nhat/uy-tin-chat-luong">{{$service_category->nameCate}}</a></p>
            @endif
          </div>
          <div class="col-md-2">
            <p class="idtindang-cmt" dataIDTinDang="{{$child->id}}">ID Tin: {{$child->id}} </p>
            <div id="icon_action_tomiot">
              <a href="#" title="Loa tin"><i class="hovericon fas fa-bullhorn"></i></a>
              <a href="#" title="Theo dõi"><i class="hovericon fas fa-tags"></i></a>
            </div>
          </div> 
        </div>
        <hr/>
        <div class="noidung_tintuc_tomiot">
          <section id="noi_dung_tin_tomiot">
            <p>
              {{$child->description}}<br/>
              Liên hệ : {{$child->tenChuShop}}.<br/>
              Sđt : {{$child->phoneChuShop}}.<br/>
              Địa chỉ : {{$child->address}} <br/>
              
            </p>
          </section>

          <hr>
          <div class="clearfix"></div>
          <div class="col-md-12">
            <strong><b>DANH SÁCH SẢN PHẨM ĐĂNG BÁN</b></strong>
          </div>

          <div id="table_product_tomiot">
             {{--  /*in ra danh sách các san phẩm của cửa hàng đó nhaaaaaaaaaaaaaaaa*/  --}}
            <div id="img_shop_tomiot">
              <?php 
                $images = json_decode($child->images);
              ?>
              <img id="hinh_anh_shop_tomiot" src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" alt="">
            </div>

            <div id="thong_tin_san_pham_tomiot">
              <a href="#">{{$child->name}}</a><br>
              <span class="gia_tien_spdx_tomiot">{{ number_format($child->price,0)}} đ</span></br>
              <span class="thu_gon_text_chitietsanpham_tomiot"> {{$child->description}}
              </span>
            </div>

            {{--  /*in ra danh sách các san phẩm của cửa hàng đó nhaaaaaaaaaaaaaaaa*/  --}}
          </div>


          <div class="clearfix"></div>
          <div class="facebook_button_tomiot col-md-12">
            <button class="btn btn-primary">Thích</button>
            <button class="btn btn-primary">Chia sẻ</button>
            <span style="font-size: 13px;"><i>Hãy là người đầu tiên trong số bạn bè của bạn thích nội dung này</i></span>
          </div>
        </div>
        

      </div> <!-- Kết thúc nội dung đăng -->


      <section class="tin-dang-lien-quan_tomiot">
        <div id="san_pham_lien_quan_tomiot">
          <div class="row">
            <div class="col-md-12" style="border-bottom: 1px solid #ccc; padding: 10px">
              TIN ĐĂNG LIÊN QUAN
            </div>
            <div class="danhsach_sp_lien_quan_tomiot">
              <div class="list_item_tomiot row">


                <!-- Hiện sản phẩm tin đăng liên quan -->
                @foreach($service_relate as $childRelate)
                <div class="col-md-4 sp_lien_quan_tomiot">
                  <div class="avatar_splq_tomiot">
                      <?php 
                      $images = json_decode($childRelate->images);
                      ?>
                    <a href="chi-tiet-tin-dang/{{$childRelate->id}}">
                      <img class="img_splq_tomiot" src="{{$images[0]?? 'assets/images/chitietsanpham/logo_muare.png'}}" alt="Images 404">
                    </a>
                    <ul class="thong_tin_splq_tomiot">
                      <li class="tieu_de_splq_tomiot"><a href="chi-tiet-tin-dang/{{$childRelate->id}}">{{$childRelate->name}}</a></li>
                      <li class="user_thongtin_splq_tomiot"><h6><i class="fas fa-user"></i> {{$childRelate->nameChuShop}}</h6></li>
                    </ul>
                  </div>
                </div>
                @endforeach


              </div>
            </div>
            
          </div>
        </div>
      </section> <!-- Kết thúc tin đăng liên quan -->
      <section class="binh-luan-san-pham_tomiot">
        <div id="comment-tindang-L">
            <!--<a class="btn btn-primary" id="nhan"> nhan</a>-->
          </div>
      </section>
      

    </div>

<!-- Thông tin chủ shop -->
    <div class="col-md-3">
      <div class="border_solid_tomiot">
        <div class="">
         <div class="service-title-tomiot col-md-12">
          <div class="title_header_tomiot">
            <p id="chu-gian-hang-tomiot">Chủ gian hàng</p>
          </div>
        </div>
        <div class="chu_shop_area_tomiot col-md-12">
          <div class="avt_chu_shop_tomiot ">
            <a href="gian-hang-cua-nguoi-dung/{{$child->idChuShop}}"><img src="{{$child->avatarChuShop ?? 'assets/images/chitietsanpham/avatar_male.png'}}" alt="avatar shop" /></a>
          </div>
          <div class="ten_chu_shop_tomiot">
            <p><a href="gian-hang-cua-nguoi-dung/{{$child->idChuShop}}">
                {{$child->username}}
            </a></p>
          </div>


          <div class="thong_tin_chu_shop_tomiot col-md-12">
            
            <div class="theo_doi_shop_tomiot col-md-12">
              <button style="background-color:  #ff8000; border-radius: 5px; " class="custom_btn_chu_shop_tomiot btn btn-primary">Theo dõi</button>
              <button style="background-color:  #18b132; border-radius: 5px;" class="custom_btn_chu_shop_tomiot btn btn-info">Chat với shop</button>
            </div>
            <div class="xem_gian_hang_shop_tomiot">
                <a href="gian-hang-cua-nguoi-dung/{{$child->idChuShop}}">Xem gian hàng của tôi</a>
            </div>

            
          </div>
          <div class="google_map_shop_tomiot col-md-12">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31345.310840114485!2d106.62323590000001!3d10.875139099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1547371134798" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
           <p><i class="fas fa-search-plus"></i>Phóng to</p>
         </div>


         <div class="dia_chi_shop_tomiot">
          <p><i class="fas fa-map-marker-alt"></i> {{$child->address ?? $child->addressChuShop}}</p>
        </div>

        <div style="float:unset;"  class="box-info-v">

            <div class="phone-fix-v">
              <a href="tel:{{$child->phoneChuShop}}">
                <div class="phone-head-v"></div>
                <div class="phone-body-v">
                  <div class="shop-phone-v">
                      {{$child->phoneChuShop}}
                </div>
              </div>
              <div class="phone-footer-v"></div>
            </a>
            </div>
          </div>


        <div class="huongdan">
          <span class="huong-dan-1">Lưu ý khi mua hàng:</span>
          <ul>
            <li class="huong-dan-2">KHÔNG trả tiền trước khi nhận hàng.</li>
            <li class="huong-dan-2">KIỂM TRA hàng cẩn thận, đặc biệt với hàng đắt tiền.</li>
          </ul>
        </div>

      </div>
    </div>

  </div>

  <div class="clearfix" style="padding-top: 20px"></div>

  <div class="border_solid_tomiot">
    <div class="service-title-tomiot col-md-12">
      <div class="title_header_tomiot">
        <p id="chu-gian-hang-tomiot">TIN ĐĂNG KHÁC CỦA TÔI</p>
      </div>
    </div>
    <div class="noi_dung_tin_khac_tomiot">
      <ul>

        @foreach($service_user as $childpc)
        <li>
          <div class="post-title">
            <h3 class="post-title-h3">
              <a title="{{$childpc->name}}" href="chi-tiet-tin-dang/{{$childpc->id}}">{{$childpc->name}}</a>
            </h3>
          </div>
          <div class="post-info">
            <span class="date">ngày {{ date("d-m-Y",strtotime($childpc->date_added)) }}</span>
            <span class="category">
              <h4 class="post-info-category-h4">
                <a href="danh-muc/{{str_slug($childpc->nameCate)}}/{{$childpc->idCate}}/tin-dang/moi-va-cu/gia-tot/tin-moi-nhat/uy-tin-chat-luong" title="{{$childpc->nameCate}}">
                  <i class="fas fa-user-tag"></i> {{$childpc->nameCate}}
                </a>
              </h4>
            </span>
          </div>
        </li>
        @endforeach

      </ul>
    </div>
  </div>
  <div class="clearfix"></div>
  </div> <!-- Kết thúc tin đăng của chủ shop -->
    
@endforeach

<!-- random từ db ra.  -->
<section class="nguoi-ban-khac-de-xuat-cho-ban_tomiot">
  <div id="san_pham_lien_quan_tomiot">
    <div class="row">
      <div class="col-md-12" style="border-bottom: 1px dotted #ccc; padding: 10px">
        NGƯỜI BÁN KHÁC ĐỀ XUẤT CHO BẠN
      </div>
      <div class="nguoi_ban_de_xuat_tomiot col-md-12">
        <div class="row">

          @foreach($randomProducts as $childPro)
            <div class="col-md-2">
              <?php 
                $images = json_decode($childPro->images);
              ?>
              <a href="san-pham/{{$childPro->id}}">
              <img class="image_spdx_tomiot" src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" alt=""></a>
              <a style="max-height: 1.4em;   " class="thu_gon_text_chitietsanpham_tomiot ds_cac_sp_de_xuat_tomiot " href="san-pham/{{$childPro->id}}">{{$childPro->name}}</a>
              <h6 style="text-align: center;" class="gia_tien_spdx_tomiot">{{ number_format($childPro->price,0) }} đ</h6>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

</div>
</section>
@endsection
