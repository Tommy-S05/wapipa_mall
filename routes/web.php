<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\AuthController;
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
Route::get('/', [WebController::class, 'home'])->name('web.home');
//Route::get('/', [WebController::class, 'products'])->name('web.products');
Route::get('/home', [WebController::class, 'home'])->name('home');
//Route::get('/home', function() {
//    return view('home');
//})->name('home');


Route::resource('admin/products', ProductController::class)->names('admin.products');
Route::get('admin/products/change/{product}', [ProductController::class, 'change_status'])->name('admin.products.change');


Route::get('/products', [WebController::class, 'products'])->name('web.products');
Route::get('/products/{product_slug}', [WebController::class, 'productsByCategory'])->name('web.products_category');
Route::get('/product_details/{slug}', [WebController::class, 'product_details'])->name('web.product_details');

Route::get('/login_register', [AuthController::class, 'login_register'])->name('web.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('web.logout')->middleware('auth');
Route::get('/my_account', [WebController::class, 'my_account'])->name('web.my_account')->middleware('auth');

Route::get('/shopping_cart', [WebController::class, 'cart'])->name('web.shopping_cart');
//Route::get('product/add_cart/{product_slug}/{quantity}', [ShoppingCartController::class, 'add'])->name('web.add_cart');
Route::post('product/add_cart', [ShoppingCartController::class, 'add'])->name('web.add_cart');
Route::put('product/update_cart', [ShoppingCartController::class, 'update_product'])->name('web.update_cart');
Route::delete('product/delete_cart', [ShoppingCartController::class, 'delete_product'])->name('web.delete_cart');
Route::delete('product/empty_cart', [ShoppingCartController::class, 'delete_product'])->name('web.empty_cart');
Route::get('product/destroy_cart', [ShoppingCartController::class, 'destroy'])->name('web.destroy_cart');

Route::get('/checkout', [WebController::class, 'checkout'])->name('web.checkout');

Route::get('/wishlist', [WebController::class, 'wishlist'])->name('web.wishlist');

Route::get('/contactus', [WebController::class, 'contact_us'])->name('web.contact_us');



/*
Route::get('/products', function() {
    return view('web.products');
});
Route::get('/product-details', function() {
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
*/
