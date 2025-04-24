<?php

use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\AuthController;*/
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


/* MAIN */
Route::get('/basket', function () {
    return view('main_pages.basket');
});

Route::get('/order_submit', function () {
    return view('main_pages.order_submit');
});





/* HEADER */
Route::get('/favorite', function () {
    return view('main_pages.favorite');
});

Route::get('/login_registration', function () {
    return view('main_pages.login_registration');
});

Route::get('/personal_account', function () {
    return view('main_pages.personal_account');  //->middleware('auth');
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
Route::get('/all_products_page', [ProductController::class, 'index'])->name('product.show');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/one_product_page/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/', [ProductController::class, 'home'])->name('home');
//Route::get('/one_product_page', [ProductController::class, 'more'])->name('more');
/*
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
*/


/* LOGIN */
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



/* KOSIK */
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::patch('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');


/*
Route::post('/cart/add', [CartController::class, 'addToCart']);
Route::get('/cart', [CartController::class, 'viewCart']);
Route::delete('/cart/remove', [CartController::class, 'removeFromCart']);
Route::delete('/cart/clear', [CartController::class, 'clearCart']);
*/

/*
Route::middleware(['auth'])->group(function () {
});
*/
