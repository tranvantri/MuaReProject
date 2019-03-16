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

    /* Image Zoom for product Modal */
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
    
    //Reponsive product model for Ipad (other devices the same size with Ipad)
    if(screen.width > 800 && screen.width < 1200){
        document.getElementById("modal-productview").setAttribute("style","height: auto;");
    } else {
       document.getElementById("modal-productview").setAttribute("style","height: 100%;"); 
    }

    document.getElementById('step1-bar').style.pointerEvents = 'none';
    document.getElementById('step2-bar').style.pointerEvents = 'none';
    document.getElementById('step3-bar').style.pointerEvents = 'none';
    
    document.getElementById("step1-to-step2").addEventListener("click", function(){
        document.getElementById("step2").classList.add('active');
        document.getElementById("step1").classList.remove('active');
        document.getElementById("step3").classList.remove('active');
        
        document.getElementById("step2-bar").classList.add('active');
        document.getElementById("step1-bar").classList.remove('active');
        document.getElementById("step3-bar").classList.remove('active');
    }); 
    document.getElementById("step2-to-step1").addEventListener("click", function(){
        document.getElementById("step1").classList.add('active');
        document.getElementById("step2").classList.remove('active');
        document.getElementById("step3").classList.remove('active');
        
        document.getElementById("step1-bar").classList.add('active');
        document.getElementById("step2-bar").classList.remove('active');
        document.getElementById("step3-bar").classList.remove('active');
    });
    document.getElementById("step2-to-step3").addEventListener("click", function(){
        document.getElementById("step3").classList.add('active');
        document.getElementById("step1").classList.remove('active');
        document.getElementById("step2").classList.remove('active');
        
        document.getElementById("step3-bar").classList.add('active');
        document.getElementById("step1-bar").classList.remove('active');
        document.getElementById("step2-bar").classList.remove('active');
    });
    document.getElementById("step3-to-step2").addEventListener("click", function(){
        document.getElementById("step2").classList.add('active');
        document.getElementById("step1").classList.remove('active');
        document.getElementById("step3").classList.remove('active');
        
        document.getElementById("step2-bar").classList.add('active');
        document.getElementById("step1-bar").classList.remove('active');
        document.getElementById("step3-bar").classList.remove('active');
    });
    
    document.getElementById("btn-confirm-order").addEventListener("click", function(){
        //document.getElementById("md-overlay-id").style.visibility = 'hidden';
       //document.getElementById("modal-productview").style.visibility = 'hidden';
        $('#md-overlay-id').hide();
        $('#modal-productview').hide();
        
    });

    
    $(".img-rounded").click(function(){
        $('#md-overlay-id').show();
        $('#modal-productview').show();
    });
    
	// trang quan ly don hang

    if($("#span-tuychon").length){
        document.getElementById("span-tuychon").onclick = function () {
            if(document.getElementById("a-phanhoi").style.display == 'none'){
                document.getElementById("a-phanhoi").style.display = 'block'; 
            } else {
                document.getElementById("a-phanhoi").style.display = 'none';
            }

        }  
    }
	  
    if($("#span-reply").length){
        document.getElementById("span-reply").onclick = function () {
        if(document.getElementById("input-reply-customer").style.display == 'none'){
            document.getElementById("input-reply-customer").style.display = 'block'; 
        } else {
            document.getElementById("input-reply-customer").style.display = 'none';
        }
        
    }
    }
    
    // For todays date;
    Date.prototype.today = function () { 
        return ((this.getDate() < 10)?"0":"") + this.getDate() +"/"+(((this.getMonth()+1) < 10)?"0":"") + (this.getMonth()+1) +"/"+ this.getFullYear();
    }
    // For the time now
    Date.prototype.timeNow = function () {
         return ((this.getHours() < 10)?"0":"") + this.getHours() +":"+ ((this.getMinutes() < 10)?"0":"") + this.getMinutes();
    }
    Date.prototype.monthyearNow = function () {
         return (((this.getMonth()+1) < 10)?"0":"") + (this.getMonth()+1) +"/"+ this.getFullYear();;
    }
    //Return true if 28 or false-29 in feb
    /*function isLeapYear(year) { 
        return new Date(year, 2, 0).getDate() > 28; 
    } */
    //analysis current time with comments's time to show between space
    function current_cmt_time(time){
        var now = new Date();
        var nowday = ((now.getDate() < 10)?"0":"") + now.getDate();
        var nowhour = ((now.getHours() < 10)?"0":"") + now.getHours();
        var nowminute = ((now.getMinutes() < 10)?"0":"") + now.getMinutes();
        var datetime = "" + new Date().timeNow() + ' ' +new Date().today();
        var firstM = 0;
        var i, cmtDay, cmtMonth;
        //analysis current time with comments's time to show between space
                        for(i = 0;i<time.length;i++){
                            if(time[i] == '/') {
                                firstM = i; 
                                break;
                            }
                        }
                        cmtminute = time.substring(3,5);
                        cmthour = time.substring(0,2);
                        cmtday = time.substring(firstM-2,firstM);
                        cmtMonthYear = time.substring(firstM+1,time.length);
                        //cmtYear = product.date_added.substring(firstM+4,product.date_added.length);
                        if(now.monthyearNow() == cmtMonthYear){
                            if(nowday != cmtday){
                                datetime = (parseInt(nowday) - parseInt(cmtday)).toString() + " ngày trước";
                            }
                            else if(nowhour != cmthour){
                                if((nowminute - cmtminute) >= 0){
                                    datetime = (parseInt(nowhour) - parseInt(cmthour)).toString() + " giờ trước"; 
                                }else{
                                    if((parseInt(nowhour) - parseInt(cmthour) - 1).toString() == '0'){
                                        datetime = ((60 - parseInt(cmtminute))+ parseInt(nowminute)).toString() + " phút trước";
                                    }
                                    else datetime = (parseInt(nowhour) - parseInt(cmthour) - 1).toString() + " giờ trước";
                                }
                                    
                            } else if (nowhour == cmthour){
                                datetime = (parseInt(nowminute) - parseInt(cmtminute)).toString() + " phút trước";
                            }
                        } else {
                            datetime = time;
                        }
                    //
        return datetime
    }
    $(document).on("click", "div.avatar-sp-L", function(event) {
        event.preventDefault();
        console.log("dad");
        var idPro = $(this).attr("dataIDProduct");
        //console.log(idPro);
        $.ajax({
                  type: "GET",
                  url: "getProductComment",
                  //contentType: "application/x-www-form-urlencoded",
                  async: false,
                contentType: "application/json",
                dataType: "json",
                data: { idProduct : idPro },
                    
                /*done: function(results) {
                    // Uhm, maybe I don't even need this?
                    JSON.parse(results);
                    return results;
                },
                fail: function( jqXHR, textStatus, errorThrown ) {
                    alert( 'Could not get posts, server response: ' + textStatus + ': ' + errorThrown );
                }
               }).responseJSON; // <-- this instead of .responseText*/
                    
                  success: function (response) {
                    var $div = document.getElementById("comment-part-L");
                    var createInput = true;
                    var createSubInput = true;
                $.each(response, function(index, product) {    // Iterate over the JSON array.
    		        	$("#comment-part-L > br").remove();
                        $("#comment-part-L > hr").remove();
                        $("#comment-part-L > p").remove();
                        $("#comment-part-L > div").remove();
      		 	});
                
 		        $.each(response, function(index, product) {
                    
                        var datetime = current_cmt_time(product.date_added);
                    
 		                if(createInput){ //create orinal comment input
                            createInput = false;
                        $("<div>").appendTo($div)
                        .append($("<br/>"))        // Create HTML <td> element, set its text content with id of currently iterated product and append it to the <tr>.
                        .append($("<hr>"))
                        .append($("<p>").text("Bình luận (0)"))
                        .append($("<div>").addClass('input-group-L').css('width','100%')
                               .append($("<input>").attr('type', 'text').addClass("form-control comment_comment item-comment-input").attr('placeholder', 'Nhập bình luận tại đây'))
                               )
                        .append($("<div>").attr('id',"qlcomment")
                               .append($("<div>").addClass("tab-content tab-content-L")
                                      .append($("<div>").attr('id','menu1').addClass('tab-pane active tab-pane-L qlcomment-menu1').attr('role','tabpanel')
                                            //  Product's comment
                                             .append($('<ul>').css('list-style-type','none')
                                                    .append($('<li>').addClass('comment-L comment-call-L'))))
                                      .append($("<div>").attr('id', 'menu2').addClass('tab-pane fade tab-pane-L').attr('role', 'tabpanel'))
                                      ))
                            }
                                                    if(product.idParent == '0')
                                                     { 
                                                         createSubInput = true;
                                                            $("<div>").appendTo(document.getElementsByClassName("comment-call-L"))
                                                          .append($('<a>').addClass('pull-left')
                                                                 .append($('<img>').addClass('lazy-image avatar').attr('src','https://muare.vn/images/avatars/avatar_male_s.png?v=2'))
                                                                 )
                                                            //Phần comment
                                                          .append($('<div>').addClass('comment-body-L')
                                                                 .append($('<div>').addClass('comment-heading-L')
                                                                         .append($('<span>').addClass('post_title_L')
                                                                                .append($('<span>').addClass('user-L').text(product.userName))
                                                                                .append($('<abbr>').text(" đã bình luận về sản phẩm "))
                                                                                .append($('<span>').css('float','right').css('font-size','13px')
                                                                                       .append($('<i>').addClass('far fa-clock').text(' '+datetime))
                                                                                       )
                                                                                )
                                                                        )
                                                                  .append($('<p>').addClass('content-L').text(product.content))
                                                                  .append($('<div>').addClass('span-reply')
                                                                         .append($('<span>').addClass('reply-L').text("Trả lời").click(function(){
 		                		           	                                  showcmtinput(null,null,'comment-thu-1', product.idComment); 
                                                                              event.preventDefault();
 		                				                                     })
                                                                         )
                                                                 )
                                                                  
                                                           ) //END comment 
                                                         var idToShowInput = product.idComment;
                                                          var idUser = product.idUser;
                                                     var userName = product.userName;
                                                        $.ajax({
                                                          type: "GET",
                                                          url: "getSubComment",
                                                          //contentType: "application/x-www-form-urlencoded",
                                                          async: false,
                                                        contentType: "application/json",
                                                        dataType: "json",
                                                        data: { idUser : idUser },
                                                        success: function (response2) {
                                                            //alert(response2)
                                                            $.each(response2, function(index, sub) {
                                                        var datetime = current_cmt_time(sub.date_added);
                                                        $("<div>").appendTo(document.getElementsByClassName("comment-call-L"))
                                                              .append($('<ul>').addClass('comments-list')
                                                         .append($('<ul>').css('list-style-type','none')
                                                                .append($('<li>').addClass('comment-L')
                                                                      .append($('<a>').addClass('pull-left')
                                                                             .append($('<img>').addClass('lazy-image avatar').attr('src','https://muare.vn/images/avatars/avatar_male_s.png?v=2'))
                                                                             )
                                                                        //Phần comment
                                                                      .append($('<div>').addClass('comment-body-L')
                                                                             .append($('<div>').addClass('comment-heading-L')
                                                                                     .append($('<span>').addClass('post_title_L')
                                                                                            .append($('<span>').addClass('user-L').text(sub.userName))
                                                                                             .append($('<abbr>').text(" Trả lời @"+userName))
                                                                                             .append($('<span>').css('float','right').css('font-size','13px')
                                                                                       .append($('<i>').addClass('far fa-clock').text(' '+datetime))
                                                                                       )
                                                                                            )
                                                                                    )
                                                                              
                                                                              .append($('<p>').addClass('content-L').text(sub.content))
                                                                              .append($('<div>').addClass('span-reply')
                                                                                     .append($('<span>').addClass('reply-L').text("Trả lời").click(function(){
                                                                                          showcmtinput(null,null,'comment-thu-1',idToShowInput); 
                                                                                          event.preventDefault();
                                                                                         })
                                                                                     )
                                                                             )
                                                                       )
                                                                )
                                                         ))//END sub-comment
                                                        //Reply Input will show-hide when click any reply
                                                        /*if(createSubInput && index == (response2.length-1)){
                                                            alert(index);
                                                            createSubInput = false;
                                                            $("<div>").appendTo(document.getElementsByClassName("comments-list"))
                                                            .append($('<div>').addClass('input-reply').css('margin-left','16px')
                                                               .append($('<div>').addClass('input-group-L').css('width','100%')
                                                                      .append($('<input>').addClass("form-control comment_comment item-comment-input").attr('type','text').attr('placeholder','Nhập trả lời tại đây và enter'))
                                                                      )
                                                               ) //END Reply Input 
                                                        }*/
                                                            });
                                                          },
                                                          error: function () {
                                                          },
                                                          complete: function (response) {
                                                          }
                                                        });  // end Ajax   */
                                                    }
                                                    else {//sub-comment
                                                     
                                                       
                                                      
                                                     } //END check idParent
                                                    //)
                                             //) //  END Product's comment
                                              
                                              
                                      //) //END menu1 tab
                                      //.append($("<div>").attr('id', 'menu2').addClass('tab-pane fade tab-pane-L').attr('role', 'tabpanel'))
                               //)
                            //) //END div id = qlcomment
                                                    if(createSubInput){ //create comment input when click tra loi
                                                            //alert(idToShowInput);
                                                            createSubInput = false;
                                                            $("<div>").appendTo(document.getElementsByClassName("comment-call-L"))
                                                            .append($('<div>').attr('id','idinput'+idToShowInput).addClass('input-reply').css('margin','8px 0px 10px 50px').css('display','none')
                                                               .append($('<div>').addClass('input-group-L').css('width','100%')
                                                                      .append($('<input>').addClass("form-control comment_comment item-comment-input").attr('type','text').attr('placeholder','Nhập trả lời tại đây và enter'))
                                                                      )
                                                               ) //END Reply Input 
                                                        }
                    firstM = 0;
                    i = 0;
 		        });//END $.each(responseJson, function(index, product)*/
                    //OnSuccess(response)
                  },
                  error: function () {
                    alert("error");  
                    //OnError(response)
                  },
                  complete: function (response) {
                    // Handle the complete event
                    //alert("ajax completed " + JSON.stringify(response));
                  }
                });  // end Ajax   
        
        
      });
    
});

