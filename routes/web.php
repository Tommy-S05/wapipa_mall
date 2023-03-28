<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function() {
//    return view('welcome');
//});

Route::get('/', function() {
    return view('home');
});
Route::get('/home', function() {
    return view('home');
});
Route::get('/products', function() {
    return view('web.products');
});
Route::get('/product/details', function() {
    return view('web.product_details');
});
Route::get('/my_account', function() {
    return view('web.my_account');
});
Route::get('/login', function() {
    return view('web.login_register');
});
Route::get('/contactus', function() {
    return view('web.contact_us');
});
Route::get('/checkout', function() {
    return view('web.checkout');
});
Route::get('/cart', function() {
    return view('web.cart');
});
Route::get('/blogs', function() {
    return view('web.blogs');
});
Route::get('/blog/details', function() {
    return view('web.blog_details');
});
Route::get('/aboutus', function() {
    return view('web.about_us');
});
Route::get('/wishlist', function() {
    return view('web.wishlist');
});
