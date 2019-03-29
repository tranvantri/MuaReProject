@foreach($tindang as $child)
<div class="col-lg-6 col-md-12 col-sm-12 recentNew ">
	<div class="row">
		<div class="tieudetintuc">
			<a href="{{$child->id}}"> {{$child->name}}</a>
		</div>
	</div>
	
	<div class="row">
		<div class="chip">
			<img src="https://www.w3schools.com/howto/img_avatar.png" alt="User"	>
			<a href="{{$child->idChuShop}}">{{$child->tenChuShop}}</a>  đăng {{date("d/m/Y", strtotime($child->date_added))}}, lúc {{date("H:m", strtotime($child->date_added))}}
		</div>
	</div>
	<div class="noidungTin">
		<div class="row">
			<div class="imgTinDangMoiNhat col-md-5">
				<?php 
	                $images = json_decode($child->images);
	              ?>
				<a href="#"><img class="img-thumbnail"   height="134" src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" alt="Hình ảnh của shop"></a>
			</div>
			<div class="canTraiNoiDung col-md-7">
				<span class="thu_gon_text_tomiot" title="{{$child->description}} ">
					{{$child->description}} 
				</span> 
				<div class="post-address">
					<i class="fas fa-tag"></i> <span class="gia_tin_dang_tomiot">{!! number_format($child->price,0)  ?? "chưa có giá" !!}đ</span>
				</div>
				<div class="post-address" title="{{$child->address ?? $child->diaChiChuShop}}">
					<i class="fas fa-map-marker-alt"></i> <span>{{$child->address ?? $child->diaChiChuShop}}</span>
				</div>
			</div>
			
		</div>									
	</div>								
</div>	
@endforeach
