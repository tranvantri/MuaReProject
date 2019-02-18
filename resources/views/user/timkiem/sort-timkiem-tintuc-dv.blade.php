<select name="sorting_select" id="sorting_select" class="sorting_select"">
	<option value=
	"" 
      @if(isset($sapxep) && $sapxep == 'tin-moi-nhat')
      selected="" 
      @endif
      >Tin up mới nhất</option>
	<option value=
	"" 
      @if(isset($sapxep) && $sapxep == 'xem-nhieu-nhat')
      selected="" 
      @endif
      >Xem nhiều nhất</option>
	<option value=
	"" 
      @if(isset($sapxep) && $sapxep == 'gia-cao-nhat')
      selected="" 
      @endif
      >Giá cao nhất</option>
	<option value=
	"" 
       @if(isset($sapxep) && $sapxep == 'gia-thap-nhat')
      selected="" 
      @endif
      >Giá thấp nhất</option>
</select>
