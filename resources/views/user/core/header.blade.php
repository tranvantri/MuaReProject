 <!-- navbar - navigation bar:  -->
        <div id="navigationbar">
            <!-- CONTRACT HEADER: Hà Nội - Liên hệ quảng cáo - Hỗ trợ -->
            <div id="contract-header">
                <div class="contact-child-Tr">
                <ul class="pagination toplinks" style="width: auto;">
                    <li class="page-item">
                        <div class="dropdown">
                          <button type="button" data-toggle="dropdown" style="color: white;background: none;">
                            <i class="fas fa-map-marker-alt iconstyle"></i>
                            @if(Cookie::get('place') != null)
                                @foreach($places as $child)                                
                                    @if($child->id == Cookie::get('place'))
                                    {{$child->name}}
                                    @endif                                
                                @endforeach
                            @else
                                Hà Nội
                            @endif
                        </button>
                        <div class="dropdown-menu hoverable place">
                            @if(Cookie::get('place') != null)
                                @foreach($places as $child) 
                                    <a class="dropdown-item 
                                    @if($child->id == Cookie::get('place'))
                                    active
                                    @endif
                                    " data="{{$child->id}}">{{$child->name}}</a>
                                @endforeach
                            @else
                                @foreach($places as $child) 
                                    <a class="dropdown-item" data="{{$child->id}}">{{$child->name}}</a>
                                @endforeach
                            @endif                        
                        </div>
                        
                    </div>
                    </li>
                    <li class="page-item cheader-item2"><a>Liên hệ quảng cáo</a></li>
                    <li class="page-item">
                        <div class="dropdown dropdown-width">
                          <button type="button" data-toggle="dropdown" style="color: white;background: none;">
                            <i class="fas fa-phone-volume iconstyle"></i>Hỗ trợ<i class="fas fa-caret-down iconstyle"></i>
                          </button>
                          <div class="dropdown-menu dropdown-width">
                            <div class="dropdown-item">
                                <p class="support-header"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABPAAAATwBTZvJDgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJESURBVDiNrZNNSJRRFIafc/0ZMxEUIzdCRUSDo9IPGEQQ1CZsJYiNJbloHUEETi4cIpyspdugEJoxKl1ZBAUFrdyVihGIhkgEUS0i1MbvbfHNjJ/jl2l04MK9773nue+5P/Cfw8LEPT3JisqlSNSMfc5wwTmhVc+zuZ8VyzPz95NLfwQ2dtyup8S75Eztgmag5C9mVjF7izQK3t2pTN/nArCp89YZOT0AarZZYd73V5nrmk73PncAclwLgY2D12JGbbCB1+LPrSu01uRdBSjN7RAp3tOM/sl037sQO9+aulL9Em1FGTvWgMYCWvNvMLwqW4rFU1ngzVQmcRIgFk+9Bo57pmaTDQMXwL80gwXyA+dcPyIpqcOVltZPZhI9Dg7hX8yxWDw1G4unZoFWoMQ8d3gqk7i4QtluRLvEIOhGDrwxYucHzuLZE6A8bB5YNlP7ZPr60w1HVSw0daVOS4xvAsvHihltk+nEi6C47tHGOgejkh7mYDNmHAXGwLr9xlhOmwHKJUaa4gMHg4zC423uvrNTWn0J1pB3L1FpxhFkdUAUIyqxKwet9Judath74t6nD69+rXPoZbNXgOBuJWbUABFM1ZiqgUhOC/6i6EpVxeWwkruKzmjRjF7QhKQhSUOgCV9jMbhQqJBbGtD3FwFjErNgmHGukKy1fiAOhDn8HrJwq1HILQAN5v6VZjCf7xdKFvoI1uoPbFToy+YQq8PU7i8PAZpzN5EeA3jZpWfTj5I/NgM2diSrXFlkxE+291uvZ5vxG/Y/xawwdVQOAAAAAElFTkSuQmCC" class="iconstyle">CSKH&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                    :&#160;<b>(024) 73095555&#160;</b><abbr style="font-size: 11px;">(Máy lẻ: 255 / 117 / 162)</abbr></p>
                            </div>
                            <div class="dropdown-item">
                                <p class="support-header"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABfAAAAXwBsrqMZwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAIVSURBVEiJxZXNa1NBFMV/d97LS5R+4MfGtQrFxu5c+Be47SZiEESwgmsXFl0FUSuiiChuBEHE1DYoLhQXUgh2pXYTS/2CuiquipRGSl7yZq6LtlDoSyckoGc5554599wZZoQU5IvXR8DMAdYYc/jzs/GltLpOYFIXVQaBDJBzCf3dbg4Q+luwd/PFidV0Ui1i5ls5uf/98Xi9OwPkxA4cqJ7KrOlooTB9vFI5abf15zfoAMKxhfDnUBrlTSDwRB1lCXBb19ViMBSAMYBQ3d6uDJzRWwuTV76kccOnbyyJk7Gd9N4RSRJoN1zHBr3i/xtI4PLtSTfi03sPWZXpfHHCV9YW/hEpn1S0DKAiM8CbDeK5wmzPBgZ3+Ujr0BmggdELNnDngST7p3kuMOaST+8dkRXz8Gu4uAzkxEolIAA0jPuy79S5/dJrAlF+oFoFELQG7gOAou8Faj6930D0dr/NXQPiQCmFKjeB5kCSuyoiD3x6/y1CJuthvAJkE2EGFQGN6mE8h7Kn9wTIa0TvACqiZUQfrSfjniBTXRmokbUtCSph1HwBtIzlqQnMS6AZtWRKnb7drHOYbX8BtBnRvl9xbflAdh44irhXSRw1gMga+Yh1AkRxqIsIu1h/7hpqo28dJ6hWS4kIowqzKLtBNt/6QWBgs48NbgXl7ELl4u+0vXzXmOFCqc9kspl2/FDr4GraV/nP8BewLr91ncl4eAAAAABJRU5ErkJggg==" class="iconstyle">LH Quảng Cáo&#160;&#160;&#160;
                                    :&#160;<b style="font-size: 16px;">096 906 1788&#160;</b></p>
                            </div>
                            <div class="dropdown-item">
                                <p class="support-header"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABPAAAATwBTZvJDgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAF9SURBVDiN1dAxSNRxGMbx7/P6BwfhaIlQg4Ym06aWFpdD8OjCsfI/NIWDdK5FF4iTk6jg4n61pI2FToKDQ+jqJN4q1C7C/R4HOfh7HOLhDfmM7/vyeeGB/z16ni+/6CeY2fwB1CfPgZkFzvuAnYPeBeKVw1PA2R2wsyvD1Qx4H0mPk1JFju/AWI/YsZXySLFiKAeAoRyOhpVyYK8HbM9KuRzfDGWAaG8M43L8wqoDjVtgDay6HL+BZ+1h1nE0jLxrO1foBLPYlRJLTj6S2AWGiqvocj4k6Y1gXaIGtAq7lq2PgnWCt51YN7Bl/An5p00T/EjyjKGJdSp5RvKwTVNJWxKfOx5eA/9aqgo9wNoCSra+YtUGnD4oPGezANSBEmLbySXDa+BfG2l3eCBRs70KTBY/GipWVPBVedealL4A+xLTTmwgXg48nJgaCXnN6IdgokunN0bwBKhKnrd1EREcGu0Ao71ihYwa7URwmNls3gEqZtBmM5N42ifwnuQSlfOQPeEE3YsAAAAASUVORK5CYII=" class="iconstyle" style="padding-left: 8px;padding-right: 8px">Email&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;:&#160;<a href="#">hotro@muare.vn - info@muare.vn</a></p>
                            </div>
                            <h5 class="dropdown-header" style="padding: 0px;"><hr/></h5>
                            <div class="dropdown-item">
                                <ul class="dropdown-item" style="list-style-type: disc;color: #448fde;">
                                    <li class="header2-support-item"><a href="#">Quy định khi đăng tin tại muare.vn</a></li>
                                    <li class="header2-support-item"><a href="#">Quy chế muare.vn</a></li>
                                    <li class="header2-support-item"><a href="#">Hướng dẫn sử dụng</a></li>
                                    <li class="header2-support-item"><a href="#">Liên hệ quảng cáo</a></li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
            
            <!-- LOGO-HEADER: LOGO - SEARCH BAR - SIGN IN - SIGN UP - CART -->
            <div id="logo-header" class="container">
                <div class="row">
            <!-- menu 2 -->
                    <div class="col-lg-2 ">
                        <a class="logo" title="Tìm là có, ngó là mua, vừa là bán" href="https://muare.vn"><img src="https://static8.muarecdn.com/original/muare/images/2018/05/25/4657344_new-logo.png" alt="Tìm là có, ngó là mua, vừa là bán"></a>
                    </div>
                    <div class="col-lg-7 " style="margin-top: 1%;">
                            <form action="search" method="get">
                                {{-- {{ csrf_field() }} --}}
                            <div class="input-group-prepend" style="height: 29px;">
                                <div class="searchtypes dropdown">
                                  <button type="button" data-toggle="dropdown" class="btn-tatca catename">
                                    Tất cả 
                                  </button>
                                  <div class="dropdown-menu" style="border-radius: 0px;border-top: 0px;font-size: 12px;padding-top: 0; padding-bottom: 0;">
                                    <a class="dropdown-item" title="Tất cả" data="" href="">Tất cả</a>
                                    @foreach($cates as $child)
                                    <a class="dropdown-item" style="cursor: pointer;font-weight: bold;font-size: 12px;padding-top: 0; padding-bottom: 0;" 
                                    title="{{$child->name}}" data="{{$child->id}}" >{{$child->name}}</a>
                                    @foreach($catesChilds as $cateChild)
                                    @if($cateChild->idParent == $child->id)
                                        <a class="dropdown-item" style="cursor: pointer;margin-left: 10px;font-size: 12px;padding-top: 0; padding-bottom: 0;"
                                         title="{{$cateChild->name}}" data="{{$cateChild->id}}" >{{$cateChild->name}}</a>
                                    @endif
                                    @endforeach
                                    @endforeach
                                    </div>
                                </div>
                                <input type="text" class="input-search form-control " name="text" placeholder="Tìm kiếm..." aria-label="" aria-describedby="basic-addon1"
                                @if(isset($textSearch))
                                 value="{{$textSearch}}"
                                 @endif

                                 >
                                <input type="hidden" id="categoryParent_id" name="category_id"
                                
                                 @if(isset($idCate))
                                 value="{{$idCate}}"
                                 @endif
                                 >
                                
                                
                                <button class="btnsearch" type="submit">TÌM KIẾM</button>
                            </div>
                            </form>
                    </div>
                    <div class="col-lg-3 giohangIcon" style="margin-top: 0.5%;font-size: 13px;">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- CHƯA ĐĂNG NHẬP NHÉ -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

                                @if(!Auth::id())
                                <div class="" id="you-re-guest">

