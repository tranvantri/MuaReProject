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
      //dots: ($(".owl-carousel .img-small").length > 5) ? true: false,
      //loop:($(".owl-carousel .img-small").length > 5) ? true: false,
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


  if ($('#my-dropzone').length) {
   // var category1 = '';

    
   var myDropzone = new Dropzone("#my-dropzone", {
     url:"dang-tin-san-pham",
     paramName: "files",
     uploadMultiple:true,
     addRemoveLinks: true,
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     dictRemoveFile: "Remove",
     maxFilesize: 3,
     maxFiles: 10,
     autoProcessQueue: false,
     method: 'POST',
       acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
       dictFileTooBig:"Ảnh lớn hơn 3MB",

       init: function(){
         var submitButton = document.querySelector('#submit-all');
         var locationItem="";
         myDropzone1 = this;
         submitButton.addEventListener("click", function(){  
         
            locationItem= $(".locationItem:checked").map(function(){
              return $(this).val();
            }).get();
            // console.log(locationItem);
                       
              
           myDropzone1.processQueue(); 
                
            // console.log(locationItem);
         });
          
         
         myDropzone1.on("sending", function(file, xhr, formData){              
                     formData.append("nameService", $('#nameService').val());
                     formData.append("descriptionService", $('#descriptionService').val());
                     formData.append("priceService", $('#priceService').val());
                     formData.append("idCateService", $("#chon-danh-muc-multi-Tr").val());
                     formData.append("idPlaceService", $("#location-post-Tr").val());
                     formData.append("name", $('#name').val());
                     formData.append("phone", $('#phone').val());
                     formData.append("email", $('#email').val());
                     formData.append("addressUser", $('#addressUser').val());
                     formData.append("nameProduct", $('#nameProduct').val());
                     formData.append("priceProduct", $('#priceProduct').val());
                     formData.append("descriptionProduct", $('#descriptionProduct').val());
                     formData.append("idCateProduct", $('#chon-loai-san-pham-Tr').val());
                     formData.append("status", $('.statusSale:checked').val());
                     formData.append("statusProduct", $('.statusItem:checked').val());
                     formData.append("locationItem", locationItem);


             });

          
         this.on("complete", function(data){
         
              // console.log(data);
             // window.location.href = url;
         });         
       },
        
            error: function (file, response) {
       
            // console.log(response);
       // }
       },
       success: function(file, response){
                // console.log('WE NEVER REACH THIS POINT.');
                console.log(response);
                 window.location = response;
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
          $('.md-overlay-id').hide();
          $('#modal-productview').hide();
          
      });
    }
    
    $(".img-rounded").click(function(){
        $('.md-overlay-id').show();
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
    
    
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
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
    /****************************************** COMMENT PRODUCT******************************************************/
    var current_userId;
    function getuserid(url){
        $.ajax({
                  type: "GET",
                  url: url,
                  //contentType: "application/x-www-form-urlencoded",
                  async: false,
                contentType: "application/json",
                dataType: "json",
               //data: { number : '1' },
                  success: function (response) {
                      current_userId = response;
                  },
                  error: function () {
                    //alert("error get userid");  
                  },
                  complete: function (response) {}
                });  // end Ajax    
    }

    function loadproductinfo(idPro,url){
        //event.preventDefault();
        //console.log(idPro);
        $.ajax({
                  type: "GET",
                  url: url,
                  //contentType: "application/x-www-form-urlencoded",
                  async: false,
                contentType: "application/json",
                dataType: "json",
                data: { idProduct : idPro },
                  success: function (response) {
                      $.each(response, function(index, product) {
                          var sellerName, sellerPhone;
                        //Get name & phone of seller
                        $.ajax({
                            type: "GET",
                            url: "getSeller",
                            async: false,
                            contentType: "application/json",
                            dataType: "json",
                            data: { productUserId : product.productUserId},

                            success: function (response) {
                                $.each(response, function(index, product) {    // Iterate over the JSON array.
                                    sellerName = product.userName;
                                    sellerPhone = product.userPhone;
                                });
                                
                            },
                            error: function () {
                                //alert('error post comment');  
                            },
                            complete: function (response) {}
                        });  // end Ajax 
                          
    		        	$(".productinfo-title").text(product.productName);
                        $(".productinfo-content").text(product.description);
                        $(".productinfo-price").text(product.productPrice+' VNĐ');
                        $("#myimage").attr('src',product.productImage);
                        //$("#myresult").attr('',product.productImage);
                        var myresult = document.getElementById("myresult"); //chitietdanhmuc - modal
                        myresult.style.backgroundImage= "url('" + product.productImage + "')";
                        $(".productinfo-seller > a").text(sellerName);
                        $(".productinfo-phone-text").text(sellerPhone);
                      });
                  },
                  error: function () {},
                  complete: function (response) {}
        });
    }
    function postcomment(idUser_post,content_post,idParent_post,parentName_post,date_post,idProduct_post,idBlock_post,url){
                //alert('iduser: '+idUser_post+'; content: '+content_post+'; parent: '+parentName_post+'; date: '+date_post);
        $.ajax({
            type: "GET",
            url: url,
            async: false,
            contentType: "application/json",
            dataType: "json",
            data: { idUser_post : idUser_post, content_post : content_post, idParent_post : idParent_post, parentName_post : parentName_post, date_post : date_post, idProduct_post : idProduct_post, idBlock_post : idBlock_post},

            success: function (response) {
                //alert(response);
                if(response == 0){
                    loadcomment(idPro,$getcmt_url);
                    $('<input>').value = ""
                } else alert(response);
            },
            error: function () {
                //alert('error post comment');  
            },
            complete: function (response) {}
        });  // end Ajax  
    }
    function deletecomment(idComment,url){
                //alert('iduser: '+idUser_post+'; content: '+content_post+'; parent: '+parentName_post+'; date: '+date_post);
        $.ajax({
            type: "GET",
            url: url,
            async: false,
            contentType: "application/json",
            dataType: "json",
            data: { idComment : idComment},
            success: function (response) {
                //alert(response);
                if(response == 0){
                    loadcomment(idPro,$getcmt_url);
                    $('<input>').value = ""
                } else alert(response);
            },
            error: function () {
                //alert('error post comment');  
            },
            complete: function (response) {}
        });  // end Ajax  
    }
    
    var idPro = '';
    var $divname = "comment-part-L";
    var $getcmt_url = "getProductComment";
    var $subcmt_url = "getSubComment";
    var $postcmt_url = "postSubComment";
    var $idcmt_url = "deleteComment";
    var $div = document.getElementById("comment-part-L");
                          
    function loadcomment(idPro,url){
        //event.preventDefault();
        //console.log(idPro);
        $.ajax({
                  type: "GET",
                  url: url,
                  //contentType: "application/x-www-form-urlencoded",
                  async: false,
                contentType: "application/json",
                dataType: "json",
                data: { idProduct : idPro },
                  success: function (response) {
                      
                      
                      if(url == 'getTinDangComment'){
                          $getcmt_url = "getTinDangComment";
                          $divname = "comment-tindang-L";
                          $subcmt_url = "getSubTDComment";
                          $postcmt_url = "postSubTDComment";
                          $idcmt_url = "deleteTDComment";
                          //$divname = "comment-tindang-L";
                          
                          $div = document.getElementById("comment-tindang-L");
                      } else if(url == 'getServiceComment'){
                          $getcmt_url = "getServiceComment";
                          $divname = "comment-service-L";
                          $subcmt_url = "getSubSerComment";
                          $postcmt_url = "postSubSerComment";
                          $idcmt_url = "deleteSerComment";
                          //$divname = "comment-tindang-L";
                          
                          $div = document.getElementById("comment-service-L");
                      }
                      
                if(response == ''){
                    //remove all before push data
                        $("#"+$divname+" > br").remove();
                        $("#"+$divname+" > hr").remove();
                        $("#"+$divname+" > p").remove();
                        $("#"+$divname+" > div").remove();
                    
                    if($divname == "comment-part-L") loadproductinfo(idPro,'getProductInfo');
                    
                    $("<div>").appendTo($div)
                            .append($("<br/>"))        // Create HTML <td> element, set its text content with id of currently iterated product and append it to the <tr>.
                            .append($("<hr>"))
                            .append($("<p>").text("Bình luận (0)"))
                            .append($("<div>").addClass('input-group-L').css('width','100%')
                                   .append($("<input>").attr('type', 'text').addClass("form-control comment_comment item-comment-input").attr('placeholder', 'Nhập bình luận tại đây')
                                          .keyup(function(event) {
                                                    if (event.keyCode === 13 && this.value != '') {
                                                        content_post = this.value;
                                                        var subdatetime = "" + new Date().timeNow() + ' ' +new Date().today();
                                                        date_post = current_cmt_time(subdatetime);
                                                                                //alert('iduser: '+current_userId+'; content: '+content_post+'; parent: '+null+'; date: '+date_post);
                                                        postcomment(current_userId,content_post,0,null,subdatetime,idPro,0,$postcmt_url);
                                                    }
                                                })
                                          )
                                   )
                            .append($("<div>").attr('id',"qlcomment")
                                   .append($("<div>").addClass("tab-content tab-content-L")
                                          .append($("<div>").attr('id','menu1').addClass('tab-pane active tab-pane-L qlcomment-menu1').attr('role','tabpanel')
                                                //  Product's comment
                                                 .append($('<ul>').css('list-style-type','none')
                                                        .append($('<li>').addClass('comment-L comment-call-L'))))
                                          .append($("<div>").attr('id', 'menu2').addClass('tab-pane fade tab-pane-L').attr('role', 'tabpanel'))
                                          ))
                } else {
                    
                     if($divname == "comment-part-L") loadproductinfo(idPro,'getProductInfo');
                    
                    var nums_comment = response.length;
                    var createInput = true; //first comment input
                    var createSubInput = true; //it's show when click a available comment
                $.each(response, function(index, product) {    // Iterate over the JSON array.
    		        	$("#"+$divname+" > br").remove();
                        $("#"+$divname+" > hr").remove();
                        $("#"+$divname+" > p").remove();
                        $("#"+$divname+" > div").remove();
      		 	});
                
                //using when POST comment
                var idUser_post, content_post, date_post, idParent_post, parentName_post, idProduct_post, idBlock_post; 
                idUser_post = current_userId;
 		        $.each(response, function(index, product) {
                        var datetime = current_cmt_time(product.date_added);
                        
                        idProduct_post = product.idProduct;
                    
                        //Create main comment input
 		                if(createInput){ //create orinal comment input
                            createInput = false;
                            $("<div>").appendTo($div)
                            .append($("<br/>"))        // Create HTML <td> element, set its text content with id of currently iterated product and append it to the <tr>.
                            .append($("<hr>"))
                            .append($("<p>").text("Bình luận ("+ nums_comment + ")"))
                            .append($("<div>").addClass('input-group-L').css('width','100%')
                                   .append($("<input>").attr('type', 'text').addClass("form-control comment_comment item-comment-input").attr('placeholder', 'Nhập bình luận tại đây')
                                          .keyup(function(event) {
                                                    if (event.keyCode === 13 && this.value != '') {
                                                        content_post = this.value;
                                                        var subdatetime = "" + new Date().timeNow() + ' ' +new Date().today();
                                                        date_post = current_cmt_time(subdatetime);
                                                                                //alert('iduser: '+idUser_post+'; content: '+content_post+'; parent: '+null+'; date: '+date_post);
                                                        postcomment(idUser_post,content_post,0,null,subdatetime,idProduct_post,0,$postcmt_url);
                                                    }
                                                })
                                          )
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
                                                    if(product.idParent == '0' && product.idBlock == '0')
                                                     {
                                                         createSubInput = true;
                                                            $("<div style='margin-bottom: 8px;margin-top: 12px;'>").appendTo(document.getElementsByClassName("comment-call-L"))
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
                                                                         .append($('<span>').addClass('reply-L').text("Trả lời").attr('float','left').css('margin-right','10px').click(function(){
                                                                if(current_userId == 0){
                                                                    alert("Vui lòng đăng nhập trước khi bình luận!");
                                                                }
                                                                else if(product.idUser == current_userId){
                                                                    idParent_post = 0;
                                                                    parentName_post = null;
                                                                    idBlock_post = product.idComment;
                                                                } else {
                                                                    idParent_post = product.idUser;
                                                                    parentName_post = product.userName;
                                                                    idBlock_post = product.idComment;
                                                                }  
                                                                            
 		                		           	                                  showcmtinput(null,null,'comment-thu-1', product.idComment); 
                                                                              event.preventDefault();
 		                				                                     })
                                                                         )
                                                                          .append($("<span style='font-size: 13.5px !important;'>").addClass('reply-L').text("Xóa").click(function(){
                                                                                deletecomment(product.idComment,$idcmt_url);
 		                				                                     })
                                                                         )
                                                                 )
                                                                  
                                                           ) //END comment 
                                                         var idToShowInput = product.idComment;
                                                          var idComment = product.idComment;
                                                         var userName = product.userName;
                                                        $.ajax({
                                                          type: "GET",
                                                          url: $subcmt_url,
                                                          //contentType: "application/x-www-form-urlencoded",
                                                          async: false,
                                                        contentType: "application/json",
                                                        dataType: "json",
                                                        data: { idComment : idComment },
                                                        success: function (response2) {
                                                            //alert(response2)
                                                            var temp_subparenname=""
                                                            $.each(response2, function(index, sub) {
                                                                if(sub.parentName == null) temp_subparenname=""
                                                                else temp_subparenname = sub.parentName
                                                        var datetime = current_cmt_time(sub.date_added);
                                                        $("<div>").appendTo(document.getElementsByClassName("comment-call-L"))
                                                              .append($('<ul>').addClass('comments-list')
                                                         .append($('<ul>').css('list-style-type','none')
                                                                .append($("<li style='padding-right: 0 !important;'>").addClass('comment-L')
                                                                      .append($('<a>').addClass('pull-left')
                                                                             .append($('<img>').addClass('lazy-image avatar').attr('src','https://muare.vn/images/avatars/avatar_male_s.png?v=2'))
                                                                             )
                                                                        //Phần comment
                                                                      .append($('<div>').addClass('comment-body-L')
                                                                             .append($('<div>').addClass('comment-heading-L')
                                                                                     .append($('<span>').addClass('post_title_L')
                                                                                            .append($('<span>').addClass('user-L').text(sub.userName))
                                                                                             .append($('<abbr>').text(" Trả lời @"+temp_subparenname))
                                                                                             .append($('<span>').css('float','right').css('font-size','13px')
                                                                                       .append($('<i>').addClass('far fa-clock').text(' '+datetime))
                                                                                       )
                                                                                            )
                                                                                    )
                                                                              
                                                                              .append($('<p>').addClass('content-L').text(sub.content))
                                                                              .append($('<div>').addClass('span-reply')
                                                                                     .append($('<span>').addClass('reply-L').text("Trả lời").attr('float','left').css('margin-right','10px').click(function(){
                                                                                if(current_userId == 0){
                                                                                    alert("Vui lòng đăng nhập trước khi bình luận!");
                                                                                }
                                                                                else if(sub.idUser == current_userId){
                                                                                    idParent_post = 0;
                                                                                    parentName_post = null; 
                                                                                    idBlock_post = sub.idBlock;
                                                                                } else {
                                                                                    idParent_post = sub.idUser;
                                                                                    parentName_post = sub.userName; 
                                                                                    idBlock_post = sub.idBlock;
                                                                                }
                                                                                        idProduct_post = sub.idProduct;
                                                                                        showcmtinput(null,null,'comment-thu-1',idToShowInput); 
                                                                                          event.preventDefault();
                                                                                         })
                                                                                     )
                                                                                      .append($("<span style='font-size: 13.5px !important;'>").addClass('reply-L').text("Xóa").click(function(){
                                                                                            deletecomment(sub.idComment,$idcmt_url);
                                                                                         })
                                                                                     )
                                                                             )
                                                                       )
                                                                )
                                                         ))//END sub-comment
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
                                        //Reply Input will show-hide when click any reply
                                                    if(createSubInput){ //create comment input when click tra loi
                                                            //alert(idToShowInput);
                                                            createSubInput = false;
                                                            $("<div>").appendTo(document.getElementsByClassName("comment-call-L"))
                                                            .append($('<div>').attr('id','idinput'+idToShowInput).addClass('input-reply').css('margin','8px 0px 10px 50px').css('display','none')
                                                               .append($('<div>').addClass('input-group-L').css('width','100%')
                                                                      .append($('<input>').addClass("form-control comment_comment item-comment-input").attr('type','text').attr('placeholder','Nhập trả lời tại đây và enter').attr('id','id_cmtinput'+product.idComment)
                                                                              .keyup(function(event) {
                                                                            if (event.keyCode === 13 && this.value != '') {
                                                        content_post = this.value;
                                                        var subdatetime = "" + new Date().timeNow() + ' ' +new Date().today();
                                                        date_post = current_cmt_time(subdatetime);
                                                                                //alert('iduser: '+idUser_post+'; content: '+content_post+'; parent: '+parentName_post+'; date: '+date_post);
                                                        postcomment(idUser_post,content_post,idParent_post,parentName_post,subdatetime,idProduct_post,idBlock_post,$postcmt_url);
                                                                        }
                                                            })
                                                                      )
                                                               )
                                                                   ) //END Reply Input 
                                                    }
                    firstM = 0;
                    i = 0;
 		        });//END $.each(responseJson, function(index, product)*/
                    //OnSuccess(response)
                  }
                  },
                  error: function () {},
                  complete: function (response) {}
                });  // end Ajax 
    }
    $(document).on("click", "div.avatar-sp-L", function (event) {
        idPro = $(this).attr("dataIDProduct")
        //alert(dataIDProduct);
          getuserid('getUserId');
          loadcomment(idPro, 'getProductComment'); //comment modal
      });
    
    document.getElementById("md-overlay-id").style.visibility = 'hidden';
    document.getElementById("modal-productview").style.visibility = 'hidden';
    
    $(document).on("click", ".md-overlay", function (event) {
        document.getElementById("modal-productview").style.visibility = 'hidden'; 
        document.getElementById("md-overlay-id").style.visibility = 'hidden';
         document.getElementById("md-overlay-id").style.opacity = '0';
      });
    
    $(document).on("click", ".wrap-img", function (event) {
        /*if(document.getElementById("modal-productview").getAttribute("display")=="null"){
            document.getElementById("modal-productview").setAttribute("style","display: block;"); 
        }*/
        document.getElementById("modal-productview").style.visibility = 'visible';
        document.getElementById("md-overlay-id").style.visibility = 'visible';
        document.getElementById("md-overlay-id").style.opacity = '1';
        $('.md-overlay-id').show();
        $('#modal-productview').show();
        idPro = $(this).attr("dataIDProduct2")
        //alert(idPro);
          getuserid('getUserId');
          loadcomment(idPro, 'getProductComment'); //comment modal
      });
    /****************************************** END COMMENT PRODUCT ******************************************************/
    
    /****************************************** COMMENT SERVICE ******************************************************/
    
    if($('.idtindang-cmt').attr("dataIDTinDang") != null){ //comment tin dang
        idPro = $('.idtindang-cmt').attr("dataIDTinDang");
        getuserid('getTDUserId');
        loadcomment(idPro,'getTinDangComment');
    } else if($('.idservice-cmt').attr("dataIDService") != null){ //comment service
        idPro = $('.idservice-cmt').attr("dataIDService");
        getuserid('getSerUserId');
        loadcomment(idPro,'getServiceComment');
    } else if($('.chitietsp-am-using').attr("dataCheckChiTietSP") != null){ //comment chitietsp page
        idPro = $('.avatar-sp-L2').attr("dataIDProduct2");
        //alert(idPro);
        getuserid('getUserId');
        $div = document.getElementById("comment-part-L2");
        $divname = "comment-part-L2";
        loadcomment(idPro,'getProductComment');
    } /*else if($('.wrap-img').attr("dataIDProduct2") != null){ //comment chitietsp page
        idPro = $('.wrap-img').attr("dataIDProduct2");
        alert(idPro);
        getuserid('getUserId');
        //$div = document.getElementById("comment-part-L2");
        //$divname = "comment-part-L2";
        loadcomment(idPro,'getProductComment');
    }*/
    
    /****************************************** END COMMENT SERVICE ******************************************************/
    
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
    //cLIck below image list -> change main image
    /*function changeMainImage(imgs) {
       var Largeimg = document.getElementById("myimage"); //chitietdanhmuc - modal
        Largeimg.src = imgs.src; //chitietdanhmuc - modal
        var imgResult2 = document.getElementById("myresult"); //chitietdanhmuc - modal
        imgResult2.style.backgroundImage= "url('" + imgs.src + "')"; //chitietdanhmuc - modal
    }*/
    
    //Reponsive product model for Ipad (other devices the same size with Ipad)
    if(screen.width > 800 && screen.width < 1200){
        document.getElementById("modal-productview").setAttribute("style","height: auto;");
    } else {
       document.getElementById("modal-productview").setAttribute("style","height: 100%;"); 
    }


    
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
	expandImg.src = imgs.src;
	var imgResult = document.getElementById("myresult-v");
  // var imgText = document.getElementById("imgtext");
	imgResult.style.backgroundImage= "url('" + imgs.src + "')";
	// console.log(imgResult.style.backgroundImage);
	
  // imgText.innerHTML = imgs.alt;
  // expandImg.parentElement.style.display = "block";
  
}
//cLIck below image list -> change main image
    function changeMainImage(imgs) {
       var Largeimg = document.getElementById("myimage"); //chitietdanhmuc - modal
        Largeimg.src = imgs.src; //chitietdanhmuc - modal
        var imgResult2 = document.getElementById("myresult"); //chitietdanhmuc - modal
        imgResult2.style.backgroundImage= "url('" + imgs.src + "')"; //chitietdanhmuc - modal
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

