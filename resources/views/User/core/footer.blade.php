<footer id="footer" class="container-fluid footer">
    <div class="row" style="width: 88%;margin-left: 6%;margin-right: 6%;padding: 32px 8px;">
        <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12">
            <img src="assets/images/logofooter.png">
            <p>Giấy chứng nhận đầu tư số 011032001130 do Ủy ban nhân dân TP Hà Nội cấp ngày 23 tháng 03 năm 2011</p>
            <p style="margin: -8px 0 8px;">Email: info@vccorp.vn</p>
            <iframe name="fcc7b1e1c2c61c" width="250px" height="130px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.9/plugins/page.php?adapt_container_width=true&amp;app_id=295019757360055&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fj-GHT1gpo6-.js%3Fversion%3D43%23cb%3Dfc43b7478c7d94%26domain%3Dmuare.vn%26origin%3Dhttps%253A%252F%252Fmuare.vn%252Ff33dc88a7195e5c%26relation%3Dparent.parent&amp;container_width=255&amp;height=130&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fforummuare%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=250" style="border: none; visibility: visible; width: 250px; height: 130px;" ></iframe>
        </div>
        <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12">
            <div class="column">



                <div class="row-sm-6 row-lg-6 row-md-6 row-xs-12">
                    <div class="row">
                        <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">
                            <h6>THỜI TRANG</h6>
                            <ul>
                                @foreach($childThoiTrang as $child)
                                <li><a href="{{$child->id}}"><i class='fas fa-chevron-right'></i>&#160;&#160;{{$child->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">
                            <h6>ĐIỆN TỬ - ĐIỆN LẠNH</h6>
                            <ul>
                                @foreach($childDienLanh as $child)
                                <li><a href="{{$child->id}}"><i class='fas fa-chevron-right'></i>&#160;&#160;{{$child->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">
                            <h6>XE CỘ</h6>
                            <ul>
                                @foreach($childXeCo as $child)
                                <li><a href="{{$child->id}}"><i class='fas fa-chevron-right'></i>&#160;&#160;{!! $child->name !!}</a></li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="row-sm-6 row-lg-6 row-md-6 row-xs-12" style="margin-top: 10%;"> -->
                    <div class="row-sm-6 row-lg-6 row-md-6 row-xs-12">
                        <div class="row">
                            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">
                                <h6>RAO VẶT</h6>
                                <ul>
                                    @foreach($childRaoVat as $child)
                                    <li><a href="#"><i class='fas fa-chevron-right'></i>&#160;&#160;{{$child->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">
                                <h6>BẤT ĐỘNG SẢN</h6>
                                <ul>
                                    @foreach($childBDS as $child)
                                    <li><a href="#"><i class='fas fa-chevron-right'></i>&#160;&#160;{{$child->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">
                                <h6>ĂN UỐNG - VUI CHƠI</h6>
                                <ul>
                                    @foreach($childVuiChoi as $child)
                                    <li><a href="#"><i class='fas fa-chevron-right'></i>&#160;&#160;{{$child->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>




                </div>
            </div>


            <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12">
                <div class="column">
                    <div class="row-sm-6 row-lg-6 row-md-6 row-xs-12">
                        @foreach($childLienLac as $child)
                        <h6>{{$child->name}}</h6>
                        <div class="contacts-info">
                            <address>
                                <i class="fas">&#xf3c5;</i>
                                {{$child->address}}
                            </address><br>
                            <div class="phone-footer" style="line-height: 22px;">
                                <i class="fas">&#xf095;</i>CSKH: {{$child->cskh}} <br><span class="contact-qc" style="padding-left: 3px;">Liên hệ quảng cáo: {{$child->lhqc}}</span><br><a style="margin-left: 48px; color: #FFFFCC;" href="https://muare.vn/mua-quang-cao">
                                    <i class="far fa-thumbs-up"></i> Xem chi tiết</a>
                                </div>
                                <div class="email-footer">
                                    <i class="fas">&#xf0e0;</i> <a class="email-hotro" href="mailto:{{$child->hotrokh}}">{{$child->hotrokh}}</a> 
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row-sm-6 row-lg-6 row-md-6 row-xs-12" style="padding-top: 20%;">
                            <h6>SIM SỐ, THẺ CÀO, DỊCH VỤ</h6>
                            <ul>
                                @foreach($childSimSo as $child)
                                <li><a href="#"><i class='fas fa-chevron-right'></i>&#160;&#160;{{$child->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </footer>