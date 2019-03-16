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
    
    /* Hiển thị popover cho notifications/user/$ icon khi đã đăng nhập trên header */
    $("[data-toggle=popover-notifications]").popover({
        html : true,
        content: function() {
          var content = $(this).attr("data-popover-content");
          return $(content).children(".content-notifications-L").html();
        }
        /*title: function() {
          var title = $(this).attr("data-popover-content");
          return $(title).children(".heading-notifications").html();
        }*/
    });
    $("[data-toggle=popover-profile]").popover({
        html : true,
        content: function() {
          var content = $(this).attr("data-popover-content");
          return $(content).children(".content-profile-L").html();
        }
    });
    $("[data-toggle=popover-yourcoin]").popover({
        html : true,
        content: function() {
          var content = $(this).attr("data-popover-content");
          return $(content).children(".content-yourcoin-L").html();
        }
    });
    /* hide all popover when focus out */
    $("html").on("mouseup", function (e) {
        var l = $(e.target);
        if (l[0].className.indexOf("popover-yourcoin") == -1) {
            $(".popover").each(function () {
                $(this).popover("hide");
            });
        }
    });
    /*$('body').on('click', function (e) {
        //did not click a popover toggle, or icon in popover toggle, or popover
        if ($(e.target).data('toggle') !== 'popover-yourcoin'
            && $(e.target).parents('[data-toggle="popover-yourcoin"]').length === 0
            && $(e.target).parents('.popover-yourcoin.in').length === 0) { 
            $('[data-toggle="popover-yourcoin"]').popover('hide');
        }
        if ($(e.target).data('toggle') !== 'popover-profile'
            && $(e.target).parents('[data-toggle="popover-profile"]').length === 0
            && $(e.target).parents('.popover-profile.in').length === 0) { 
            $('[data-toggle="popover-profile"]').popover('hide');
        }
        if ($(e.target).data('toggle') !== 'popover-notifications'
            && $(e.target).parents('[data-toggle="popover-notifications"]').length === 0
            && $(e.target).parents('.popover-notifications.in').length === 0) { 
            $('[data-toggle="popover-notifications"]').popover('hide');
        }
    });*/
   
  // owl-carousel sản phẩm độc đáo
  if ($(".promoteProduct.row.owl-carousel").length) {
    $(".promoteProduct.row.owl-carousel").owlCarousel({
      loop: true,
      autoplayHoverPause: true,
      autoplay: true,
      autoplayTimeout: 3000,
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
          nav: true,
          loop: true
        },
        600: {
          items: 3,
          nav: true,
          loop: true
        },
        1000: {
          items: 4,
          nav: true,
          loop: true
        }
      }
    });
  }


  // owl-carousel 
  if ($(".list-img-wrap-v.owl-carousel").length) {
    $(".list-img-wrap-v.owl-carousel").owlCarousel({
      loop: true,
      autoplayHoverPause: true,
      autoplay: true,
      autoplayTimeout: 3000,
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
          // nav: true,
          loop: true
        },
        600: {
          items: 3,
          // nav: true,
          loop: true
        },
        1000: {
          items: 4,
          // nav: true,
          loop: true
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

  $("input[type=radio][name=typelogin]").on("change", function() {
    switch ($(this).val()) {
      case "username":
        $(".phone-number-login").hide();
        $(".email-login").hide();
        $(".username-login").show();
        break;
      case "phone":
        $(".username-login").hide();
        $(".email-login").hide();
        $(".phone-number-login").show();
        break;
      case "email":
        $(".phone-number-login").hide();
        $(".username-login").hide();
        $(".email-login").show();
        break;
    }
  });

  // back to top

  $(window).scroll(function(event) {
    var vt_body = $("html,body").scrollTop();
    if (vt_body >= 300) {
      $(".back-to-top").addClass("show");
    } else {
      $(".back-to-top").removeClass("show");
    }
  });

  $('.back-to-top').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 700); 
        return false; 
    });

  // multi select
  if ($("#chon-danh-muc-multi-Tr").length) {
    $("#chon-danh-muc-multi-Tr").fSelect();
  }
  if ($("#chon-loai-san-pham-Tr").length) {
    $("#chon-loai-san-pham-Tr").fSelect();
  }

  //click chon anh

  if ($(".add-new-Tr").length) {
    $(".add-new-Tr").click(function(event) {
      $(".upload-service").trigger("click");
    });
  }

  if ($(".add-img-Tr").length) {
    $(".add-img-Tr").click(function(event) {
      $(".upload-product-Tr").trigger("click");
    });
  }

  //set cookie cho dia diem

  $(document).on("click", "div.dropdown-menu.place a.dropdown-item", function(event) {
    event.preventDefault();
    var idPlace = $(this).attr("data");
    $.ajax({
      url: "set-cookie/" + idPlace,
      type: "get"
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
	
  $("#sorting_select").on("change", function() {
    var url = this.value;
    window.location.href = url;
  });

  //Set id category cho search
  $(document).on('click', '.searchtypes a.dropdown-item', function(event) {
    event.preventDefault();
    /* Act on the event */
    var categoryParent_id = $(this).attr('data');
    var categoryParent_name = $(this).html();
    $('#categoryParent_id').val(categoryParent_id) ;
    if(categoryParent_id == 'all'){
      $('.searchtypes button.catename').html('Tất cả');
    }else{
      $('.searchtypes button.catename').html(categoryParent_name);
    }
  });

    /* Image Zoom for product Modal */

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
    function imageZoom(imgID, resultID) {
          var img, lens, result, cx, cy;
          img = document.getElementById(imgID);
          result = document.getElementById(resultID);
          /*create lens:*/
          lens = document.createElement("DIV");
          lens.setAttribute("class", "img-zoom-lens");
          /*img.setAttribute("style","opacity: 0.2;");
                  lens.setAttribute("style","opacity: 1;");*/
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
          
          
        }
	// Initiate zoom effect:
    imageZoom("myimage", "myresult");
    
    //Reponsive product model for Ipad (other devices the same size with Ipad)
    if(screen.width > 800 && screen.width < 1200){
        document.getElementById("modal-productview").setAttribute("style","height: auto;");
    } else {
       document.getElementById("modal-productview").setAttribute("style","height: 100%;"); 
    }


    if($('#step1-bar').length){
      document.getElementById('step1-bar').style.pointerEvents = 'none';
    }
    if($('#step2-bar').length){
      document.getElementById('step2-bar').style.pointerEvents = 'none';
    }
    if($('#step3-bar').length){
      document.getElementById('step3-bar').style.pointerEvents = 'none';
    }
    



    
    
    if($('#step1-to-step2').length){
      document.getElementById("step1-to-step2").addEventListener("click", function(){
          document.getElementById("step2").classList.add('active');
          document.getElementById("step1").classList.remove('active');
          document.getElementById("step3").classList.remove('active');
          
          document.getElementById("step2-bar").classList.add('active');
          document.getElementById("step1-bar").classList.remove('active');
          document.getElementById("step3-bar").classList.remove('active');
      }); 
    }

    if($('#step2-to-step1').length){
      document.getElementById("step2-to-step1").addEventListener("click", function(){
          document.getElementById("step1").classList.add('active');
          document.getElementById("step2").classList.remove('active');
          document.getElementById("step3").classList.remove('active');
          
          document.getElementById("step1-bar").classList.add('active');
          document.getElementById("step2-bar").classList.remove('active');
          document.getElementById("step3-bar").classList.remove('active');
      }); 
    }
    
    
    if($('#step2-to-step3').length){
        document.getElementById("step2-to-step3").addEventListener("click", function(){
          document.getElementById("step3").classList.add('active');
          document.getElementById("step1").classList.remove('active');
          document.getElementById("step2").classList.remove('active');
          
          document.getElementById("step3-bar").classList.add('active');
          document.getElementById("step1-bar").classList.remove('active');
          document.getElementById("step2-bar").classList.remove('active');
      });
    }

    if($('#step3-to-step2').length){
        document.getElementById("step3-to-step2").addEventListener("click", function(){
          document.getElementById("step2").classList.add('active');
          document.getElementById("step1").classList.remove('active');
          document.getElementById("step3").classList.remove('active');
          
          document.getElementById("step2-bar").classList.add('active');
          document.getElementById("step1-bar").classList.remove('active');
          document.getElementById("step3-bar").classList.remove('active');
      });
    }
    
    
    if($('#btn-confirm-order').length){
      document.getElementById("btn-confirm-order").addEventListener("click", function(){
          //document.getElementById("md-overlay-id").style.visibility = 'hidden';
         //document.getElementById("modal-productview").style.visibility = 'hidden';
          $('#md-overlay-id').hide();
          $('#modal-productview').hide();
          
      });
    }
    
    $(".img-rounded").click(function(){
        $('#md-overlay-id').show();
        $('#modal-productview').show();
    });
    
	// trang quan ly don hang

  if($('#span-tuychon').length){
  	document.getElementById("span-tuychon").onclick = function () {
          if(document.getElementById("a-phanhoi").style.display == 'none'){
              document.getElementById("a-phanhoi").style.display = 'block'; 
          } else {
              document.getElementById("a-phanhoi").style.display = 'none';
          }
          
      }
  }    
    

    if($('#span-reply').length){
        document.getElementById("span-reply").onclick = function () {
            if(document.getElementById("input-reply-customer").style.display == 'none'){
                document.getElementById("input-reply-customer").style.display = 'block'; 
            } else {
                document.getElementById("input-reply-customer").style.display = 'none';
            }
            
        }
      }
    
});

/* Comment part */
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
/* END comment part */



//JS product-info
imageZoom1("expandedImg", "myresult-v");
hideZoomImgPro();
function showPicture(imgs) {
	var expandImg = document.getElementById("expandedImg");
  // var imgText = document.getElementById("imgtext");
	expandImg.src = imgs.src;
	var imgResult = document.getElementById("myresult-v");
  // var imgText = document.getElementById("imgtext");
	imgResult.style.backgroundImage= "url('" + imgs.src + "')";
	// console.log(imgResult.style.backgroundImage);
	
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
function showZoomImgPro() {
	document.getElementById("myresult-v").style.display = "block";
	var lens= document.getElementById("img-zoom-lens-pro-v");
	lens.style.display = "block";
}
function hideZoomImgPro() {
	document.getElementById("myresult-v").style.display = "none";
	var lens= document.getElementById("img-zoom-lens-pro-v");
	lens.style.display = "none";
}
function imageZoom1(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
	result = document.getElementById(resultID);

  /*create lens:*/
  lens = document.createElement("DIV");
	lens.setAttribute("class", "img-zoom-lens-pro-v");
  lens.setAttribute("id", "img-zoom-lens-pro-v");  
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
	result.style.backgroundImage = "url('" + img.src + "')";
	// console.log(img.src);
  result.style.backgroundSize = img.width * cx + "px " + img.height * cy + "px";
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
    x = pos.x - lens.offsetWidth / 2;
    y = pos.y - lens.offsetHeight / 2;
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {
      x = img.width - lens.offsetWidth;
    }
    if (x < 0) {
      x = 0;
    }
    if (y > img.height - lens.offsetHeight) {
      y = img.height - lens.offsetHeight;
    }
    if (y < 0) {
      y = 0;
    }
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + x * cx + "px -" + y * cy + "px";
  }
  function getCursorPos(e) {
    var a,
      x = 0,
      y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return { x: x, y: y };
  }
}
//END JS product-info
