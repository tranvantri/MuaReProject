@extends('user.layouts.index')
@section('title')
  <title>
    {{-- @if($categoryParent->name)
    {{$categoryParent->name}}
    @endif --}}
  </title>
@endsection
@section('content')


<section class="content mt-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2"><!-- Chuyên mục -->
        <div id="menu-category" class="menu-category">

                
          <div class="show">
            <p class="title-blur">hiển thị theo</p>
            @include('user.timkiem.sort-view')
          </ul>
        </div> 
        <div class="filter-stop"></div>   
        <div class="find" id="filter-fix" style="position: unset;width: unset;top: unset;">
          @if(isset($hienthi) && $hienthi == 'san-pham')
          <p class="title-blur">lọc theo</p>
          <div class="quality filter">
            <p class="title">Tình trạng</p>
            @include('user.timkiem.sort-tinhtrang')
            
          </div>
          
          <div class="price">
            <div class="title">Giá (vnđ)</div>
            @include('user.timkiem.sort-price')
          </div>
          @endif

          <div class="price">
            <div class="title" style="font-size: 12px;">Bạn đang muốn tìm gì?</div>
            @if(isset($hienthi) && $hienthi == 'tin-dang')
            @include('user.timkiem.muon-tim-gi-tindang')
            @else
            @include('user.timkiem.muon-tim-gi-sanpham')
            @endif
          </div>
          <div class="filter-stop"></div>   
        </div>          

      </div>
    </div>

    <?php $checknull= false;
        if(isset($products) && count($products)> 0){
          $checknull= true;
        }else{
          $checknull= false;
        }

      ?>
      

      
    @if(isset($hienthi) && $hienthi == 'tin-dang') {{-- xet loai hien thi --}}
      <div id="products-L" class="col-lg-10 col-md-10"><!-- nội dung các bài đăng -->             
                    <div id="view-post" class="view-post">
                        <div class="title-category">
                           <h1 class="title-box">
                              
                              @if(isset($countPro))
                              ({{$countPro}})
                              @else
                              (0)
                              @endif
                                
                              @if(isset($textSearch))
                              {{$textSearch}}
                              @endif

                               ({{$place->name}})

                           </h1>
                           <p class="count-result"></p>
                        </div>

                        @if($checknull)
                        <div class="row-no-padding pagination-box">
                           @include('user.timkiem.phantrang')
                           <div class="sorting">
                              @include('user.timkiem.sort-timkiem-tintuc')
                           </div>
                        </div>
                        @foreach($products as $childPro)
                        <div class="row-no-padding" style="padding: 0;">
                             <div class="row product-list-L">                                
                                <div class="col-lg-2 col-md-2 col-sm-2 ">
                                     <!-- SẢN PHẨM THỨ ? -->
                                <!--<div class="col-lg-4 col-md-4 col-sm-4 item-L" style="float: left;">-->
                                    <div> <!-- SẢN PHẨM THỨ ? -->
                                        <div class="avatar-sp-L">
                                            <a id="avatar-sp-L2" title="name" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="md-trigger img-rounded OverlayPopup" data-modal="modal-productview">
                                            <img class="lazy-image" src="anh" alt="name" width="180px" height="180px" style="display: inline;">
                                            </a>
                                            <!--<script src="/public/assets/js/classie.js"></script>
                                            <script src="/public/assets/js/modalEffects.js"></script>-->
                                        </div>

                                        <div class="title-sp-L">
                                            <h2 class="item-title-h2">
                                                <a href="#" title="name" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="img-rounded OverlayPopup" data-item="224062">
                                                    name
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="desc-sp-L">
                                            <h3 class="item-desc-h3">
                                                mota
                                            </h3>
                                        </div>
                                        <div class="user-post-L">
                                            <div class="username-sp-L">bán bởi <span class="name">tenchushop</span>
                                                <div class="box-arrow-L">
                                                    <div class="user-info-L">
                                                        <div class="user-name-L">
                                                            <img class="lazy-image" src="https://static8.muarecdn.com/zoom,80/30_30/muare/avatars/l/29/29055_1475477187.jpg?1475477187" title="GioKayVaLa" width="40px" height="40px">
                                                            <span>tenchushop</span>
                                                        </div>
                                                        <div class="user-shop-L">
                                                            <ul>
                                                                <li><span>Cửa hàng: </span><a href="https://muare.vn/shop/GioKayVaLa/29055">tenchushop</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-date-L"></div>
                                        </div>
                                        <div class="price-sp-L">
                                            <div class="product-price-L">  đ </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                </div>
                                @endforeach
                            </div>
                            
                        </div>
                        <div class="row-no-padding">
                             @include('user.timkiem.phantrang')
                            </div>
                        @else
                          <div class="text-center mt-2">
                            <h4>Không tìm thấy sản phẩm nào, vui lòng thử lại với từ khóa khác!</h4>
                          </div>
                        @endif

                    </div>
                </div>
    @else {{-- xet loai hien thi --}}
            <div id="products-L" class="col-lg-10 col-md-10"><!-- nội dung các bài đăng -->             
                    <div id="view-post" class="view-post">
                        <div class="title-category">
                           <h1 class="title-box">
                              
                              @if(isset($countPro))
                              ({{$countPro}})
                              @else
                              (0)
                              @endif
                                
                              @if(isset($textSearch))
                              {{$textSearch}}
                              @endif

                               ({{$place->name}})

                           </h1>
                           <p class="count-result"></p>
                        </div>

                        @if($checknull)
                        <div class="row-no-padding pagination-box">
                           @include('user.timkiem.phantrang')
                           <div class="sorting">
                              @include('user.timkiem.sort-timkiem-sanpham')
                           </div>
                        </div>
                        
                        <div class="row-no-padding" style="padding: 0;">
                            <div class="product-list-L">
                                @foreach($products as $childPro)
                                <div class="col-lg-4 col-md-4 col-sm-4 item-L" style="float: left;">
                                    <div> <!-- SẢN PHẨM THỨ ? -->
                                        <div class="avatar-sp-L">
                                            <a id="avatar-sp-L2" title="{{$childPro->name}}" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="md-trigger img-rounded OverlayPopup" data-modal="modal-productview">
                                            <img class="lazy-image" src="{{$childPro->images}}" alt="{{$childPro->name}}" width="180px" height="180px" style="display: inline;">
                                            </a>
                                            <!--<script src="/public/assets/js/classie.js"></script>
                                            <script src="/public/assets/js/modalEffects.js"></script>-->
                                        </div>

                                        <div class="title-sp-L">
                                            <h2 class="item-title-h2">
                                                <a href="#" title="name" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="img-rounded OverlayPopup" data-item="224062">
                                                    {{$childPro->name}}
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="desc-sp-L">
                                            <h3 class="item-desc-h3">
                                                {{$childPro->description}}
                                            </h3>
                                        </div>
                                        <div class="user-post-L">
                                            <div class="username-sp-L">bán bởi <span class="name">{{$childPro->tenchushop}}</span>
                                                <div class="box-arrow-L">
                                                    <div class="user-info-L">
                                                        <div class="user-name-L">
                                                            <img class="lazy-image" src="https://static8.muarecdn.com/zoom,80/30_30/muare/avatars/l/29/29055_1475477187.jpg?1475477187" title="GioKayVaLa" width="40px" height="40px">
                                                            <span>{{$childPro->tenchushop}}</span>
                                                        </div>
                                                        <div class="user-shop-L">
                                                            <ul>
                                                                <li><span>Cửa hàng: </span><a href="https://muare.vn/shop/GioKayVaLa/29055">{{$childPro->tenchushop}}</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-date-L"></div>
                                        </div>
                                        <div class="price-sp-L">
                                            <div class="product-price-L">{{number_format($childPro->price, 0)}}  đ </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                </div>
                                @endforeach
                            </div>
                            
                        </div>
                        <div class="row-no-padding">
                             @include('user.timkiem.phantrang')
                            </div>
                        @else
                          <div class="text-center mt-2">
                            <h4>Không tìm thấy sản phẩm nào, vui lòng thử lại với từ khóa khác!</h4>
                          </div>
                        @endif

                    </div>
                </div>
    





              @endif  {{-- end xet loai hien thi --}}

            </div>
        </section>
        <style>
label.col-md-12.text-bold {
 padding: unset;
}
form.form-horizontal.postForm {
 padding: 0px 15px;
}
span.price-int {
 color: red;
 font-size: 16px;
}
.notice-vip {
 padding: 10px;
 margin-top: 20px;
 color: #696666;
 border: 1px solid #ccc;
 border-radius: 5px;
 background: #fbfbfb;
}
</style>

        @endsection
