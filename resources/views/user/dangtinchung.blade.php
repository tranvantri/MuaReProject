@extends('user.layouts.index')
@section('title')
	<title>Đăng tin</title>
@endsection
@section('content')
<section class="content mt-5 mb-5">

        <div class="container">
            <div class="row">
                <div class="create-storage-header-Tr col-lg-12 col-md-12"> <!-- content -->
                    <div class="step-bar-Tr">
                        <div class="row">
                            <div class="col-lg-3 current-step-Tr">
                                <span>Chọn sản phẩm đăng bán</span>
                            </div>
                            <div class="col-lg-3">
                                <span>Chỉnh sửa tin đăng</span>
                            </div>
                            <div class="col-lg-3">
                                <span>Đăng tin</span>
                            </div>
                        </div>  
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="create-storage-body-Tr col-lg-12 col-md-12">
                    <div class="select-type-post">
                        <p class="select-note-Tr">Vui lòng lựa chọn hình thức đăng tin phù hợp với Sản phẩm hoặc Dịch vụ mà bạn muốn cung cấp, để đảm bảo tin đăng đúng quy định và được duyệt.<a href="https://muare.vn/huong-dan-su-dung#dang_tin" target="_blank"> (Tìm hiểu thêm)</a></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="select-type-item-Tr" onclick="location.href='http://localhost:6969/MuaReProject/public/dang-tin-san-pham';">Đăng tin Sản phẩm</button>
                            </div>
                            <div class="col-lg-6">
                                <button class="select-type-service-Tr" onclick="location.href='http://localhost:6969/MuaReProject/public/dang-tin-dich-vu';">Đăng tin dịch vụ</button>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection