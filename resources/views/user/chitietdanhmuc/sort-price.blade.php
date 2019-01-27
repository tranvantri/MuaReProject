<div class="find-price">
	<ul class="list-price active">
		<li>
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '0-500000',
		        'sapxep' => $sapxep
		      ])}}"
			>≤ 500.000đ</a>
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
			>500.000đ - 2.000.000đ</a>
		</li>
		<li data-value="2000000-5000000">
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '2000000-5000000',
		        'sapxep' => $sapxep
		      ])}}"
			>2.000.000đ - 5.000.000đ</a></li>
		<li data-value="5000000-10000000">
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '5000000-10000000',
		        'sapxep' => $sapxep
		      ])}}"
			>5.000.000đ - 10.000.000đ</a>
		</li>
		<li class="custom-price"">
			<a class="price-ranger" 
			href="{{route('danhmuc', [
		        'nameCate' => str_slug($categoryCurrent->name), 
		        'idCate' => $categoryCurrent->id,
		        'hienthi' => $hienthi,
		        'tinhtrang' => $tinhtrang,
		        'gia' => '10000000-2000000000',
		        'sapxep' => $sapxep
		      ])}}"
			>≥ 10.000.000đ</a>
		</li>
	</ul>
	
</div>