=======
                                <div class="hidden" id="you-re-guest">
>>>>>>> parent of ab92e75... Sửa giao diện search, menu chọn tìm kiếm
=======
                                <div class="hidden" id="you-re-guest">
>>>>>>> parent of ab92e75... Sửa giao diện search, menu chọn tìm kiếm
=======
                                <div class="hidden" id="you-re-guest">
>>>>>>> parent of 654e13d... Done
=======
                                <div class="hidden" id="you-re-guest">
>>>>>>> parent of ab92e75... Sửa giao diện search, menu chọn tìm kiếm
                                    <a href="{{Route('loginUser')}}" class="btn-login" style="color: #ff6c00;font-weight: bold;">Đăng nhập<span style="color: #a7a6a6"> | </span></a>
                                    <a href="{{Route('loginUser')}}" class="btn-login" style="color: black;font-weight: bold;">Đăng ký</a>
                                    <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABPAAAATwBTZvJDgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAG3SURBVDiNrdOxa1NRFMfx73nEVsVBoQpOWUoVNQFxFkf9AxQa6eJiN3Ez0SWTieDgLKJFtD5ox0JxMrUiDhJq21ctsR2kBCUWSpG2Ma/35yDBokleXvBM9x7O/XDOvVwbytwf6LdGEkC73tbO5oHVz9M36vQYXh+NOckeOcd1mbu5//CP1+mReyd6BROGrgi3Gvh3vgGkh++e3w1dFrjWK/pXyM5kCvO9nvb+TZmQVU6PFAb/EwjgZszpQi+gtUqeGi6c9YxyTCtsyEu27HDJz84B6zE7W1j2b1XbjGySeBMHlDQGbe8QgJkYXj3s43lHUFCKAU59enp7vSO4dLL+AWyjK072pLlsP3I+70CzUZZBdeDrzsto8Hd0cY/2rFTKh81dolOpzJs1ubdmPGhXU1fi1d59R/Bodbv8/Xj/oYXx7CSYortt81P2RipTfCi0bNb61V3DasFE9kv34NXCEYkKqAyck2wSwEyXMXuPSCqsp4OJ/E+IfhTM844B7xZf5C6C1QI/Nxr4uVGw2uJ49hKw4vYdTDbrI8H5we2KwWYqU1wTevxnNBtLZYprMm18HNpaaeZ/AaZCpwGRuyJPAAAAAElFTkSuQmCC" style="margin-top: -8px;" class="btn-login"><abbr style="color: black;font-weight: bold;">Giỏ Hàng</abbr></a>
                                </div>
                                
                                <!-- ĐĂNG NHẬP RỒI NHÉ -->
                                <div id="you-re-user">
                                    &#160;
                                    <a data-placement="bottom" data-popover-content="#notifications-L" data-toggle="popover-notifications" data-trigger="click" tabindex="0"><i class="fas fa-bell" style="font-size: 20px;cursor: pointer;padding: 2px;color: #2c5987;"></i></a>
                                    &#160;&#160;
                                    <a data-placement="bottom" data-popover-content="#profile-L" data-toggle="popover-profile" data-trigger="click" tabindex="0"><i class="fas fa-user" style="font-size: 20px;cursor: pointer;padding: 2px;color: #2c5987;"></i></a>
                                    &#160;&#160;
                                    <a data-placement="bottom" data-popover-content="#yourcoin-L" data-toggle="popover-yourcoin" data-trigger="click" tabindex="0"><i class="fas fa-dollar-sign" style="font-size: 21px;cursor: pointer;padding: 2px;color: #2c5987;"></i></a>
                                    <a href="#" style="float: right;margin-top: 3px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABPAAAATwBTZvJDgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAG3SURBVDiNrdOxa1NRFMfx73nEVsVBoQpOWUoVNQFxFkf9AxQa6eJiN3Ez0SWTieDgLKJFtD5ox0JxMrUiDhJq21ctsR2kBCUWSpG2Ma/35yDBokleXvBM9x7O/XDOvVwbytwf6LdGEkC73tbO5oHVz9M36vQYXh+NOckeOcd1mbu5//CP1+mReyd6BROGrgi3Gvh3vgGkh++e3w1dFrjWK/pXyM5kCvO9nvb+TZmQVU6PFAb/EwjgZszpQi+gtUqeGi6c9YxyTCtsyEu27HDJz84B6zE7W1j2b1XbjGySeBMHlDQGbe8QgJkYXj3s43lHUFCKAU59enp7vSO4dLL+AWyjK072pLlsP3I+70CzUZZBdeDrzsto8Hd0cY/2rFTKh81dolOpzJs1ubdmPGhXU1fi1d59R/Bodbv8/Xj/oYXx7CSYortt81P2RipTfCi0bNb61V3DasFE9kv34NXCEYkKqAyck2wSwEyXMXuPSCqsp4OJ/E+IfhTM844B7xZf5C6C1QI/Nxr4uVGw2uJ49hKw4vYdTDbrI8H5we2KwWYqU1wTevxnNBtLZYprMm18HNpaaeZ/AaZCpwGRuyJPAAAAAElFTkSuQmCC" style="margin-top: -8px;" class="btn-login"><abbr style="color: black;font-weight: bold;">&#160;Giỏ Hàng</abbr></a>
                                </div>
                                 
                        <!-- End giỏ hàng -->
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Content for 3 Popovers are notifications, profile & money -->
            <div class="hidden" id="notifications-L">
               <!--<div class="heading-notifications">
                  <p style="float: left;color: pink;">THÔNG BÁO</p>
                  <p style="float: right;">ĐÁNH DẤU ĐÃ ĐỌC</p>
                  </div>-->
               <div class="content-notifications-L" style="min-width: 400px;">
                  <div class="heading-notifications-L">
                     <p style="float: left;">THÔNG BÁO</p>
                     <p style="float: right;">ĐÁNH DẤU ĐÃ ĐỌC</p>
                  </div>
                  <hr style="margin-left: -10px;margin-right: -10px;margin-bottom: 10px;">
                  <div class="body-notifications-L">
                     <!-- Notify n?-->
                     <div class="item-notifications-L">
                        <p class="p-bodynotification-L">Có người vừa đặt mua sản phẩm của bạn</p>
                        <p class="notification-time-L">03/12/1997, lúc 00:00</p>
                     </div>
                     <hr style="margin: 10px 0;">
                     <div class="item-notifications-L">
                        <p class="p-bodynotification-L">Có người vừa bình luận tin đăng của bạn</p>
                        <p class="notification-time-L">03/12/1997, lúc 00:00</p>
                     </div>
                     <hr style="margin: 10px 0;">
                     <div class="item-notifications-L">
                        <p class="p-bodynotification-L">Xin chúc mừng! Tin đăng của bạn vừa được duyệt để hiển thị. Cảm ơn tomiot đã tham gia vào cộng đồng mua bán muare.vn</p>
                        <p class="notification-time-L">03/12/1997, lúc 00:00</p>
                     </div>
                     <hr style="margin: 10px 0;">
                     <div class="item-notifications-L">
                        <p class="p-bodynotification-L">Rất tiếc! Tin đăng (ID: 4825196) của TK tomiot không được duyệt để hiển thị trên muare.vn. Vui lòng liên hệ 024-73095555, máy lẻ 255 / 117 / 162 để biết thêm thông tin chi tiết.</p>
                        <p class="notification-time-L">03/12/1997, lúc 00:00</p>
                     </div>
                     <hr style="margin: 10px 0;">
                  </div>
                  <hr style="margin-left: -10px;margin-right: -10px;margin-bottom: 6px;">
                  <div class="footer-notifications-L">
                     <a href="#" style="float: left;">Xem tất cả</a>
                     <a href="#" style="float: right;">Thiết lập</a>
                  </div>
               </div>
            </div>
            
            <div class="hidden" id="profile-L">
               <div class="content-profile-L" style="min-width: 300px;">
                  <div class="heading-profile-L">
                     <img src="https://static8.muarecdn.com/zoom,80/90_90/muare/avatars/l/733/733265_1547649471.png?1547649471" class="rounded-circle" alt="Cinque Terre" width="90" height="90"
                          style="float: left;">
                     <div class="profileheader-info-L">
                        <p><b>Cẩm Sục Linda Tới</b></p>
                        <p><b>Cấp độ: 1 (84%)</b></p>
                        <div class="progress">
                          <div class="progress-bar bg-danger" style="width:50%;"></div>
                        </div>
                        <p style="padding-top: 10px;">ID tài khoản: <b style="color:red;">733265</b></p>
                     </div>
                  </div>
                  <hr style="margin-left: -10px;margin-right: -10px;margin-top: 94px;margin-bottom: 0px;">
                  <div class="body-profile-L">
                     <table class="table-borderless" width="100%">
                        <thead>
                          <tr>
                            <th colspan="1"></th>
                            <th colspan="1"></th>
                            <th colspan="1"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="#">Quản lý kho hàng</a></td>
                            <td></td>
                            <td><a href="#">Gian hàng của tôi</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Quản lý tin đăng</a></td>
                            <td></td>
                            <td><a href="#">Thiết lập cửa hàng</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Quản lý ví Muare</a></td>
                            <td></td>
                            <td><a href="#">Thay đổi thông tin</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Quản lý đơn hàng</a></td>
                            <td></td>
                            <td><a href="#">Đăng xuất</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Quản lý sự kiện</a></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
               </div>
            </div>
            
            <div class="hidden" id="yourcoin-L">
               <div class="content-yourcoin-L" style="min-width: 200px;">
                  <div class="body-yourcoin-L">
                     <btn class="btn">Mua Xu</btn>
                     <p>Xu chính: <b style="color: #3f82bb;font-weight: 500;">1232</b></p>
                     <p>Xu KM: <b style="color: #3f82bb;font-weight: 500;">1232</b></p>
                     <div class="hover-p-yourcoin">
                         <p><a href="#">Lịch sử nạp tiền</a></p>
                         <p><a href="#">Lịch sử dùng xu</a></p>
                         <p><a href="#">Nhập mã KM</a></p>
                     </div>
                     
                  </div>
               </div>
            </div>
            <!-- Content for 3 Popovers -->
            
            <!-- CONTRACT HEADER: Hà Nội - Liên hệ quảng cáo - Hỗ trợ -->
            <div id="menu-header">
                <div style="width: 84%;margin-left: 8%;margin-right: 8%;">
                    <div class="dropdown" style="height: 100%;">
                          <button type="button" data-toggle="dropdown" style="color: white;background: none;height: 100%;cursor: pointer;margin: 6px 0;">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABfAAAAXwBsrqMZwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAxSURBVEiJ7dKhEQAgAMPAlP13LooJQACXV1VVAX0va7Tt0eMkAOPkqe5kRdpnRXrABNDNDApC+gFWAAAAAElFTkSuQmCC" style="padding-right: 8px;"><abbr style="font-size: 17px;vertical-align: middle;">Tất cả chuyên mục</abbr>
                          </button>
                          <div class="dropdown-menu" style="font-size: 14px;">
                            @foreach($cates as $child)
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-itemlv1" tabindex="-1" href="danh-muc/{{str_slug($child->name)}}/{{$child->id}}">{{$child->name}}</a> 
                                        <div class="dropdown-menu">
                                            @foreach($catesChilds as $itemcate)
                                                @if($child->id == $itemcate->idParent)
                                                <a class="dropdown-item dropd-itemlv2" tabindex="-1" 
                                                href="danh-muc/{{str_slug($itemcate->name)}}/{{$itemcate->id}}">{{$itemcate->name}}</a>
                                                @endif
                                            @endforeach
                                        </div>                 
                                </div>
                                <div class="dropdown-divider line"></div>
                                @endforeach
                          </div>
                    
                        <button type="button" class="btn-dang-tin-Tr">
                            <abbr style="font-size: 14px;vertical-align: middle;">ĐĂNG TIN</abbr>
                        </button>
                    </div>
                    
                
                </div>
            </div>
            
            <div id="ad-header" class="container-fluid ad-header">
                <div class="row" style="width: 88%;margin-left: 6%;margin-right: 6%;">
                    <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12" style="padding-top: 6px;padding-bottom: 2px;">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABfAAAAXwBsrqMZwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJbSURBVEiJ7VNPSFNxHP+8N/ekNd1qy7V8y5xrb5bDzWeQGsQCoaQOQZTgSdahm9VFgrBOJmYeCiLqlLB1cIZ0Ebx0COmQYxBBFKK5/2PTVrKXbHvvdZCJ297aFjv6uX0/n8/3+/l9+fEF9lEGsmobWJaV6/Ut1+rrtaFkMrpdzk9WG0DTreOvXj52952zvanEX1UATfccYJi2fpvttMxqtVhYlpXXNMBkVo06nYPtAMDzvOD1GoWaBTAM09DNdt4wtbVQABCLJgLALF+zgFMd9id3bzsZAOC4bQRCka+V9paFo//KeZd7Js5nN0U+uynOz8/+tli62Ep66woJ2th+kgRacrVCoWxkOy3jg9cva3OcWt1AXLzkcA0MOEQAEAQxEwxG33s87pHCeUQhMTzs/EjTR8/m6hTHYXLiPgiiyJqHyakXwWdP55hw2Mv9cwOKkouxWHy3JmUkCILA6moAkWgsz3vc0AyDQY/vK2tYXPyQDoe9RYdXFFAKRqMBRqNBUjObWjHzevrEyJ3Dz996XLf2alVfcimQhIyEyCsK+Yo3SCZ/IZncwlYqtcvpjmjR1KSBz/clO3pvIhKNrN/87wC1WgW1WiWp2e0ddUNDV6kHY1NaAOGKAvyJP9CpKCjl+ZZ0Oo1Py58B7HyyTqfB2MPpjR/roYVA4Fu4cI5kgCiKSHAkDlIZaA415mkURaGvtzuPY7us4pzn3SOpWUUBvCCIzXodjul3aoVSAb+/6GF7NspgaWn5p1wuRqT0ous503OhV0bAXHJi4QCSFOKpjYUVny9e3r0PCfwF4Vm9rkkYOJsAAAAASUVORK5CYII=" style="margin: -2px 4px 4px 0px;">
                        <abbr>ĐĂNG TIN HOÀN TOÀN <b style="font-weight: bold;">MIỄN PHÍ</b></abbr>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12" style="padding-top: 8px;padding-bottom: 2px;">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABPAAAATwBTZvJDgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAFNSURBVDiN5ZRPK4RRGMV/5847/mRlpdhasbPiM1hYyqCkTM0HsLFQlCJl/2bnb1laWCjJR0DJBxAbS2KmmXssvGm8GgtmI2dzz/M8t1/n9tSFfycBlMvlcdsLknp+yHmStJ2m6YkqlUpvo9G4B7p+Ge6lVqv1h3q93t8GGEB3sVgcCG0AfVKSq+vAvm1JKmXzA0lXtgeBWaATqEo6tJ0AJeAjWD7hBnAeQjiTtAkg6TiD3QDr2b21GOOF7TNJW98lvASWbQOsNvVHgTHbq5IACpKegXnbI98BkTQJYHs4P2tSyfZNCGHH9jWw2BJo+yizK029U0l3koay1r6kR9t9wGPLhLanJfU1eWKMU8AtMMT7UgCWgD2gCsy1BEqayPvsnOCzOoD5/Ovg65Z/rRBjfABe28B6SZLk/uNzAGaAwg9hDUm7aZqetCHYX9MbOjd5zDLzJGYAAAAASUVORK5CYII=" style="margin: 0px 4px 2px 0px;">
                        <abbr>QUẢNG CÁO LIÊN KẾT <b style="font-weight: bold;">TẠI RB, EB</b></abbr>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12" style="padding-top: 8px;padding-bottom: 2px;">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABPAAAATwBTZvJDgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAD/SURBVDiN1ZMxTgMxFERn7BSU0HAGqKCgBNHkSLv+hgvY3lwgZ8gtEBSgHIAGJHqusN5PtQFEstlYKchUX6OZp/8tGfjvYj9UVXVqyQeQZzsyXo21tyGETwAwvWuMuS6AAcB5zvlmxVkNqrYA9qdrhoK9FJgrMB+TnWxNkNKk1ACAd+5DgVgMJBBiSo33/gQAYoxJ6voYpN/UGTr5OTbNvdR1QM5T5DyVug5pNrsD+VICvBTnlr+2Ib04t4TqxabS0MlHAK7W+Ou8URsW6YCAHZlLIT+738CuewLwXsB7s9Y+7tQQkYWILMZk9/6G2/8yAFVtqap7A5L0k7YdBfwCWppOtszyZpIAAAAASUVORK5CYII=" style="margin: 0px 4px 2px 0px;">
                        <abbr><b style="font-weight: bold;">10 LƯỢT UP TIN MIỄN PHÍ</b> MỖI NGÀY</abbr>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12" style="padding-top: 8px;padding-bottom: 2px;">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABPAAAATwBTZvJDgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAFwSURBVDiNxdPNThNRGMbx32lLagBZoltJQWrUBekdlFsgfhD0AtjCQmQxCyMmcheYeBW6ZKUbiDFW1CXKsiaGhspxwWjGmcpQNPFJTjJ532f+58l5z+F/KCbG44qxs3grpbAFVT3bRmzHBdW/Bpq2iBu4qeFumT2cmi5R0/MWjbS0p64ZEv3zJey5k4FBw6Fb50oY11wSvcS1XOuNoB0e+/JHYHxgVnBbNIMZTGPi1PR00cF7QUfF8/DIu1raXBctlgDymkALLRF9V3D/5AyPreHDkMCs9lStkznDuGLSiBe4PiRs15H5sOmAzJTDpgNH2tgdAraD9k/Ybwl/JV11WU0HF0tgXX1Xw1Ofs8XiPYy+cqZ3O25MN18sAuuaA+tFVRxqlgPjEEMJRW8ReFx4GR9xL12fcr28dwCwYir92hctq2uGDVthw5a6WdEy9lPPVP734pQfavluzgXPQuJbYUPExKieJdGr8MTrQZ5/ph/RAFhIYW1XrAAAAABJRU5ErkJggg==" style="margin: -2px 4px 4px 0px;">
                        <abbr><b style="font-weight: bold;color: #ff7900;">0% PHÍ</b> KHI MUA QUA BANKING/VISA</abbr>
                    </div>
                </div>
            </div>
        </div>