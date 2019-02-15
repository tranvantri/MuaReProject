<?php

Route::get('/', function () {
    return view('welcome');
});

//admin manager
Route::group(['namespace' => 'AdminManager'], function() {

    Route::group(['prefix' => 'admin', 'middleware'=>'adminCheckLogout'], function() {
        // Route::get('test', function() {
        //     App\Promotion::where('end_date_sale','>',date("Y-m-d H:i:s"))->update(['enable'=>0]);
        // });
        // Edit admin info
        Route::get('edit/{id}', 'AdminController@getEdit');
        Route::post('edit/{id}', 'AdminController@postEdit');

        Route::group(['prefix' => 'ckfinder'], function() {
            Route::get('view', 'CkfinderController@getCkfinder');
            Route::any('connector', 'CkfinderController@getConnector');
        });
        
        /* Product*/
        Route::group(['prefix' => 'product'], function() {
            Route::get('list', 'ProductController@getList');
            Route::get('add', 'ProductController@getAdd');
            Route::post('add', 'ProductController@postAdd');
            Route::get('edit/{id}', 'ProductController@getEdit');
            Route::post('edit/{id}', 'ProductController@postEdit');
            Route::get('delete/{id}', 'ProductController@getDelete');
            Route::get('view-history-pro/{id}', 'ProductController@getHistory');
           
        });

        /* Bill*/
        Route::group(['prefix' => 'bill'], function() {
            Route::get('list', 'BillController@getList');
            // Route::get('add', 'BillController@getAdd');
            // Route::post('add', 'BillController@postAdd');
            Route::get('edit/{id}', 'BillController@getEdit');
            Route::post('edit/{id}', 'BillController@postEdit');
            Route::get('delete/{id}', 'BillController@getDelete');
            Route::get('view-bill-detail/{id}', 'BillController@getBillDetail');
        });


        /*------------------------------------------------------------------*/
        /* Category*/
        Route::group(['prefix' => 'category'], function() {
            Route::get('list', 'CategoryController@getList');
            Route::get('add', 'CategoryController@getAdd');
            Route::post('add', 'CategoryController@postAdd');
            Route::get('edit/{id}', 'CategoryController@getEdit');
            Route::post('edit/{id}', 'CategoryController@postEdit');
            Route::get('enable/{id}', 'CategoryController@getEnable');
            // Route::get('view-history-cate-group/{id}', 'CategoryGroupController@getHistory');
        });


        /* Slide*/
        Route::group(['prefix' => 'slide'], function() {
            Route::get('list', 'SlideController@getList');
            Route::get('add', 'SlideController@getAdd');
            Route::post('add', 'SlideController@postAdd');
            Route::get('edit/{id}', 'SlideController@getEdit');
            Route::post('edit/{id}', 'SlideController@postEdit');
            Route::get('delete/{id}', 'SlideController@getDelete');
            Route::get('view-history-slide/{id}', 'SlideController@getHistory');

        });

        /* Size*/
        Route::group(['prefix' => 'size'], function() {
            Route::get('list', 'SizeController@getList');
            Route::get('add', 'SizeController@getAdd');
            Route::post('add', 'SizeController@postAdd');
            Route::get('edit/{id}', 'SizeController@getEdit');
            Route::post('edit/{id}', 'SizeController@postEdit');
            Route::get('delete/{id}', 'SizeController@getDelete');
            Route::get('view-history-size/{id}', 'SizeController@getHistory');
        });

        /* Promotion*/
        Route::group(['prefix' => 'promotion'], function() {
            Route::get('list', 'PromotionController@getList');
            Route::get('add', 'PromotionController@getAdd');
            Route::post('add', 'PromotionController@postAdd');
            Route::get('edit/{id}', 'PromotionController@getEdit');
            Route::post('edit/{id}', 'PromotionController@postEdit');
            Route::get('delete/{id}', 'PromotionController@getDelete');
            Route::get('view-history-promotion/{id}', 'PromotionController@getHistory');
        });

        /*User*/
        Route::group(['prefix' => 'user'], function() {
            Route::get('list', 'UserController@getList');
            Route::get('add', 'UserController@getAdd');
            Route::post('add', 'UserController@postAdd');
            Route::get('edit/{id}', 'UserController@getEdit');
            Route::post('edit/{id}', 'UserController@postEdit');
            Route::get('delete/{id}', 'UserController@getDelete');
        });
        Route::post('/imageupload', 'ImageUpLoadController@upLoadFiles');
        Route::get('/imageview/{category}', 'ImageUpLoadController@viewImage');
        Route::post('/imageremove', 'ImageUpLoadController@removeImage');
    });


});



