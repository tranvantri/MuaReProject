@extends('user.layouts.index')
@section('title')
<title>Chi tiết danh mục</title>
@endsection
@section('content')

<section class="content mt-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2"><!-- Chuyên mục -->
        <div id="menu-category" class="menu-category">

          <div class="title-category">chuyên mục</div>    
          <div class="category">
            <div class="parent">
              <h2 class="category-h2">
                <a href="">Thời trang</a>
              </h2>
            </div>
            <ul class="child">
              <li><a href="">Quần áo</a></li>
              <li><a href="">Giày dép, túi xách</a></li>
              <li><a href="">Mẹ và bé</a></li>
              <li><a href="">Trang sức, và phụ kiện</a></li>
              <li><a href="">Quần áo</a></li>
            </ul>
            <a class="all-cate" href="">Tất cả chuyên mục</a>
          </div>      
          <div class="show">
            <p class="title-blur">hiển thị theo</p>
            <div>
              <div class="radio">
                <input type="radio" id="post" class="active" checked="" name="hienthi" value="">
                <label for="post" class="find_radio_lb"><a class="type-ranger" href="">Toàn bộ tin đăng</a></label>
              </div>
              <div class="radio">
                <input type="radio" id="service" class="" name="hienthi" value="">
                <label for="service" class="find_radio_lb"><a class="type-ranger" href="">Các dịch vụ liên quan</a></label>
              </div>
              <div class="radio">
                <input type="radio" id="product" class="" name="hienthi" value="">
                <label for="product" class="find_radio_lb"><a class="type-ranger" href="">Kho sản phẩm</a></label><span class="label label-success">Mới</span>
              </div>
            </div>
          </div> 
          <div class="filter-stop"></div>   
          <div class="find" id="filter-fix" style="position: unset;width: unset;top: unset;">
            <p class="title-blur">lọc theo</p>
            <div class="quality filter">
              <p class="title">Tình trạng</p>
              <div class="form-group">
                <input type="checkbox" name="quality[]" checked="" value="" id="new">
                <label for="new"><a class="quality-ranger" href="#">Mới</a></label>
              </div>
              <div class="form-group">
                <input type="checkbox" name="quality[]" checked="" value="" id="new_90">
                <label for="new_90"><a class="quality-ranger" href="">Mới 90%</a></label>
              </div>
              <div class="form-group">
                <input type="checkbox" name="quality[]" value="" id="new_80">
                <label for="new_80"><a class="quality-ranger" href="">Mới 80%</a></label>
              </div>
              <div class="form-group">
                <input type="checkbox" name="quality[]" value="" id="old">
                <label for="old"><a class="quality-ranger" href="">Cũ</a></label>
              </div>
            </div>
            <div class="price">
              <div class="title">Giá (vnđ)</div>
              <div class="find-price">
                <ul class="list-price active">
                  <li data-value="0-500000"><a class="price-ranger" href="">≤ 500.000đ</a></li>
                  <li data-value="500000-2000000"><a class="price-ranger" href="">500.000đ - 2.000.000đ</a></li>
                  <li data-value="2000000-5000000"><a class="price-ranger" href="">2.000.000đ - 5.000.000đ</a></li>
                  <li data-value="5000000-10000000"><a class="price-ranger" href="">5.000.000đ - 10.000.000đ</a></li>
                  <li class="custom-price" data-value="10000000-2000000000"><a class="price-ranger" href="">≥ 10.000.000đ</a></li>
                </ul>
                
              </div>
            </div>

            
            
          </div>          

        </div>
      </div>
      <div class="col-lg-7 col-md-7"><!-- nội dung các bài đăng -->
        <div id="view-post" class="view-post">
          <div class="title-category">
           <h1 class="title-box">
            Đăng bán Điện thoại phổ thông tại Hà Nội
          </h1>
          <p class="count-result"> Tin đăng rao bán về <b style="font-weight: bold;">Điện thoại phổ thông</b> tại <b style="font-weight: bold;">Hà Nội</b></p>
        </div>
        <div class="row-no-padding pagination-box">
         <ul class="pagination pagination2">
          <li class="page-item"><a class="page-link" href="http://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94?page=1" rel="prev" style="border-radius: 0px;">« Trang trước</a></li>
          <li class="page-item"><a class="page-link" href="http://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94?page=3" rel="next" style="border-radius: 0px;">Trang sau »</a></li>
        </ul>
        <div class="sorting">
          <select name="sorting_select" id="sorting_select" class="sorting_select">
           <option value="https://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94.tin-dang.moi-va-cu.gia-tot.moi-cap-nhat.uy-tin" selected="selected">Tin up mới nhất</option>
           <option value="https://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94.tin-dang.moi-va-cu.gia-tot.xem-nhieu-nhat.uy-tin">Xem nhiều nhất</option>
           <option value="https://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94.tin-dang.moi-va-cu.gia-tot.gia-thap-nhat.uy-tin">Giá thấp nhất</option>
           <option value="https://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94.tin-dang.moi-va-cu.gia-tot.tin-moi-nhat.uy-tin">Tin mới nhất</option>
         </select>
       </div>
     </div>
     
     <div class="row-no-padding">
       <div class="posts-list">
        <div class="row post-items border-items" style="border-color: #ffbf02;border-style: dashed;border-width: 2px;">
         <p class="post_sticky sticky_vip">
          TOP VIP
        </p>
        <table>
          <tbody>
           <tr>
            <td class="td-avatar">
             <div class="avatar">
              <a data-title="Mua tin VIP top" data-size="m" data-id="buy_post_vip">
                <img src="https://static8.muarecdn.com/zoom,80/150_150/muare/images/2018/02/23/4513649_button.png" alt="iphone 6 lock" width="150px" height="150px" style="display: inline;">
              </a>
            </div>
            <div class="views-count">
              <div class="glyphicon-eye-opens">
               <a href="#" data-title="Mua tin VIP top" data-size="m" data-id="buy_post_vip">
                 Liên hệ ngay!
               </a>
             </div>
           </div>
         </td>
         <td class="td-info">
           <div class="box-info" style="border: none;padding-right: 10px;padding-bottom: 5px;">
            <div class="title" style="position: relative;">
             <h3 class="box-info-h3" style="position: relative;">
              <a data-title="Mua tin VIP top" data-size="m" data-id="buy_post_vip" class="OverlayPopup" title="Vị trí tin vip này đang trống, vui lòng click xem chi tiết..." style="
              text-transform: none;
              color: black !important;
              line-height: 20px;
              padding-bottom: 10px;
              ">Tăng hiệu quả bán hàng với việc đặt tin đăng của bạn tại vị trí <span style="
              color: #eb100e;
              ">VIP</span> nhất trên muare.vn</a>
            </h3>
          </div>
          <div class="location">
           <div title="số 5 ngõ 88 trần quý cáp" class="my-location">
            <h4 class="marker-h4">
             - Tin VIP luôn nằm vị trí cố định và trên cùng của trang chuyên mục. <br>
             - Tin VIP Top hiển thị ở tất cả các trang sau của chuyên mục. <br>
             - Tin VIP Top mua chuyên mục nào sẽ hiển thị vị trí VIP Top tại chuyên mục đó. <br>
             - Được nhắc nhở trước khi bị xử lý nếu có vi phạm trong tin VIP. <br>
             - Được quyền xóa bỏ các comment không mong muốn trong tin VIP. <br>
           </h4>
         </div>
       </div>
       <div class="price" style="
       padding-top: 20px;
       ">
       <span class=""> </span>
       <div class="price-des">Liên hệ quảng cáo: </div>
       <div class="my-price">096 906 1788</div>
     </div>
     <div class="status" style="
     display: none;
     ">
     <div class=""> Tình trạng: Cũ</div>
   </div>
   <div class="user-post" style="
   display: none;
   ">
   <div class="my-avatar">
    <a title="master1405" href="https://muare.vn/shop/master1405/609685" class="img-rounded">
      <img class="lazy-image" data-original="https://static8.muarecdn.com/zoom,80/74_74/muare/avatars/l/609/609685_1487749845.jpg?1487749845" src="https://static8.muarecdn.com/zoom,80/74_74/muare/avatars/l/609/609685_1487749845.jpg?1487749845" alt="master1405" width="40px" height="40px" style="display: inline;">
    </a>
  </div>
  <div class="username">
    <h4 class="username-h4">
     <a title="master1405" href="https://muare.vn/shop/master1405/609685">master1405</a>
   </h4>
 </div>
 <div class="post-date">10/02, lúc 14:45</div>
