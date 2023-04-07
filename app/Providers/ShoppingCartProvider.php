<?php

namespace App\Providers;

use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

use Jackiedo\Cart\Facades\Cart;

//use Jackiedo\Cart\Cart;

class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void {
        //        view()->composer("*", function($view) {
        //            //            $session_name = 'shopping_cart_id';
        //            $shopping_cart_id = Session::get('shopping_cart_id');
        //            $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
        //            Session::put('shopping_cart_id', $shopping_cart);
        //            $view->with('shopping_cart', $shopping_cart);
        //        });
        view()->composer("*", function($view) {
            if(Auth::user()) {
                $userId = \auth()->user()->id;
                $shopping_cart = Cart::name($userId);
                //                $count = $shopping_cart->countItems();
                //                dd($count);
                $view->with('shopping_cart', $shopping_cart);
            } else {

                $shopping_cart = Cart::name('shopping_cart');
                //                dd(Cart::getName());
                //                foreach($shopping_cart->getDetails()->items as $item) {
                //                    dd($item->hash);
                //                }
                $view->with('shopping_cart', $shopping_cart);
            }
        });
    }
}
