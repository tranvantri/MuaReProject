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
                <div class="list-img-wrap-v owl-carousel" >
                  
                    <div style="padding: 0 10px;">
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
                    </div>


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