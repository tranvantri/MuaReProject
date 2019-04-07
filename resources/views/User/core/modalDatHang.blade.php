<div class="modal fade md-modal2" id="modal-orderview" data-backdrop="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <!--<div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>-->

            <!-- Modal body -->
            <div class="modal-body">
                <!--<div class="md-modal2 md-effect-1" id="modal-orderview">-->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a id="step1-bar" class="nav-link active" data-toggle="tab" href="#step1">Thông tin sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a id="step2-bar" class="nav-link" data-toggle="tab" href="#step2">Nơi nhận hàng</a>
                    </li>
                    <li class="nav-item">
                        <a id="step3-bar" class="nav-link" data-toggle="tab" href="#step3">Xác nhận đơn hàng</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="step1" class="container tab-pane active" style="padding-right: 0; padding-left: 0;">
                        <br>
                        <!-- List product in your order modal-->
                        <div style="overflow-y: auto;max-height: 274px;max-height: 400px;height: auto;">
                            {{--  đây là phần hiển thi gio hàng  --}}

                            <?php foreach(Cart::content() as $row) :?>
                            <div class="product-in-order-L">
                                <img class="lazy-image avatar" src="<?php echo ($row->options->has('hinhanhsp') ? $row->options->hinhanhsp : ''); ?>" alt="Lỗi hình ảnh" 
                                width="72px" height="72px" style="display: inline;float: left;padding-right: 10px;">
                                <a href="#" class="product-name-L"><?php echo $row->name; ?></a>
                                <div>
                                    <p class="price-order-L">
                                        <abbr>Số lượng: 
                                        &#160;<input type="number" min="1" value="<?php echo $row->qty; ?>" class="input-numbsproduct"></abbr> 

                                        <abbr style="padding-left: 5%;">Đơn giá: <?php echo number_format($row->price,0); ?> VNĐ</abbr> 

                                        <abbr style="padding-left: 5%;">Thành tiền: <abbr style="color: red;"><?php echo number_format($row->price*$row->qty,0); ?> VNĐ</abbr></abbr>
                                            <abbr>
                                        {{--Xu ly xoa san pham khoi gio hang--}}
                                        <form action="{{ route('cart.remove', $row->rowId) }}" method="post" class="form-inline">
                                            {{ csrf_field() }}
                                            <button type="submit" style="color: red;font-size: 16px;display: contents;" class="btn btn-sm">
                                                <span class="fas fa-trash-alt"></span>
                                            </button>
                                        </form></abbr> 

                                    
                                    </p>

                                    
                                </div>
                                <hr>
                            </div>
                            <?php endforeach;?>

                             {{--  Ket thuc đây là phần hiển thi gio hàng   --}}
                        </div>

                        <h5 class="avgprice-order-L">Tổng tiền: 4,000,000 VNĐ</h5>
                        <div style="margin: 38px 10px 10px 10px;">
                            <button class="btn order-btn1">TIẾP TỤC MUA HÀNG</button>
                            <button id="step1-to-step2" class="btn order-btn2">TIẾP TỤC</button>
                        </div>
                    </div>

                    <div id="step2" class="container tab-pane">
                        <br>
                        <p>Địa chỉ nhận hàng của bạn:</p>
                        <!--<div>
                            <p>Họ và tên *:</p>
                            <input type="text" class="input-step2" placeholder="Nhập vào họ và tên">
                        </div>-->
                        <table class="table-borderless" style="width: 100%;">
                            <tbody>
                            <tr>
                                <td colspan="1" width="18%">Họ và tên*:</td>
                                <td colspan="2"><input type="text" class="input-step2" placeholder="Nhập vào họ và tên" style="width: 40%;min-width: 150px;"></td>
                            </tr>
                            <tr>
                                <td colspan="1" width="18%">Số điện thoại *:</td>
                                <td><input type="text" class="input-step2" placeholder="Nhập vào số điện thoại" style="width: 40%;min-width: 150px;"></td>
                            </tr>
                            <tr>
                                <td colspan="1" width="18%">Email:</td>
                                <td><input type="text" class="input-step2" placeholder="Nhập vào email" style="width: 40%;min-width: 150px;"></td>
                            </tr>
                            <tr>
                                <td colspan="1" width="18%">Địa chỉ *:</td>
                                <td><input type="text" class="input-step2" placeholder="Nhập vào địa chỉ" style="width: 60%;min-width: 170px;"></td>
                            </tr>
                            <tr>
                                <td colspan="1" width="18%">Thông tin thêm:</td>
                                <td><textarea type="text" class="input-step2" placeholder="Nhập vào thông tin thêm (nếu có)" style="width: 60%;min-width: 170px;"></textarea></td>
                            </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div style="margin: 10px;">
                            <button id="step2-to-step1" class="btn order-btn1">QUAY LẠI</button>
                            <button id="step2-to-step3" class="btn order-btn2">TIẾP TỤC</button>
                        </div>
                    </div>

                    <div id="step3" class="container tab-pane" style="padding: 0;">
                        <div style="padding-top: 4px;">
                            <p>Mua hàng thỏa thuận với chủ shop</p>
                            <p>Khách hàng cần <b>kiểm tra kỹ thông tin sản phẩm</b> cần mua với chủ shop.</p>
                            <p>Khách hàng và cửa hàng sẽ <b>chủ động liên hệ</b> giao hàng thanh toán.</p>
                        </div>

                        <hr style="margin: 6px 0;">
                        <p style="color: #227fce;font-size: 14.5px;"><b>ĐỊA CHỈ NHẬN HÀNG</b></p>
                        <table class="table-borderless" style="width: 100%;">
                            <tbody>
                            <tr>
                                <td width="18%">Họ và tên:</td>
                                <td><b>Thúy Diễm - Hotgirl Quận Cam</b></td>
                            </tr>
                            <tr>
                                <td width="18%">Số điện thoại:</td>
                                <td><b>696966969696969</b></td>
                            </tr>
                            <tr>
                                <td width="18%">Email:</td>
                                <td><b>thuydiemquancam@gmail.com</b></td>
                            </tr>
                            <tr>
                                <td width="18%">Địa chỉ:</td>
                                <td><b>Quận Cam, Cam, Cam, Cam, America</b></td>
                            </tr>
                            <tr>
                                <td width="18%">Thông tin thêm:</td>
                                <td><b>Xin chào tất cả mọi người, chào bé Lê Văn Đạt...</b></td>
                            </tr>
                            </tbody>
                        </table>

                        <p>Đơn hàng:</p>
                        <div class="table-responsive">
                            <table id="ordertable-L" class="table table-bordered" style="overflow-y: auto;max-height: 50px;">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Thành tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                    <td>100</td>
                                    <td>800,000 vnđ	</td>
                                    <td>3,200,000 vnđ</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><a href="#">Búp Bê Thúy Diễm - Quận Cam</a></td>
                                    <td>100</td>
                                    <td>800,000 vnđ	</td>
                                    <td>3,200,000 vnđ</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>


                        <h5 class="avgprice-order-L" style="margin-top: 0px;">Tổng tiền: 4,000,000 VNĐ</h5>
                        <div style="margin: 44px 10px 10px 10px;">
                            <button id="step3-to-step2" class="btn order-btn1">QUAY LẠI</button>
                            <button id="btn-confirm-order" class="btn order-btn2" data-toggle="modal" data-target="#modal-confirmorder" data-dismiss="modal">ĐỒNG Ý VÀ ĐẶT HÀNG</button>
                        </div>


                    </div>
                </div>
                <!--</div>-->
            </div>
            <!-- Modal footer -->
            <!--<div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>-->
        </div>
    </div>
</div>