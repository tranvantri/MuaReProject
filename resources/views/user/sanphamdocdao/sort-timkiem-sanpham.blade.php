<select name="sorting_select" id="sorting_select" class="sorting_select">
  <option value=
  "{{route('spdocdao', [
        'nameCate' => 'moi-nhat', 
        'idCate' => 0,
      ])}}" 
      @if(isset($idcurrent) && $idcurrent == 0)
      selected="" 
      @endif
  >Mới nhất</option>
  @foreach($cates as $child)
	<option value=
	"{{route('spdocdao', [
        'nameCate' => str_slug($child->name), 
        'idCate' => $child->id,
      ])}}" 
      @if(isset($idcurrent) && $idcurrent == $child->id)
      selected="" 
      @endif
      >{{$child->name}}</option>
      @endforeach
	
</select>
