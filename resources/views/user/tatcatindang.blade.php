@extends('user.layouts.index')
@section('title')
	<title>Tất cả tin đăng</title>
@endsection
@section('content')

	<section class="content mt-2">

		<div class="container">
			<div class="row">
				<div class="content-left col-lg-9 col-md-9"> <!-- content-left -->
					<!-- ----------------------- Tin đăng mới nhất -->
					<div class="row">
						<div class="tindangmoinhat col-md-12">
							<div class="large-title-2-Tr">
                                <h3>
                                    <span style="">Tin đăng mới nhất</span>
                                </h3>							
							</div>
                            <div class="row-no-padding pagination-box">
                                <ul class="pagination pagination2 pagination-Tr">
                                   <li class="page-item">
                                       <a class="page-link" href="http://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94?page=1" rel="prev" style="border-radius: 0px;">« Trang trước</a></li>
                                   <li class="page-item"><a class="page-link" href="http://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94?page=3" rel="next" style="border-radius: 0px;">Trang sau »</a></li>
                                </ul>                           
                            </div>
						</div> <!-- ----------------------- kết thúc div Tin đăng mới nhất -->
					</div><!-- -----------------------Kết thúc div row Tin đăng mới nhất -->
                    <div class="row">
                        <div class="allNews allNews-Tr">

                            @foreach($services as $child)
                            <div class="col-md-6 recentNew recentNew-Tr">
                                <div class="row">                                    
                                    <div class="recent-item-title-Tr">
                                        <div class="title-dotted-Tr thu_gon_text_tindang_tomiot">
                                            <a href="{{$child->id}}"> {{$child->name}}</a>
                                        </div>                                        
                                    </div> 
                                </div>
                                <div class="row">
                                        <div class="chip">
                                            <?php 
                                                $images = json_decode($child->images);
                                              ?>
                                          <img src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" alt="Person">
                                          <a href="{{$child->username}}">{{$child->username}}</a>  đăng {{$child->date_added}} phút trước
                                        </div>
                                </div>                                
                                <div class="noidungTin">
                                    <div class="row">
                                        <div class="canTraiNoiDung col-md-7">
                                        <span class="thu_gon_text_tomiot">
                                            {{$child->description}}
                                        </span> 
                                        <div class="post-address">
                                            <i class="fas fa-tag"></i> <span> {{number_format($child->price,0)}}đ</span>
                                        </div>
                                        <div class="post-address ">
                                             <span class="thu_gon_text_diachitindang_tomiot"><i class="fas fa-map-marker-alt"></i> {{$child->address}}</span>
                                        </div>
                                    </div>
                                    <div class="imgTinDangMoiNhat col-md-5">
                                        <a href="{{$child->id}}">
                                        <img  style="width: 150px; height: 150px;" class="" src="{{$child->images?? 'https://static8.muarecdn.com/zoom,90/150_150/muare/images/2019/01/08/4984389_4be0279c5442b71cee53.jpg'}}" alt="{{$child->name}}"></a>
                                    </div>
                                    </div>
                                </div>                              
                            </div>
                            @endforeach

                            <!-- <div class="col-md-6 recentNew recentNew-Tr">
                                <div class="row">                                    
                                    <div class="recent-item-title-Tr">
                                        <div class="title-dotted-Tr">
                                            <a href="#"> Tour du lịch ninh chữ - bình ba 3n2đ</a>
                                        </div>                                        
                                    </div> 
                                </div>
                                <div class="row">
                                        <div class="chip">
                                          <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Person">
                                          <a href="#">haihaln</a>  đăng 43 phút trước
                                        </div>
                                </div>                                
                                <div class="noidungTin">
                                    <div class="row">
                                        <div class="canTraiNoiDung col-md-7">
                                            <span>
                                                Cuối năm cần tiền xoay vòng vốn nên bán gấp tổ hợp nhà hàng khách sạn và 4ha đất mặt tiền tại phường 10, tp đà 
                                            </span> 
                                            <div class="post-address">
                                                <i class="fas fa-tag"></i> <span>800.000đ</span>
                                            </div>
                                            <div class="post-address">
                                                <i class="fas fa-map-marker-alt"></i> <span>phường 10, TP Đà Lạt</span>
                                            </div>
                                        </div>
                                        <div class="imgTinDangMoiNhat col-md-5">
                                            <a href="#">
                                            <img  style="" class="" src="https://static8.muarecdn.com/zoom,90/150_150/muare/images/2019/01/08/4984389_4be0279c5442b71cee53.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>                              
                            </div>
                            <div class="col-md-6 recentNew recentNew-Tr">
                                <div class="row">                                    
                                    <div class="recent-item-title-Tr">
                                        <div class="title-dotted-Tr">
                                            <a href="#"> Tour du lịch ninh chữ - bình ba 3n2đ</a>
                                        </div>                                        
                                    </div> 
                                </div>
                                <div class="row">
                                        <div class="chip">
                                          <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Person">
                                          <a href="#">haihaln</a>  đăng 43 phút trước
                                        </div>
                                </div>                                
                                <div class="noidungTin">
                                    <div class="row">
                                        <div class="canTraiNoiDung col-md-7">
                                        <span>
                                            Cuối năm cần tiền xoay vòng vốn nên bán gấp tổ hợp nhà hàng khách sạn và 4ha đất mặt tiền tại phường 10, tp đà 
                                        </span> 
                                        <div class="post-address">
                                            <i class="fas fa-tag"></i> <span>800.000đ</span>
                                        </div>
                                        <div class="post-address">
                                            <i class="fas fa-map-marker-alt"></i> <span>phường 10, TP Đà Lạt</span>
                                        </div>
                                    </div>
                                    <div class="imgTinDangMoiNhat col-md-5">
                                        <a href="#">
                                        <img  style="" class="" src="https://static8.muarecdn.com/zoom,90/150_150/muare/images/2019/01/08/4984389_4be0279c5442b71cee53.jpg" alt=""></a>
                                    </div>
                                    </div>
                                </div>                              
                            </div>
                            <div class="col-md-6 recentNew recentNew-Tr">
                                <div class="row">                                    
                                    <div class="recent-item-title-Tr">
                                        <div class="title-dotted-Tr">
                                            <a href="#"> Tour du lịch ninh chữ - bình ba 3n2đ</a>
                                        </div>                                        
                                    </div> 
                                </div>
                                <div class="row">
                                        <div class="chip">
                                          <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Person">
                                          <a href="#">haihaln</a>  đăng 43 phút trước
                                        </div>
                                </div>                                
                                <div class="noidungTin">
                                    <div class="row">
                                        <div class="canTraiNoiDung col-md-7">
                                        <span>
                                            Cuối năm cần tiền xoay vòng vốn nên bán gấp tổ hợp nhà hàng khách sạn và 4ha đất mặt tiền tại phường 10, tp đà 
                                        </span> 
                                        <div class="post-address">
                                            <i class="fas fa-tag"></i> <span>800.000đ</span>
                                        </div>
                                        <div class="post-address">
                                            <i class="fas fa-map-marker-alt"></i> <span>phường 10, TP Đà Lạt</span>
                                        </div>
                                    </div>
                                    <div class="imgTinDangMoiNhat col-md-5">
                                        <a href="#">
                                        <img  style="" class="" src="https://static8.muarecdn.com/zoom,90/150_150/muare/images/2019/01/08/4984389_4be0279c5442b71cee53.jpg" alt=""></a>
                                    </div>
                                    </div>
                                </div>                              
                            </div>
                            <div class="col-md-6 recentNew recentNew-Tr">
                                <div class="row">                                    
                                    <div class="recent-item-title-Tr">
                                        <div class="title-dotted-Tr">
                                            <a href="#"> Tour du lịch ninh chữ - bình ba 3n2đ</a>
                                        </div>                                        
                                    </div> 
                                </div>
                                <div class="row">
                                        <div class="chip">
                                          <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Person">
                                          <a href="#">haihaln</a>  đăng 43 phút trước
                                        </div>
                                </div>                                
                                <div class="noidungTin">
                                    <div class="row">
                                        <div class="canTraiNoiDung col-md-7">
                                        <span>
                                            Cuối năm cần tiền xoay vòng vốn nên bán gấp tổ hợp nhà hàng khách sạn và 4ha đất mặt tiền tại phường 10, tp đà 
                                        </span> 
                                        <div class="post-address">
                                            <i class="fas fa-tag"></i> <span>800.000đ</span>
                                        </div>
                                        <div class="post-address">
                                            <i class="fas fa-map-marker-alt"></i> <span>phường 10, TP Đà Lạt</span>
                                        </div>
                                    </div>
                                    <div class="imgTinDangMoiNhat col-md-5">
                                        <a href="#">
                                        <img  style="" class="" src="https://static8.muarecdn.com/zoom,90/150_150/muare/images/2019/01/08/4984389_4be0279c5442b71cee53.jpg" alt=""></a>
                                    </div>
                                    </div>
                                </div>                              
                            </div>
                            <div class="col-md-6 recentNew recentNew-Tr">
                                <div class="row">                                    
                                    <div class="recent-item-title-Tr">
                                        <div class="title-dotted-Tr">
                                            <a href="#"> Tour du lịch ninh chữ - bình ba 3n2đ</a>
                                        </div>                                        
                                    </div> 
                                </div>
                                <div class="row">
                                        <div class="chip">
                                          <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Person">
                                          <a href="#">haihaln</a>  đăng 43 phút trước
                                        </div>
                                </div>                                
                                <div class="noidungTin">
                                    <div class="row">
                                        <div class="canTraiNoiDung col-md-7">
                                        <span>
                                            Cuối năm cần tiền xoay vòng vốn nên bán gấp tổ hợp nhà hàng khách sạn và 4ha đất mặt tiền tại phường 10, tp đà 
                                        </span> 
                                        <div class="post-address">
                                            <i class="fas fa-tag"></i> <span>800.000đ</span>
                                        </div>
                                        <div class="post-address">
                                            <i class="fas fa-map-marker-alt"></i> <span>phường 10, TP Đà Lạt</span>
                                        </div>
                                    </div>
                                    <div class="imgTinDangMoiNhat col-md-5">
                                        <a href="#">
                                        <img  style="" class="" src="https://static8.muarecdn.com/zoom,90/150_150/muare/images/2019/01/08/4984389_4be0279c5442b71cee53.jpg" alt=""></a>
                                    </div>
                                    </div>
                                </div>                              
                            </div>
                            <div class="col-md-6 recentNew recentNew-Tr">
                                <div class="row">                                    
                                    <div class="recent-item-title-Tr">
                                        <div class="title-dotted-Tr">
                                            <a href="#"> Tour du lịch ninh chữ - bình ba 3n2đ</a>
                                        </div>                                        
                                    </div> 
                                </div>
                                <div class="row">
                                        <div class="chip">
                                          <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Person">
                                          <a href="#">haihaln</a>  đăng 43 phút trước
                                        </div>
                                </div>                                
                                <div class="noidungTin">
                                    <div class="row">
                                        <div class="canTraiNoiDung col-md-7">
                                        <span>
                                            Cuối năm cần tiền xoay vòng vốn nên bán gấp tổ hợp nhà hàng khách sạn và 4ha đất mặt tiền tại phường 10, tp đà 
                                        </span> 
                                        <div class="post-address">
                                            <i class="fas fa-tag"></i> <span>800.000đ</span>
                                        </div>
                                        <div class="post-address">
                                            <i class="fas fa-map-marker-alt"></i> <span>phường 10, TP Đà Lạt</span>
                                        </div>
                                    </div>
                                    <div class="imgTinDangMoiNhat col-md-5">
                                        <a href="#">
                                        <img  style="" class="" src="https://static8.muarecdn.com/zoom,90/150_150/muare/images/2019/01/08/4984389_4be0279c5442b71cee53.jpg" alt=""></a>
                                    </div>
                                    </div>
                                </div>                              
                            </div> -->


                        </div> <!-- Kết thúc all News -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row-no-padding pagination-box">
                                <ul class="pagination pagination2 pagination-Tr">
                                   <li class="page-item"><a class="page-link" href="http://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94?page=1" rel="prev" style="border-radius: 0px;">« Trang trước</a></li>
                                   <li class="page-item"><a class="page-link" href="http://muare.vn/posts/ha-noi/dien-thoai-pho-thong.94?page=3" rel="next" style="border-radius: 0px;">Trang sau »</a></li>
                                </ul>                           
                            </div>
                        </div> <!-- ----------------------- kết thúc div Tin đăng mới nhất -->
                    </div><!-- -----------------------Kết thúc div row Tin đăng mới nhất -->
				</div>

				<!-- Phần quảng cáo -->
				<div class="right-col col-md-3">				
					<!-- enbac box -->
                <div
                  id="__ebwidget"
                  style="display: block;float: left;padding-top: 10px;">
                  <iframe
                    src="https://m.enbac.com/widget/zamba.html?site=muare.vn&amp;zone=thoi-trang"
                    style="width: 300px; overflow: hidden !important;height: 385px;border: 0;"
                  ></iframe>
                </div>
                <div style="padding-bottom:5px" class="sidebar_eb">
                  <div id="mr_widget">
                    <iframe
                      src="https://muare.vn/widget/zamba?site=muare.vn&amp;type=ver&amp;zone=other&amp;location=ha-noi"
                      style="width:300px; overflow: hidden !important;height: 385px;border: 0;"
                      frameborder="0"
                      allowfullscreen=""
                    ></iframe>
                  </div>
                  <a
                    rel="nofollow"
                    target="_blank"
                    href="https://rongbay.com/dat-mua-quang-cao.html?utm_source=backup&amp;utm_medium=3sites_backup&amp;utm_content=[admdomain]&amp;utm_campaign=3sites_Camp"
                  >
                    <img
                      src="https://muare.vn//images/admicro/300x600.jpg?v=11010"
                    />
                  </a>
                  <div id="zone-jfjjrzax" class="ArfGroup">
                    <div id="share-jfjjtht2" class="ArfGroup">
                      <div id="placement-jfvym1n9" class="ArfGroup">
                        <div
                          id="banner-jfjjrzax-jfvym1x2"
                          class="ArfGroup"
                          style="min-height: 0px; min-width: 10px;"
                        >
                          <div id="slot-1-jfvym1x2">
                            <div
                              id="adnzone_29628"
                              data-admssprqid="9052610d-4251-4449-a14f-f4b257344021"
                              data-width="300"
                              data-height="250"
                              data-ssp="sspbid_3093"
                            >
                              <div
                                style="position:relative;width:300px;height:auto;"
                              >
                                <iframe
                                  src="javascript:if(typeof(adnzone29628)!='undefined'){adnzone29628.renderIframe();}else{parent.adnzone29628.renderIframe();}"
                                  style="border:none;background:#fff;"
                                  marginheight="0"
                                  align="top"
                                  scrolling="No"
                                  frameborder="0"
                                  hspace="0"
                                  vspace="0"
                                  name="adnzone_29628_0_126676"
                                  id="adnzone_29628_0_126676"
                                  width="300"
                                  height="250"
                                ></iframe
                                ><!--<a
                                  class="admLogoAdx29628"
                                  href="http://adx.admicro.vn/?utm_source=Admicro&amp;utm_medium=muare.vn&amp;utm_campaign=adxzone"
                                  target="_blank"
                                  ><span class="txtlogo">Admicro AdX</span
                                  ><span></span
                                ></a>-->
                              </div>
                              <div id="ads_top_bottom"></div>
                            </div>
                            <script type="text/javascript">
                              admsspreg({ sspid: 3093, w: 300, h: 250 });
                            </script>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <script
                    src="//media1.admicro.vn/cms/arf-jfjjrzax.min.js"
                    async=""
                  ></script>

                  <script
                    src="//media1.admicro.vn/cms/arf-jfjjrl6t.min.js"
                    async=""
                  ></script>
                  <div id="advZoneSticky2Top" style="clear:both"></div>
                  <div
                    id="advZoneSticky2"
                    style="clear: both; display: block; left: 1026px; top: 2883px; bottom: auto;"
                  ></div>

                  <script
                    src="//media1.admicro.vn/cms/arf-jfkxhs01.min.js"
                    async=""
                  ></script>
				</div> <!-- Kết thúc Phần sản phẩm mới nhất -->
			</div>	<!-- Kết thúc div row Phần sản phẩm mới nhất -->

		</div>

	</section>

@endsection