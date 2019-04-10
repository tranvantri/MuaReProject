@extends('user.layouts.index')
@section('title')
  <title>
    @if($categoryParent->name)
    {{$categoryParent->name}}
    @endif

  </title>
@endsection
@section('content')

<script type="text/javascript">
    /*var $div = document.getElementById("comment-part-L");
 		        $.each(responseJson, function(index, product) {    // Iterate over the JSON array.
 		            $("<div>").appendTo($div)                     // Create HTML <tr> element, set its text content with currently iterated item and append it to the <table>.
 		                .append($("<br/>"))        // Create HTML <td> element, set its text content with id of currently iterated product and append it to the <tr>.
                        .append($("<hr>"))
                        .append($("<p>").text("Bình luận (0)"))
                        .append($("<div>").addClass('input-group-L').css('width','100%')
                               .append($("<input>").setAttribute('type', 'text').addClass("form-control comment_comment item-comment-input").setAttribute('placeholder', 'Nhập bình luận tại đây'))
                               )
                        .append($("<div>").setAttribute('id',"qlcomment")
                               .append($("<div>").addClass("tab-content tab-content-L")
                                      .append($("<div>").setAttribute('id', 'menu1').addClass('tab-pane active tab-pane-L qlcomment-menu1').setAttribute('role', 'tabpanel')
                                            //  Product's comment
                                             .append($('<ul>').css('list-style-type','none')
                                                    .append($('<li>').addClass('comment-L')
                                                          .append($('<a>').addClass('pull-left')
                                                                 .append($('<img>').addClass('lazy-image avatar').setAttribute('src','https://muare.vn/images/avatars/avatar_male_s.png?v=2'))
                                                                 )
                                                            //Phần comment
                                                          .append($('<div>').addClass('comment-body-L')
                                                                 .append($('<div>').addClass('comment-heading-L')
                                                                         .append($('<span>').addClass('post_title_L')
                                                                                .append($('<span>').addClass('user-L').text("Khách"))
                                                                                .append($('<abbr>').text("đã trả lời bình luận tại sản phẩm"))
                                                                                .append($('<a>').addClass('show-item OverlayPopup').text("sandwich kinh đô"))
                                                                                )
                                                                        )
                                                                  .append($('<p>').addClass('content-L').text("còn hàng k?"))
                                                                  .append($('<div>').addClass('span-reply')
                                                                         .append($('<span>').addClass('reply-L').text("Trả lời").click(function(){
 		                		           	                                  showcmtinput(null,null,'comment-thu-1'); 
                                                                              event.preventDefault();
 		                				                                     })
                                                                         )
                                                                 )
                                                           ) //END comment 
                                                         //sub-comment
                                                        .append($('<ul>').addClass('comments-list')
                                                         .append($('<ul>').css('list-style-type','none')
                                                                .append($('<li>').addClass('comment-L')
                                                                      .append($('<a>').addClass('pull-left')
                                                                             .append($('<img>').addClass('lazy-image avatar').setAttribute('src','https://muare.vn/images/avatars/avatar_male_s.png?v=2'))
                                                                             )
                                                                        //Phần comment
                                                                      .append($('<div>').addClass('comment-body-L')
                                                                             .append($('<div>').addClass('comment-heading-L')
                                                                                     .append($('<span>').addClass('post_title_L')
                                                                                            .append($('<span>').addClass('user-L').text("Khách"))
                                                                                            .append($('<abbr>').text("đã trả lời bình luận tại sản phẩm"))
                                                                                            .append($('<a>').addClass('show-item OverlayPopup').text("sandwich kinh đô"))
                                                                                            )
                                                                                    )
                                                                              .append($('<span>').addClass('content-cmt-L').text("Trả lời @TenKhach"))
                                                                              .append($('<p>').addClass('content-L').text("còn hàng k?"))
                                                                              .append($('<div>').addClass('span-reply')
                                                                                     .append($('<span>').addClass('reply-L').text("Trả lời").click(function(){
                                                                                          showcmtinput(null,null,'comment-thu-1'); 
                                                                                          event.preventDefault();
                                                                                         })
                                                                                     )
                                                                             )
                                                                       )
                                                                )
                                                         )
                                                        //Reply Input will show-hide when click any reply
                                                        .append($('<div>').addClass('input-reply').css('margin-left','16px')
                                                               .append($('<div>').addClass('input-group-L').css('width','100%')
                                                                      .append($('<input>').addClass("form-control comment_comment item-comment-input").setAttribute('type','text').setAttribute('placeholder','Nhập trả lời tại đây và enter'))
                                                                      )
                                                               ) //END Reply Input 
                                                        )//END sub-comment
                                                    )
                                             ) //  END Product's comment
                                      ) //END menu1 tab
                                      .append($("<div>").setAttribute('id', 'menu2').addClass('tab-pane fade tab-pane-L').setAttribute('role', 'tabpanel'))
                               )
                            ) //END div id = qlcomment
 		        });//END $.each(responseJson, function(index, product)*/
        //LOAD COMMENT WITH AJAX JQUERY
             //$(document).ready(function(){
