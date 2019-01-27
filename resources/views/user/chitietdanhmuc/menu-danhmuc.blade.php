@foreach($childCate as $child)
<li><a href="danh-muc/{{str_slug($child->name)}}/{{$child->id}}">{{$child->name}}</a></li>
@endforeach
