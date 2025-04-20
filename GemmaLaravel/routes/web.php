<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main_pages.main_page');
});

Route::get('/basket', function () {
    return view('main_pages.basket');
});


/* HEADER */

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



/* PRODUCTS */

Route::get('/all_products_page', function () {
    return view('main_pages.all_products_page');
});
