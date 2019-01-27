@foreach($childCate as $child)
<li><a href="{{str_slug($child->name)}}/{{$child->id}}/{{$hienthi}}/{{$tinhtrang}}/{{$gia}}/{{$sapxep}}/uy-tin-chat-luong"">{{$child->name}}</a></li>
@endforeach
