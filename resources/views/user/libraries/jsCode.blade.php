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
	    $(".btnAddToCart_tomiot").click(function() {
		   idSP = $('#LayIdSanPhamGioHang').val();
		   console.log("id sản phẩm: " +idSP);
		  
		   $.ajax({
			url: "them-gio-hang",
			type: "get",
			data : {
				id: idSP,
			},
		   })
			.done(function() {
			  // console.log("success");
			  console.log('Them thành công');
			  $('.sanpham_load').load('loadModalGioHang',function(){
				$('#modal-orderview').modal({show:true});
				console.log('sdfsdffsdf');
			  });
			})
			.fail(function() {
				console.log('Thêm thất bại');
			})
			.always(function() {
			  // console.log("complete");
			});

		   
		 });
		 $(document).on("click",".btnXoaSP_tomiot",function(event){
			var idXoa = $(this).attr("data_idXoa");
			console.log(idXoa);
			$.ajax({
				url: "cart/remove/"+idXoa,
				type: "get",
				
			   })
				.done(function() {
				  // console.log("success");
				  console.log('Xóa thành công');
				  $('.sanpham_load').load('loadModalGioHang',function(){
					$('#modal-orderview').modal({show:true});
					console.log('sdfsdffsdf');
				  });
				})
				.fail(function() {
					console.log('Xóa thất bại');
				})
				.always(function() {
				  // console.log("complete");
				});
	
		 });



		 $(document).on("blur",".changeNumber_tomiot",function(event){
			var idSua = $(this).attr("data_idSua");
			$.ajax({
				url: "cart/update/"+idSua,
				type: "post",
				data:{
					soLuongSp:$(this).val(),
				}
			   })
				.done(function() {
				  // console.log("success");
				  console.log('Sửa thành công');
				  $('.sanpham_load').load('loadModalGioHang',function(){
					$('#modal-orderview').modal({show:true});
					console.log('sdfsdffsdf');
				  });
				})
				.fail(function() {
					console.log('Sửa thất bại');
				})
				.always(function() {
				  // console.log("complete");
				});
		});
	});



 </script>












