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
{{-- <div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 0;"></div>
		<div class="title-category">
			<h2>Điện thoại, Máy tính bảng</h2>
		</div>
		<div class="total-post">  (70.382 tin)</div>
	</a>
</div>
<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -99px;"></div>
		<div class="title-category">
			<h2>Máy tính, Thiết bị văn phòng</h2>
		</div>
		<div class="total-post">  (80.763 tin)</div>
	</a>
</div>
<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -146px;"></div>
		<div class="title-category">
			<h2>Điện tử, Kỹ thuật số</h2>
		</div>
		<div class="total-post"> (101.177 tin)</div>
	</a>
</div>
<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -195px;"></div>
		<div class="title-category">
			<h2>Dịch vụ cá nhân, doanh nghiệp</h2>
		</div>
		<div class="total-post"> (101.177 tin)</div>
	</a>
</div>
<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -245px;"></div>
		<div class="title-category">
			<h2>Điện lạnh, Điện gia dụng</h2>
		</div>
		<div class="total-post"> (101.177 tin)</div>
	</a>
</div>

<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -297px;"></div>
		<div class="title-category">
			<h2>Ăn uống, Vui chơi</h2>
		</div>
		<div class="total-post"> (101.177 tin)</div>
	</a>
</div>
<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -347px;"></div>
		<div class="title-category">
			<h2>Ô tô, Xe máy, Phương tiện</h2>
		</div>
		<div class="total-post"> (101.177 tin)</div>
	</a>
</div>
<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -403px;"></div>
		<div class="title-category">
			<h2>Nhà đất, Nội thất, Xây dựng</h2>
		</div>
		<div class="total-post"> (101.177 tin)</div>
	</a>
</div>
<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -456px;"></div>
		<div class="title-category">
			<h2>Rao vặt tổng hợp</h2>
		</div>
		<div class="total-post"> (101.177 tin)</div>
	</a>
</div>
<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -509px;"></div>
		<div class="title-category">
			<h2>Sim số, Thẻ cào, Dịch vụ</h2>
		</div>
		<div class="total-post"> (101.177 tin)</div>
	</a>
</div>
<div class="category-col col-lg-2">
	<a href="" class="icon-category">
		<div class="icon-c" style="background: transparent url('assets/images/trangchu/category-icon-home.png') no-repeat scroll 0 -568px;"></div>
		<div class="title-category">
			<h2>Cộng đồng</h2>
		</div>
		<div class="total-post"> (101.177 tin)</div>
	</a>
</div> --}}