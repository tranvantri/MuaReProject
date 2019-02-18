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
		  	
		  	$('#view-post-tt-dv').parent().addClass('col-lg-10 col-md-10');
		  	$('#view-post-tt-dv').parent().removeClass('col-lg-7 col-md-7');
		}

		 if($(window).width()>800 && $(window).width()<1200){
			// console.log("800-1200");
			$('#menu-category').parent().addClass('col-lg-2 col-md-2');
			$('#menu-category').parent().show();			
			$('#view-post-tt-dv').parent().addClass('col-lg-10 col-md-10');
		  	$('#view-post-tt-dv').parent().removeClass('col-lg-12 col-md-12');
		
		}if($(window).width()>1200){
			// console.log(">1200");
		  	$('#search-zone').parent().show();
		  	$('#search-zone').parent().addClass('col-lg-3 col-md-3');

		  	$('#view-post-tt-dv').parent().addClass('col-lg-7 col-md-7');
		  	$('#view-post-tt-dv').parent().removeClass('col-lg-10 col-md-10');
		}

		if($(window).width() < 800){
			// console.log(" < 800");
			$('#menu-category').parent().hide();
			$('#menu-category').parent().removeClass('col-lg-2 col-md-2');		  	
		  	$('#view-post-tt-dv').parent().addClass('col-lg-12 col-md-12');
		  	$('#view-post-tt-dv').parent().removeClass('col-lg-10 col-md-10');
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
	        case 'username' :
	            $(".phone-number-login").hide();
	            $(".email-login").hide();
	            $(".username-login").show();
	            break;
	        case 'phone' :
	            $(".username-login").hide();
	            $(".email-login").hide();
	            $(".phone-number-login").show();
	            break;
            case 'email' :
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


	//set cookie cho dia diem

	$(document).on('click', 'div.dropdown-menu a.dropdown-item', function(event) {
		event.preventDefault();
		var idPlace = $(this).attr('href');
		$.ajax({
			url: 'set-cookie/'+idPlace,
			type: 'get',
		})
		.done(function() {
			// console.log("success");
			location.reload();
		})
		.fail(function() {
			// console.log("error");
		})
		.always(function() {
			// console.log("complete");
		});
		
	});
	// Sap xep trang chi tiet danh muc

	$('#sorting_select').on('change', function() {
	  var url = this.value;
	  window.location.href = url;
	});
    
    function imageZoom(imgID, resultID) {
          var img, lens, result, cx, cy;
          img = document.getElementById(imgID);
          result = document.getElementById(resultID);
          /*create lens:*/
          lens = document.createElement("DIV");
          lens.setAttribute("class", "img-zoom-lens");
          /*insert lens:*/
          img.parentElement.insertBefore(lens, img);
          /*calculate the ratio between result DIV and lens:*/
          cx = result.offsetWidth / lens.offsetWidth;
          cy = result.offsetHeight / lens.offsetHeight;
          /*set background properties for the result DIV:*/
          result.style.backgroundImage = "url('" + img.src + "')";
          result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
          /*execute a function when someone moves the cursor over the image, or the lens:*/
          lens.addEventListener("mousemove", moveLens);
          img.addEventListener("mousemove", moveLens);
          /*and also for touch screens:*/
          lens.addEventListener("touchmove", moveLens);
          img.addEventListener("touchmove", moveLens);
          function moveLens(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image:*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            /*calculate the position of the lens:*/
            x = pos.x - (lens.offsetWidth / 2);
            y = pos.y - (lens.offsetHeight / 2);
            /*prevent the lens from being positioned outside the image:*/
            if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
            if (x < 0) {x = 0;}
            if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
            if (y < 0) {y = 0;}
            /*set the position of the lens:*/
            lens.style.left = x + "px";
            lens.style.top = y + "px";
            /*display what the lens "sees":*/
            result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
          }
          function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return {x : x, y : y};
          }
        }
	// Initiate zoom effect:
    imageZoom("myimage", "myresult");
    //hover on myimage -> show myresult
    function showZoomImg() {
      document.getElementById("myresult-div").style.display = "block";
    }
    function hideZoomImg() {
      document.getElementById("myresult-div").style.display = "none";
    }
    
    
    
    
	
	// trang quan ly don hang
	document.getElementById("span-tuychon").onclick = function () {
        if(document.getElementById("a-phanhoi").style.display == 'none'){
            document.getElementById("a-phanhoi").style.display = 'block'; 
        } else {
            document.getElementById("a-phanhoi").style.display = 'none';
        }
        
    }    
    
    document.getElementById("span-reply").onclick = function () {
        if(document.getElementById("input-reply-customer").style.display == 'none'){
            document.getElementById("input-reply-customer").style.display = 'block'; 
        } else {
            document.getElementById("input-reply-customer").style.display = 'none';
        }
        
    }    

});
function showPicture(imgs) {
	var expandImg = document.getElementById("expandedImg");
// var imgText = document.getElementById("imgtext");
expandImg.src = imgs.src;
// imgText.innerHTML = imgs.alt;
// expandImg.parentElement.style.display = "block";
}
function scrollleft() {
var elmnt = document.getElementById("abc123");
elmnt.scrollLeft += 50;
}
function scrollright() {
var elmnt1 = document.getElementById("abc123");
elmnt1.scrollLeft -= 50;
}


	
	                          
	   
    
	

