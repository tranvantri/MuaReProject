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
          <p class="title-blur">lọc theo</p>
          <div class="quality filter">
            <p class="title">Tình trạng</p>
            @include('user.timkiem.sort-tinhtrang')
            
          </div>
          <div class="price">
            <div class="title">Giá (vnđ)</div>
            @include('user.timkiem.sort-price')
          </div>
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
    
      <script>
        function showZoomImg() {
          document.getElementById("myresult-div").style.display = "block";
        }
        function hideZoomImg() {
          document.getElementById("myresult-div").style.display = "none";
        }
      </script>
      
     <div class="md-modal md-effect-1" id="modal-productview">
         <div class="modal-productview-L row">
            <!--Image Zoom & Imagelist-->
            <div class="col-lg-6 col-md-6 col-sm-6 imgproduct-L">
                
                <div class="img-zoom-container" onmouseover="showZoomImg()" onmouseout="hideZoomImg()">
                  <img class="img-zoom" id="myimage" src="https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/30/5004798_giay-bong-da-205n-black-gold-1-360x360.jpg" xoriginal="https://static8.muarecdn.com/thumb_w/1000/muare/images/2019/01/30/5004798_giay-bong-da-205n-black-gold-1-360x360.jpg" width="400" height="400" >
                </div>
               
            </div>
            
            <!-- Product Info -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div id="myresult-div" class="img-zoom-container">
                    <div id="myresult" class="img-zoom-result"></div>
                </div>
                <button class="md-close">Close me!</button>
            </div>
        </div>
      </div>
      
      
      
      <Style>
          .md-modal {
            position: fixed;
            top: 30%;
            left: 50%;
            width: 80%;
            max-width: 860px;
            min-width: 320px;
            height: auto;
            z-index: 2000;
            visibility: hidden;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -ms-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        .md-show {
            visibility: visible;
        }

        .md-overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            visibility: hidden;
            top: 0;
            left: 0;
            z-index: 1000;
            opacity: 0;
            background: rgba(143,27,15,0.8);
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }

        .md-show ~ .md-overlay {
            opacity: 1;
            visibility: visible;
        }

        #modal-productview {
            margin: 60px auto 20px auto;
            width: 100%; /*hiá»ƒn thá»‹ 70% lÃ  cÃ¢n báº±ng khi thu nhá»�*/
            padding: 10px;
            background: #fff;
            background-color: #fff;
            color: black;
        }
          .img-zoom-container{
                /*height: 400px;*/
                position: relative;
               display: inline-block;
                overflow: hidden;
                max-width: 100%;
                height: auto;
          }
        #modal-productview .img-zoom{
/*
            -webkit-box-shadow: 0 0 5px 0 rgba(0,0,0,.5);
*/
            box-shadow: 0 0 5px 0 rgba(0,0,0,.5);
            margin-bottom: 15px;      
        }
          .img-zoom-lens {
              position: absolute;
              border: 1px solid #d4d4d4;
              /*set the size of the lens:*/
              width: 180px;
              height: 180px;
            }

            .img-zoom-result {
              border: 1px solid #d4d4d4;
              /*set the size of the result div:*/
              width: 400px;
              height: 400px;
            }
            
      </Style>
      
      
      <!--<div class="md-overlay"></div>-->
      
    {{-- @if(isset($hienthi) && $hienthi == 'san-pham') --}} {{-- xet loai hien thi --}}
      <div id="products-L" class="col-lg-10 col-md-10"><!-- nội dung các bài đăng -->             
                    <div id="view-post" class="view-post">
                        <div class="title-category">
                           <h1 class="title-box">
                              Đăng bán 
                              @if(isset($categoryCurrent->name))
                              {{$categoryCurrent->name}}
                              @endif
                               tại {{-- {{$place->name}} --}}
                           </h1>
                           <p class="count-result"> Tin đăng rao bán về <b style="font-weight: bold;">
                             @if(isset($categoryCurrent->name))
                              {{$categoryCurrent->name}}
                              @endif
                           </b> tại <b style="font-weight: bold;">{{-- {{$place->name}} --}}</b></p>
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
                                {{-- @foreach($products as $childPro) --}}
                                <div class="col-lg-4 col-md-4 col-sm-4 item-L" style="float: left;">
                                    <div> <!-- SẢN PHẨM THỨ ? -->
                                        <div class="avatar-sp-L">
                                            <a id="avatar-sp-L2" title="name" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="md-trigger img-rounded OverlayPopup" data-modal="modal-productview">
                                            <img class="lazy-image" src="anh" alt="name" width="180px" height="180px" style="display: inline;">
                                            </a>
                                            <!--<script src="/public/assets/js/classie.js"></script>
                                            <script src="/public/assets/js/modalEffects.js"></script>-->
                                        </div>
                                        <script type="text/javascript">
            //nút close của login
               /* document.getElementById("avatar-sp-L2").onclick = function abc2() {
                        $("#modal-20").show();
                        $("#username").val("");
                        $("#password").val("");
                    };
                document.getElementById("closebtn").onclick = function abc() {
                        $("#modal-20").hide();
                    };*/
                                        </script>
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
                                {{-- @endforeach --}}
                            </div>
                        </div>
                        @else
                          <div class="text-center mt-2">
                            <h4>Chuyên mục này chưa có tin đăng!</h4>
                          </div>
                        @endif

                    </div>
                </div>
    {{-- @else xet loai hien thi --}}

    





              {{-- @endif  end xet loai hien thi --}}

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
