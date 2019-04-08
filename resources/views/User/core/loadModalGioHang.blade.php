<?php foreach(Cart::content() as $row) :?>
<div class="product-in-order-L">
     <img class="lazy-image avatar" src="<?php echo ($row->options->has('hinhanhsp') ? $row->options->hinhanhsp : ''); ?>" alt="Lỗi hình ảnh" 
     width="72px" height="72px" style="display: inline;float: left;padding-right: 10px;">
     <a href="#" class="product-name-L"><?php echo $row->name; ?></a>
     <div>
          <p class="price-order-L">
          <abbr>Số lượng: 
          &#160; 
          <input type="number" min="1" value="<?php echo $row->qty; ?>" 
          class="input-numbsproduct changeNumber_tomiot"  data_idSua="{{$row->rowId}}" />
          </abbr> 

          <abbr style="padding-left: 5%;">Đơn giá: <?php echo number_format($row->price,0); ?> VNĐ</abbr> 

          <abbr style="padding-left: 5%;">Thành tiền: <abbr style="color: red;"><?php echo number_format($row->price*$row->qty,0); ?> VNĐ</abbr></abbr>
               <abbr>&#160;&#160;
          {{--Xu ly xoa san pham khoi gio hang--}}
          
          <button type="button"
                style="color: red;font-size: 16px;display: contents;" class="btn btn-sm">
               <span class="fas fa-trash-alt btnXoaSP_tomiot" data_idXoa="{{$row->rowId}}" style="float:right;padding-right: 8px;padding-top: 4px;" ></span>
          </button>

          </abbr> 
          
          </p>

     </div>
     <hr>
</div>
<?php endforeach;?>