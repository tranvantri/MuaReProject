@extends('user.layouts.index')
@section('title')
  @foreach($products as $child)
    <title>{{$child->name}}</title>
  @endforeach
@endsection
@section('content')
<section class="main-container-v col1-layout home-content-container">
  <div class="container">
    <div class="admicro_top"></div>
    <div class="mrfoot-v row">
      <div class="content-v col-md-9">
        <input type="hidden" name="user_login" class="user_login" value="" />
        <input type="hidden" name="_token" value="" />

        <!-- Bắt đầu hiển thị sản phẩm -->
    @foreach($products as $child)

        <div class="item-content-v">
          <div class="row">
            <div class="box-images-v col-md-6">


              <!-- hình ảnh của sản phẩm -->
              <div class="xzoom-container">
                <img class="xzoom" id="expandedImg" style="width: 430px" src="{{$child->images}}"
                xoriginal="{{$child->images}}" alt="{{$child->name}}" />
              </div>

              <!-- Hình ảnh nhỏ của sp -->
              <div class="scroll-small-img-v">
                <div class="list-img-wrap-v" id="abc123">
                  <div class="list-small-img-v">
                    <div>
                      <img src="{{$child->images}}" alt="{{$child->name}}"
                      width="75px" height="75px" onclick="showPicture(this);"/>
                    </div>
                    <div>
                      <img src="https://static8.muarecdn.com/zoom,90/75_75/muare/images/2019/01/16/4994071_a76.jpg"
                      width="75px" height="75px" onclick="showPicture(this);"/>
                    </div>
                    <div>
                      <img src="{{$child->images}}"
                      width="75px" height="75px" onclick="showPicture(this);"/>
                    </div>


                  </div>
                </div>
                <div class="scroll-v scroll-left-v"onclick="scrollright();" >
                  <span class="icon-scroll-left-v" ></span>
                </div>
                <div class="scroll-v scroll-right-v"  onclick="scrollleft();">
                  <span class="icon-scroll-right-v"></span>
                </div>
              </div>
              <!-- Kết thúc hình ảnh của sản phẩm -->

              <div class="view-caring-v">
                <div class="social-v">
                  <div class="view-saved-v">
                    <span class="glyphicon glyphicon-saved" aria-hidden="true"><i class="far fa-save"></i></span>
                    <a href="https://www.facebook.com/saved/" target="_blank" class="btn btn-white save-facebook__list">Xem
                    sản phẩm đã lưu</a>
                  </div>
                </div>
              </div>

            </div>


            <!-- Thông tin của sản phẩm -->
            <div class="box-info-v col-md-6">
              <h1 class="item-title-v">{{$child->usernameChuShop ?? 'username'}}
              </h1>
              Người bán
              <span title="Đã kích hoạt SMS"><i class="fas fa-check"></i></span>
              <a class="basic-info-name-v" href="{{$child->idChuShop}}">{{$child->usernameChuShop ?? 'username'}} </a>
              (thành viên từ {{$child->ngayTaoChuShop ?? '1/1/2019'}})
              <div class="item-des-v">
                <div class="item-des-content-v">
                  <div class="item-des-text-v">
                    <p>{{$child->name}}<br>
                      {{$child->description}}<br>

                      Liên hệ: {{$child->phoneChuShop}}<br>
                      Địa chỉ: {{$child->address ?? $child->addressChuShop}}<br>
                    </p>
                  </div>
                </div>
                <div class="list-tags-v"> </div>
              </div>
              <button class="order-v" data-toggle="modal" data-target="#modalThemSanPham"></button>

              @include('user.chitietsanpham.modalThemSanPham')




              <p class="item-price-v">{{number_format($child->price,0)}}đ</p>
              <div class="phone-fix-v">
                <div class="phone-head-v"></div>
                <div class="phone-body-v">
                  <div class="shop-phone-v">
                  {{$child->phoneChuShop}}
                </div>
              </div>
              <div class="phone-footer-v"></div>
            </div>
            <div class="huong-dan-v">
              <span class="huong-dan-v-1">Lưu ý khi mua hàng:</span>
              <ul>
                <li class="huong-dan-v-2">KHÔNG trả tiền trước khi nhận hàng.</li>
                <li class="huong-dan-v-2">KIỂM TRA hàng cẩn thận, đặc biệt với hàng đắt tiền.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-tab-right-v">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="tab" href="#muareItem" role="tab">Bình luận (bình luận fb)</a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content-v">
          <div class="tab-pane active" id="muareItem" role="tabpanel">
            <div id="comment_item">
              <div class="post-footer-v">
                <div class="input-group box-input-comment-v">
                  <input type="hidden" name="_token" value="qpzZrA6PfOvK9uBcK1IidnozgfJ3AlJvDPtbPe5A">
                  <input type="hidden" name="item_id" value="223994" id="item_id">
                  <input type="text" class="form-control comment_item item-comment-input-v" data-itemid="223994" data-type="post"
                  placeholder="Nhập bình luận tại đây ...">
                </div>

                <ul class="comments-list-v comment-parent-v comment-parent-223994">                      
                  <li class="comment-v" data-id="">        
                    <a class="" href="#">
                      <img class="avatar-v" src="https://muare.vn/images/avatars/avatar_male_s.png?v=2" alt="" width="40px" height="40px">
                    </a>

                    <div class="comment-body-v">
                      <div class="comment-heading-v">
                        <h4 class="user-v">Khách</h4>
                        <div class="time-comment-v"><span><i class="far fa-clock"></i></span> 17/01/2019, lúc 12:43</div>
                        <p class="content-v">Xin chao</p>
                        <p class="reply-v">Trả lời</p>
                      </div>
                    </div>
                    <ul class="comments-list-v">

                    </ul>
                    <div class="input-reply-v">
                      <input type="text" class="form-control comment_comment item-comment-input-v" data-itemid="223994" data-type="comment"
                      placeholder="Nhập bình luận tại đây ...">
                    </div>

                  </li>

                </ul>

              </div>
            </div>
          </div>
        </div>
        <!-- Kết thúc phần hiển thị sản phẩm -->

        <!-- Đề xuất sản phẩm -->
        <div id="title-product-related-v"><span>NGƯỜI BÁN KHÁC ĐỀ XUẤT CHO BẠN</span></div>
        <div class="products_related_parent-v">
        @foreach($product_offer as $childOffer)
            <div class="offer-category-v">          
              <div class="colum-offer-category-v">
                <div class="details-v">
                  <div class="avatar-v">
                    <a href="{{ route('sanpham', $childOffer->id)}}"
                  title="{{$childOffer->name}}">
                    <img class="image" src="{{$childOffer->images}}"
                    alt="{{$childOffer->name}}"></a>
                  </div>
                </div>
                <div class="title_products_related-v">
                  <h2>
                    <a class="item_name-v" href="{{ route('sanpham', $childOffer->id)}}"
                    title="{{$childOffer->name}}" data-title="Load sản phẩm" data-size="l"
                    data-id="popupItem">{{$childOffer->name}}</a>
                  </h2>
                </div>

                <div class="price_products_related-v">
                  <span><b>{{number_format($childOffer->price,0)}} đ</b></span>
                </div> 
              </div>
            </div>
         @endforeach
        </div>
        <!-- Kết thúc Đề xuất sản phẩm -->

        <!-- Sản phẩm ngẫu nhiên -->
        <div id="title-product-related-v"><span>CÓ THỂ BẠN QUAN TÂM</span></div>
        <div class="products_related_parent-v">

          @foreach($randPro as $childRand)
          <div class="offer-category-v">
            <div class="colum-offer-category-v">
              <div class="details-v">
                <div class="avatar-v">
                  <a href="{{ route('sanpham', $childRand->id)}}"
                  title="{{$childRand->name}}"><img class="image" src="{{$childRand->images}}"
                  alt="{{$childRand->name}}"></a>
                </div>
              </div>
              <div class="title_products_related-v">
                <h2>
                  <a class="item_name-v" href="{{ route('sanpham', $childRand->id)}}"
                  title="{{$childRand->name}}" data-title="Load sản phẩm"
                  data-size="l" data-id="popupItem">{{$childRand->name}}</a>
                </h2>
              </div>

              <div class="price_products_related-v">
                <span><b>{{number_format($childRand->price,0)}} đ</b></span>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
        <!-- Kết thúc Sản phẩm ngẫu nhiên -->

      </div>
    </div>

    <!-- Thông tin người bán sản phẩm -->
    <div class="col-md-3 row-no-padding-v box-right-v">
      <div class="seller-details-v">
        <div class="basic-info-v">
          <div class="basic-info-main-v">
            <div class="basic-info-title-v">Được bán bởi</div>
            <h2>
              <a class="basic-info-name-v" href="{{$child->usernameChuShop}}">{{$child->usernameChuShop??'user404'}}</a>
            </h2>

            <div class="register-date-v">
              <span><i class="far fa-clock"></i>
                Thành viên từ {{$child->ngayTaoChuShop ?? '1/1/2019'}}
              </span>
            </div>
            <div class="register-date-v sms">
              <span><i class="far fa-check-square"></i></span> Đã kích hoạt SMS
            </div>

          </div>

          <div class="basic-info-avatar-v">
            <a href="{{$child->idChuShop}}" class="img-rounded-v">
              <img class="avatar-v" src="{{$child->avatarChuShop ?? 'assets/images/chitietsanpham/avatar_male.png'}}"
              alt="{{$child->usernameChuShop}}" >
            </a>
          </div>

        </div>
        <div class="seller-details-footer-v">
          <h2>
            <a class="seller-details-link-v" href="{{ route('gianhangcuanguoidung', $child->idChuShop)}}">ĐẾN
            CỬA HÀNG</a>
          </h2>
        </div>
      </div>


      <!-- quang cao -->
      <div id="__ebwidget" style="display: block;float: left;padding-top: 10px;">
        <iframe src="https://m.enbac.com/widget/zamba.html?site=muare.vn&amp;zone=thoi-trang" style="width: 300px; overflow: hidden !important;height: 385px;border: 0;"></iframe>
      </div>
      <!-- end quang cao -->

    </div>
    <!-- Kết thúc Thông tin người bán sản phẩm -->
    @endforeach
    <!-- Kết thúc product -->

  </div>

</div>
</section>

@endsection