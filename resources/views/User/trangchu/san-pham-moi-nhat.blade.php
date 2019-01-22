@foreach($newestProducts as $child)
<div class="new-item">
	<div class="item-image">
		<a href="{{$child->id}}">
			<img class="card-img-top" title="{{$child->name}}" src="{{$child->images}}" alt="{{$child->name}}">
		</a>
		<small class="item-price">{{number_format($child->price,0)}}đ</small>
	</div>			  		
</div>
@endforeach
