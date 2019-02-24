<select name="sorting_select" id="sorting_select" class="sorting_select"">
  <option value=
      "{{route('searchproduct', [
        'hienthi' => 'san-pham',
        'text' => ($textSearch == null) ? 'tim-kiem':$textSearch,
        'idCate' => ($idCate == null) ? 'tat-ca':$idCate,
        'tinh-trang'=>$tinhtrang,
        'gia'=>$gia,
        'sapxep' => 'tin-moi-nhat'
      ])}}"   
      @if(isset($sapxep) && $sapxep == 'tin-moi-nhat')
      selected="" 
      @endif
      >Sản phẩm mới nhất</option>

  <option value=
  "{{route('searchproduct', [
        'hienthi' => 'san-pham',
        'text' => ($textSearch == null) ? 'tim-kiem':$textSearch,
        'idCate' => ($idCate == null) ? 'tat-ca':$idCate,
        'tinh-trang'=>$tinhtrang,
        'gia'=>$gia,
        'sapxep' => 'gia-cao-nhat'
      ])}}"  
      @if(isset($sapxep) && $sapxep == 'gia-cao-nhat')
      selected="" 
      @endif
      >Giá cao nhất</option>

  <option value=
  "{{route('searchproduct', [
        'hienthi' => 'san-pham',
        'text' => ($textSearch == null) ? 'tim-kiem':$textSearch,
        'idCate' => ($idCate == null) ? 'tat-ca':$idCate,
        'tinh-trang'=>$tinhtrang,
        'gia'=>$gia,
        'sapxep' => 'gia-thap-nhat'
      ])}}"  
       @if(isset($sapxep) && $sapxep == 'gia-thap-nhat')
      selected="" 
      @endif
      >Giá thấp nhất</option>
</select>
