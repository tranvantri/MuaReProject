<div class="col-lg-3 col-md-3">
  <!-- Vùng tìm kiếm -->
  <div id="search-zone" class="search-zone">
    <div class="sidebar" style=" font-size: 14px;">
      <div class="box-location-L">
        <h3 class="glyphicon2-L" style="padding-bottom: 16px;">
          <!--<i class="fas fa-map-marked-alt"></i>-->
          <img src="assets/images/chitietdanhmuc/location.png">
          <span>&nbsp;Tìm người bán tại khu vực</span>
        </h3>
        {{-- <form id="form-location"> --}}
          <select name="location_id" id="options_city" class="location-items">

            @if(Cookie::get('place') != null)
              @foreach($places as $child) 
                  <option
                  @if($child->id == Cookie::get('place'))
                  selected
                  @endif
                  value="{{$child->id}}">{{$child->name}}</option>
              @endforeach
          @else
              @foreach($places as $child) 
                  <option value="{{$child->id}}">{{$child->name}}</option> 
              @endforeach
          @endif         
          
          
        </select>
        <input id="search-now-L" type="button" value="Tìm kiếm ngay!" />
      {{-- </form> --}}
    </div>

    <!-- enbac box -->
    <div
    id="__ebwidget"
    style="display: block;float: left;padding-top: 10px;"
    >
    <iframe
    src="https://m.enbac.com/widget/zamba.html?site=muare.vn&amp;zone=thoi-trang"
    style="width: 300px; overflow: hidden !important;height: 385px;border: 0;"
    ></iframe>
  </div>
  <div style="padding-bottom:5px" class="sidebar_eb">
    <div id="mr_widget">
      <iframe
      src="https://muare.vn/widget/zamba?site=muare.vn&amp;type=ver&amp;zone=other&amp;location=ha-noi"
      style="width:300px; overflow: hidden !important;height: 385px;border: 0;"
      frameborder="0"
      allowfullscreen=""
      ></iframe>
    </div>
    <a
    rel="nofollow"
    target="_blank"
    href="https://rongbay.com/dat-mua-quang-cao.html?utm_source=backup&amp;utm_medium=3sites_backup&amp;utm_content=[admdomain]&amp;utm_campaign=3sites_Camp"
    >
    <img
    src="https://muare.vn//images/admicro/300x600.jpg?v=11010"
    />
  </a>
  <div id="zone-jfjjrzax" class="ArfGroup">
    <div id="share-jfjjtht2" class="ArfGroup">
      <div id="placement-jfvym1n9" class="ArfGroup">
        <div
        id="banner-jfjjrzax-jfvym1x2"
        class="ArfGroup"
        style="min-height: 0px; min-width: 10px;"
        >
        <div id="slot-1-jfvym1x2">
          <div
          id="adnzone_29628"
          data-admssprqid="9052610d-4251-4449-a14f-f4b257344021"
          data-width="300"
          data-height="250"
          data-ssp="sspbid_3093"
          >
          <div
          style="position:relative;width:300px;height:auto;"
          >
          <iframe
          src="javascript:if(typeof(adnzone29628)!='undefined'){adnzone29628.renderIframe();}else{parent.adnzone29628.renderIframe();}"
          style="border:none;background:#fff;"
          marginheight="0"
          align="top"
          scrolling="No"
          frameborder="0"
          hspace="0"
          vspace="0"
          name="adnzone_29628_0_126676"
          id="adnzone_29628_0_126676"
          width="300"
          height="250"
          ></iframe
                                ><!--<a
                                  class="admLogoAdx29628"
                                  href="http://adx.admicro.vn/?utm_source=Admicro&amp;utm_medium=muare.vn&amp;utm_campaign=adxzone"
                                  target="_blank"
                                  ><span class="txtlogo">Admicro AdX</span
                                  ><span></span
                                    ></a>-->
                                  </div>
                                  <div id="ads_top_bottom"></div>
                                </div>
                                <script type="text/javascript">
                                  admsspreg({ sspid: 3093, w: 300, h: 250 });
                                </script>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <script
                      src="//media1.admicro.vn/cms/arf-jfjjrzax.min.js"
                      async=""
                      ></script>

                      <script
                      src="//media1.admicro.vn/cms/arf-jfjjrl6t.min.js"
                      async=""
                      ></script>
                      <div id="advZoneSticky2Top" style="clear:both"></div>
                      <div
                      id="advZoneSticky2"
                      style="clear: both; display: block; left: 1026px; top: 2883px; bottom: auto;"
                      ></div>

                      <script
                      src="//media1.admicro.vn/cms/arf-jfkxhs01.min.js"
                      async=""
                      ></script>
                    </div>
                  </div>
                </div>
              </div>