/* Comment part */
    var divs = document.getElementsByTagName('div');

                function hidecmtinput(commentid){
                    //ẩn tất cả các input dùng để nhập cmt vào của khách hàng, trừ input chính của sản phẩm (click -> show)
                    for (var i = 0, l = divs.length; i < l; i++) {
                                if (divs[i].getAttribute('class') == 'input-reply'){
                                    //alert(divs[i].getAttribute('id'));
                                    //if (divs[i].style.display == 'none') divs[i].style.display = 'none';
                                    //else
                                    //divs[i].style.display = 'none';
                            }
                    }
                }
                function showcmtinput(fullname, fatherfullname, commentid, idToShowInput) {
                    if(fullname == null) fullname = 'Khách';
                    if(fatherfullname == null) fatherfullname = 'Khách';
                    //hidecmtinput(commentid); //ẩn tất cả input để nhập cmt khi ng dùng click vào input mới (show 1 cái thôi)
                    for (var i = 0, l = divs.length; i < l; i++) {
                                if (divs[i].getAttribute('class') == 'input-reply' && divs[i].getAttribute('id') == ('idinput'+idToShowInput)){
                                    //alert(divs[i].getAttribute('id'));
                                    if (divs[i].style.display == 'block') {
                                        divs[i].style.display = 'none';
                                    }
                                    else{
                                        divs[i].style.display = 'block';
                                        var divchild = divs[i].children;
                                        var divchildchild = divchild[0].children;
                                        divchildchild[0].setAttribute('placeholder','@'+fatherfullname+':');
                                    }
                                }
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

