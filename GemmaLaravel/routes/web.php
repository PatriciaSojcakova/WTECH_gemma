<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main_pages.main_page');
});

Route::get('/basket', function () {
    return view('main_pages.basket');
});