</div>
</div>
<div class="last-comment" style="
display: none;
">
<div class="my-avatar">
 <a title="" href="https://muare.vn/shop" class="img-rounded">
   <img src="https://static18.muarecdn.com/styles/muare/xenforo/avatars/avatar_male_s.png?v=1" alt="" width="25px" height="25px">
 </a>
</div>
<div class="cmt">Shop nghỉ tết đến bao h...</div>
<div class="post-date">19/02, lúc 17:51</div>
<div class="count_cmt">
 <div class="glyphicon cmt"><a title="APPLE JAPAN ➞ CHUYÊN IP LOCK NHẬT ➞ UY TÍN ĐẢM BẢO Như bài viết ➞ mua bán tại nhà riêng ➞ bh 1 đổi 1" href="https://muare.vn/posts/apple-japan-chuyen-ip-lock-nhat-uy-tin-dam-bao-nhu-bai-viet-mua-ban-tai-nha-rieng-bh-1-doi-1.3852363" style="color:#313131;text-decoration: none;cursor: pointer">Bình luận</a></div>
</div>
<div class="follow" data-id="3852363">
 <div data-toggle="tooltip" data-placement="bottom" title="" class="icon-follow " data-original-title="Lưu tin"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>

<div class="row post-items border-items">
 <table>
  <tbody>
   <tr>
    <td class="td-avatar">
     <div class="avatar">
      <a title="Philips pin khủng BH chính hãng giá mới tháng 12 2017 Full Model" href="https://muare.vn/posts/philips-pin-khung-bh-chinh-hang-gia-moi-thang-12-2017-full-model.3941242" class="img-rounded">
        <img class="lazy-image" src="https://muare.vn/images/global/logo-deffault.png?v=11010" alt="diemsangviet" width="150px" height="150px">
      </a>
    </div>
    <div class="views-count">
      <div class="glyphicon glyphicon-eye-open">
       <span class="fred"></span>
       41,464
     </div>
   </div>
 </td>
 <td class="td-info">
   <div class="box-info">
    <div class="title">
     <h3 class="box-info-h3">
      <a title="Philips pin khủng BH chính hãng giá mới tháng 12 2017 Full Model" href="https://muare.vn/posts/philips-pin-khung-bh-chinh-hang-gia-moi-thang-12-2017-full-model.3941242">Philips pin khủng BH chính hãng giá mới tháng 12 2017 Full Model</a>
    </h3>
  </div>
  <div class="location">
   <span class="glyphicon glyphicon-map-marker"><i class="fas fa-map-marker-alt" style="font-size: 12px;"></i></span>
   <div title="9B - 354 Trần Khát Chân - Hai Bà Trưng - Hà Nội" class="my-location">
    <h4 class="marker-h4">9B - 354 Trần Khát Chân - Hai Bà Trưng - Hà Nội</h4>
  </div>
