<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
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
    return view('main_pages.personal_account');
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



/* LOGIN */
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



/* KOSIK */
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::patch('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/order_submit', [OrderController::class, 'submit'])->name('order.submit');
Route::get('/order_done', function () {
    return view('side_pages.order_done');
})->name('order.success');



/*ADMIN*/
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::post('/admin/delete-product', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
Route::post('/products', [AdminController::class, 'store'])->name('products.store');
Route::get('/admin/create', [AdminController::class, 'create'])->name('products.create');
Route::post('/admin/product/show', [AdminController::class, 'showProduct'])->name('admin.product.show');
Route::post('/admin/product/update', [AdminController::class, 'updateProduct'])->name('admin.product.update');
