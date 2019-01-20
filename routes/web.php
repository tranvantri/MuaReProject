<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('User.trangchu');
});

Route::get('/chitietdanhmuc', function () {
    return view('User.chitietdanhmuc');
});







