</div>
<div class="price">
 <span class=""> </span> 
 <div class="price-des"> Giá từ: </div>
 <div class="my-price">700.000  đ </div>
</div>
<div class="status">
 <div class=""> Tình trạng: Mới</div>
</div>
<div class="user-post">
 <div class="my-avatar">
  <a title="diemsangviet" href="https://muare.vn/shop/diemsangviet/30270" class="img-rounded">
    <img class="lazy-image" src="https://static8.muarecdn.com/zoom,80/74_74/muare/avatars/l/30/30270_1446804977.jpg?1446804977" alt="diemsangviet" width="40px" height="40px">
  </a>
</div>
<div class="username">
  <h4 class="username-h4">
   <a title="diemsangviet" href="https://muare.vn/shop/diemsangviet/30270">diemsangviet</a>
 </h4>
</div>
<div class="post-date-ad">07/09/2018, lúc 00:10</div>
</div>
</div>
<hr/>
<div class="last-comment">
  <div class="my-avatar" style="padding-top: 4px;">
   <a href="https://muare.vn/shop" class="img-rounded" title="">
     <img src="https://muare.vn/images/avatars/avatar_male_s.png?v=2" alt="" width="25px" height="25px">
   </a>
 </div>
 <div class="cmt" title="Add co ban pin Philips E170 ko vay? Co gi lien he so 0909080986 cho minh nhé. Thanks ban">Add co ban pin Philips E170 ko...</div>
 <div class="post-date">21/08/2018, lúc 11:43</div>
 <div class="count_cmt">
   <div class="glyphicon cmt"><a title="Philips pin khủng BH chính hãng giá mới tháng 12 2017 Full Model" href="https://muare.vn/posts/philips-pin-khung-bh-chinh-hang-gia-moi-thang-12-2017-full-model.3941242?#show_comment" style="color:#313131;text-decoration: none;cursor: pointer">Bình luận</a></div>
 </div>
 <div class="follow" data-id="3941242">
   <div data-toggle="tooltip" data-placement="bottom" title="" class="icon-follow " data-original-title="Lưu tin"></div>
 </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>


