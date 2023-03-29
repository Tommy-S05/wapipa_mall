<?php

namespace App\Providers;

use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

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
        view()->composer("*", function($view) {
            $session_name = 'shopping_cart_id';
            $shopping_cart_id = Session::get($session_name);
            $shopping_cart = ShoppingCart::getCartById($shopping_cart_id);
            Session::put($session_name, $shopping_cart);
            $view->with('shopping_cart', $shopping_cart);
        });
    }
}
