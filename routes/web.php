<?php

Route::get('/', function () {
    return view('welcome');
});
 
Route::group(['namespace' => 'UserController'], function() {
	Route::get('/home',['as'=>'trangchu','uses'=>'HomePageController@getHomePage']); 

    //set Cookie
    
    Route::get('/set-cookie/{id}', 'PlacesController@setCookie');

    //chitietdanhmuc

    Route::get('/{name}/{id}', 'CategoryDetail@getDanhMuc');

    Route::get('/{nameCate}/{idCate}/{hienthi}/{tinhtrang}/{gia}/{sapxep}/uy-tin-chat-luong', 'CategoryDetail@getCustomCategory')->name('danhmuc');

    Route::get('/chi-tiet-san-pham/{id}', ['as'=>'chitietsanpham','uses'=>'ProductController@getProduct']);

    Route::get('/dang-tin-dich-vu', function () {
        return view('user.dangtindichvu');
    });

    Route::get('/dang-tin-san-pham', function () {
        return view('user.dangtinsanpham');
    });

    Route::get('/gian-hang-cua-nguoi-dung', function () {
        return view('user.gianhangcuanguoidung');
    });

    Route::get('/tat-ca-tin-dang', function () {
        return view('user.tatcatindang');
    });

    Route::get('/user-quan-ly-kho-hang', function () {
        return view('user.userquanlykhohang');
    });

    Route::get('/dang-tin-chung', function () {
        return view('user.dangtinchung');
    });

    Route::get('/login', function () {
        return view('user.login');
    });

    Route::get('/mua-quang-cao', function () {
        return view('user.muaquangcao');
    });

    
});