Route::group(['namespace' => 'AdminAuth'], function() {

    Route::group(['prefix' => 'authadmin','middleware'=>'adminCheckLogin'], function()
    {
        Route::get('login','AuthController@getLogin');
        Route::post('login',['as'=>'loginAdmin','uses'=>'AuthController@postLogin']);
    });
    
    Route::get('admin/register','AuthController@getRegister');
    Route::post('admin/register','AuthController@postRegister');

    Route::get('admin/dashboard','AdminAuthController@getIndex');
    Route::get('admin/logout','AdminAuthController@getLogout');

    Route::get('admin/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('admin/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

    Route::get('admin/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('admin/password/reset', 'ResetPasswordController@reset');
});

 
Route::group(['namespace' => 'UserController'], function() {
	Route::get('/home',['as'=>'trangchu','uses'=>'HomePageController@getHomePage']); 

    //set Cookie
    
    Route::get('/set-cookie/{id}', 'PlacesController@setCookie');

    //chitietdanhmuc

    Route::get('/danh-muc/{name}/{id}', 'CategoryDetail@getDanhMuc');

    Route::get('/danh-muc/{nameCate}/{idCate}/{hienthi}/{tinhtrang}/{gia}/{sapxep}/uy-tin-chat-luong', 'CategoryDetail@getCustomCategory')->name('danhmuc');

    /*bỏ*/
    // Route::get('/chi-tiet-san-pham/{id}', ['as'=>'chitietsanpham','uses'=>'ProductController@getProduct']);

    Route::get('/chi-tiet-tin-dang/{id}',['as'=>'chitiettindang','uses'=>'ServiceController@getTinDang']);

    Route::get('/dang-tin-dich-vu', function () {
        return view('user.dangtindichvu');
    });


    Route::get('/dang-tin-san-pham',['as'=>'getdangtinsanpham','uses'=>'PostController@postProduct']);
    Route::post('/dang-tin-san-pham',['as'=>'postdangtinsanpham','uses'=>'PostController@addNewProduct']);


    Route::get('/dang-tin-chung', function () {
        return view('user.dangtinchung');
    });


    Route::get('/gian-hang-cua-nguoi-dung/{id}', ['as'=>'gianhangcuanguoidung','uses'=>"UserPageController@getView"]); // xong

    Route::get('/quan-ly-don-hang',['as'=>'quanlydonhang','uses'=>'UserPageController@getQuanLyDonHang']); // chưa xong, cần phần giỏ hàng

    Route::get('/san-pham/{id}',['as'=>'sanpham','uses'=>'ProductController@viewProduct']);


    Route::get('/tat-ca-tin-dang',['as'=>'tatcatindang','uses'=>'ServiceController@viewAllServices']); // 

    Route::get('/user-quan-ly-kho-hang',['as'=>'userquanlykhohang','uses'=>'UserPageController@getUserQuanLyKhoHang']);

    

    Route::get('/mua-quang-cao', function () {
        return view('user.muaquangcao');
    });

    Route::group(['middleware'=>'userCheckLogin'], function() {
        Route::get('login',['as'=>'loginUser','uses'=>'LoginUserController@getDangNhap']);
        Route::post('login','LoginUserController@postDangNhap');
    });  

    Route::get('logout','LoginUserController@getUserLogout');
    Route::post('register',['as'=>'postUserRegister','uses'=>'LoginUserController@postUserRegister']);

    
});













