@foreach($services as $child)
<div class="col-sm-12 col-xs-12 col-md-6 recentNew ">
	<div class="row">
		<div class="tieudetintuc">
			<a href="{{$child->id}}"> {{$child->title}}</a>
		</div>
	</div>
	
	<div class="row">
		<div class="chip">
			<img src="https://www.w3schools.com/howto/img_avatar.png" alt="User"	>
			<a href="{{$child->idUser}}">{{$child->name}}</a>  đăng 44 phút trước
		</div>
	</div>
	<div class="noidungTin">
		<div class="row">
			<div class="canTraiNoiDung col-md-7">
				<span class="thu_gon_text_tomiot">
					{{$child->description}} 
				</span> 
				<div class="post-address">
					<i class="fas fa-tag"></i> <span class="gia_tin_dang_tomiot">{!! number_format($child->price,0)  ?? "1" !!}đ</span>
				</div>
				<div class="post-address">
					<i class="fas fa-map-marker-alt"></i> <span>{{$child->location}}</span>
				</div>
			</div>
			<div class="imgTinDangMoiNhat col-md-5">
				<a href="#"><img class="" src="{{$child->images}}" alt=""></a>
			</div>
		</div>									
	</div>								
</div>	
@endforeach
