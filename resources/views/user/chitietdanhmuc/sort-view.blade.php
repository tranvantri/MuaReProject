<div>
  <div class="radio">
    <input type="radio" id="post"  
    @if(isset($hienthi) && $hienthi == 'tin-dang')
      checked="" 
      @endif
      >
    <label for="post" class="find_radio_lb"><a class="type-ranger" 
      href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => 'tin-dang',
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}" 
      @if(isset($hienthi) && $hienthi == 'tin-dang')
      style="color: red;"
      @endif
      >Toàn bộ tin đăng</a></label>
  </div>
  <div class="radio">
    <input type="radio" id="service" class="" 
    @if(isset($hienthi) && $hienthi == 'dich-vu')
      checked="" 
      @endif
    >
    <label for="service" class="find_radio_lb"><a class="type-ranger"
        href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => 'dich-vu',
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}" 
      @if(isset($hienthi) && $hienthi == 'dich-vu')
      style="color: red;"
      @endif
      >Các dịch vụ liên quan</a></label>
  </div>
  <div class="radio">
    <input type="radio" id="product" class=""
      @if(isset($hienthi) && $hienthi == 'san-pham')
      checked="" 
      @endif
    >
    <label for="product" class="find_radio_lb"><a class="type-ranger"
      href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => 'san-pham',
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}"
      @if(isset($hienthi) && $hienthi == 'san-pham')
      style="color: red;" 
      @endif
      >Kho sản phẩm</a></label><span class="label label-success">Mới</span>
  </div>
</div>