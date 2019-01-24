<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'userController'], function() {
	Route::get('/home',['as'=>'trangchu','uses'=>'HomePageController@getHomePage']); 

    Route::get('/chitietdanhmuc', function () {
        return view('user.chitietdanhmuc');
    });

    Route::get('/chitietsanpham', function () {
        return view('user.chitietsanpham');
    });

    Route::get('/dangtindichvu', function () {
        return view('user.dangtindichvu');
    });

    Route::get('/dangtinsanpham', function () {
        return view('user.dangtinsanpham');
    });

    Route::get('/gianhangcuanguoidung', function () {
        return view('user.gianhangcuanguoidung');
    });

    Route::get('/tatcatindang', function () {
        return view('user.tatcatindang');
    });

    Route::get('/userquanlykhohang', function () {
        return view('user.userquanlykhohang');
    });

    Route::get('/dangtinchung', function () {
        return view('user.dangtinchung');
    });

    Route::get('/login', function () {
        return view('user.login');
    });

    Route::get('/muaquangcao', function () {
        return view('user.muaquangcao');
    });

    
});













