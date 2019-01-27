@extends('user.layouts.index')
@section('title')
	<title>Login</title>
@endsection
@section('content')
<section class="content mt-5 mb-5">

		<div class="container">
			<div class="row">
				<div class="col-md-2">
                    <!-- bên trái của form đăng ký -->
                </div>
                <div class="modal-content-tomiot col-md-8 col-sm-12 col-sx-12">
                    <div class="modal-body col-md-12 col-sm-12 col-sx-12">
                        <div class="row">
                            <div class="login-group col-md-8 col-sm-12 col-sx-12">
                                <div >
                                    <h4 id="title-login">Đăng nhập tài khoản</h4>
                                </div>
                                <div class="form-action">
                                    <form action="#" method="POST">
                                        <div class="formgroup">
                                            <div class="radioTypeLogin">
                                                <input type="radio"  name="typelogin" value="1" checked=""> Tên tài khoản
                                                <input type="radio"  name="typelogin" value="2"> Số điện thoại
                                                <input type="radio" name="typelogin" value="3"> Email
                                            </div>
                                            <div class="inputLogin">
                                                <div id="dangnhapsection">
                                                    <div class="inputPadding username-login">
                                                        <label>Tên đăng nhập :</label>
                                                        <input type="text" class="form-control" name="" placeholder="Nhập tên đăng nhập tại đây" />
                                                    </div>
                                                    <div class="inputPadding phone-number-login">
                                                        <label>Số điện thoại :</label>
                                                        <input type="text" class="form-control" name="" placeholder="Nhập số điện thoại tại đây" />
                                                    </div>
                                                    <div class="inputPadding email-login">
                                                        <label>Email :</label>
                                                        <input type="email" class="form-control" name="" placeholder="Nhập email tại đây" />
                                                    </div>
                                                    <div class="inputPadding">
                                                        <label>Mật khẩu :</label>
                                                        <label style="float: right;"><a href="#">Quên mật khẩu?</a></label>
                                                        <input type="password" class="form-control" name="" placeholder="Nhập mật khẩu tại đây" />
                                                    </div>
                                                    <div  class="inputPadding">
                                                         <input type="checkbox" name="" value="">        Ghi nhớ đăng nhập
                                                    </div>
                                                </div>

                                                <div id="dangkysection">
                                                    
                                                    <div class="inputPadding">
                                                    <label>Tên tài khoản:</label>
                                                    <input type="text" class="form-control" name="" placeholder="Nhập tên đăng nhập tại đây" required />
                                                    </div>
                                                    <div class="inputPadding">
                                                        <label>Email :</label>
                                                        <input type="email" class="form-control" name="" placeholder="Nhập email tại đây" required />
                                                    </div>
                                                    <div class="inputPadding">
                                                        <label>Số điện thoại :</label>
                                                        <input type="text" class="form-control" name="" placeholder="Nhập số điện thoại tại đây" required />
                                                    </div>
                                                    <div class="inputPadding">
                                                        <label>Mật khẩu :</label>
                                                        <input type="password" class="form-control" name="" placeholder="Nhập mật khẩu tại đây"   />
                                                    </div>
                                                    <div class="inputPadding">
                                                        <label>Nhập lại mật khẩu :</label>
                                                        <input type="text" class="form-control" name="" placeholder="Nhập lại mật khẩu tại đây"  required />
                                                    </div>
                                                    <div  class="inputPadding">
                                                         <input type="checkbox" name="" value="" required>        Tôi hoàn toàn đồng ý với <a href="#">Quy định</a> mà diễn đàn đề ra
                                                    </div>
                                                </div>

                                                <div  class="inputPadding">
                                                    <button type="submit"  class="btn-dang-nhap btn btn-primary">Đăng nhập</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="dangnhapbang">
                                    <div class="inputPadding line-group">
                                        <p id="dang-nhap-bang">hoặc đăng nhập bằng</p>
                                    </div>
                                </div>
                                <div class="sociallite">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" class="btn btn-danger btn-block"><i class="fab fa-google"></i>  Google</a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="#" style="background-color: #337ab7;" class="btn btn-primary btn-block">
                                                <i class="fab fa-facebook-f"></i>  Facebook</a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="#" class="btn btn-info btn-block"><i class="fab fa-twitter"></i>  Twitter</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row-note col-md-4 col-sm-12 col-sx-12">
                                
                                <p class="note-title">Là thành viên của Muare bạn sẽ được</p>
                                <ul class="reason-list">
                                    <li>Kinh doanh mọi lúc mọi nơi trên Muare</li>
                                    <li>Bán hàng hiệu quả với thị trường 50.000 khách hàng tiềm năng hoạt động hàng ngày trên Muare</li>
                                    <li>Mua hàng hóa với giá trị hời tại hơn 1.000 shop uy tín</li>
                                    <li>Tham gia cộng đồng thương mại hoạt động nhộn nhịp bậc nhất</li>
                                </ul>
                                <div class="register-row">
                                    <button type="button" id="buttonDangKy" class="dangkybutton btn btn-primary">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>

		</div>

	</section>
@endsection