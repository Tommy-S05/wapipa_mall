<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    public function home() {

        $bestProducts = Product::inRandomOrder()->take(8)->get();
        //        $newProducts = Product::get_new_products()->take(6)->get();
        $newProducts = Product::get_new_products()
            ->inRandomOrder()
            ->limit(6)
            ->get();
        //        $likeNewProducts = Product::get_like_new_products()->take(6)->get();
        $likeNewProducts = Product::get_like_new_products()
            ->inRandomOrder()
            ->limit(6)
            ->get();
        //        $usedProducts = Product::get_used_products()->take(6)->get();
        $usedProducts = Product::get_used_products()
            ->inRandomOrder()
            ->limit(6)
            ->get();

        $latestProducts = Product::latest('id')->take(6)->get();
        return view('web.home', [
            'bestProducts' => $bestProducts,
            'newProducts' => $newProducts,
            'likeNewProducts' => $likeNewProducts,
            'usedProducts' => $usedProducts,
            'latestProducts' => $latestProducts
        ]);

    }

    public function products() {
        $products = Product::get_active_products()->paginate(6);
        //        $categories = Category::all();
        //        dd($products);
        return view('web.products', compact('products'));
    }

    public function productsByCategory($category_slug) {
        $categoryBySlug = Category::where('slug', $category_slug)->first();
        $categoryIdSelected = $categoryBySlug->id;
        $products = Product::where('category_id', $categoryIdSelected)->paginate(6);
        return view('web.products', compact('products', 'categoryBySlug'));
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

    public function contact_us() {
        return view('web.contact_us');
    }
}