<div class="row post-items border-items">
 <table>
  <tbody>
   <tr>
    <td class="td-avatar">
     <div class="avatar">
      <a title="Philips pin khủng BH chính hãng giá mới tháng 12 2017 Full Model" href="https://muare.vn/posts/philips-pin-khung-bh-chinh-hang-gia-moi-thang-12-2017-full-model.3941242" class="img-rounded">
        <img class="lazy-image" src="https://muare.vn/images/global/logo-deffault.png?v=11010" alt="diemsangviet" width="150px" height="150px">
      </a>
    </div>
    <div class="views-count">
      <div class="glyphicon glyphicon-eye-open">
       <span class="fred"></span>
       41,464
     </div>
   </div>
 </td>
 <td class="td-info">
   <div class="box-info">
    <div class="title">
     <h3 class="box-info-h3">
      <a title="Philips pin khủng BH chính hãng giá mới tháng 12 2017 Full Model" href="https://muare.vn/posts/philips-pin-khung-bh-chinh-hang-gia-moi-thang-12-2017-full-model.3941242">Philips pin khủng BH chính hãng giá mới tháng 12 2017 Full Model</a>
    </h3>
  </div>
  <div class="location">
   <span class="glyphicon glyphicon-map-marker"><i class="fas fa-map-marker-alt" style="font-size: 12px;"></i></span>
   <div title="9B - 354 Trần Khát Chân - Hai Bà Trưng - Hà Nội" class="my-location">
    <h4 class="marker-h4">9B - 354 Trần Khát Chân - Hai Bà Trưng - Hà Nội</h4>
  </div>
</div>
<div class="price">
 <span class=""> </span> 
 <div class="price-des"> Giá từ: </div>
 <div class="my-price">700.000  đ </div>
</div>
<div class="status">
 <div class=""> Tình trạng: Mới</div>
</div>
<div class="user-post">
 <div class="my-avatar">
  <a title="diemsangviet" href="https://muare.vn/shop/diemsangviet/30270" class="img-rounded">
    <img class="lazy-image" src="https://static8.muarecdn.com/zoom,80/74_74/muare/avatars/l/30/30270_1446804977.jpg?1446804977" alt="diemsangviet" width="40px" height="40px">
  </a>
</div>
<div class="username">
  <h4 class="username-h4">
   <a title="diemsangviet" href="https://muare.vn/shop/diemsangviet/30270">diemsangviet</a>
 </h4>
