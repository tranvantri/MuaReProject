<div class="find-price">
	<ul class="list-price active">
		
		@foreach($categories as $child)
		<li>
			<a class="price-ranger" 
			href="{{route('searchproduct', [
        'hienthi' => 'san-pham',
        'text' => ($textSearch == null) ? 'tim-kiem':$textSearch,
        'idCate' => $child->id,
        'tinh-trang'=>$tinhtrang,
        'gia'=>$gia,
        'sapxep' => 'tin-moi-nhat'
      ])}}" 
		    
			>{{$child->name}}</a>
		</li>
		@endforeach	
		
	</ul>

	{{-- <div class="price-b2">
        <div class="view-all-price">&lt; Tất cả mức giá</div>
        <form action="" method="get">
        <div class="input-price-filter">
            <div class="input-price pull-left">
                <label for="price-from">Từ</label>
                <input type="text" autocomplete="off" value="0" decimal="true" numbersonly="true" maxlength="15" class="price-input" id="price-from">
                <span class="vnd">đ</span>
            </div>
            <div class="input-price pull-left">
                <label for="from-to">Đến</label>
                <input type="text" autocomplete="off" value="2000000000" decimal="true" numbersonly="true" maxlength="15" class="price-input" id="price-to">
                <span class="vnd">đ</span>
                <button class="icon button-loc" type="submit" title="lọc"><i class="fas fa-chevron-right"></i>
                <input type="hidden" name="title" value="quan-ao">
                <input type="hidden" name="id" value="17">
                <input type="hidden" name="quality" value="moi-va-cu">
                <input type="hidden" name="sort" value="moi-cap-nhat">
                <input type="hidden" name="type" value="tin-dang">
                <input type="hidden" name="extra" value="uy-tin">
                <input type="hidden" name="routeName" value="posts.post.index.full.params">
            </button></div>

        </div>
        </form>
    </div>	 --}}
</div>