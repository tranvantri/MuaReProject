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
                            <div class="sanpham_load">
                            </div>
                             {{--  Ket thuc đây là phần hiển thi gio hàng   --}}
                        </div>

                        <h5 class="avgprice-order-L inTongTien_tomiot"></h5>
                        <div style="margin: 38px 10px 10px 10px;">
                            <button class="btn order-btn1">TIẾP TỤC MUA HÀNG</button>
                            <button id="step1-to-step2" class="btn order-btn2">TIẾP TỤC</button>
                        </div>
                    </div>

                    <div id="step2" class="container tab-pane">
                        <br>
                        <p>Địa chỉ nhận hàng của bạn:</p>
                        <table class="table-borderless" style="width: 100%;">
                            <tbody>
                            <tr>
                                <td colspan="1" width="18%">Họ và tên*:</td>
                                <td colspan="2">
                                    <input type="text" required id="HoTenKH"
                                     class="input-step2" placeholder="Nhập vào họ và tên" 
                                     style="width: 40%;min-width: 150px;" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="1" width="18%">Số điện thoại *:</td>
                                <td><input type="tel" class="input-step2" required id="SDTKH"
                                    placeholder="Nhập vào số điện thoại" style="width: 40%;min-width: 150px;"></td>
                            </tr>
                            <tr>
                                <td colspan="1" width="18%">Email:</td>
                                <td>
                                    <input type="email" class="input-step2"  id="EmailKH"
                                    placeholder="Nhập vào email" style="width: 40%;min-width: 150px;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="1" width="18%">Địa chỉ *:</td>
                                <td>
                                    <input type="text" maxlength="100" required class="input-step2" 
                                    id="DiaChiKH"
                                    placeholder="Nhập vào địa chỉ" style="width: 60%;min-width: 170px;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="1" width="18%">Thông tin thêm:</td>
                                <td><textarea type="text" class="input-step2"
                                    id="ThongTinThemKH"
                                     placeholder="Nhập vào thông tin thêm (nếu có)" 
                                     style="width: 60%;min-width: 170px;"></textarea></td>
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
                                <td><b id="HoTenKH2"></b></td>
                            </tr>
                            <tr>
                                <td width="18%">Số điện thoại:</td>
                                <td><b id="SDTKH2"></b></td>
                            </tr>
                            <tr>
                                <td width="18%">Email:</td>
                                <td><b id="EmailKH2"></b></td>
                            </tr>
                            <tr>
                                <td width="18%">Địa chỉ:</td>
                                <td><b id="DiaChiKH2"></b></td>
                            </tr>
                            <tr>
                                <td width="18%">Thông tin thêm:</td>
                                <td><b id="ThongTinThemKH2"></b></td>
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
                                <tbody class="appendModal3NeConTrai">
                                

                                </tbody>
                            </table>
                        </div>


                        <h5 class="avgprice-order-L inTongTien_tomiot" style="margin-top: 0px;"></h5>
                        <div style="margin: 44px 10px 10px 10px;">
                            <button id="step3-to-step2" class="btn order-btn1">QUAY LẠI</button>
                            
                            <button id="btn-confirm-order" class="btn order-btn2" 
                            data-toggle="modal" 
                            data-target="#modal-confirmorder" data-dismiss="modal">ĐỒNG Ý VÀ ĐẶT HÀNG</button>
                        </div>


                    </div>


                </div>
            </div>

        </div>
    </div>
</div>