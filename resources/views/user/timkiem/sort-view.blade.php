<div>
  <div class="radio">
    <input type="radio" id="post"  
    @if(isset($hienthi) && $hienthi == 'tin-dang')
      checked="" 
      @endif
      >
    <label for="post" class="find_radio_lb"><a class="type-ranger" 
      href="" 
      @if(isset($hienthi) && $hienthi == 'tin-dang')
      style="color: red;"
      @endif
      >Toàn bộ tin đăng</a></label>
  </div>
  
  <div class="radio">
    <input type="radio" id="product" class=""
      @if(isset($hienthi) && $hienthi == 'san-pham')
      checked="" 
      @endif
    >
    <label for="product" class="find_radio_lb"><a class="type-ranger"
      href=""

      >Kho sản phẩm</a></label><span class="label label-success">Mới</span>
  </div>
</div>