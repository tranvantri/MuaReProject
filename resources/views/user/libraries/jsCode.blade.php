<script src="assets/js/jquery/jquery.min.js"></script>
<script src="assets/js/jquery/popper.min.js"></script>
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/OwlCarousel/owl.carousel.min.js"></script>
<script src="dropzone/dist/dropzone.js"></script>
<script src="assets/js/multiselect/fSelect.js"></script>
<script src="assets/js/myJS.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/modalEffects.js"></script>
<script src="assets/js/glm-ajax.js"></script>
<script src="assets/js/changeStt.js"></script>
 
<!--
<script src="assets/js/modernizr.custom.js"></script>

<script src="assets/js/cssParser.js"></script>
<script src="assets/js/css-filters-polyfill.js"></script>
-->

<script type="text/javascript">
	Dropzone.autoDiscover = false;
</script>

// xử lý ajax thêm sản phẩm vào giỏ hàng
<script>
	$(document).ready(function () {
		$('#modal-orderview').modal({show:false});
		
		//them san pham vao gio hang
	    $(".btnAddToCart_tomiot").click(function() {
		   idSP = $('#LayIdSanPhamGioHang').val();
		  
		   $.ajax({
			url: "them-gio-hang",
			type: "get",
			data : {
				id: idSP,
			},
		   })
			.done(function(data) {
			  $('.sanpham_load').load('loadModalGioHang',function(){
						$('#modal-orderview').modal({show:true});
						$(".inTongTien_tomiot").text("Tổng tiền: " +data + " VNĐ");
			  });

			  
			})
			.fail(function() {
				console.log('Thêm thất bại');
			})
			.always(function() {
			  // console.log("complete");
			});

		   
		 });

		 // xóa san pham khoi gio hang
		 $(document).on("click",".btnXoaSP_tomiot",function(event){
			var idXoa = $(this).attr("data_idXoa");
			$.ajax({
				url: "cart/remove/"+idXoa,
				type: "get",
				
			   })
				.done(function(data) {
				  $('.sanpham_load').load('loadModalGioHang',function(){
					$('#modal-orderview').modal({show:true});
					$(".inTongTien_tomiot").text("Tổng tiền: " +data + " VNĐ");
				  });

				 

				})
				.fail(function() {
					console.log('Xóa thất bại');
				})
				.always(function() {
				  // console.log("complete");
				});
	
		 });


		 // thay doi so luong san pham
		 $(document).on("blur",".changeNumber_tomiot",function(event){
			var idSua = $(this).attr("data_idSua");
			$.ajax({
				url: "cart/update/"+idSua,
				type: "post",
				data:{
					soLuongSp:$(this).val(),
				}
			   })
				.done(function(data) {
				  $('.sanpham_load').load('loadModalGioHang',function(){
					$('#modal-orderview').modal({show:true});
					$(".inTongTien_tomiot").text("Tổng tiền: " +data + " VNĐ");
				  });
				})
				.fail(function() {
					console.log('Sửa thất bại');
				})
				.always(function() {
				  // console.log("complete");
				});
		});

		var bill = [];
		// tạo mảng lưu thong tin khác hàng
		$("#step2-to-step3").click(function(){
			
			bill["name"] = $("#HoTenKH").val();
			bill["SDTKH"] = $("#SDTKH").val();
			bill["EmailKH"] = $("#EmailKH").val();
			bill["DiaChiKH"] = $("#DiaChiKH").val();
			bill["ThongTinThemKH"] = $("#ThongTinThemKH").val();
			
			$("#HoTenKH2").text(bill["name"]);
			$("#SDTKH2").text(bill["SDTKH"]);
			$("#EmailKH2").text(bill["EmailKH"]);
			$("#DiaChiKH2").text(bill["DiaChiKH"]);
			$("#ThongTinThemKH2").text(bill["ThongTinThemKH"]);

		});

		$("#step2-to-step3").click(function(){
			$('.appendModal3NeConTrai').load('loadGioHangModal3NeConTrai');
		
		});

		$("#btn-confirm-order").click(function(){
			$.ajax({
				url: "taoBill",
				type: "post",
				data:{					
					name:bill["name"],
					SDTKH:bill["SDTKH"],
					EmailKH: bill["EmailKH"],
					DiaChiKH : bill["DiaChiKH"],
					ThongTinThemKH:bill["ThongTinThemKH"],

				}
			   })
				.done(function(data) {
					bill=[];
				})
				.fail(function() {

				})
				.always(function() {
				});

		});
	
	});



 </script>


 <script>
		$("#hienthigiohang_tomiot8485").click(function(){
			$('.sanpham_load').load('loadModalGioHang',function(){
				$('#modal-orderview').modal({show:true});
				
		});
	});
 </script>












