<div class="modal fade" id="myModal{{$child->id}}" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content modal-content-Tr">
  	<div class="ajax-loading"></div>
    <!-- Modal Header -->


    
    <form action="#" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" id="form-storage">

	    <div class="modal-header modal-header-Tr">
	    	<h4 class="modal-title" id="">Thông tin sản phẩm {{$child->name}}</h4>
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	    </div>
	    
	    <!-- Modal body -->
	    <div class="modal-body col-lg-12">
	               
            <h3 class="title-attr-Tr">Cơ bản</h3>
            <div class="attr-basic-Tr">
                <div class="box-detail">
                    <div class="title-item row">
                        <label for="nameItem" class="col-md-2">Tên sản phẩm:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="" name="title" value="{{$child->name}}" placeholder="Tên sản phẩm cần bán">
                            <p class="err-alert title" style="visibility: hidden; opacity: 0;"></p>
                        </div>
                    </div>
                    <div class="price-item-Tr row">
                        <label for="price" class="col-md-2">Giá:</label>
                        <div class="col-md-10">
                            <input type="text" name="price" id="" class="form-control" value="{{$child->price}}" />
                            <span class="vnd-Tr">.đ</span>
                            <div class="trans_price" id=""></div>                                                    
                        </div>
                    </div>

                    <div class="des-item row">
                        <label for="des" class="col-md-2">Mô tả sản phẩm:</label>
                        <div class="col-md-10">
                            <textarea style=""rows="10" class="textarea_tomiot">
                            	{{$child->description}}
                        	</textarea>
                            <p class="err-alert des" style="visibility: hidden; opacity: 0;"></p>
                        </div>
                    </div>

                    <div class="cat-item row">
                        <label for="js-example-basic-multiple" class="col-md-2">Loại sản phẩm:</label>
                        <div class="col-md-10">
                            <div class="forum-thread-infor form-horizontal">
                                <select id="chon-loai-san-pham-Tr" name="cateId" class="form-control select-thread-infor select2-hidden-accessible" tabindex="-1" aria-hidden="true">

                                	@foreach($cateParent as $childParent)
                                    <optgroup label="{{$childParent->name}}">
                                    	@foreach($cateChild as $childCate)
                                        	@if($childParent->id == $childCate->idParent)
                                            	<option value="cp"  
                                            	<?php if (($child->idCate == $childCate->id)): ?>
                                            		selected
                                            	<?php endif ?>
                                            		>
                                            		
                                            		{{$childCate->name}}
                                            	</option>
                                            @endif
                                        @endforeach
                                        
                                    </optgroup>
                                    @endforeach
                                </select>
                                <p class="err-alert cateId" style="visibility: hidden; opacity: 0;"></p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <label class="col-md-2">Ảnh sản phẩm:</label>
                        <div class="col-md-10"></div>
                        <div class="box-image-Tr-2 row">
                            <div class="add-box-Tr-2">
                                <a class="add-img-Tr">
                                    <span>Thêm ảnh mới</span>
                                </a>
                            </div><!--add-img-->
                            <input name="image" type="file" id="upload2" class="upload-Tr upload-product-Tr" multiple="multiple" accept="image/png,.png,image/jpeg,.jpg,.jpeg,.jpe,image/gif,.gif">

                            <ul id="storage-info" class="listimage" value=""></ul>
                        </div><!--box-image-->
                    </div>
                </div>                                           
            </div>

            <h3 class="title-attr-Tr">Nâng cao</h3>
            <div class="attr-advance-Tr">
                <div class="propertyItem-Tr">

                    <label class="title-Tr row">Trạng thái: </label>
                    <div class="row">
                        <div class="attr-box-Tr .col-md-3">
                            <input id="statusSale1" class="statusSale" type="radio" name="statusSale" value="1" 
                            @if($child->status > 0)
                            	checked
                            @endif

                            >
                            <label for="statusSale1">Còn hàng</label>
                        </div>
                        <div class="attr-box-Tr .col-md-3">
                            <input id="statusSale2" class="statusSale" type="radio" name="statusSale" value="2"
                            @if($child->status <  0)
                            	checked
                            @endif
                            >
                            <label for="statusSale2">Hết hàng</label>
                        </div>
                        <div class="attr-box-Tr .col-md-3">
                            <input id="statusSale3" class="statusSale" type="radio" name="statusSale" value="4"
                            @if($child->status ==  0)
                            	checked
                            @endif
                            >
                            <label for="statusSale3">Ngừng bán</label>
                        </div>
                        <p class="err-alert statusSale" style="visibility: hidden; opacity: 0;"></p>
                    </div>

                    <section id="TinhTrangSanPham">
                        <label class="title-Tr row">Tình trạng sản phẩm: </label>
                        <div class="row">
                            <div class="attr-box-Tr .col-md-3">
                                <input id="statusNew" class="statusItem" type="radio" name="statusItem" value="1" <?php if ($child->statusProduct == 1): ?>
                                		checked
                                <?php endif ?> ><label for="statusNew" 
                                
                                >Mới</label>
                            </div>
                            <div class="attr-box-Tr .col-md-3">
                                <input id="status99" class="statusItem" type="radio" name="statusItem" value="2" <?php if ($child->statusProduct == 2): ?>
                                		checked
                                <?php endif ?> ><label for="status99"
                                 >Mới 90%</label>
                            </div>
                            <div class="attr-box-Tr .col-md-3">
                                <input id="status80" class="statusItem" type="radio" name="statusItem" value="4" 
                                <?php if ($child->statusProduct == 3): ?>
                                		checked
                                <?php endif ?>
                                ><label for="status80">Mới 80%</label>
                            </div>
                            <div class="attr-box-Tr .col-md-3">
                                <input id="statusOld" class="statusItem" type="radio" name="statusItem" value="8" 
                                <?php if ($child->statusProduct == 4): ?>
                                		checked
                                <?php endif ?> 
                                ><label for="statusOld">Cũ</label>
                            </div>
                        </div>
                	</section>

                    <section id="LocNoiBanSanPham">
                        <label class="title-Tr row">Sản phẩm được bán tại: </label>
                        <div class="row">
                            <div class="attr-box-Tr .col-md-3">

                                <input id="location1" class="locationItem" type="checkbox" name="locationItem[]" value="1"

                                @foreach($place_product as $el)
                                    @if($el->idProduct == $child->id) 
	                                    @if($el->idPlace == 1)
	                                    		checked
	                                    @endif 
                                    @endif
                                @endforeach
								/>
                                <label for="location1">Hà Nội</label>
                            </div>
                            <div class="attr-box-Tr .col-md-3">
                                <input id="location2" class="locationItem" type="checkbox" name="locationItem[]" value="2" 

                                @foreach($place_product as $el)
                                    @if($el->idProduct == $child->id) 
	                                   @if ($el->idPlace == 2)
	                                    		checked
	                                    @endif 
                                    @endif
                                @endforeach
                                />
                                <label for="location2">Hải Phòng</label>
                            </div>
                            <div class="attr-box-Tr .col-md-3">
                                <input id="location4" class="locationItem" type="checkbox" name="locationItem[]" value="3" 

                                @foreach($place_product as $el)
                                @if($el->idProduct == $child->id) 
                                    @if ($el->idPlace == 3)
                                    		checked
                                    @endif
                                @endif
                                @endforeach
                                />
                                <label for="location4">Đà Nẵng</label>
                            </div>
                            <div class="attr-box-Tr .col-md-3">
                                <input id="location8" class="locationItem" type="checkbox" name="locationItem[]" value="4"

                                @foreach($place_product as $el)
                                @if($el->idProduct == $child->id) 
                                   	@if ($el->idPlace == 4)
                                    		checked
                                    @endif
                                @endif
                                @endforeach
                                />

                                <label for="location8">TP.HCM</label>
                            </div>
                            <p class="err-alert locationItem" style="visibility: hidden; opacity: 0;"></p>
                        </div>
					</section>
                </div>
            </div><!--end attr-advance-->
	                
        </div>
	    
	    <!-- Modal footer -->
	    <div class="modal-footer">
	    	<button class="btn btn-info" type="submit" >Hoàn tất</button>
	     	<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
	    </div>
    </form>
  </div>
</div>
</div>