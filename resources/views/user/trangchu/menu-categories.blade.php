@foreach($cate_count as $child)
<div class="category-col col-lg-2">
	<a href="danh-muc/{{str_slug($child['cate']->name)}}/{{$child['cate']->id}}" class="icon-category">
		<div class="icon-c" 
		style="background: url('{{$child['cate']->image}}') no-repeat;"></div>
		<div class="title-category">
			<h2>{{$child['cate']->name}}</h2>
		</div>
		<div class="total-post"> ({{number_format($child['count'],0)}})</div>
	</a>
</div>
@endforeach