//            function loadcomment(){
//                alert("a");
//                var comments = $.ajax({
//                  type: "GET",
//                  url: "/app/Http/Controllers/UserController/CategoryDetail.php",
//                  //contentType: "application/x-www-form-urlencoded",
//                  async: false,
//                contentType: "application/json",
//                dataType: "json",
//               //data: { number : '1' },
//                    
//                /*done: function(results) {
//                    // Uhm, maybe I don't even need this?
//                    JSON.parse(results);
//                    return results;
//                },
//                fail: function( jqXHR, textStatus, errorThrown ) {
//                    alert( 'Could not get posts, server response: ' + textStatus + ': ' + errorThrown );
//                }
//               }).responseJSON; // <-- this instead of .responseText*/
//                    
//                  success: function (response) {
//                      //alert("a1"+response);
//                      //JSON.parse(response);
//                      //var json = response.responseText.evalJSON();
//                    //alert(json);
//                    //return response;
//                      alert("ajax completed2 " + JSON.stringify(response));
//                    //OnSuccess(response)
//                  },
//                  error: function () {
//                      //data = $.evalJSON(response.responseText);
//                    //alert(data);  
//                      //alert("a2");
//                    //OnError(response)
//                  },
//                  complete: function (response) {
//                    // Handle the complete event
//                    alert("ajax completed " + JSON.stringify(response));
//                  }
//                });  // end Ajax     
//                
//                $.each(comments, function() {
//                    alert("comment thu: "+this.value);
//                    $('#comment-part-L').append( $('<option</option>').text(this.name).val(this.id) );
//                });
//                /*$.get("/CategoryDetail.php",  {number: 1}, function(responseJson) {          // Execute Ajax GET request on URL of "someservlet" and execute the following function with Ajax response JSON...
// 		        //var $table = $("<table>").appendTo($("#somediv")); // Create HTML <table> element and append it to HTML DOM element with ID "somediv".
//                alert("Loaddata succeed!");
//                $("#comment-part-L").html(responseJson);
// 		        if (responseJson.check == "fail") {
//		                    //$('#message').text("List isEmpty! Name not found!");
//		                    //$('#message').css('color', 'red');
//		                  	alert("Loaddata failed!");
//		                    return;
//		        }
//                       
//                alert("Loaddata succeed!");
// 		        
//        
//        });*/
//                } //END loadcomment()
//             //});
        </script>

<section class="content mt-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2"><!-- Chuyên mục -->
        <div id="menu-category" class="menu-category">

          <div class="title-category">chuyên mục</div>    
          <div class="category">
            <div class="parent">
              <h2 class="category-h2">
                @include('user.chitietdanhmuc.tendanhmuc')
              </h2>
            </div>
            <ul class="child">
              @include('user.chitietdanhmuc.menu-danhmuc')
            </ul>
            {{-- <a class="all-cate" href="">Tất cả chuyên mục</a> --}}
          </div>      
          <div class="show">
            <p class="title-blur">hiển thị theo</p>
            @include('user.chitietdanhmuc.sort-view')
          <!--</ul>-->
        </div> 
        <div class="filter-stop"></div>   
        <div class="find" id="filter-fix" style="position: unset;width: unset;top: unset;">
          <p class="title-blur">lọc theo</p>
          <div class="quality filter">
            <p class="title">Tình trạng</p>
            @include('user.chitietdanhmuc.sort-tinhtrang')
            
          </div>
          <div class="price">
            <div class="title">Giá (vnđ)</div>
            @include('user.chitietdanhmuc.sort-price')
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

        @include('user.core.modalChiTietSanPham')

        @include('user.core.modalDatHang')


    <div class="md-overlay" id="md-overlay-id"></div>
    
      <!-- Confirm order modal  - thong bao đa dat hang thanh cong-->
        @include('user.chitietdanhmuc.modalConfirmMuaHang')
      <!-- END Confirm order modal -->

    @if(isset($hienthi) && $hienthi == 'san-pham') {{-- xet loai hien thi --}}
      
      <div id="products-L" class="col-lg-10 col-md-10"><!-- nội dung các bài đăng -->     
                    <div id="view-post" class="view-post">
                        <div class="title-category">
                           <h1 class="title-box">
                              Đăng bán 
                              @if(isset($categoryCurrent->name))
                              {{$categoryCurrent->name}}
                              @endif
                               tại {{$place->name}}
                           </h1>
                           <p class="count-result"> Tin đăng rao bán về <b style="font-weight: bold;">
                             @if(isset($categoryCurrent->name))
                              {{$categoryCurrent->name}}
                              @endif
                           </b> tại <b style="font-weight: bold;">{{$place->name}}</b></p>
                        </div>

                        @if($checknull)
                        <div class="row-no-padding pagination-box">
                           @include('user.chitietdanhmuc.phantrang')
                           <div class="sorting">
                              @include('user.chitietdanhmuc.sort-timkiem-sanpham')
                           </div>
                        </div>
                        
                        <div class="row-no-padding" style="padding: 0;">
                            <div class="product-list-L">

                                @foreach($products as $childPro)
                                <div class="col-lg-4 col-md-4 col-sm-4 item-L" style="float: left;">
                                    <div> <!-- SẢN PHẨM THỨ ? -->

                                        <div class="avatar-sp-L" dataIDProduct="{{$childPro->id}}">


                                            <a title="{{$childPro->name}}" data-title="Load sản phẩm" data-size="l" data-id="{{$childPro->id}}" 
                                              class="md-trigger img-rounded OverlayPopup" data-modal="modal-productview">
                                            <?php 
                                              $images = json_decode($childPro->images);
                                            ?>
                                            <img class="lazy-image" src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" 
                                            alt="{{$childPro->name}}" width="170px" height="170px" 
                                            style="display: inline;width: 180px !important; height: 180px !important;">

                                            </a>

                                        </div>

                                        <div class="title-sp-L">
                                            <h2 class="item-title-h2">

                                                <a href="#" title="{{$childPro->name}}" data-id="popupItem" class="img-rounded OverlayPopup">

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
                                            </div>
                                            <div class="post-date-L">{{date("d/m/Y", strtotime($childPro->date_added))}}, lúc {{date("H:m", strtotime($childPro->date_added))}}</div>
                                        </div>
                                        <div class="price-sp-L">
                                            <div class="product-price-L">{{number_format($childPro->price,0)}}  đ </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                </div>
                                @endforeach





                                
                            </div>
                        </div>
                        @else
                          <div class="text-center mt-2">
                            <h4>Chuyên mục này chưa có tin đăng!</h4>
                          </div>
                        @endif
                    </div>
                </div>
    @else {{-- xet loai hien thi --}}

    <div class="col-lg-7 col-md-7"><!-- nội dung các bài đăng -->
      <div id="view-post-tt-dv" class="view-post">
        <div class="title-category">
         <h1 class="title-box">
          Đăng bán 
            @if(isset($categoryCurrent->name))
            {{$categoryCurrent->name}}
            @endif
           tại {{$place->name}}
        </h1>
        <p class="count-result"> Tin đăng rao bán về <b style="font-weight: bold;">
          @if(isset($categoryCurrent->name))
          {{$categoryCurrent->name}}
          @endif
        </b> tại <b style="font-weight: bold;">{{$place->name}}</b></p>
      </div>

      
      @if($checknull)
      <div class="row-no-padding pagination-box">
        @include('user.chitietdanhmuc.phantrang')
          
        <div class="sorting">
          @include('user.chitietdanhmuc.sort-timkiem-tintuc-dv')
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

@if(isset($productsVip) && count($productsVip))
@foreach($productsVip as $childPro)
<div class="row post-items border-items">
  <table>
    <tbody>
      <tr>
        <td class="td-avatar">
            <div class="avatar">
              <a title="{{$childPro->name}}" href="{{$childPro->id}}" class="img-rounded">
                <?php 
                  $images = json_decode($childPro->images);
                ?>
                <img class="lazy-image" src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" width="150px" height="150px">
              </a>
            </div>
            <div class="views-count">
              <div class="glyphicon glyphicon-eye-open">
                <span class="fred"></span>
                {{$childPro->view}}
              </div>
            </div>
        </td>
       <td class="td-info">
         <div class="box-info">
          <div class="title">
           <h3 class="box-info-h3">
            <a title="{{$childPro->name}}"
             href="https://muare.vn/posts/philips-pin-khung-bh-chinh-hang-gia-moi-thang-12-2017-full-model.3941242">{{$childPro->name}}
              </a>
          </h3>
        </div>
        <div class="location">
         <span class=""><i class="fas fa-map-marker-alt" style="font-size: 12px;"></i></span>
         <div title="{{$childPro->address}}" class="my-location">
          <h4 class="marker-h4">{{$childPro->address}}</h4>
        </div>
      </div>
      <div class="price">
       <span class=""> </span> 
       <div class="price-des"> Giá từ: </div>
       <div class="my-price">{{number_format($childPro->price,0)}}  đ </div>
      </div>
      <div class="status">
       <div class=""> Tình trạng: Mới</div>
      </div>
      <div class="user-post">
       <div class="my-avatar">
        <a title="{{$childPro->tenchushop}}" href="https://muare.vn/shop/diemsangviet/30270" class="img-rounded">
          <img class="lazy-image" src="https://static8.muarecdn.com/zoom,80/74_74/muare/avatars/l/30/30270_1446804977.jpg?1446804977" alt="diemsangviet" width="40px" height="40px">
        </a>
      </div>
      <div class="username">
        <h4 class="username-h4">
         <a title="{{$childPro->tenchushop}}" href="https://muare.vn/shop/diemsangviet/30270">{{$childPro->tenchushop}}</a>
       </h4>
      </div>
      <div class="post-date-ad">{{date("d/m/Y", strtotime($childPro->date_added))}}, lúc {{date("H:m", strtotime($childPro->date_added))}}</div>
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
@endforeach



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
@endif

@foreach($products as $childPro)
<div class="row post-items border-items">
  <table>
    <tbody>
      <tr>
        <td class="td-avatar">
            <div class="avatar">
              <a title="{{$childPro->name}}" href="{{$childPro->id}}" class="img-rounded">
                <?php 
                  $images = json_decode($childPro->images);
                ?>
                <img class="lazy-image" src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" width="150px" height="150px">
              </a>
            </div>
            <div class="views-count">
              <div class="glyphicon glyphicon-eye-open">
                <span class="fred"></span>
                {{$childPro->view}}
              </div>
            </div>
        </td>
       <td class="td-info">
         <div class="box-info">
          <div class="title">
           <h3 class="box-info-h3">
            <a title="{{$childPro->name}}"
             href="https://muare.vn/posts/philips-pin-khung-bh-chinh-hang-gia-moi-thang-12-2017-full-model.3941242">{{$childPro->name}}
              </a>
          </h3>
        </div>
        <div class="location">
         <span class=""><i class="fas fa-map-marker-alt" style="font-size: 12px;"></i></span>
         <div title="{{$childPro->address}}" class="my-location">
          <h4 class="marker-h4">{{$childPro->address}}</h4>
        </div>
      </div>
      <div class="price">
       <span class=""> </span> 
       <div class="price-des"> Giá từ: </div>
       <div class="my-price">{{number_format($childPro->price,0)}}  đ </div>
      </div>
      <div class="status">
       <div class=""> Tình trạng: Mới</div>
      </div>
      <div class="user-post">
       <div class="my-avatar">
        <a title="{{$childPro->tenchushop}}" href="https://muare.vn/shop/diemsangviet/30270" class="img-rounded">
          <img class="lazy-image" src="https://static8.muarecdn.com/zoom,80/74_74/muare/avatars/l/30/30270_1446804977.jpg?1446804977" alt="diemsangviet" width="40px" height="40px">
        </a>
      </div>
      <div class="username">
        <h4 class="username-h4">
         <a title="{{$childPro->tenchushop}}" href="https://muare.vn/shop/diemsangviet/30270">{{$childPro->tenchushop}}</a>
       </h4>
      </div>
      <div class="post-date-ad">{{date("d/m/Y", strtotime($childPro->date_added))}}, lúc {{date("H:m", strtotime($childPro->date_added))}}</div>
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
@endforeach


</div>

<div class="row-no-padding">
 @include('user.chitietdanhmuc.phantrang')
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
@else
  <div class="text-center mt-2">
    <h4>Chuyên mục này chưa có tin đăng!</h4>
  </div>
@endif
</div>
</div>
      

<div class="col-lg-3 col-md-3">
  <!-- Vùng tìm kiếm -->
  <div id="search-zone" class="search-zone">
    <div class="sidebar" style=" font-size: 14px;">
      <div class="box-location-L">
        <h3 class="glyphicon2-L" style="padding-bottom: 16px;">
          <!--<i class="fas fa-map-marked-alt"></i>-->
          <img src="assets/images/chitietdanhmuc/location.png">
          <span>&nbsp;Tìm người bán tại khu vực</span>
        </h3>
        {{-- <form id="form-location"> --}}
          <select name="location_id" id="options_city" class="location-items">

            @if(Cookie::get('place') != null)
              @foreach($places as $child) 
                  <option
                  @if($child->id == Cookie::get('place'))
                  selected
                  @endif
                  value="{{$child->id}}">{{$child->name}}</option>
              @endforeach
          @else
              @foreach($places as $child) 
                  <option value="{{$child->id}}">{{$child->name}}</option> 
              @endforeach
          @endif         
          
          
        </select>
        <input id="search-now-L" type="button" value="Tìm kiếm ngay!" />
      {{-- </form> --}}
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
              </div> {{-- vung tim kiem --}}
              @endif  {{-- end xet loai hien thi --}}

            </div>
    </div>
    <style >
      .momo{
        position: fixed;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-color: #e2caca78;
        display: none;
      }
      .momo i{
        font-size: 4rem;
      position: absolute;
      top: 45%;
      right: 45%;
      }
    </style>
    <div class="momo">
      <i class="fas fa-spinner fa-spin"></i>
    </div>
        </section>

        @endsection
