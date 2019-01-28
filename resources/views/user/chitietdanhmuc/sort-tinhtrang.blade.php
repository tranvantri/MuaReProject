<div class="form-group">
  <input type="checkbox" name="quality[]" id="new"
   @if(isset($tinhtrang) && $tinhtrang == 'tinh-trang-moi')
       checked=""
      @endif
  >
  <label for="new"><a class="quality-ranger" 
  	href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => $hienthi,
        'tinhtrang' => 'tinh-trang-moi',
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}" 
      @if(isset($tinhtrang) && $tinhtrang == 'tinh-trang-moi')
      style="color: red;"
      @endif
  	>Mới</a></label>
</div>
<div class="form-group">
  <input type="checkbox" name="quality[]" 
   @if(isset($tinhtrang) && $tinhtrang == 'tinh-trang-90')
      checked="" 
      @endif
    id="new_90">
  <label for="new_90"><a class="quality-ranger" 
  	href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => $hienthi,
        'tinhtrang' => 'tinh-trang-90',
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}"
      @if(isset($tinhtrang) && $tinhtrang == 'tinh-trang-90')
      style="color: red;"
      @endif
  	>Mới 90%</a></label>
</div>
<div class="form-group">
  <input type="checkbox" name="quality[]" 
   @if(isset($tinhtrang) && $tinhtrang == 'tinh-trang-80')
      checked="" 
      @endif
   value="" id="new_80">
  <label for="new_80"><a class="quality-ranger" 
  	href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => $hienthi,
        'tinhtrang' => 'tinh-trang-80',
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}"
      @if(isset($tinhtrang) && $tinhtrang == 'tinh-trang-80')
      style="color: red;"
      @endif
  	>Mới 80%</a></label>
</div>
<div class="form-group">
  <input type="checkbox" name="quality[]" 
   @if(isset($tinhtrang) && $tinhtrang == 'tinh-trang-cu')
      checked="" 
      @endif
   id="old">
  <label for="old"><a class="quality-ranger" 
  	href="{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => $hienthi,
        'tinhtrang' => 'tinh-trang-cu',
        'gia' => $gia,
        'sapxep' => $sapxep
      ])}}"
      @if(isset($tinhtrang) && $tinhtrang == 'tinh-trang-cu')
      style="color: red;"
      @endif
  	>Cũ</a></label>
</div>