</div>
<div class="post-date-ad">07/09/2018, lúc 00:10</div>
</div>
</div>
<hr/>
<div class="last-comment">
  <div class="cmt empty-comment" style="color:#ccc">(Chưa có bình luận)</div>
  <div class="count_cmt">
   <div class="glyphicon cmt"><a title="Philips pin khủng BH chính hãng giá mới tháng 12 2017 Full Model" href="https://muare.vn/posts/philips-pin-khung-bh-chinh-hang-gia-moi-thang-12-2017-full-model.3941242?#show_comment" style="color:#313131;text-decoration: none;cursor: pointer">Bình luận</a></div>
 </div>
 <div class="follow" data-id="3941242">
   <div data-toggle="tooltip" data-placement="bottom" title="" class="icon-follow " data-original-title="Lưu tin"></div>
 </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="row-no-padding">
 <ul class="pagination pagination2">
  <li class="page-item"><a class="page-link" href="http://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94?page=1" rel="prev" style="border-radius: 0px;">« Trang trước</a></li>
  <li class="page-item"><a class="page-link" href="http://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94?page=3" rel="next" style="border-radius: 0px;">Trang sau »</a></li>
</ul>
</div>
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
</div>

</div>
</div>
<div class="col-lg-3 col-md-3">
  <!-- Vùng tìm kiếm -->
  <div id="search-zone" class="search-zone">
    <div class="sidebar" style=" font-size: 14px;">
      <div class="box-location">
        <h3 class="glyphicon2" style="padding-bottom: 16px;">
          <!--<i class="fas fa-map-marked-alt"></i>-->
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJeSURBVFhH7Za5qhRBFEBHBRdww8gFRBDEQAN/wA9QcAlMXHDBzAUXMBMx8A9EBAP/QlxAFASXQEFBQURMDDR0SQSXc7rrDv2a6qp5TyOZA4epuvfWVE91T3WNpvxPLMTT+BS/JR/jKTT3T5iP89rmDNbhC/w94HNci3NmOZ7Bt/gOL+MGlEX4Ep3oNe7GZcm9+AbjIma9EpvxKn7B7i/SCyguu30nX2mgh7G4iJMGarjMO/EO/kIH+nkrtfUmbkV5gsb2NL32Fh1Ixu1yJazxmajiEsdE/nJXYBNKxLv4sBlb2vRGo4MYdV6EeAvt+31VYvBZXGGgQ+S6fEZjq5vezAvYbwDWoH1rq8TgHLncXTR2vOm1y+7EGrfAnDW3m16F3CRBLncIjT3D3F/UmDlrrK2SmyTI5ZbgRzS+y0APY+assbZKbpJgKHcCjb9C/0WBbWPmrJmIoUlkKOcG8wHNHTaQsG3M3MSb0NAkUsodRXOfcFXStjFzsi99FilNUsr5sD1C8zeSto2ZW4zvsUppklJO3B1/oDun2t6CchFLY8f8zQXIFYw628F3rI1tKE1SygW+HX3y1XYwydiGUmHtS46lz23JLrWxY0qFtS/xZRPnhD61sWNyhb7Tz2HkLuFG7GPuQdsc0x9bpVvoE3wd45Xb1af8IR7BeBVHTnJjfdVXieL7nbaTeUDZgdvRA0n3lPQ1xaKfG+shp7tNDxID1au/hh7N+vhi8cBxD39id5zGYSY3toiD3bHOY+6Ml2M9utG4xB5cPcB6CpoTnu0WtM1Z45Y70TJPmdIyGv0BNSDoxqdYt5QAAAAASUVORK5CYII=">
          <span>&nbsp;Tìm người bán tại khu vực</span>
        </h3>
        <form action="" id="form-location">
          <select
          name="location_id"
          id="options_city"
          class="location-items"
          >
          <option
          value="https://muare.vn/posts/ha-noi/thoi-trang.13.tin-dang.moi-va-cu.gia-tot.moi-cap-nhat"
          >Hà Nội</option
          >
          <option
          value="https://muare.vn/posts/hai-phong/thoi-trang.13.tin-dang.moi-va-cu.gia-tot.moi-cap-nhat"
          >Hải Phòng</option
          >
          <option
          value="https://muare.vn/posts/da-nang/thoi-trang.13.tin-dang.moi-va-cu.gia-tot.moi-cap-nhat"
          >Đà Nẵng</option
          >
          <option
          value="https://muare.vn/posts/tp-hcm/thoi-trang.13.tin-dang.moi-va-cu.gia-tot.moi-cap-nhat"
          selected=""
          >TP.Hồ Chí Minh</option
          >
        </select>
        <input
        id="search-now"
        type="button"
        value="Tìm kiếm ngay!"
        />
      </form>
    </div>

    <!-- enbac box -->
    <div
    id="__ebwidget"
    style="display: block;float: left;padding-top: 10px;"
    >
    <iframe
    src="https://m.enbac.com/widget/zamba.html?site=muare.vn&amp;zone=thoi-trang"
    style="width: 300px; overflow: hidden !important;height: 385px;border: 0;"
    ></iframe>
  </div>
  <div style="padding-bottom:5px" class="sidebar_eb">
    <div id="mr_widget">
      <iframe
      src="https://muare.vn/widget/zamba?site=muare.vn&amp;type=ver&amp;zone=other&amp;location=ha-noi"
      style="width:300px; overflow: hidden !important;height: 385px;border: 0;"
      frameborder="0"
      allowfullscreen=""
      ></iframe>
    </div>
    <a
    rel="nofollow"
    target="_blank"
    href="https://rongbay.com/dat-mua-quang-cao.html?utm_source=backup&amp;utm_medium=3sites_backup&amp;utm_content=[admdomain]&amp;utm_campaign=3sites_Camp"
    >
    <img
    src="https://muare.vn//images/admicro/300x600.jpg?v=11010"
    />
  </a>
  <div id="zone-jfjjrzax" class="ArfGroup">
    <div id="share-jfjjtht2" class="ArfGroup">
      <div id="placement-jfvym1n9" class="ArfGroup">
        <div
        id="banner-jfjjrzax-jfvym1x2"
        class="ArfGroup"
        style="min-height: 0px; min-width: 10px;"
        >
        <div id="slot-1-jfvym1x2">
          <div
          id="adnzone_29628"
          data-admssprqid="9052610d-4251-4449-a14f-f4b257344021"
          data-width="300"
          data-height="250"
          data-ssp="sspbid_3093"
          >
          <div
          style="position:relative;width:300px;height:auto;"
          >
          <iframe
          src="javascript:if(typeof(adnzone29628)!='undefined'){adnzone29628.renderIframe();}else{parent.adnzone29628.renderIframe();}"
          style="border:none;background:#fff;"
          marginheight="0"
          align="top"
          scrolling="No"
          frameborder="0"
          hspace="0"
          vspace="0"
          name="adnzone_29628_0_126676"
          id="adnzone_29628_0_126676"
          width="300"
          height="250"
          ></iframe
                                ><!--<a
                                  class="admLogoAdx29628"
                                  href="http://adx.admicro.vn/?utm_source=Admicro&amp;utm_medium=muare.vn&amp;utm_campaign=adxzone"
                                  target="_blank"
                                  ><span class="txtlogo">Admicro AdX</span
                                  ><span></span
                                    ></a>-->
                                  </div>
                                  <div id="ads_top_bottom"></div>
                                </div>
                                <script type="text/javascript">
                                  admsspreg({ sspid: 3093, w: 300, h: 250 });
                                </script>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <script
                      src="//media1.admicro.vn/cms/arf-jfjjrzax.min.js"
                      async=""
                      ></script>

                      <script
                      src="//media1.admicro.vn/cms/arf-jfjjrl6t.min.js"
                      async=""
                      ></script>
                      <div id="advZoneSticky2Top" style="clear:both"></div>
                      <div
                      id="advZoneSticky2"
                      style="clear: both; display: block; left: 1026px; top: 2883px; bottom: auto;"
                      ></div>

                      <script
                      src="//media1.admicro.vn/cms/arf-jfkxhs01.min.js"
                      async=""
                      ></script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        @endsection
