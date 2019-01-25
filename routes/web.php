<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'UserController'], function() {
	Route::get('/home',['as'=>'trangchu','uses'=>'HomePageController@getHomePage']); 

    Route::get('/chi-tiet-danh-muc', function () {
        return view('user.chitietdanhmuc');
    });

    Route::get('/chi-tiet-san-pham', function () {
        return view('user.chitietsanpham');
    });

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













