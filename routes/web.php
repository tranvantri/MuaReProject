<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'UserController'], function() {
	Route::get('/home',['as'=>'trangchu','uses'=>'HomePageController@getHomePage']); 






    
});

Route::get('/chitietdanhmuc', function () {
    return view('User.chitietdanhmuc');
});

Route::get('/chitietsanpham', function () {
    return view('User.chitietsanpham');
});

Route::get('/dangtindichvu', function () {
    return view('User.dangtindichvu');
});

Route::get('/dangtinsanpham', function () {
    return view('User.dangtinsanpham');
});

Route::get('/gianhangcuanguoidung', function () {
    return view('User.gianhangcuanguoidung');
});

Route::get('/tatcatindang', function () {
    return view('User.tatcatindang');
});

Route::get('/userquanlykhohang', function () {
    return view('User.userquanlykhohang');
});

Route::get('/dangtinchung', function () {
    return view('User.dangtinchung');
});

Route::get('/login', function () {
    return view('User.login');
});

Route::get('/muaquangcao', function () {
    return view('User.muaquangcao');
});









