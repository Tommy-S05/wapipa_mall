<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home() {
        return view('web.home');
    }

    public function products() {
        $products = Product::get_active_products()->paginate(12);
        //        $categories = Category::all();
        //        dd($products);
        return view('web.products', compact('products'));
    }

    public function product_details($slug) {
        $product = Product::where('slug', '=', $slug)->first();
        return view('web.product_details', compact('product'));
    }

    public function login() {
        return view('web.login_register');
    }

    public function my_account() {
        return view('web.my_account');
    }

    public function cart() {
        return view('web.cart');
    }

    public function checkout() {
        return view('web.checkout');
    }


    public function wishlist() {
        return view('web.wishlist');
    }
}
