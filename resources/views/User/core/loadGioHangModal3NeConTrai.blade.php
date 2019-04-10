<?php foreach(Cart::content() as $row) :?>
<tr>
     <td>SP_{{$row->id}}</td>
     <td><a href="san-pham/{{$row->id}}"><?php echo $row->name; ?></a></td>
     <td><?php echo $row->qty; ?></td>
     <td><?php echo number_format($row->price,0); ?> vnđ	</td>
     <td><?php echo number_format($row->price*$row->qty,0); ?> vnđ</td>
</tr>
<?php endforeach ?>