@extends('user.layouts.index')
@section('title')
<title>Đăng tin dịch vụ</title>
@endsection
@section('content')
	 <section class="content mt-5 mb-5">

        <div class="container">
            <div class="row">
                <form  class="post-form-Tr" enctype="multipart/form-data" method="post">
                    
                    <div class="post-attr-Tr">
                        <div class="title-name-box-Tr">
                            <span>
                                Mô tả tin đăng <!--Padding is optional-->
                            </span>
                        </div>
                        <div class="boder-summary-Tr">
                            <div class="row-attr-Tr row">
                                <label class="col-md-2">Tiêu đề</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" id="nameService" name="nameService" value="" maxlength="100" placeholder="Nhập tiêu đề tin đăng vào đây (tối đa 100 ký tự)">
                                    
                                </div>                                                
                            </div>

                            <div class="row-attr-Tr row">
                                <a class="huong_dan_sua_tin offset-2" style="padding-left: 15px;" target="blank" href="https://muare.vn/huong-dan-su-dung">Hướng dẫn đăng tin và sửa chữa tin đăng (Hoặc liên hệ: 024-73095555 - Máy lẻ: 255 / 162)</a>
                            </div>
                            <div class="row-attr-Tr row">
                                <label class="col-md-2">Nội dung</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" placeholder="Nhập nội dung tin đăng ( chú ý tối đa 2000  ký tự )" id="descriptionService" name="descriptionService" rows="10"></textarea>
                                   
                                </div>    
                            </div>                                                                        
                            <div class="row-attr-Tr row">
                                <label class="col-md-4">Nhập giá:</label>
                                <div class="col-md-8 row-post-price-Tr">
                                    <input type="text" name="priceService" id="priceService" maxlength="14" class="form-control" value="">
                                    <span class="vnd">.đ</span>
                                    <div class="trans_price" id="tprice"></div>
                                    
                                    
                                </div>                            

                            </div>                   
                            <div class="row-attr-Tr row">
                                <label class="col-md-4" for="js-example-basic-multiple2">
                                    Tôi muốn đăng bán trong chuyên mục:                               
                                </label>
                                <div class="forum-thread-infor-Tr form-horizontal col-md-8">
                                    <select  id="chon-danh-muc-multi-Tr" name="idCateService" 
                                    class="form-control select-thread-infor-Tr select2-hidden-accessible">
                                        @foreach($cateParents as $childCate)
                                        <optgroup label="{{$childCate->name}}">
                                            @foreach($cateChilds as $cateChild)
                                                @if($childCate->id == $cateChild->idParent)
                                                    <option title="{{$cateChild->id}}" value="{{$cateChild->id}}">{{$cateChild->name}}</option>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        @endforeach   
                                    </select>                       
                                </div>

                            </div>
                            <div class="row-attr-Tr row">
                                <label class="col-md-4">Tại khu vực:</label>
                                <div class="col-md-8">
                                    <select id="location-post-Tr" name="idPlaceService" class="form-control">
                                        @foreach($places as $child)
                                            <option value="{{$child->id}}">{{$child->name}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>

                            </div>
                        </div>

                        <div class="title-name-box-Tr" style="margin-top: 25px;">
                            <span>
                                Ảnh sản phẩm <!--Padding is optional-->
                            </span>
                        </div>
                        <div class="row-attr-Tr row storage-box-Tr">
                            <div class="box-image-Tr row" style="width: 100%;">
                                {{-- <div class="add-box-Tr col-md-2">
                                    <a class="add-new-Tr">
                                        <span>Thêm ảnh mới</span>
                                    </a>
                                </div> --}}<!--add-img-->
                                {{-- <input name="images" type="file" id="upload" class="upload-Tr upload-service"  accept="image/png,.png,image/jpeg,.jpg,.jpeg,.jpe"> --}}
                                <div class="dropzone" style="width: 98%; margin-left: auto;margin-right: auto;" id="my-dropzone-dang-tin-dv">
                                    {{-- <div class="fallback">
                                        <input name="files[]" type="file" multiple />
                                    </div> --}}
                                </div>
                                
                            </div><!--box-image-->
                        </div>                   
                        

                    </div>
                    

                    
                        <div class="post-attr-Tr">
                            <div class="title-name-box-Tr">
                                <span>
                                    Thông tin liên hệ <!--Padding is optional-->
                                </span>
                            </div>
                            <div class="boder-summary-Tr">
                                
                                <div class="row-attr-Tr row">
                                    <label class="col-md-3">Tên của tôi là:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="name" name="name" value="" maxlength="100" placeholder="Họ và tên">
                                        
                                    </div>                                                
                                </div>
                                <div class="row-attr-Tr row">
                                    <label class="col-md-3">Số điện thoại của tôi là:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="phone" name="phone" value="" maxlength="100" placeholder="Số điện thoại liên hệ">
                                        
                                    </div>                                                
                                </div>
                                <div class="row-attr-Tr row">
                                    <label class="col-md-3">Email của tôi là:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="email" name="email" value="" maxlength="100" placeholder="Email liên hệ">
                                        
                                    </div>                                                
                                </div>
                                <div class="row-attr-Tr row">
                                    <label class="col-md-3">Bạn có thể đến xem hàng tại</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="addressUser" name="addressUser" value="" maxlength="100" placeholder="Đại chỉ cửa hàng/ shop">                                    
                                    </div>                                                
                                </div>
                            </div>                                       
                        </div>
                    
                    <div class="post-advance-Tr">
                        <h4 class="contact-box-title-Tr">Hình thức đăng tin</h4>
                        <p class="note-advance-Tr">Đăng tin hoàn toàn
                            <strong>miễn phí</strong>
                            , nhưng nếu bạn muốn tin đăng được
                            <a>ưu tiên và có nhiều ngưởi xem hơn</a> thì bạn nên sử dụng các dịch vụ dưới đây:
                        </p>
                        <div class="">
                            <input class="" type="checkbox" name="up-top-cate" id="up-top-cate" value="1">
                            <label class="" for="up-top-cate">Đưa tin lên trang nhất của chuyên mục <a href="#">(Tìm hiểu thêm)</a></label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" name="up-to-sponsor" id="up-to-sponsor" value="1">
                            <label class="" for="up-to-sponsor">Hiển thị tin đăng trong mục <strong style="font-weight: bold;">Tin đăng được tài trợ</strong> <a href="#">(Tìm hiểu thêm)</a></label>
                        </div>
                    </div>
                    <div class="postSubmit-Tr row">
                        <a class="btn btn-warning btn-otp-Tr" id="submit-all"> Đăng tin</a>
                    </div>

                </form>
            </div>
            
        </div>

    </section>
@endsection