<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main_pages.main_page');
});

Route::get('/basket', function () {
    return view('main_pages.basket');
});

Route::get('/favorite', function () {
    return view('main_pages.favorite');
});

Route::get('/login_registration', function () {
    return view('main_pages.login_registration');
});


Route::get('/personal_account', function () {
    return view('main_pages.personal_account');
});

Route::get('/admin_account', function () {
    return view('main_pages.admin_account');
});
