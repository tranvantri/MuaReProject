@extends('user.layouts.index')
@section('title')
    <title>Đăng tin sản phẩm</title>
@endsection
@section('content')
	<section class="content mt-5 mb-5">
        <div class="container">
            <div class="row">
                <form  class="post-form-Tr" enctype="multipart/form-data" method="post" accept-charset="UTF-8">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    
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
                                    <input class="form-control" type="text" id="nameService" name="nameService" value="" maxlength="100" placeholder="Nhập tiêu đề tin đăng (tối đa 100 ký tự)" required />
                                    
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
                                    <input type="text" name="priceService" id="priceService" maxlength="14" class="form-control" value="" required>
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
                                Sản phẩm đang bán <!--Padding is optional-->
                            </span>
                        </div>
                        <div class="row-attr-Tr row storage-box-Tr">
                            <div class="box-image-Tr row">
                                <div class="add-box-Tr col-md-2">
                                    <a class="add-new-Tr" data-toggle="modal" data-target="#addNewProduct">
                                        <span>Thêm sản phẩm mới</span>
                                    </a>
                                </div><!--add-img-->
                                <input name="image" type="file" id="upload" class="upload-Tr" multiple="multiple" accept="image/png,.png,image/jpeg,.jpg,.jpeg,.jpe,image/gif,.gif">
                                <ul class="list-image-storage" value="">

                                </ul>
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
                                        <input class="form-control" type="text" id="name" name="name" value="" maxlength="100" placeholder="Họ và tên" required>
                                        
                                    </div>                                                
                                </div>
                                <div class="row-attr-Tr row">
                                    <label class="col-md-3">Số điện thoại của tôi là:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" 
                                        required id="phone" name="phone" value="" 
                                        maxlength="15" placeholder="Số điện thoại liên hệ">
                                        
                                    </div>                                                
                                </div>
                                <div class="row-attr-Tr row">
                                    <label class="col-md-3">Email của tôi là:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="email" id="email" name="email" value="" maxlength="100" placeholder="Email liên hệ" required>
                                        
                                    </div>                                                
                                </div>
                                <div class="row-attr-Tr row">
                                    <label class="col-md-3">Bạn có thể đến xem hàng tại</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="addressUser" name="addressUser" maxlength="100" placeholder="Địa chỉ cửa hàng/ shop">                                    
                                    </div>                                                
                                </div>
                            </div>                                       
                        </div>
                    
                    <div class="post-advance-Tr"></div>
                    <div class="postSubmit-Tr row">
                        <button type="button" id="submit-all" class="btn btn-warning btn-otp-Tr">Đăng tin</button>         
                    </div>

                    <div class="modal fade" id="addNewProduct" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-content-Tr">
                                <div class="ajax-loading"></div>
                                <div class="modal-header modal-header-Tr">
                                    <h4 class="modal-title" id="myModalLabel">Thông tin sản phẩm</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                    
                                </div><!--modal-header-->

                                <div class="modal-body col-lg-12">
                                    <form accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" id="form-storage">                                  

                                        <h3 class="title-attr-Tr">Cơ bản</h3>
                                        <div class="attr-basic-Tr">
                                            <div class="box-detail">
                                                <div class="title-item row">
                                                    <label for="nameItem" class="col-md-2">Tên sản phẩm:</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" id="nameProduct" name="nameProduct" value="" placeholder="Tên sản phẩm cần bán" required>
                                                        <p class="err-alert title" style="visibility: hidden; opacity: 0;"></p>
                                                    </div>
                                                </div>
                                                <div class="price-item-Tr row">
                                                    <label for="price" class="col-md-2">Giá:</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="priceProduct" id="priceProduct" class="form-control" value="" required>
                                                        <span class="vnd-Tr">.đ</span>
                                                        <div class="trans_price" id="tpopup_price"></div>                                                    
                                                    </div>
                                                </div>

                                                <div class="des-item row">
                                                    <label for="des" class="col-md-2">Mô tả sản phẩm:</label>
                                                    <div class="col-md-10">
                                                        <textarea name="descriptionProduct" class="form-control" id="descriptionProduct" placeholder="Nhập thông tin sản phẩm vào đây"></textarea>
                                                        <p class="err-alert des" style="visibility: hidden; opacity: 0;"></p>
                                                    </div>
                                                </div>

                                                <div class="cat-item row">
                                                    <label for="js-example-basic-multiple" class="col-md-2">Loại sản phẩm:</label>
                                                    <div class="col-md-10">
                                                        <div class="forum-thread-infor form-horizontal">
                                                            <select id="chon-loai-san-pham-Tr" name="idCateProduct" class="form-control select-thread-infor select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                                @foreach($cateParents as $childCate)
                                                                    <optgroup label="{{$childCate->name}}">
                                                                        @foreach($cateChilds as $cateChild)
                                                                            @if($childCate->id == $cateChild->idParent)
                                                                                <option value="{{$cateChild->id}}">{{$cateChild->name}}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </optgroup>
                                                                    @endforeach
                                                            </select>
                                                            <p class="err-alert cateId" style="visibility: hidden; opacity: 0;"></p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <label class="col-md-2">Ảnh sản phẩm:</label>
                                                    <div class="col-md-10"></div>
                                                    <div class="box-image-Tr-2 row" style="width: 100%;">
                                                        {{-- <div class="add-box-Tr-2">
                                                            <a class="add-img-Tr">
                                                                <span>Thêm ảnh mới</span>
                                                            </a>
                                                        </div> --}}<!--add-img-->
                                                        <div class="dropzone" style="width: 98%;" id="my-dropzone">
                                                            {{-- <div class="fallback">
                                                                <input name="files[]" type="file" multiple />
                                                            </div> --}}
                                                        </div>
                                                        {{-- <input name="imageProduct" type="file" id="upload2" class="upload-Tr upload-product-Tr" multiple="multiple" accept="image/png,.png,image/jpeg,.jpg,.jpeg,.jpe,image/gif,.gif">

                                                        <ul id="storage-info" class="listimage" value=""></ul> --}}
                                                    </div><!--box-image-->
                                                </div>
                                            </div>                                           
                                        </div>

                                        <h3 class="title-attr-Tr">Nâng cao</h3>
                                        <div class="attr-advance-Tr">
                                            <div class="propertyItem-Tr">
                                                
                                                <label class="title-Tr row">Trạng thái: </label>
                                                <div class="row">
                                                    <div class="attr-box-Tr .col-md-3">
                                                        <input id="statusSale1" class="statusSale" type="radio" name="status" value="1" checked="checked"><label for="statusSale1">Còn hàng</label>
                                                    </div>
                                                    <div class="attr-box-Tr .col-md-3">
                                                        <input id="statusSale2" class="statusSale" type="radio" name="status" value="-1"><label for="statusSale2">Hết hàng</label>
                                                    </div>
                                                    <div class="attr-box-Tr .col-md-3">
                                                        <input id="statusSale3" class="statusSale" type="radio" name="status" value="0"><label for="statusSale3">Ngừng bán</label>
                                                    </div>
                                                    <p class="err-alert statusSale" style="visibility: hidden; opacity: 0;"></p>
                                                </div>

                                                <label class="title-Tr row">Tình trạng sản phẩm: </label>
                                                <div class="row">
                                                    <div class="attr-box-Tr .col-md-3">
                                                        <input id="statusNew" class="statusItem" type="radio" name="statusProduct" value="1" checked="checked"><label for="statusNew">Mới</label>
                                                    </div>
                                                    <div class="attr-box-Tr .col-md-3">
                                                        <input id="status99" class="statusItem" type="radio" name="statusProduct" value="2"><label for="status99">Mới 90%</label>
                                                    </div>
                                                    <div class="attr-box-Tr .col-md-3">
                                                        <input id="status80" class="statusItem" type="radio" name="statusProduct" value="3"><label for="status80">Mới 80%</label>
                                                    </div>
                                                    <div class="attr-box-Tr .col-md-3">
                                                        <input id="statusOld" class="statusItem" type="radio" name="statusProduct" value="4"><label for="statusOld">Cũ</label>
                                                    </div>
                                                </div>

                                                <label class="title-Tr row">Sản phẩm được bán tại: </label>
                                                <div class="row">
                                                    @foreach($places as $child)
                                                        <div class="attr-box-Tr .col-md-3">
                                                            <input id="location{{$child->id}}" class="locationItem" type="checkbox" name="locationItem" value="{{$child->id}}"><label for="location{{$child->id}}">{{$child->name}}</label>
                                                        </div>
                                                    @endforeach
                                                    
                                                    <p class="err-alert locationItem" style="visibility: hidden; opacity: 0;"></p>
                                                </div>

                                            </div>
                                        </div><!--end attr-advance-->
                                    </form>
                                </div><!--modal-body-->

                                <div class="modal-footer">
                                    <div class="postSubmit-Tr row">
                                        <button type="button" class="btn btn-secondary btn btn-warning btn-otp-Tr" data-dismiss="modal">Lưu thông tin</button>
                                    </div>

                                </div><!--modal-footer-->
                                <!-- <div class="wrap-confirm">
                                    <div class="confirm-update">
                                        <p>Chưa thực hiện lưu thay đổi. Bạn có chắc chắn muốn đóng?</p>
                                        <a class="confirm-bth confirm-yes">Có</a>
                                        <a class="confirm-bth confirm-no">Không</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection