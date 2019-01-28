<div class="find-price">
	<ul class="list-price active">
		<li>
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => 'gia-tot',
		        'sapxep' => $sapxep
		      ])}}" 
		    @if(isset($gia) && $gia == 'gia-tot')
			style="color: red;"
			@endif 
			>Tất cả giá</a>
		</li>
		<li>
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '0-200000',
		        'sapxep' => $sapxep
		      ])}}" 
		    @if(isset($gia) && $gia == '0-200000')
			style="color: red;"
			@endif
			>≤ 200.000đ</a>
		</li>
		<li>
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '200000-500000',
		        'sapxep' => $sapxep
		      ])}}" 
		    @if(isset($gia) && $gia == '200000-500000')
			style="color: red;"
			@endif
			>200.000đ - 500.000đ</a>
		</li>
		<li>
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '500000-2000000',
		        'sapxep' => $sapxep
		      ])}}" 
		      @if(isset($gia) && $gia == '500000-2000000')
			style="color: red;"
			@endif
			>500.000đ - 2.000.000đ</a>
		</li>
		<li>
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '2000000-5000000',
		        'sapxep' => $sapxep
		      ])}}" 
		        @if(isset($gia) && $gia == '2000000-5000000')
			style="color: red;"
			@endif
			>2.000.000đ - 5.000.000đ</a></li>
		<li>
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '5000000-10000000',
		        'sapxep' => $sapxep
		      ])}}" 
		       @if(isset($gia) && $gia == '5000000-10000000')
			style="color: red;"
			@endif
			>5.000.000đ - 10.000.000đ</a>
		</li>
		<li>
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '10000000-20000000',
		        'sapxep' => $sapxep
		      ])}}" 
		      @if(isset($gia) && $gia == '10000000-20000000')
			style="color: red;"
			@endif
			>10.000.000đ - 20.000.000đ</a>
		</li>
		<li>
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '20000000-50000000',
		        'sapxep' => $sapxep
		      ])}}" 
		      @if(isset($gia) && $gia == '20000000-50000000')
			style="color: red;"
			@endif
			>20.000.000đ - 50.000.000đ</a>
		</li>
		<li class="custom-price"">
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '50000000-2000000000',
		        'sapxep' => $sapxep
		      ])}}" 
		       @if(isset($gia) && $gia == '50000000-2000000000')
			style="color: red;"
			@endif
			>≥ 50.000.000đ</a>
		</li>
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