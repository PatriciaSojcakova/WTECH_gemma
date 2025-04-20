<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main_pages.main_page');
});

Route::get('/basket', function () {
    return view('main_pages.basket');
});






/* FOOTER */
Route::get('/contact', function () {
    return view('side_pages.contact');
});

Route::get('/terms_and_conditions', function () {
    return view('side_pages.terms_and_conditions');
});

Route::get('/shipping', function () {
    return view('side_pages.shipping');
});

Route::get('/payment', function () {
    return view('side_pages.payment');
});

Route::get('/complaints', function () {
    return view('side_pages.complaints');
});
