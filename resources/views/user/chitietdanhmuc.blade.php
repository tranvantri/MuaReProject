@extends('user.layouts.index')
@section('title')
  <title>Muare - Danh mục
    @if($categoryParent->name)
    {{$categoryParent->name}}
    @endif
  </title>
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
          </ul>
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
                <img class="img-zoom" id="myimage" src="https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/30/5004798_giay-bong-da-205n-black-gold-1-360x360.jpg" xoriginal="https://static8.muarecdn.com/thumb_w/1000/muare/images/2019/01/30/5004798_giay-bong-da-205n-black-gold-1-360x360.jpg" width="400" height="400" >
             </div>
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
       <!-- COMMENT PART -->
       <div id="comment-part-L">
          <br/>
          <hr>
          <p>Bình luận (0)</p>
          <div class="input-group-L" style="width: 100%;">
             <input type="text" class="form-control comment_comment item-comment-input" placeholder="Nhập bình luận tại đây">
          </div>
          <div id="qlcomment">
             <div class="tab-content tab-content-L" style="background: white !important;">
                <div id="menu1" class="tab-pane active tab-pane-L" id="post_cmt" role="tabpanel" 
                   style="background: white !important;margin: 0 !important;padding: 0 !important;">
                   <input type="hidden" name="userAvatar" value="https://static8.muarecdn.com/zoom,80/90_90/muare/avatars/l/733/733265_1547649471.png?1547649471">
                   <input type="hidden" name="userName" value="tomiot">
                   <!-- Product's comment -->
                   <ul style="list-style-type: none;">
                      <li class="comment-L" data-id="2444">
                         <a class="pull-left" href="#">
                         <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://muare.vn/images/avatars/avatar_male_s.png?v=2" alt="" width="35px" height="35px" style="display: inline;">
                         </a>
                         <div class="comment-body-L">
                            <div class="comment-heading-L">
                               <span class="post_title_L"><span class="user-L">Khách</span> đã trả lời bình luận tại sản phẩm <a href="https://muare.vn/products/sandwich-kinh-do.224170" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="show-item OverlayPopup" item-data="224170">sandwich kinh đô</a></span>
                            </div>
                            <p class="content-L">còn hàng k?</p>
                            <div class="span-reply">
                               <span class="reply-L" onclick="showcmtinput(null,null,'comment-thu-1')">Trả lời</span>
                               <span id="span-tuychon" class="option-L dropdown dropdown-L" style="display: none;">
                                  Tùy chọn
                                  <div id="a-phanhoi" class="dropdown-content" style="display: none;">
                                     <a class="add_feeback saved" data-type="product" data-feeback="63">Đã thêm phản hồi</a>
                                  </div>
                               </span>
                            </div>
                         </div>
                         <!-- PUT COMMENT HERE -->
                         <ul class="comments-list">
                            <!-- Product's comment -->
                            <ul style="list-style-type: none;">
                               <li class="comment-L" data-id="2444">
                                  <a class="pull-left" href="#">
                                  <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://muare.vn/images/avatars/avatar_male_s.png?v=2" alt="" width="35px" height="35px" style="display: inline;">
                                  </a>
                                  <div class="comment-body-L">
                                     <div class="comment-heading-L">
                                        <span class="post_title_L"><span class="user-L">Khách</span> đã trả lời bình luận tại sản phẩm <a href="https://muare.vn/products/sandwich-kinh-do.224170" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="show-item OverlayPopup" item-data="224170">sandwich kinh đô</a></span>
                                     </div>
                                     <span class="content-cmt-L">@TenKhach: <span>Comment cha là gì?</span></span>
                                     <p class="content-L">còn hàng k?</p>
                                     <div>
                                        <span class="reply-L" onclick="showcmtinput(null,null,'comment-thu-1')">Trả lời</span>
                                        <span id="span-tuychon" class="option-L dropdown dropdown-L" style="display: none;">
                                           Tùy chọn
                                           <div id="a-phanhoi" class="dropdown-content" style="display: none;">
                                              <a class="add_feeback saved" data-type="product" data-feeback="63">Đã thêm phản hồi</a>
                                           </div>
                                        </span>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                            <!-- END - Product's comment -->
                            <!-- Khi load dữ liệu thì Gán id của thằng comment vào cái id của div bên dưới này nè, để khi click vào 1 comment cụ thể - hoặc comment con của nó thì đều
                               hiển thị ra cái input này để nhập cmt vào -->
                            <div id="comment-thu-1" class="input-reply" style="display: none;margin-left: 16px;">
                               <div class="input-group-L" style="width: 100%;">
                                  <input type="text" class="form-control comment_comment item-comment-input" data-type="comment" data-itemid="224170" placeholder="Nhập trả lời tại đây và enter" reply-id="2444">
                               </div>
                            </div>
                         </ul>
                         <!-- END - PUT COMMENT HERE -->
                      </li>
                   </ul>
                   <!-- END - Product's comment -->    
                   <!-- Product's comment -->
                   <ul style="list-style-type: none;">
                      <li class="comment-L" data-id="2444">
                         <a class="pull-left" href="#">
                         <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://muare.vn/images/avatars/avatar_male_s.png?v=2" alt="" width="35px" height="35px" style="display: inline;">
                         </a>
                         <div class="comment-body-L">
                            <div class="comment-heading-L">
                               <span class="post_title_L"><span class="user-L">Khách</span> đã trả lời bình luận tại sản phẩm <a href="https://muare.vn/products/sandwich-kinh-do.224170" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="show-item OverlayPopup" item-data="224170">sandwich kinh đô</a></span>
                            </div>
                            <p class="content-L">còn hàng k?</p>
                            <div class="span-reply">
                               <span class="reply-L" onclick="showcmtinput(null,null,'comment-thu-2')">Trả lời</span>
                               <span id="span-tuychon" class="option-L dropdown dropdown-L" style="display: none;">
                                  Tùy chọn
                                  <div id="a-phanhoi" class="dropdown-content" style="display: none;">
                                     <a class="add_feeback saved" data-type="product" data-feeback="63">Đã thêm phản hồi</a>
                                  </div>
                               </span>
                            </div>
                         </div>
                         <!-- PUT COMMENT HERE -->
                         <ul class="comments-list">
                            <!-- Product's comment -->
                            <ul style="list-style-type: none;">
                               <li class="comment-L" data-id="2444">
                                  <a class="pull-left" href="#">
                                  <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://muare.vn/images/avatars/avatar_male_s.png?v=2" alt="" width="35px" height="35px" style="display: inline;">
                                  </a>
                                  <div class="comment-body-L">
                                     <div class="comment-heading-L">
                                        <span class="post_title_L"><span class="user-L">Khách</span> đã trả lời bình luận tại sản phẩm <a href="https://muare.vn/products/sandwich-kinh-do.224170" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="show-item OverlayPopup" item-data="224170">sandwich kinh đô</a></span>
                                     </div>
                                     <span class="content-cmt-L">@TenKhach: <span>Comment cha là gì?</span></span>
                                     <p class="content-L">còn hàng k?</p>
                                     <div>
                                        <span class="reply-L" onclick="showcmtinput(null,null,'comment-thu-2')">Trả lời</span>
                                        <span id="span-tuychon" class="option-L dropdown dropdown-L" style="display: none;">
                                           Tùy chọn
                                           <div id="a-phanhoi" class="dropdown-content" style="display: none;">
                                              <a class="add_feeback saved" data-type="product" data-feeback="63">Đã thêm phản hồi</a>
                                           </div>
                                        </span>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                            <!-- END - Product's comment -->
                            <!-- Product's comment -->
                            <ul style="list-style-type: none;">
                               <li class="comment-L" data-id="2444">
                                  <a class="pull-left" href="#">
                                  <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://muare.vn/images/avatars/avatar_male_s.png?v=2" alt="" width="35px" height="35px" style="display: inline;">
                                  </a>
                                  <div class="comment-body-L">
                                     <div class="comment-heading-L">
                                        <span class="post_title_L"><span class="user-L">Khách</span> đã trả lời bình luận tại sản phẩm <a href="https://muare.vn/products/sandwich-kinh-do.224170" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="show-item OverlayPopup" item-data="224170">sandwich kinh đô</a></span>
                                     </div>
                                     <span class="content-cmt-L">@TenKhach: <span>Comment cha là gì?</span></span>
                                     <p class="content-L">còn hàng k?</p>
                                     <div>
                                        <span class="reply-L" onclick="showcmtinput(null,null,'comment-thu-2')">Trả lời</span>
                                        <span id="span-tuychon" class="option-L dropdown dropdown-L" style="display: none;">
                                           Tùy chọn
                                           <div id="a-phanhoi" class="dropdown-content" style="display: none;">
                                              <a class="add_feeback saved" data-type="product" data-feeback="63">Đã thêm phản hồi</a>
                                           </div>
                                        </span>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                            <!-- END - Product's comment -->
                            <!-- Khi load dữ liệu thì Gán id của thằng comment vào cái id của div bên dưới này nè, để khi click vào 1 comment cụ thể - hoặc comment con của nó thì đều
                               hiển thị ra cái input này để nhập cmt vào -->
                            <div id="comment-thu-2" class="input-reply" style="display: none;margin-left: 16px;">
                               <div class="input-group-L" style="width: 100%;">
                                  <input type="text" class="form-control comment_comment item-comment-input" data-type="comment" data-itemid="224170" placeholder="Nhập trả lời tại đây và enter" reply-id="2444">
                               </div>
                            </div>
                         </ul>
                         <!-- END - PUT COMMENT HERE -->
                      </li>
                   </ul>
                   <!-- END - Product's comment -->      
                </div>
                <div id="menu2" class="tab-pane fade tab-pane-L" id="comment_item" role="tabpanel">
                   <!-- This div no use because Lazy to design UI for this so just use a few used divs...ahihi-->
                </div>
             </div>
             <!--<script language="javascript">
                var divs = document.getElementsByTagName('div');

                function hidecmtinput(commentid){
                    //ẩn tất cả các input dùng để nhập cmt vào của khách hàng, trừ input chính của sản phẩm (click -> show)
                    for (var i = 0, l = divs.length; i < l; i++) {
                                if (divs[i].getAttribute('class') == 'input-reply' && divs[i].getAttribute('id') != commentid) 
                                    if (divs[i].style.display == 'none') divs[i].style.display = 'none';
                                    else divs[i].style.display = 'none';
                            }
                }
                function showcmtinput(fullname, fatherfullname, commentid) {
                    if(fullname == null) fullname = 'Khách';
                    if(fatherfullname == null) fatherfullname = 'Khách';
                    hidecmtinput(commentid); //ẩn tất cả input để nhập cmt khi ng dùng click vào input mới (show 1 cái thôi)
                    for (var i = 0, l = divs.length; i < l; i++) {
                                if (divs[i].getAttribute('class') == 'input-reply' && divs[i].getAttribute('id') == commentid) 
                                    if (divs[i].style.display == 'none') {
                                        divs[i].style.display = '';
                                        var divchild = divs[i].children;
                                        var divchildchild = divchild[0].children;
                                        divchildchild[0].setAttribute('placeholder','@'+fatherfullname+':');
                                    }
                                    else divs[i].style.display = 'none';
                            }
                 }
           

             </script>-->
          </div>
       </div>
       <!-- END COMMENT PART -->
    </div>
    
      <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
      </button>-->

      <!-- The Modal -->
      <div class="modal fade md-modal2" id="modal-orderview" data-backdrop="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- Modal Header -->
            <!--<div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>-->

            <!-- Modal body -->
            <div class="modal-body">
              <!--<div class="md-modal2 md-effect-1" id="modal-orderview">-->
               <!-- Nav tabs -->
               <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                     <a id="step1-bar" class="nav-link active" data-toggle="tab" href="#step1">Thông tin sản phẩm</a>
                  </li>
                  <li class="nav-item">
                     <a id="step2-bar" class="nav-link" data-toggle="tab" href="#step2">Nơi nhận hàng</a>
                  </li>
                  <li class="nav-item">
                     <a id="step3-bar" class="nav-link" data-toggle="tab" href="#step3">Xác nhận đơn hàng</a>
                  </li>
               </ul>
               <!-- Tab panes -->
               <div class="tab-content">
                  <div id="step1" class="container tab-pane active" style="padding-right: 0; padding-left: 0;">
                    <br>
                      <!-- List product in your order modal-->
                    <div style="overflow-y: auto;max-height: 274px;max-height: 400px;height: auto;">
                     <div class="product-in-order-L">
                        <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://static8.muarecdn.com/zoom,80/100_100/muare/images/2019/02/16/5010043_40.jpg" alt="Order US UK GER" width="72px" height="72px" style="display: inline;float: left;padding-right: 10px;">
                        <a href="#" class="product-name-L">Order US UK GER – Order US UK GER</a>
                        <div>
                            <p class="price-order-L"><abbr>Số lượng: &#160;<input type="text" class="input-numbsproduct"></abbr> <abbr style="padding-left: 5%;">Giá: 300,000 VNĐ</abbr> <abbr style="padding-left: 5%;">Thành tiền: <abbr style="color: red;">2,000,000 VNĐ</abbr></abbr><a href="#" style="float: right;right: 0 !important;;padding-top: 2px;padding-right: 4px;color: red;font-size: 16px;"><i class="far fa-trash-alt"></i></a></p>
                            
                            <!--<p class="price-order-L" style="float: left;margin-left: -18%;padding-top: 12px;">Giá: 300,000 VNĐ</p>
                            <p class="price-order-L" style="padding-top: 12px;">Thành tiền: <abbr style="color: red;">2,000,000 VNĐ</abbr></p>-->
                        </div>
                        <hr>
                     </div>
                    <div class="product-in-order-L">
                        <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://static8.muarecdn.com/zoom,80/100_100/muare/images/2019/02/16/5010043_40.jpg" alt="Order US UK GER" width="72px" height="72px" style="display: inline;float: left;padding-right: 10px;">
                        <a href="#" class="product-name-L">Order US UK GER – Order US UK GER</a>
                        <div>
                            <p class="price-order-L"><abbr>Số lượng: &#160;<input type="text" class="input-numbsproduct"></abbr> <abbr style="padding-left: 5%;">Giá: 300,000 VNĐ</abbr> <abbr style="padding-left: 5%;">Thành tiền: <abbr style="color: red;">2,000,000 VNĐ</abbr></abbr><a href="#" style="float: right;right: 0 !important;;padding-top: 2px;padding-right: 4px;color: red;font-size: 16px;"><i class="far fa-trash-alt"></i></a></p>
                            
                            <!--<p class="price-order-L" style="float: left;margin-left: -18%;padding-top: 12px;">Giá: 300,000 VNĐ</p>
                            <p class="price-order-L" style="padding-top: 12px;">Thành tiền: <abbr style="color: red;">2,000,000 VNĐ</abbr></p>-->
                        </div>
                        <hr>
                     </div>
                    <div class="product-in-order-L">
                        <img class="lazy-image avatar" data-original="https://muare.vn/images/avatars/avatar_male_s.png?v=2" src="https://static8.muarecdn.com/zoom,80/100_100/muare/images/2019/02/16/5010043_40.jpg" alt="Order US UK GER" width="72px" height="72px" style="display: inline;float: left;padding-right: 10px;">
                        <a href="#" class="product-name-L">Order US UK GER – Order US UK GER</a>
                        <div>
                            <p class="price-order-L"><abbr>Số lượng: &#160;<input type="text" class="input-numbsproduct"></abbr> <abbr style="padding-left: 5%;">Giá: 300,000 VNĐ</abbr> <abbr style="padding-left: 5%;">Thành tiền: <abbr style="color: red;">2,000,000 VNĐ</abbr></abbr><a href="#" style="float: right;right: 0 !important;;padding-top: 2px;padding-right: 4px;color: red;font-size: 16px;"><i class="far fa-trash-alt"></i></a></p>
                            
                            <!--<p class="price-order-L" style="float: left;margin-left: -18%;padding-top: 12px;">Giá: 300,000 VNĐ</p>
                            <p class="price-order-L" style="padding-top: 12px;">Thành tiền: <abbr style="color: red;">2,000,000 VNĐ</abbr></p>-->
                        </div>
                        <hr>
                     </div>
                     
                    </div>
                      
                      <h5 class="avgprice-order-L">Tổng tiền: 4,000,000 VNĐ</h5>
                      <div style="margin: 38px 10px 10px 10px;">
                        <button class="btn order-btn1">TIẾP TỤC MUA HÀNG</button>
                        <button id="step1-to-step2" class="btn order-btn2">TIẾP TỤC</button>
                      </div>
                  </div>
                   
                  <div id="step2" class="container tab-pane">
                     <br>
                     <p>Địa chỉ nhận hàng của bạn:</p>
                     <!--<div>
                         <p>Họ và tên *:</p>
                         <input type="text" class="input-step2" placeholder="Nhập vào họ và tên">
                     </div>-->
                      <table class="table-borderless" style="width: 100%;">
                        <tbody>
                          <tr>
                            <td colspan="1" width="18%">Họ và tên*:</td>
                            <td colspan="2"><input type="text" class="input-step2" placeholder="Nhập vào họ và tên" style="width: 40%;min-width: 150px;"></td>
                          </tr>
                          <tr>
                            <td colspan="1" width="18%">Số điện thoại *:</td>
                            <td><input type="text" class="input-step2" placeholder="Nhập vào số điện thoại" style="width: 40%;min-width: 150px;"></td>
                          </tr>
                          <tr>
                            <td colspan="1" width="18%">Email:</td>
                            <td><input type="text" class="input-step2" placeholder="Nhập vào email" style="width: 40%;min-width: 150px;"></td>
                          </tr>
                          <tr>
                            <td colspan="1" width="18%">Địa chỉ *:</td>
                            <td><input type="text" class="input-step2" placeholder="Nhập vào địa chỉ" style="width: 60%;min-width: 170px;"></td>
                          </tr>
                          <tr>
                            <td colspan="1" width="18%">Thông tin thêm:</td>
                            <td><textarea type="text" class="input-step2" placeholder="Nhập vào thông tin thêm (nếu có)" style="width: 60%;min-width: 170px;"></textarea></td>
                          </tr>
                        </tbody>
                      </table>
                      <hr>
                      <div style="margin: 10px;">
                        <button id="step2-to-step1" class="btn order-btn1">QUAY LẠI</button>
                        <button id="step2-to-step3" class="btn order-btn2">TIẾP TỤC</button>
                      </div>
                  </div>
                  
                  <div id="step3" class="container tab-pane" style="padding: 0;">
                      <div style="padding-top: 4px;">
                         <p>Mua hàng thỏa thuận với chủ shop</p>
                         <p>Khách hàng cần <b>kiểm tra kỹ thông tin sản phẩm</b> cần mua với chủ shop.</p>
                         <p>Khách hàng và cửa hàng sẽ <b>chủ động liên hệ</b> giao hàng thanh toán.</p>
                      </div>
        
                     <hr style="margin: 6px 0;">
                     <p style="color: #227fce;font-size: 14.5px;"><b>ĐỊA CHỈ NHẬN HÀNG</b></p>
                     <table class="table-borderless" style="width: 100%;">
                        <tbody>
                          <tr>
                            <td width="18%">Họ và tên:</td>
                            <td><b>Thúy Diễm - Hotgirl Quận Cam</b></td>
                          </tr>
                          <tr>
                            <td width="18%">Số điện thoại:</td>
                            <td><b>696966969696969</b></td>
                          </tr>
                          <tr>
                            <td width="18%">Email:</td>
                            <td><b>thuydiemquancam@gmail.com</b></td>
                          </tr>
                          <tr>
                            <td width="18%">Địa chỉ:</td>
                            <td><b>Quận Cam, Cam, Cam, Cam, America</b></td>
                          </tr>
                          <tr>
                            <td width="18%">Thông tin thêm:</td>
                            <td><b>Xin chào tất cả mọi người, chào bé Lê Văn Đạt...</b></td>
                          </tr>
                        </tbody>
                     </table>
                     <p>Đơn hàng:</p>
                     <div class="table-responsive">
                         <table id="ordertable-L" class="table table-bordered" style="overflow-y: auto;max-height: 50px;">
                            <thead>
                              <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Thành tiền</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                <td>100</td>
                                <td>800,000 vnđ	</td>
                                <td>3,200,000 vnđ</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                <td>100</td>
                                <td>800,000 vnđ	</td>
                                <td>3,200,000 vnđ</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                <td>100</td>
                                <td>800,000 vnđ	</td>
                                <td>3,200,000 vnđ</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                <td>100</td>
                                <td>800,000 vnđ	</td>
                                <td>3,200,000 vnđ</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                <td>100</td>
                                <td>800,000 vnđ	</td>
                                <td>3,200,000 vnđ</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                <td>100</td>
                                <td>800,000 vnđ	</td>
                                <td>3,200,000 vnđ</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                <td>100</td>
                                <td>800,000 vnđ	</td>
                                <td>3,200,000 vnđ</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                <td>100</td>
                                <td>800,000 vnđ	</td>
                                <td>3,200,000 vnđ</td>
                              </tr>
                            </tbody>
                         </table>
                     </div>
                     <h5 class="avgprice-order-L" style="margin-top: 0px;">Tổng tiền: 4,000,000 VNĐ</h5>
                      <div style="margin: 44px 10px 10px 10px;">
                        <button id="step3-to-step2" class="btn order-btn1">QUAY LẠI</button>
                        <button id="btn-confirm-order" class="btn order-btn2" data-toggle="modal" data-target="#modal-confirmorder" data-dismiss="modal">ĐỒNG Ý VÀ ĐẶT HÀNG</button>
                      </div>
                  </div>
               </div>
             <!--</div>-->
            </div>
            <!-- Modal footer -->
            <!--<div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>-->
          </div>
        </div>
      </div>
    <div id="md-overlay-id" class="md-overlay"></div>
    <div id="md-overlay2-id" class="md-overlay2"></div>
    <!-- Handle show/hide ORDER MODAL (cause technology failt) -->
    <!--<script type="text/javascript">
       document.getElementById("md-overlay2-id").style.visibility = 'hidden';
       document.getElementById("modal-orderview").style.visibility = 'hidden'; 
        
       document.getElementById("btn_left2").onclick = function() {
           document.getElementById("modal-orderview").style.visibility = 'inherit';
           document.getElementById("md-overlay2-id").setAttribute('opacity','1');
           document.getElementById("md-overlay2-id").style.visibility = 'visible';
           
       };
        
       document.getElementById("md-overlay2-id").addEventListener("click", function(){
           document.getElementById("md-overlay2-id").style.visibility = 'hidden';
           document.getElementById("modal-orderview").style.visibility = 'hidden';
       });
        
    </script>-->
    
      <!-- Confirm order modal -->
      <div class="modal fade" id="modal-confirmorder">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body" style="text-align: center;">
                <img src="https://media.giphy.com/media/PijzuUzUhm7hcWinGn/giphy.gif" alt="Yes" width="120" height="120">
                <p style="padding: 8px 4px 0 4px;font-size: 15px;">Tạo đơn hàng thành công, chủ shop sẽ liên hệ với bạn để xác nhận đơn hàng.</p>
                <button class="btn-ok" type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END Confirm order modal -->
      
    @if(isset($hienthi) && $hienthi == 'san-pham') {{-- xet loai hien thi --}}
      <div id="products-L" class="col-lg-10 col-md-10"><!-- nội dung các bài đăng -->     
          <div id="app">
              <modal-shoppingcart></modal-shoppingcart>
          </div>
          <script src="./js/app.js"></script>
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
                                        <div class="avatar-sp-L">
                                            <a title="{{$childPro->name}}" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="md-trigger img-rounded OverlayPopup" data-modal="modal-productview">
                                            <img class="lazy-image" src="{{$childPro->images}}" alt="{{$childPro->name}}" width="180px" height="180px" style="display: inline;">
                                            </a>
                                            <!--<script src="/public/assets/js/classie.js"></script>
                                            <script src="/public/assets/js/modalEffects.js"></script>-->
                                        </div>
                                      
                                        
                                        
                                        <div class="title-sp-L">
                                            <h2 class="item-title-h2">
                                                <a href="#" title="{{$childPro->name}}" data-title="Load sản phẩm" data-size="l" data-id="popupItem" class="img-rounded OverlayPopup" data-item="224062">
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
                <img class="lazy-image" src="{{$childPro->images}}" width="150px" height="150px">
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
        </section>

        @endsection
