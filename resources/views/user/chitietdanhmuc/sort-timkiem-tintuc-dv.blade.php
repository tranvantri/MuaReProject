<select name="sorting_select" id="sorting_select" class="sorting_select"">
	<option value=
	"{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => $hienthi,
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => 'tin-moi-nhat'
      ])}}" 
      @if(isset($sapxep) && $sapxep == 'tin-moi-nhat')
      selected="" 
      @endif
      >Tin up mới nhất</option>
	<option value=
	"{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => $hienthi,
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => 'xem-nhieu-nhat'
      ])}}" 
      @if(isset($sapxep) && $sapxep == 'xem-nhieu-nhat')
      selected="" 
      @endif
      >Xem nhiều nhất</option>
	<option value=
	"{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => $hienthi,
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => 'gia-cao-nhat'
      ])}}" 
      @if(isset($sapxep) && $sapxep == 'gia-cao-nhat')
      selected="" 
      @endif
      >Giá cao nhất</option>
	<option value=
	"{{route('danhmuc', [
        'nameCate' => str_slug($categoryCurrent->name), 
        'idCate' => $categoryCurrent->id,
        'hienthi' => $hienthi,
        'tinhtrang' => $tinhtrang,
        'gia' => $gia,
        'sapxep' => 'gia-thap-nhat'
      ])}}" 
       @if(isset($sapxep) && $sapxep == 'gia-thap-nhat')
      selected="" 
      @endif
      >Giá thấp nhất</option>
</select>
