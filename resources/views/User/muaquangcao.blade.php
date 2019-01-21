@extends('user.layouts.index')
@section('title')
	<title>Mua quảng cáo</title>
@endsection
@section('content')
<section class="muaquangcao" style="font-family: Roboto, sans-serif;">
        <div class="row" style="width: 86%;margin-left: 7%;margin-right: 7%;padding: 5% 1% 5%;">
            <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12" style="padding: 16px 0px 0px 32px;">
                <p><a id="bgtv" style="cursor: pointer;"><i class="fas fa-dollar-sign icon-ad-L"></i>
                    Bảng giá tư vấn</a></p>
                <p><a id="nvtv" style="cursor: pointer;"><i class="fas fa-user icon-ad-L"></i>
                Nhân viên tư vấn</a></p>
            </div>
            <script language="javascript">
                document.getElementById("bgtv").onclick = function () {
                    document.getElementById("banggiatuvan").style.display = 'block';
                    document.getElementById("nhanvientuvan").style.display = 'none';
                };
                document.getElementById("nvtv").onclick = function () {
                    document.getElementById("banggiatuvan").style.display = 'none';
                    document.getElementById("nhanvientuvan").style.display = 'block';
                };
            </script>
            <div id="banggiatuvan" class="col-sm-9 col-lg-9 col-md-9 col-xs-12" style="border-left: 1px solid #c6c4c4;">
                <div class="container">
                  <h4 style="padding: 16px 0px 16px;">Bảng giá các dịch vụ</h4>
                  <div id="accordion" style="padding-left: 16px;">
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                          Báo giá dịch vụ trên Muare
                        </a>
                      </div>
                      <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body" style="padding-top: 32px;padding-left: 32px;">
                          
                            <!-- MỤC TIN VIP có 2 table nhaa -->
                            <div id="tinvip">
                                <h3>BÁO GIÁ</h3>
                                <h5 style="color: #626262;">TIN VIP</h5>
                                <div class="tables-baogia-L table-responsive">
                                    <table class="table-borderless table-hover tinviptable-L">
                                        <thead>
                                        <tr>
                                            <th>NHÓM 1</th>
                                            <th>NHÓM 2</th>
                                            <th>NHÓM 3</th>
                                        </tr>
                                        </thead>
                                        <!--<tr>
                                            <td><hr class="tr-underline-L"></td>
                                            <td><hr class="tr-underline-L"></td>
                                            <td><hr class="tr-underline-L"></td>
                                        </tr>-->
                                        <tbody>
                                        <tr>
                                            <td style="padding-top: 16px;">Thời trang</td>
                                            <td style="padding-top: 16px;">Máy tính, Thiết bị văn phòng</td>
                                            <td style="padding-top: 16px;">Điện tử, Kỹ thuật số</td>
                                        </tr>
                                        <tr>
                                            <td>Thời trang</td>
                                            <td>Máy tính, Thiết bị văn phòng</td>
                                            <td>Điện tử, Kỹ thuật số</td>
                                        </tr>
                                        <tr>
                                            <td>Máy tính bảng</td>
                                            <td>Máy tính, Thiết bị văn phòng</td>
                                            <td>Điện tử, Kỹ thuật số</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Máy tính, Thiết bị văn phòng</td>
                                            <td>Điện tử, Kỹ thuật số</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Điện tử, Kỹ thuật số</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <hr/>
                                    
                                    <table class="table-borderless table-hover tinviptable2-L">
                                        <thead>
                                        <tr>
                                            <th>LOẠI TIN</th>
                                            <th>VỊ TRÍ</th>
                                            <th>SỐ VỊ TRÍ</th>
                                            <th>NHÓM 1</th>
                                            <th>NHÓM 2</th>
                                            <th>NHÓM 3</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Tin VIP TOP</td>
                                            <td>Tiểu mục</td>
                                            <td>02</td>
                                            <td>500,000</td>
                                            <td>500,000</td>
                                            <td>500,000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Tiểu mục</td>
                                            <td>02</td>
                                            <td>500,000</td>
                                            <td>500,000</td>
                                            <td>500,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tin SUPER VIP</td>
                                            <td>Xuyên chuyên mục, Tiểu mục</td>
                                            <td>02</td>
                                            <td>500,000</td>
                                            <td>500,000</td>
                                            <td>500,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tin VIP BOTTOM</td>
                                            <td>Xuyên chuyên mục, Tiểu mục</td>
                                            <td>03</td>
                                            <td>500,000</td>
                                            <td>500,000</td>
                                            <td>500,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- MỤC Tin tài trợ có 1 table-->
                            <div class="tintaitro" style="margin-top: 24px;">
                                <h3>BÁO GIÁ</h3>
                                <h5 style="color: #626262;">TIN ĐĂNG TÀI TRỢ</h5>
                                <div class="tables-baogia-L table-responsive">
                                    <table class="table-borderless table-hover tinhotrotable-L">
                                        <thead>
                                        <tr>
                                            <th width="15%">CÁCH HIỂN THỊ</th>
                                            <th width="26%">VỊ TRÍ</th>
                                            <th width="26%">CÁCH TÍNH PHÍ</th>
                                            <th width="26%">LỢI ÍCH</th>
                                            <th width="7%">ĐƠN GIÁ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="padding-top: 16px;">Hiển thị ngẫu nhiên giữa các vị trí</td>
                                            <td style="padding-top: 16px;">Hiển thị ngẫu nhiên giữa các vị trí. Hiển thị ngẫu nhiên giữa các vị trí.
                                            Hiển thị ngẫu nhiên giữa các vị trí. Hiển thị ngẫu nhiên giữa các vị trí. 
                                            </td>
                                            <td style="padding-top: 16px;">Hiển thị ngẫu nhiên giữa các vị trí</td>
                                            <td v>Hiển thị ngẫu nhiên giữa các vị trí</td>
                                            <td style="padding-top: 16px;">1000Xu/Click</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- MỤC Tin thị trường có 1 table-->
                            <div class="tintaitro" style="margin-top: 24px;">
                                <h3>BÁO GIÁ</h3>
                                <h5 style="color: #626262;">ĐĂNG TIN Ở MỤC TIN TỨC THỊ TRƯỜNG (PR)</h5>
                                <div class="tables-baogia-L table-responsive">
                                    <table class="table-borderless table-hover tinhotrotable-L">
                                        <thead>
                                        <tr>
                                            <th width="30%">VỊ TRÍ</th>
                                            <th width="30%">MÔ TẢ</th>
                                            <th width="10%">ĐƠN GIÁ</th>
                                            <th width="20%">LƯU Ý</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="padding-top: 16px;">Hiển thị ngẫu nhiên giữa các vị trí. Hiển thị ngẫu nhiên giữa các vị trí</td>
                                            <td style="padding-top: 16px;">Hiển thị ngẫu nhiên giữa các vị trí. Hiển thị ngẫu nhiên giữa các vị trí</td>
                                            <td style="padding-top: 16px;">900.000 VNĐ</td>
                                            <td style="padding-top: 16px;">Hiển thị ngẫu nhiên giữa các vị trí</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <i style="float: right;padding: 4px;font-size: 12px;">(*)Giá chưa bao gồm 10% thuế VAT</i>
                            </div>
                            
                            <!-- MỤC Tin chăm sóc có 1 table-->
                            <div class="tintaitro" style="margin-top: 24px;">
                                <h3>BÁO GIÁ</h3>
                                <h5 style="color: #626262;">DỊCH VỤ SIÊU CHĂM SÓC 2015</h5>
                                <div class="tables-baogia-L table-responsive">
                                    <table class="table-striped table-hover tinhotrotable-L">
                                        <thead>
                                        <tr>
                                            <th width="49%" class="tinchamsoc-td-L" colspan="2" style="text-align: center !important;">Quyền Lợi</th>
                                            <th></th>
                                            <th width="51%" colspan="3">Tên Gói</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="49%" class="tinchamsoc-td-L" colspan="2"></td>
                                                <td colspan="0"></td>
                                                <td style="width: 17%;font-weight: bold;font-size: 14px;padding: 8px;">Gói 250</td>
                                                <td style="width: 17%;font-weight: bold;font-size: 14px;padding: 8px;">Gói 450</td>
                                                <td style="width: 17%;font-weight: bold;font-size: 14px;padding: 8px;">Gói 900</td>
                                            </tr>
                                            <tr>
                                                <td class="tinchamsoc-td-L" colspan="2">Giá/Tháng (VNĐ) Đã bao gồm 10% thuế VAT</td>
                                                <td colspan="0"></td>
                                                <td>250,000</td>
                                                <td>450,000</td>
                                                <td>900,000</td>
                                            </tr>
                                            <tr>
                                                <td class="tinchamsoc-td-L" colspan="2">Quản lý các comment trên trang tin tức</td>
                                                <td colspan="0"></td>
                                                <td>No</td>
                                                <td>Yes</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td class="tinchamsoc-td-L" colspan="2">Up tin lên trang một chuyên mục</td>
                                                <td colspan="0"></td>
                                                <td>1000 Up</td>
                                                <td>1000 Up</td>
                                                <td>1500 Up</td>
                                            </tr>
                                            <tr>
                                                <td class="tinchamsoc-td-L" colspan="2">Hỗ trợ thu tiền tại nhà với khách hàng đăng ký sử dụng dịch vụ
                                                tại các quận nội thành</td>
                                                <td colspan="0"></td>
                                                <td>Free</td>
                                                <td>Free</td>
                                                <td>Free</td>
                                            </tr>
                                            <tr>
                                                <td class="tinchamsoc-td-L" colspan="2">Giá/Tháng (VNĐ) Đã bao gồm 10% thuế VAT</td>
                                                <td colspan="0"></td>
                                                <td>250,000</td>
                                                <td>450,000</td>
                                                <td>900,000</td>
                                            </tr>
                                            <tr>
                                                <td class="tinchamsoc-td-L" colspan="2">Quản lý các comment trên trang tin tức</td>
                                                <td colspan="0"></td>
                                                <td>No</td>
                                                <td>Yes</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td class="tinchamsoc-td-L" colspan="2">Up tin lên trang một chuyên mục</td>
                                                <td colspan="0"></td>
                                                <td>1000 Up</td>
                                                <td>1000 Up</td>
                                                <td>1500 Up</td>
                                            </tr>
                                            <tr>
                                                <td class="tinchamsoc-td-L" colspan="2">Hỗ trợ thu tiền tại nhà với khách hàng đăng ký sử dụng dịch vụ
                                                tại các quận nội thành</td>
                                                <td colspan="0"></td>
                                                <td>Free</td>
                                                <td>Free</td>
                                                <td>Free</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <h4 style="color: #338d21;font-weight: bold;padding: 32px 0px 0px 0px;">Liên hệ Hotline: 096 906 1788 để được tư vấn tốt nhất</h4>
                        </div>
                      </div>
                    </div>
                    <div class="card" style="margin: 16px 0px 16px;">
                      <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        Báo giá quảng cáo trên Muare
                      </a>
                      </div>
                      <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body" style="padding-top: 8px;padding-left: 32px;">
                            
                            <!-- Nội dung phần báo giá quảng cáo trên Muare -->
                            <div class="thongtintraffic">
                                <img src="assets/images/trangmuaquangcao/muarebanner.png" class="center">
                                <h4 class="title-baogiaad-L"><span>THÔNG TIN TRAFFIC</span></h4>
                                <div class="row">
                                    <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12" >
                                        <h5 class="h5-baogiaad-L">ĐỘC GIẢ CHÍNH</h5>
                                        <p class="content-baogiaad-L">Phụ nữ, tri thức, độ tuổi từ 23-35</p>
                                        <h5 class="h5-baogiaad-L" style="margin-top: 22%;">WEBSITE</h5>
                                        <p class="numbers-baogiaad-L" style=""><a href="#">https://muare.vn</a></p>
                                    </div>
                                    <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12" >
                                        <h5 class="h5-baogiaad-L">PAGEVIEWS<abbr class="content-baogiaad-L"> (lượt/tháng)</abbr></h5>
                                        <p class="numbers-baogiaad-L">2,367,028</p>
                                        <h5 class="h5-baogiaad-L">VISITS<abbr class="content-baogiaad-L"> (lượt/tháng)</abbr></h5>
                                        <p class="numbers-baogiaad-L">924,827</p>
                                        <h5 class="h5-baogiaad-L">TIME ON SITE</h5>
                                        <p class="numbers-baogiaad-L">00:02:37</p>
                                    </div>
                                    <div class="col-sm-5 col-lg-5 col-md-5 col-xs-12" >
                                        <h5 class="h5-baogiaad-L">PHÂN BỔ VÙNG MIỀN<p class="content-baogiaad-L">(Theo Google Analytics)</p></h5>
                                        <img src="assets/images/trangmuaquangcao/bieudo.png" style="margin-top: -12px;">
                                        <b style="float: left;font-size: 12px;font-weight: bold;">(*) Số liệu được cập nhật tháng 10.2017</b>
                                    </div>
                                </div>

                                <h5 class="h5-baogiaad2-L" style="margin-top: 16px;">QUY ĐỊNH VỀ BANNER</h5>
                                <ul class="content-baogiaad-L" style="margin-left: 16px;">
                                    <li>Đơn giá chưa bao gồm VAT 10%</li>
                                    <li>Chế độ chia sẻ 3 theo user</li>
                                    <li>Thời gian quảng cáo dưới 7 ngày được tính tròn 1 tuần</li>
                                    <li>Thời gian quảng cáo dưới 7 ngày được tính tròn 1 tuần</li>
                                    <li>Thời gian quảng cáo dưới 7 ngày được tính tròn 1 tuần</li>
                                </ul>

                                <h5 class="h5-baogiaad2-L" style="margin-top: 16px;">CHI PHÍ QUẢNG CÁO</h5>
                                <ul class="content-baogiaad-L" style="margin-left: 16px;">
                                    <li>Chi phí hosting video trong banner (dung lượng tối đa 3MB): 3,000,000 VNĐ/Ngày</li>
                                </ul>
                            </div>
                            
                            <div class="baogiachitiet">
                                <h4 class="title-baogiaad-L" style="margin-top: 32px;"><span>BÁO GIÁ CHI TIẾT</span></h4>
                                <div class="tables-baogia-L table-responsive" style="border: 1px solid black;box-shadow: 0px 0px 0.7px 0.7px #a2a2a2;">
                                    <table class="table table-hover baogiatable-L">
                                        <thead>
                                        <tr>
                                            <th width="8%">Vị trí</th>
                                            <th width="37%">Tên vị trí</th>
                                            <th width="20%">Kích thước (pixel)</th>
                                            <th width="16%">Hình thức chia sẻ</th>
                                            <th width="19%">Giá xuyên trang (triệu VNĐ/Tuần)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Top Banner</td>
                                            <td>1160x90</td>
                                            <td>3</td>
                                            <td>2,5</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Top Banner</td>
                                            <td>1160x90</td>
                                            <td>3</td>
                                            <td>2,5</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Top Banner</td>
                                            <td>1160x90</td>
                                            <td>3</td>
                                            <td>2,5</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Top Banner</td>
                                            <td>1160x90</td>
                                            <td>3</td>
                                            <td>2,5</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <h4 style="color: #338d21;font-weight: bold;padding: 32px 0px 0px 0px;">Liên hệ Hotline: 096 906 1788 để được tư vấn tốt nhất</h4>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
            </div>
            
            <div style="display: none;border-left: 1px solid #c6c4c4;" id="nhanvientuvan" class="col-sm-9 col-lg-9 col-md-9 col-xs-12" style="border-left: 1px solid #c6c4c4;">
                <div class="container">
                    <h6 style="padding: 16px 0px 16px;color: #1674af;font-weight: bold;">Liên hệ trực tiếp với kinh doanh để được giá tốt</h6>
                    <span class="nvtuvan-frame-L"><i class="fas fa-phone-volume" style="color: #2570a8;font-size: 16px;"></i>  Bích Phương: 0982 181 392</span>
                    <span class="nvtuvan-frame-L"><i class="fas fa-phone-volume" style="color: #2570a8;font-size: 16px;"></i>  Bích Phương: 0982 181 392</span>
                    <span class="nvtuvan-frame-L"><i class="fas fa-phone-volume" style="color: #2570a8;font-size: 16px;"></i>  Bích Phương: 0982 181 392</span>
                    <span class="nvtuvan-frame-L"><i class="fas fa-phone-volume" style="color: #2570a8;font-size: 16px;"></i>  Bích Phương: 0982 181 392</span>
                    <span class="nvtuvan-frame-L"><i class="fas fa-phone-volume" style="color: #2570a8;font-size: 16px;"></i>  Bích Phương: 0982 181 392</span>
                    <span class="nvtuvan-frame-L"><i class="fas fa-phone-volume" style="color: #2570a8;font-size: 16px;"></i>  Bích Phương: 0982 181 392</span>
                </div>
            </div>
            
        </div>
    </section>
@endsection


