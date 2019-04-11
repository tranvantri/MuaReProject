@foreach($newestProducts as $child)
<div class="new-item">
	<div class="item-image">
		<a href="san-pham/{{$child->id}}">
			<?php 
                $images = json_decode($child->images);
              ?>
			<img class="card-img-top" height="80"   title="Chủ gian hàng: {{$child->name}}" 
			src="{{$images[0] ?? 'assets/images/chitietsanpham/logo_muare.png'}}" 
			alt="{{$child->name}}">
		</a>
		<small class="item-price">{{number_format($child->price,0)}}đ</small>
	</div>			  		
</div>
@endforeach
