@extends('user.layouts.index')
@section('title')
	<title>Tất cả tin đăng</title>
@endsection
@section('content')

	<section class="content mt-2">

		<div class="container">
			<div class="row">
				<div class="content-left col-lg-12 col-md-12"> <!-- content-left -->
					<!-- ----------------------- Tin đăng mới nhất -->
					<div class="row">
						<div class="col-md-12">
							<div class="title-spdocdao-Tr">
                                <h3>
                                    <span style=""> 
                                        @if(isset($idcurrent) && $idcurrent == 0)
                                          Sản phẩm mới nhất ({{count($products)}})
                                        @else
                                            @foreach($cates as $child)
                                                @if(isset($idcurrent) && $idcurrent == $child->id)
                                                    Sản phẩm {{$child->name}} ({{count($products)}})
                                                    @break
                                                @endif
                                            @endforeach
                                        @endif


                                    </span>
                                </h3>							
							</div>
                            <div class="row-no-padding pagination-box">
                                <div class="pagination-Tr">
                                    @include('user.sanphamdocdao.phantrang')
                                </div>
                                
                                <div class="sorting">
                                    Chuyên mục: @include('user.sanphamdocdao.sort-timkiem-sanpham')
                                </div>                        
                            </div>
						</div> <!-- ----------------------- kết thúc div Tin đăng mới nhất -->
					</div><!-- -----------------------Kết thúc div row Tin đăng mới nhất -->
                    
                    <div class="promoteProduct row">

                        @if((count($products)))
                            @foreach($products as $child)
                            <div class="col-lg-2 col-md-6 col-sm-6">    
                                <div class="motkhoi item">     
                                    <div class="wrap-img-tr" dataIDProduct2="">
                                        <a href="san-pham/{{$child->id}}">
                                            <?php 
                                                $images = json_decode($child->images);
                                            ?>
                                          
                                            <img class="" style="width: 100%; height: 150px;" 
                                            src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" alt="">
                                        </a>                                    
                                    </div>      

                                    <div class="card-body info">
                                            
                                        <div class="info-inner">
                                            <div class="title_products_related">
                                                <a href="san-pham/{{$child->id}}" title="{{$child->name}}" class="OverlayPopup" data-size="l" data-id="popupItem">{{$child->name}}</a>
                                            </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="price-box">
                                                    <p class="special-price"> <span class="price"> {{number_format($child->price,0)}}đ </span> </p>
                                                </div>
                                            </div>
                                            <!--item-content-->

                                        </div>
                                        <div class="actions">
                                            
                                            <button type="button" title="Add to Cart" class="button btn-cart ">
                                                <div class="box-info">
                                                    <span>                                                  
                                                        <a class="order md-trigger2" 
                                                        href="san-pham/{{$child->id}}">Xem chi tiết</a>
                                                    </span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>          
                                
                            </div>
                            @endforeach                        
                        @else
                            <div style="width: 18rem; margin: auto;"><h4>Không tìm thấy sản phẩm!</h4></div>
                        @endif
                    </div> <!-- Kết thúc all News -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row-no-padding pagination-box">
                                <div class="pagination-Tr">
                                    @include('user.sanphamdocdao.phantrang')
                                </div>                           
                            </div>
                        </div> <!-- ----------------------- kết thúc div Tin đăng mới nhất -->
                    </div><!-- -----------------------Kết thúc div row Tin đăng mới nhất -->
				</div>
		</div>

	</section>

@endsection