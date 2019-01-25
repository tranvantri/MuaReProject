$(document).ready(function() {

	// Responnse giao dien trang chu
	$(window).resize(function(){
		if($(window).width()<=1200){
			// trang chu
		  	$('.content-left').removeClass('col-lg-9 col-md-9');
		  	$('.content-left').addClass('col-lg-12 col-md-12');
		}else {
			// trang chu
			$('.content-left').addClass('col-lg-9 col-md-9');
		  	$('.content-left').removeClass('col-lg-12 col-md-12');	  	
		  	
		}

		if($(window).width()<=1200){		
			// console.log("<=1200");
		  	// trang chi tiet danh muc
		  	$('#search-zone').parent().hide();
		  	$('#search-zone').parent().removeClass('col-lg-3 col-md-3');
		  	
		  	$('#view-post').parent().addClass('col-lg-10 col-md-10');
		  	$('#view-post').parent().removeClass('col-lg-7 col-md-7');
		}

		 if($(window).width()>800 && $(window).width()<1200){
			// console.log("800-1200");
			$('#menu-category').parent().addClass('col-lg-2 col-md-2');
			$('#menu-category').parent().show();			
			$('#view-post').parent().addClass('col-lg-10 col-md-10');
		  	$('#view-post').parent().removeClass('col-lg-12 col-md-12');
		
		}if($(window).width()>1200){
			// console.log(">1200");
		  	$('#search-zone').parent().show();
		  	$('#search-zone').parent().addClass('col-lg-3 col-md-3');

		  	$('#view-post').parent().addClass('col-lg-7 col-md-7');
		  	$('#view-post').parent().removeClass('col-lg-10 col-md-10');
		}

		if($(window).width() < 800){
			// console.log(" < 800");
			$('#menu-category').parent().hide();
			$('#menu-category').parent().removeClass('col-lg-2 col-md-2');		  	
		  	$('#view-post').parent().addClass('col-lg-12 col-md-12');
		  	$('#view-post').parent().removeClass('col-lg-10 col-md-10');
		  	if ($('#menu-left-user-L').length) {
		  		$('#menu-left-user-L').setAttribute("style", "font-size:12px;");
		  	}
            
		}


	});
	// owl-carousel sản phẩm độc đáo
	if($('.promoteProduct.row.owl-carousel').length){
		$('.promoteProduct.row.owl-carousel').owlCarousel({
			loop:true,
			autoplayHoverPause:true,
			autoplay:true,
			autoplayTimeout:3000,
			responsiveClass:true,
			responsive:{
				0:{
					items:2,
					nav:true,
					loop:true,
					
				},
				600:{
					items:3,
					nav:true,
					loop:true
				},
				1000:{
					items:4,
					nav:true,
					loop:true,
				}
			}

		});
	}

	//khi load trang login, hide muc đăng ký đi
	
	$("#dangkysection").hide();
	$(".email-login").hide();
	$(".phone-number-login").hide();


	$("#buttonDangKy").click(function() {
	  $("#dangnhapsection").hide();
	  $("#dangkysection").show();
	  $("#buttonDangKy").hide();
	  $(".radioTypeLogin").hide();
	});

	$('input[type=radio][name=typelogin]').on('change', function(){
	    switch($(this).val()){
	        case '1' :
	            $(".phone-number-login").hide();
	            $(".email-login").hide();
	            $(".username-login").show();
	            break;
	        case '2' :
	            $(".username-login").hide();
	            $(".email-login").hide();
	            $(".phone-number-login").show();
	            break;
            case '3' :
	            $(".phone-number-login").hide();
	            $(".username-login").hide();
	            $(".email-login").show();
	            break;
	    }            
	});

	// back to top

	$(window).scroll(function(event) {
		var vt_body= $('html,body').scrollTop();
		if(vt_body >= 300){
			$('.back-to-top').addClass('show');
		}else {
			$('.back-to-top').removeClass('show');
		}
	});

	// multi select
	if ($('#chon-danh-muc-multi-Tr').length) {
		$('#chon-danh-muc-multi-Tr').fSelect();
	}
	if ($('#chon-loai-san-pham-Tr').length) {
		$('#chon-loai-san-pham-Tr').fSelect();
	}

	//click chon anh

	if($('.add-new-Tr').length){
		$('.add-new-Tr').click(function(event) {
			$('.upload-service').trigger('click');
		});
	}

	if($('.add-img-Tr').length){
		$('.add-img-Tr').click(function(event) {
			$('.upload-product-Tr').trigger('click');
		});
	}
	
});

	
	                          
	   
    
	

