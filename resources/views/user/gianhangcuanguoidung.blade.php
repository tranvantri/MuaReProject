@extends('user.layouts.index')
@section('title')
<title>Gian hàng của người dùng</title>
@endsection
@section('content')

<section class="main-container col1-layout home-content-container">
      <div class="container">
        <div class="row">
          <div class="mrfoot">
            <div class="no-sidebar">
         @foreach($user as $childUser)
              <input type="hidden" name="user_login" class="user_login" value="0" />
              <input type="hidden" name="_token" value="SPnZ2K70Iym1xvMiiTxDG7Xb0nRukPiG9zPXlQBF" />
              <div class="page-shop">
                <div class="cover">
                  <div class="image-cover">
                    <img
                      src="assets/images/gianhangcuchuoing/banner-default.png"
                      class="cover_shop"
                      data-original="assets/images/gianhangcuchuoing/banner-default.png"
                      style="top: 0px"
                      alt="banner"
                    />
                  </div>


                  <div class="shop-name"><h2>Gian hàng của {{$childUser->username}}</h2></div>

                    
                </div>
                <div class="shop-info">
                  <div class="info-left">
                    <div class="owner">
                      <div class="o-avatar">
                        <img
                          class="lazy-image"
                          src="{{$childUser->avatar ??'assets/images/chitietsanpham/avatar_male.png'}}"
                          data-original="{{$childUser->avatar ??'assets/images/chitietsanpham/avatar_male.png'}}"
                          alt="{{$childUser->username ?? 'Người dùng'}}"
                          width="50px"
                          height="50px"
                        />
                      </div>
                      <div class="o-name">
                        <div class="chushop">CHỦ SHOP</div>
                        <div class="u-name">{{$childUser->username}}</div>
                        <div class="u-button">
                          <span
                            href="javascript:void(0);"
                            class="follow_user user-follower "
                            data-userid="278021"
                          >
                            + Theo dõi
                          </span>
                          <span
                            class="chat_shop chat user shop-chat"
                            data-id="{{$childUser->email}}"
                            data-name="{{$childUser->username ?? $childUser->name}}"
                            data-avatar="{{$childUser->avatar ??'assets/images/chitietsanpham/avatar_male.png'}}"
                            >CHAT VỚI SHOP</span
                          >
                        </div>
                      </div>
                    </div>

                    <div class="map"><div id="show-map"></div></div>
                    <div class="extra-info">
                      <div class="if">
                        <div class="shoplocation"></div>
                          {{$childUser->address}}
                      </div>
                      <div class="if">
                        <div class="shopphone"></div>
                        {{$childUser->phone}}
                      </div>
                    </div>
                  </div>

                  <div class="info-right">
                    <div class="khung">
                      <div class="gioi-thieu">
                        <div class="o-desc no_slider">
                          <div class="o-title">
                            GIỚI THIỆU CHUNG VỀ GIAN HÀNG
                          </div>
                          <div class="de">
                            <div class="description">
                              <span>Gian hàng đang cập nhật...</span>
                            </div>
                            <div class="static">
                              <div class="item-s">
                                <div class="icon-s">
                                  <div class="shoplist"></div>
                                </div>
                                <div class="s-content">
                                  <div class="count">
                                    {{$soluongService}}
                                  </div>
                                  Tin đăng
                                </div>
                              </div>

                              <div class="item-s">
                                <div class="icon-s">
                                  <div class="shopview"></div>
                                </div>
                                <div class="s-content">
                                  <div class="count">1,759</div>
                                  Lượt xem
                                </div>
                              </div>

                              <div class="item-s">
                                <div class="icon-s">
                                  <div class="shopaddress"></div>
                                </div>
                                <div class="s-content">
                                  <div class="count">{{$soluongProducts}}</div>
                                  Sản phẩm
                                </div>
                              </div>

                              <div class="item-s">
                                <div class="icon-s">
                                  <div class="shopinfo"></div>
                                </div>
                                <div class="s-content">
                                  <div class="count">0</div>
                                  Theo dõi
                                </div>
                              </div>

                              <div class="item-s">
                                <div class="icon-s">
                                  <div class="shopcomment"></div>
                                </div>
                                <div class="s-content">
                                  <div class="count">0</div>
                                  Bình luận
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="shop-row">
                  <h2 class="row-title">Tin đăng của shop</h2>
                  @foreach($services as $childService)
                  <div class="list-post row">
                    <div class="shop-post col-xs-6">
                      <div class="img-post">
                        <a
                          title="{{$childService->name}}"
                          href="{{$childService->id}}"
                        >
                          <img
                            class="lazy-images"
                            src="{{$childService->images}}"
                            alt="{{$childService->name}}"
                          />
                        </a>
                      </div>
                      <!--img-post-->
                      <div class="info-post">
                        <div class="title-post">
                          <h2 class="title-post-h2">
                            <a
                              title="{{$childService->name}}"
                              href="{{$childService->id}}"
                            >
                              {{$childService->name}}
                            </a>
                          </h2>
                        </div>
                        <div class="location-post">
                          <h3 class="add-h3" title="{{$childService->namePlace}}">
                            {{$childService->namePlace}}
                          </h3>
                        </div>
                        <div class="price-post">
                          Giá từ: <span>{{ number_format($childService->price,0)}} đ </span>
                        </div>
                      </div>
                    </div>
                    @endforeach

                  </div>
                </div>


                <!-- <div class="shop-row button_see_more">
                  <button type="" class="btn btn-success see_more" page="2">
                    Xem thêm
                  </button>
                </div> -->

                <div class="shop-row" id="shopItemRow">
                  <h2 class="row-title">Sản phẩm của shop</h2>
                  <div class="filter-item">
                    <div class="filter-category">
                      <span class="count-items">{{$soluongProducts}}</span>
                      <span>sản phẩm được tìm thấy trong</span>
                      <select name="filter_category">
                        <option value="">Tất cả các chuyên mục</option>
                        <optgroup
                          class="optionstc  stc-category-13 0 "
                          label="Thời trang"
                        ></optgroup>
                        <option value="14"
                          >&nbsp; &nbsp; &nbsp; Trang sức, Phụ kiện</option
                        >
                        <option value="15"
                          >&nbsp; &nbsp; &nbsp; Giầy dép, Túi xách</option
                        >
                        <option value="17">&nbsp; &nbsp; &nbsp; Quần áo</option>
                        <option value="25"
                          >&nbsp; &nbsp; &nbsp; Mẹ và Bé</option
                        >
                        <optgroup
                          class="optionstc  stc-category-19 0 "
                          label="Sim số, Thẻ cào, Dịch vụ"
                        ></optgroup>
                        <option value="20"
                          >&nbsp; &nbsp; &nbsp; Sim giá rẻ</option
                        >
                        <option value="21"
                          >&nbsp; &nbsp; &nbsp; Sim 3G, 4G, Thẻ cào, Dịch
                          vụ</option
                        >
                        <option value="22"
                          >&nbsp; &nbsp; &nbsp; Sim VIP, Cam kết, Năm
                          sinh</option
                        >
                        <optgroup
                          class="optionstc  stc-category-28 0 "
                          label="Điện tử, Kỹ thuật số"
                        ></optgroup>
                        <option value="29"
                          >&nbsp; &nbsp; &nbsp; Linh kiện, Phụ kiện KTS</option
                        >
                        <option value="31"
                          >&nbsp; &nbsp; &nbsp; Máy ảnh, Máy quay, Máy nghe
                          nhạc</option
                        >
                        <option value="32"
                          >&nbsp; &nbsp; &nbsp; Dàn âm thanh, Amply, Loa</option
                        >
                        <option value="34"
                          >&nbsp; &nbsp; &nbsp; Tivi, Đầu KTS, Smartbox</option
                        >
                        <optgroup
                          class="optionstc  stc-category-37 0 "
                          label="Ô tô, Xe máy, Phương tiện"
                        ></optgroup>
                        <option value="38">&nbsp; &nbsp; &nbsp; Xe máy</option>
                        <option value="39">&nbsp; &nbsp; &nbsp; Ô tô</option>
                        <option value="40"
                          >&nbsp; &nbsp; &nbsp; Xe đạp, Xe điện</option
                        >
                        <option value="104"
                          >&nbsp; &nbsp; &nbsp; Phụ tùng, Đồ chơi, Dịch
                          vụ</option
                        >
                        <optgroup
                          class="optionstc  stc-category-43 0 "
                          label="Nhà đất, Nội thất, Xây dựng"
                        ></optgroup>
                        <option value="46"
                          >&nbsp; &nbsp; &nbsp; Thuê và cho thuê</option
                        >
                        <option value="47"
                          >&nbsp; &nbsp; &nbsp; Mua bán nhà đất</option
                        >
                        <option value="107"
                          >&nbsp; &nbsp; &nbsp; Vật liệu, Thiết bị xây dựng, Máy
                          xây dựng</option
                        >
                        <option value="108"
                          >&nbsp; &nbsp; &nbsp; Mua bán đồ nội thất</option
                        >
                        <optgroup
                          class="optionstc  stc-category-54 0 "
                          label="Điện thoại, Máy tính bảng"
                        ></optgroup>
                        <option value="56"
                          >&nbsp; &nbsp; &nbsp; SmartPhone</option
                        >
                        <option value="57"
                          >&nbsp; &nbsp; &nbsp; Linh kiện, Phụ kiện ĐT</option
                        >
                        <option value="58"
                          >&nbsp; &nbsp; &nbsp; Máy tính bảng, Máy đọc
                          sách</option
                        >
                        <option value="94"
                          >&nbsp; &nbsp; &nbsp; Điện thoại phổ thông</option
                        >
                        <optgroup
                          class="optionstc  stc-category-61 0 "
                          label="Máy tính, Thiết bị văn phòng"
                        ></optgroup>
                        <option value="27"
                          >&nbsp; &nbsp; &nbsp; Games, Vật phẩm game, Thiết bị
                          Games</option
                        >
                        <option value="62"
                          >&nbsp; &nbsp; &nbsp; Case, Màn hình, Máy nguyên
                          bộ</option
                        >
                        <option value="63"
                          >&nbsp; &nbsp; &nbsp; Laptop, Netbook</option
                        >
                        <option value="64"
                          >&nbsp; &nbsp; &nbsp; Phần mềm, Thiết bị, Linh phụ
                          kiện</option
                        >
                        <option value="139"
                          >&nbsp; &nbsp; &nbsp; Máy in, Scan, Photo, Máy
                          chiếu</option
                        >
                        <optgroup
                          class="optionstc  stc-category-71 0 "
                          label="Rao vặt tổng hợp"
                        ></optgroup>
                        <option value="26"
                          >&nbsp; &nbsp; &nbsp; Hoa, Quà tặng, Đồ trang
                          trí</option
                        >
                        <option value="59"
                          >&nbsp; &nbsp; &nbsp; Lao động, Việc làm, Tuyển
                          sinh</option
                        >
                        <option value="68"
                          >&nbsp; &nbsp; &nbsp; Giáng sinh &amp; Mua sắm
                          Tết</option
                        >
                        <option value="74"
                          >&nbsp; &nbsp; &nbsp; Sách, Truyện, Văn phòng phẩm,
                          Nhạc cụ</option
                        >
                        <option value="75"
                          >&nbsp; &nbsp; &nbsp; Thú cưng, Cây cảnh, Đồ làm
                          vườn</option
                        >
                        <option value="84"
                          >&nbsp; &nbsp; &nbsp; Chợ đồ cũ tổng hợp</option
                        >
                        <option value="92"
                          >&nbsp; &nbsp; &nbsp; Thuốc, Thực phẩm chức
                          năng</option
                        >
                        <optgroup
                          class="optionstc  stc-category-72 0 "
                          label="Ăn uống, Vui chơi"
                        ></optgroup>
                        <option value="18"
                          >&nbsp; &nbsp; &nbsp; Ẩm thực, Đặc sản vùng
                          miền</option
                        >
                        <option value="76"
                          >&nbsp; &nbsp; &nbsp; Du lịch, Phượt, Phiếu giảm
                          giá</option
                        >
                        <option value="168"
                          >&nbsp; &nbsp; &nbsp; Nhà hàng, Bar, Café, Quán
                          ăn</option
                        >
                        <optgroup
                          class="optionstc  stc-category-98 0 "
                          label="Điện lạnh, Điện gia dụng"
                        ></optgroup>
                        <option value="101"
                          >&nbsp; &nbsp; &nbsp; Máy giặt, Tủ lạnh, Bình nóng
                          lạnh, Tủ đông</option
                        >
                        <option value="102"
                          >&nbsp; &nbsp; &nbsp; Đồ điện, Đồ gia dụng
                          khác</option
                        >
                        <option value="140"
                          >&nbsp; &nbsp; &nbsp; Điều hòa, Quạt, Máy sưởi, Đèn
                          sưởi</option
                        >
                        <option value="141"
                          >&nbsp; &nbsp; &nbsp; Nồi cơm điện, Bếp, Lò</option
                        >
                        <option value="142"
                          >&nbsp; &nbsp; &nbsp; Máy xay, Máy ép, Máy lọc, Máy
                          bơm</option
                        >
                      </select>
                    </div>
                    <div class="filter-order">
                      <span>Sắp xếp: </span>
                      <select name="filter_order">
                        <option value="1">Mới nhất</option>
                        <option value="2">Cũ nhất</option>
                        <option value="3">Giá từ thấp đến cao</option>
                        <option selected="" value="4">Giá từ cao đến thấp</option
                        >
                      </select>
                    </div>
                  </div>

                  <!-- filter-item -->



                  <!-- Hiển thị các sản phẩm của User -->

                  @foreach($products as $childProduct)
                  <div class="list-items">
                    <div class="shop-item col-xs-15">
                      <div class="img-item show-item" item-data="221991">
                        <div class="avatar">
                          <a
                            title="{{$childProduct->name}}"
                            href="{{$childProduct->id}}"
                            data-title="Load sản phẩm"
                            data-size="l"
                            data-id="popupItem"
                            class="OverlayPopup"
                          >
                            <img
                              class="lazy-image"
                              data-original="{{$childProduct->name}}"
                              src="{{$childProduct->images}}"
                              alt="{{$childProduct->name}}"
                              style="display: inline; width: 200px; height: 200px; border-radius: 10px; "
                            />
                          </a>
                          <div class="sale-state"></div>
                        </div>
                        <div class="info-item">
                          <div
                            class="title-item notify-item-comment"
                            data-item="221991"
                          >
                            <h2 class="item-h2">
                              <a
                                title="{{$childProduct->name}}"
                                href="{{$childProduct->id}}"
                                data-title="Load sản phẩm"
                                data-size="l"
                                data-id="popupItem"
                                class="OverlayPopup"
                              >
                                {{$childProduct->name}}
                              </a>
                            </h2>
                          </div>
                          <div class="price-item">{{number_format($childProduct->price,0)}} đ</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <!-- Kết thúc foreach của Hiển thị sản phẩm -->

                </div>
                <!-- shop-row -->
                <div class="shop-row feeback-box">
                  <h2 class="row-title">Phản hồi của khách hàng</h2>
                  <div
                    class="chat_shop chat user shop-chat"
                    data-id="{{$childUser->username}}"
                    data-name="{{$childUser->username}}"
                    data-avatar="{{$childUser->avatar??'assets/images/chitietsanpham/avatar_male.png'}}"
                  >
                    <div class="shopicon-button"></div>
                    Chat với chủ shop(tích hợp Messager của fb)
                  </div>
                  <div>
                    <center>
                      Chưa có phản hồi nào của khách hàng về dịch vụ được cung
                      cấp
                    </center>
                  </div>
                </div>
              </div>
          @endforeach 
              <!-- Kết thúc $childUser -->
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection