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
    
      <script type="text/javascript">
          //hover on myimage -> show myresult
/* Show/hide khi hover ảnh trên product modal - đồng thời kiểm tra loại thiết bị đang sử dụng để căn chỉnh suitble size */
          document.getElementById("myresult-div").style.display = "none";
        
        function showZoomImg() {
          document.getElementById("myresult-div").style.display = "block";
            if(screen.width < 600){
                document.getElementById('comment-part-L').setAttribute("style", "margin-top:40px;");  
                document.getElementById("modal-productinfo-L").setAttribute("style", "padding-left:8px;");
            }
        }
        function hideZoomImg() {
          document.getElementById("myresult-div").style.display = "none";
            if(screen.width < 600){
                document.getElementById('comment-part-L').setAttribute("style", "margin-top:440px;");  
                document.getElementById("modal-productinfo-L").setAttribute("style", "padding-left:8px;");
            }
        }

        
      </script>
       
      
      
     <div class="md-modal md-effect-1" id="modal-productview">
       <div class="row">
          <!--Image Zoom & Imagelist-->
          <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="img-zoom-container" onmouseover="showZoomImg()" onmouseout="hideZoomImg()">
                <img class="img-zoom" id="myimage" src="https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/30/5004798_giay-bong-da-205n-black-gold-1-360x360.jpg" width="400" height="400" >
             </div>
               <!-- Hình ảnh nhỏ của sp -->
              <div class="scroll-small-img-v">
                <div class="list-img-wrap-v owl-carousel" id="list-img-wrap-v">
                  
                    {{-- <div style="padding: 0 10px;">
                      <img class="img-thumbnail img-small" src="https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/30/5004798_giay-bong-da-205n-black-gold-1-360x360.jpg"
                        onclick="changeMainImage(this);"/>
                    </div>
                    <div style="padding: 0 10px;">
                      <img class="img-thumbnail img-small" src="https://static8.muarecdn.com/zoom,90/75_75/muare/images/2019/01/16/4994071_a76.jpg"
                        onclick="changeMainImage(this);"/>
                    </div>
                    <div style="padding: 0 10px;">
                      <img class="img-thumbnail img-small" src="https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/30/5004798_giay-bong-da-205n-black-gold-1-360x360.jpg"
                        onclick="changeMainImage(this);"/>
                    </div> --}}


                  </div>
                {{-- <div class="scroll-v scroll-left-v" onclick="scrollright();" >
                  <span class="icon-scroll-left-v" ></span>
                </div>
                <div class="scroll-v scroll-right-v"  onclick="scrollleft();">
                  <span class="icon-scroll-right-v"></span>
                </div> --}}
              </div>
              <!-- Kết thúc hình ảnh của sản phẩm -->
          </div>
          <!-- Product Info -->
          <div class="col-lg-6 col-md-6 col-sm-6">
             <!-- Result when zoom image-->
             <div id="myresult-div" class="img-zoom-container">
                <div id="myresult" class="img-zoom-result"></div>
             </div>
             <!-- product info -->
             <div id="modal-productinfo-L">
                <p class="productinfo-title">Xe ba bánh đẩy trẻ em 218</p>
                <p class="productinfo-seller">Người bán <i class="fas fa-check"></i> <a href="#">thegioixecuabe1</a> (thành viên từ 03/01/2019)</p>
                <p class="productinfo-content">Được sản xuất trên dây chuyền công nghệ cao mua 1 được 2 xe đẩy trẻ em 218 vừa có thể làm xe đẩy cho bé khi còn nhỏ , vừa làm chiếc xe đạp rất tiện lợi phù hợp cho các bé từ 1-5 tuổi giúp giảm chi phí cho bố mẹ khi mua đồ cho bé . 
                   Xe đẩy cho bé gấp gọn có mái che SJBB218 thiết kế phối hợp giữa xe đẩy và xe ba bánh có bàn đạp , rất đa năng phù hợp với nhiều giai đoạn phát triển của bé . Tay đẩy phía sau xe thuận lợi cho việc bố mẹ điều khiển hướng xe 
                   Phần khung của xe được làm từ chất liệu kim loại chắc chắn ,vỏ bọc sử dụng chất liệu nhựa cao cấp không mùi , không chứa các chất độc hại gây ảnh hưởng đến sức khỏe của bé . 
                   Mái che giúp chắn nắng , gió và hạn chế các tác động có hại từ môi trường . 
                   Thiết kế phần khoang ngồi rộng rãi , có tựa lưng chống mỏi khung đai nhựa bao quanh chỗ ngồi giúp bảo vệ và tạo sự thoải mái cho bé
                   Đặc biệt xe 3 bánh đẩy cao cấp còn thiết kế ghế ngồi xoay 2 chiều bố mẹ có thể vừa đẩy vừa nói chuyện với bé . 
                   Xe có 3 bánh chắc chắn sử dụng chất liệu cao su giúp xe cân bằng và chống trơn trượt . Xe dễ dàng gấp gọn để cất giữ hoặc mang theo khi đi du lịch .
                </p>
                <!-- Price & Order Button -->
                <div>
                   <p class="productinfo-price">1.550.000đ</p>
                   <a id="btn_left2" class="md-trigger2" data-modal2="modal-orderview" data-toggle="modal" data-target="#modal-orderview"><button class="productinfo-order"><i class="fas fa-cart-arrow-down"></i> <abbr style="font-style: normal !important;">&#160;|&#160;</abbr> Đặt hàng</button></a>
                </div>
                <div class="productinfo-phone">
                   <img style="float: left;" src="data:image/png;base64,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">
                   <p class="productinfo-phone-text">ẤN ĐỂ XEM SỐ</p>
                </div>
                <!-- Attention about product -->
                 <div>
                   <p class="productinfo-attention">LƯU Ý KHI MUA HÀNG:</p>
                   <ul class="productinfo-atchild">
                      <li>KHÔNG trả tiền trước khi nhận hàng.</li>
                      <li>KIỂM TRA hàng cẩn thận, đặc biệt với hàng đắt tiền.</li>
                   </ul>
                </div>
             </div>
             <!--
                <button class="md-close">Close me!</button>
                -->
          </div>
          <!-- Comment part -->
       </div>
       <!------------------------ COMMENT PART----------------------------->
         
         
         
        <div id="comment-part-L"></div>
    </div>
    
      <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
      </button>-->

      
      <!--</script>-->




        @include('user.core.modalChiTietSanPham')

        @include('user.core.modalDatHang')


    <div id="md-overlay-id" class="md-overlay"></div>
    <div id="md-overlay2-id" class="md-overlay2"></div>
    
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


                                            <a title="{{$childPro->name}}" data-title="Load sản phẩm" data-size="l" data-id="{{$childPro->id}}" class="md-trigger img-rounded OverlayPopup" data-modal="modal-productview">
                                            <?php 
                                              $images = json_decode($childPro->images);
                                            ?>
                                            <img class="lazy-image" src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" alt="{{$childPro->name}}" width="170px" height="170px" style="display: inline;width: 180px !important; height: 180px !important;">

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
@foreach($products as $childPro)
<div class="row post-items border-items">
  <table>
    <tbody>
      <tr>
        <td class="td-avatar">
            <div class="avatar">
              <a title="{{$childPro->name}}" href="https://muare.vn/posts/philips-pin-khung-bh-chinh-hang-gia-moi-thang-12-2017-full-model.3941242" class="img-rounded">
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
         <span class="glyphicon glyphicon-map-marker"><i class="fas fa-map-marker-alt" style="font-size: 12px;"></i></span>
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
              </div> {{-- vung tim kiem --}}
              @endif  {{-- end xet loai hien thi --}}

            </div>
        <!--</section>-->

        @endsection
