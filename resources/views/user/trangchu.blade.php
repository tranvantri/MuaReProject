@extends('user.layouts.index')
@section('title')
	<title>Trang chủ</title>
@endsection
@section('content')

<section class="content mt-2">
	
		<div class="container">
			<div class="row">
				<div class="content-left col-lg-9 col-md-9"> <!-- content-left -->
					@if (session("Loi"))
					<div class="alert alert-danger">
						<strong>Thông báo: </strong>{{session("Loi")}}
					</div>
					@endif			
					<div class="row"> <!-- category -->
						@include('user.trangchu.thongbaothaydoi')
						
						<div class="all-category">
							<div class="category-row">
								@include('user.trangchu.menu-categories')
							</div>
						</div>
					</div>	
					<div class="clearfix"></div>	


                    
        {{-- @include('user.core.modalChiTietSanPham') --}}

        {{-- @include('user.core.modalDatHang') --}}


        <div class="md-overlay" id="md-overlay-id"></div>
    
      <!-- Confirm order modal  - thong bao đa dat hang thanh cong-->
        @include('user.chitietdanhmuc.modalConfirmMuaHang')
      <!-- END Confirm order modal -->


					<div class="row"><!-- San pham doc dao -->
						<div class="san-pham-doc-dao">
							<div class="large-title promote">
								<span style="">Sản phẩm độc đáo</span>
							</div>
							<span><a class="view-promote-page" href="san-pham-doc-dao">Xem Thêm</a></span>
							<div class="promoteProduct row owl-carousel">
								@include('user.trangchu.san-pham-doc-dao')
							</div>
						</div>
					</div><!--end San pham doc dao -->


					<div class="clearfix"></div>

					<!-- chiasemoicuacongdong -->
					<div class="row">	
						<div class="chiasemoicuacongdong" style="">

							<div class="large-title">
								<span style="">Chia sẻ mới của cộng đồng</span>

							</div>
							@include('user.trangchu.chia-se-moi-cong-dong')
							
						</div> <!-- Kết thúc chiasemoicuacongdong -->
					</div><!-- Kết thúc div row chiasemoicuacongdong -->

					<!-- ----------------------- Tin đăng mới nhất -->
					<div class="row">
						<div class="tindangmoinhat col-md-12 col-sm-12 col-xs-12">
							<div class="large-title">
								<span style="">tin đăng mới nhất</span>
							</div>
						</div> <!-- ----------------------- kết thúc div Tin đăng mới nhất -->

						<div class="allNews col-md-12 col-sm-12 col-xs-12">
							
								
								@include('user.trangchu.tin-dang-moi-nhat')

                        	
						</div> <!-- Kết thúc all News -->

					</div><!-- -----------------------Kết thúc div row Tin đăng mới nhất -->
				</div>

				<!-- Phần sản phẩm mới nhất -->
				<div class="right-col col-md-3">
					<h3 class="title-block">Sản phẩm mới nhất</h3>
					<div class="list-item">
					  	
					  	@include('user.trangchu.san-pham-moi-nhat')
					  
					</div>
				</div> <!-- Kết thúc Phần sản phẩm mới nhất -->
			</div>	<!-- Kết thúc div row Phần sản phẩm mới nhất -->

		</div>

	</section>

@endsection