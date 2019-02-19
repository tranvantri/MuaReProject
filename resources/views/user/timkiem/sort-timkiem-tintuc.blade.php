<select name="sorting_select" id="sorting_select" class="sorting_select"">
	<option value=
      "{{route('searchtindang', [
        'hienthi' => $hienthi,
        'text' => ($textSearch == null) ? 'tim-kiem':$textSearch,
        'idCate' => ($idCate == null) ? 'tat-ca':$idCate,
        'sapxep' => 'tin-moi-nhat'
      ])}}"   
      @if(isset($sapxep) && $sapxep == 'tin-moi-nhat')
      selected="" 
      @endif
      >Tin mới nhất</option>

      {{-- <option value=
	"{{route('searchtindang', [
        'hienthi' => $hienthi,
        'text' => ($textSearch == null) ? 'tim-kiem':$texSearch,
        'idCate' => ($idCate == null) ? 'tat-ca':$idCate,
        'sapxep' => 'tin-moi-nhat'
      ])}}"   
      @if(isset($sapxep) && $sapxep == 'moi-cap-nhat')
      selected="" 
      @endif
      >Mới cập nhật</option> --}}

	<option value=
	"{{route('searchtindang', [
        'hienthi' => $hienthi,
        'text' => ($textSearch == null) ? 'tim-kiem':$textSearch,
        'idCate' => ($idCate == null) ? 'tat-ca':$idCate,
        'sapxep' => 'xem-nhieu-nhat'
      ])}}" 
      @if(isset($sapxep) && $sapxep == 'xem-nhieu-nhat')
      selected="" 
      @endif
      >Xem nhiều nhất</option>

	<option value=
	"{{route('searchtindang', [
        'hienthi' => $hienthi,
        'text' => ($textSearch == null) ? 'tim-kiem':$textSearch,
        'idCate' => ($idCate == null) ? 'tat-ca':$idCate,
        'sapxep' => 'gia-cao-nhat'
      ])}}"  
      @if(isset($sapxep) && $sapxep == 'gia-cao-nhat')
      selected="" 
      @endif
      >Giá cao nhất</option>

	<option value=
	"{{route('searchtindang', [
        'hienthi' => $hienthi,
        'text' => ($textSearch == null) ? 'tim-kiem':$textSearch,
        'idCate' => ($idCate == null) ? 'tat-ca':$idCate,
        'sapxep' => 'gia-thap-nhat'
      ])}}"  
       @if(isset($sapxep) && $sapxep == 'gia-thap-nhat')
      selected="" 
      @endif
      >Giá thấp nhất</option>
</select>
