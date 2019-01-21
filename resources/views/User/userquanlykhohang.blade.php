@extends('user.layouts.index')
@section('title')
	<title>Quản lý kho hàng</title>
@endsection
@section('content')
<section class="storage_shop">
        <div class="container">
           
                <section id="top_loc_san_pham_tomiot"> 
                   <div class="row">
                    <!-- MEnu lef quản trị -->
                        <div class="menu_left_storage_tomiot col-md-2">
                            asd
                        </div>
                    <!-- Kết  thúc menu left quản trị -->
                        <div class="col-md-10 ">
                            <div class="row">
                                <div id="thong_bao_tomiot" class="col-md-9">
                                    <p>Hiện đang có 1 sản phẩm trong kho</p>
                                </div>
                                <div class="loc_san_pham_tomiot col-md-3" >
                                    <p class="thong_tin_loc_tomiot">Lọc theo</p>
                                    <select  class="combo_loc_tomiot custom-select ">
                                        <option>Toàn bộ</option>
                                        <option>Còn hàng</option>
                                        <option>Hết hàng</option>
                                        <option>Hàng cũ</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="content_quan_ly_cua_hang display_table_tomiot col-md-12">
                                <div class="row" >
                                    <div class="them_moi_san_pham_kho_hang_tomiot col-md-3 display_table_cell_tomiot">
                                        

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewProduct2">
                                          Thêm sản phẩm
                                        </button>

                                      <!-- Modal -->
                                       <div class="modal fade" id="addNewProduct2" role="dialog">
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
                                                    <input class="form-control" type="text" id="title" name="title" value="" placeholder="Tên sản phẩm cần bán">
                                                    <p class="err-alert title" style="visibility: hidden; opacity: 0;"></p>
                                                </div>
                                            </div>
                                            <div class="price-item-Tr row">
                                                <label for="price" class="col-md-2">Giá:</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="price" id="popup_price" class="form-control" value="">
                                                    <span class="vnd-Tr">.đ</span>
                                                    <div class="trans_price" id="tpopup_price"></div>                                                    
                                                </div>
                                            </div>

                                            <div class="des-item row">
                                                <label for="des" class="col-md-2">Mô tả sản phẩm:</label>
                                                <div class="col-md-10">
                                                    <textarea name="des" class="form-control" id="des" placeholder="Nhập thông tin sản phẩm vào đây"></textarea>
                                                    <p class="err-alert des" style="visibility: hidden; opacity: 0;"></p>
                                                </div>
                                            </div>

                                            <div class="cat-item row">
                                                <label for="js-example-basic-multiple" class="col-md-2">Loại sản phẩm:</label>
                                                <div class="col-md-10">
                                                    <div class="forum-thread-infor form-horizontal">
                                                        <select id="chon-loai-san-pham-Tr" name="cateId" class="form-control select-thread-infor select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                            <optgroup label="Languages">
                                                                <option value="cp">C++</option>
                                                               <option value="cs">C#</option>
                                                               <option value="oc">Object C</option>
                                                               <option value="c">C</option>
                                                        </optgroup>
                                                        <optgroup label="Scripts">
                                                                <option value="js">JavaScript</option>
                                                                <option value="php">PHP</option>
                                                                <option value="asp">ASP</option>
                                                                <option value="jsp">JSP</option>
                                                        </optgroup>
                                                        </select>
                                                        <p class="err-alert cateId" style="visibility: hidden; opacity: 0;"></p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <label class="col-md-2">Ảnh sản phẩm:</label>
                                                <div class="col-md-10"></div>
                                                <div class="box-image-Tr-2 row">
                                                    <div class="add-box-Tr-2">
                                                        <a class="add-img-Tr">
                                                            <span>Thêm ảnh mới</span>
                                                        </a>
                                                    </div><!--add-img-->
                                                    <input name="image" type="file" id="upload2" class="upload-Tr upload-product-Tr" multiple="multiple" accept="image/png,.png,image/jpeg,.jpg,.jpeg,.jpe,image/gif,.gif">

                                                    <ul id="storage-info" class="listimage" value=""></ul>
                                                </div><!--box-image-->
                                            </div>
                                        </div>                                           
                                    </div>

                                    <h3 class="title-attr-Tr">Nâng cao</h3>
                                    <div class="attr-advance-Tr">
                                        <div class="propertyItem-Tr">
                                            <div class="price-item row">
                                                <div class="smartphone" style="display: none;">
                                                    <div class="smartphone-box col-md-4">
                                                        <select id="brand" name="brand" class="form-control select-thread-infor">
                                                            <option disabled="" selected="" value="default">Chọn thương hiệu</option>
                                                            <option type="checkbox" name="brand[]" value="1" id="iPhone">iPhone</option>
                                                            <option type="checkbox" name="brand[]" value="2" id="SamSung">SamSung</option>
                                                            
                                                        </select>
                                                        <p class="err-alert brand" style="visibility: hidden; opacity: 0;"></p>
                                                    </div>
                                                    <div class="smartphone-box col-md-4">
                                                        <select id="memory" name="memory" class="form-control select-thread-infor">
                                                            <option disabled="" selected="" value="default">Chọn dung lượng</option>
                                                            <option type="checkbox" name="memory[]" value="1" id="128GB">128GB</option>
                                                            <option type="checkbox" name="memory[]" value="2" id="64GB">64GB</option>
                                                            <option type="checkbox" name="memory[]" value="4" id="32GB">32GB</option>
                                                            <option type="checkbox" name="memory[]" value="8" id="16GB">16GB</option>
                                                            <option type="checkbox" name="memory[]" value="16" id="8GB">8GB</option>
                                                        </select>
                                                        <p class="err-alert memory" style="visibility: hidden; opacity: 0;"></p>
                                                    </div>
                                                    <div class="smartphone-box col-md-4">
                                                        <select id="color" name="color" class="form-control select-thread-infor">
                                                            <option disabled="" selected="" value="default">Chọn màu sắc</option>
                                                            <option type="checkbox" name="color[]" value="1" id="vang">Vàng (gold)</option>
                                                            <option type="checkbox" name="color[]" value="2" id="trang">Trắng</option>
                                                            <option type="checkbox" name="color[]" value="4" id="den">Đen</option>
                                                            <option type="checkbox" name="color[]" value="8" id="xam">Xám</option>
                                                            <option type="checkbox" name="color[]" value="16" id="do">Đỏ</option>
                                                            <option type="checkbox" name="color[]" value="32" id="vanghong">Vàng hồng</option>
                                                            <option type="checkbox" name="color[]" value="64" id="xanh">Xanh</option>
                                                            <option type="checkbox" name="color[]" value="128" id="ckhac">Khác</option>
                                                        </select>
                                                        <p class="err-alert color" style="visibility: hidden; opacity: 0;"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <label class="title-Tr row">Trạng thái: </label>
                                            <div class="row">
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="statusSale1" class="statusSale" type="radio" name="statusSale" value="1" checked="checked"><label for="statusSale1">Còn hàng</label>
                                                </div>
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="statusSale2" class="statusSale" type="radio" name="statusSale" value="2"><label for="statusSale2">Hết hàng</label>
                                                </div>
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="statusSale3" class="statusSale" type="radio" name="statusSale" value="4"><label for="statusSale3">Ngừng bán</label>
                                                </div>
                                                <p class="err-alert statusSale" style="visibility: hidden; opacity: 0;"></p>
                                            </div>

                                            <label class="title-Tr row">Tình trạng sản phẩm: </label>
                                            <div class="row">
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="statusNew" class="statusItem" type="radio" name="statusItem" value="1" checked="checked"><label for="statusNew">Mới</label>
                                                </div>
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="status99" class="statusItem" type="radio" name="statusItem" value="2"><label for="status99">Mới 90%</label>
                                                </div>
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="status80" class="statusItem" type="radio" name="statusItem" value="4"><label for="status80">Mới 80%</label>
                                                </div>
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="statusOld" class="statusItem" type="radio" name="statusItem" value="8"><label for="statusOld">Cũ</label>
                                                </div>
                                            </div>

                                            <label class="title-Tr row">Sản phẩm được bán tại: </label>
                                            <div class="row">
                                                <div class="attr-box-Tr .col-md-3">

                                                    <input id="location1" class="locationItem" type="checkbox" name="locationItem[]" value="1" }}=""><label for="location1">Hà Nội</label>
                                                </div>
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="location2" class="locationItem" type="checkbox" name="locationItem[]" value="2"><label for="location2">Hải Phòng</label>
                                                </div>
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="location4" class="locationItem" type="checkbox" name="locationItem[]" value="4"><label for="location4">Đà Nẵng</label>
                                                </div>
                                                <div class="attr-box-Tr .col-md-3">
                                                    <input id="location8" class="locationItem" type="checkbox" name="locationItem[]" value="8" checked="checked"><label for="location8">TP.HCM</label>
                                                </div>
                                                <p class="err-alert locationItem" style="visibility: hidden; opacity: 0;"></p>
                                            </div>

                                        </div>
                                    </div><!--end attr-advance-->
                                </form>
                            </div><!--modal-body-->

                            <div class="modal-footer">
                                <div class="postSubmit-Tr row">
                                    <a class="btn btn-warning btn-otp-Tr"> Lưu thông tin</a>
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

                                    </div>
                                    
                                    <div class="col-md-3  display_table_cell_tomiot">
                                        <div class="card" >
                                              <img class="img_sp_kho_hang_tomiot card-img-top" src="assets/images/kho-hang/asus_tablet.jpg" alt="Product's image">
                                              <div class="card-body">
                                                <h5 class="can_giua_tomiot card-title">ASUS P008 – Tablet giá tốt, cấu hình ổn</h5>
                                                
                                              </div>
                                              <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><p class="can_giua_tomiot red_text_tomiot card-text">1 000 000 đ</p></li>
                                                <li class="list-group-item can_giua_tomiot ">
                                                    <i class="fas fa-heart"></i> 69
                                                    <i class="fas fa-comment"></i> 96

                                                </li>
                                                
                                              </ul>
                                              <div class="can_giua_tomiot card-body">
                                                <a href="#" class=" card-link"><button class="button button_inline_tomiot"><i class="fas fa-pencil-alt"></i> Chỉnh sửa</button></a>
                                                
                                              </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 display_table_cell_tomiot">
                                        <div class="card " >
                                              <img class="img_sp_kho_hang_tomiot card-img-top" src="assets/images/kho-hang/asus_tablet.jpg" alt="Product's image">
                                              <div class="card-body">
                                                <h5 class="can_giua_tomiot card-title">ASUS P008 – Tablet giá tốt, cấu hình ổn</h5>
                                                
                                              </div>
                                              <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><p class="can_giua_tomiot red_text_tomiot card-text">1 000 000 đ</p></li>
                                                <li class="list-group-item can_giua_tomiot ">
                                                    <i class="fas fa-heart"></i> 69
                                                    <i class="fas fa-comment"></i> 96

                                                </li>
                                                
                                              </ul>
                                              <div class="can_giua_tomiot card-body">
                                                <a href="#" class=" card-link"><button class="button button_inline_tomiot"><i class="fas fa-pencil-alt"></i> Chỉnh sửa</button></a>
                                                
                                              </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 display_table_cell_tomiot">
                                        <div class="card " >
                                              <img class="img_sp_kho_hang_tomiot card-img-top" src="assets/images/kho-hang/asus_tablet.jpg" alt="Product's image">
                                              <div class="card-body">
                                                <h5 class="can_giua_tomiot card-title">ASUS P008 – Tablet giá tốt, cấu hình ổn</h5>
                                                
                                              </div>
                                              <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><p class="can_giua_tomiot red_text_tomiot card-text">1 000 000 đ</p></li>
                                                <li class="list-group-item can_giua_tomiot ">
                                                    <i class="fas fa-heart"></i> 69
                                                    <i class="fas fa-comment"></i> 96

                                                </li>
                                                
                                              </ul>
                                              <div class="can_giua_tomiot card-body">
                                                <a href="#" class=" card-link"><button class="button button_inline_tomiot"><i class="fas fa-pencil-alt"></i> Chỉnh sửa</button></a>
                                                
                                              </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                        </div> 
                    </div>
                </section>
                
            
        </div>
    </section>

@endsection