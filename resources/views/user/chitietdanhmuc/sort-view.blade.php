<div>
  <div class="radio">
    <input type="radio" id="post" class="active" checked="">
    <label for="post" class="find_radio_lb"><a class="type-ranger" 
      href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => 'tin-dang',
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}"
      >Toàn bộ tin đăng</a></label>
  </div>
  <div class="radio">
    <input type="radio" id="service" class="">
    <label for="service" class="find_radio_lb"><a class="type-ranger"
        href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => 'dich-vu',
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}"
      >Các dịch vụ liên quan</a></label>
  </div>
  <div class="radio">
    <input type="radio" id="product" class="" >
    <label for="product" class="find_radio_lb"><a class="type-ranger"
      href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => 'san-pham',
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}"
      >Kho sản phẩm</a></label><span class="label label-success">Mới</span>
  </div>
</div>