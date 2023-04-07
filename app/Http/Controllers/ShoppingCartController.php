<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShoppingCart;
use App\Http\Requests\StoreShoppingCartRequest;
use App\Http\Requests\UpdateShoppingCartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Jackiedo\Cart\Facades\Cart;

//use Jackiedo\Cart\Cart;

class ShoppingCartController extends Controller
{
    public function add(Request $request) {
        //        dd($request->quantity);
        $product = Product::where('slug', '=', $request->product_slug)->first();
        $url = $product->images->pluck('url')[0];
        if(Auth::user()) {
            $userId = auth()->user()->id;
            $shopping_cart = Cart::name($userId);
            $shopping_cart->addItem([
                'id' => $product->id,
                'title' => $product->name,
                'quantity' => $request->quantity,
                'price' => $product->sell_price,
                'extra_info' => [
                    'url' => $url
                ]
            ]);
        } else {
            $shopping_cart = Cart::name('shopping_cart');
            $shopping_cart->addItem([
                'id' => $product->id,
                'title' => $product->name,
                'quantity' => $request->quantity,
                'price' => $product->sell_price,
                'extra_info' => [
                    'url' => $url
                ]
            ]);
        }

        return redirect()->back();
    }

    public function update_product(Request $request) {
        if(Auth::user()) {
            $userId = auth()->user()->id;
            $shopping_cart = Cart::name($userId);
            $shopping_cart->updateItem($request->hash, [
                'quantity' => $request->quantity
            ]);

            return redirect()->back();
        } else {
            $shopping_cart = Cart::name('shopping_cart');
            $shopping_cart->updateItem($request->hash, [
                'quantity' => $request->quantity
            ]);

            return redirect()->back();
        }
    }

    public function delete_product(Request $request) {
        if(Auth::user()) {
            $userId = auth()->user()->id;
            $shopping_cart = Cart::name($userId);
            $shopping_cart->removeItem($request->hash);

            return redirect()->back();
        } else {
            $shopping_cart = Cart::name('shopping_cart');
            $shopping_cart->removeItem($request->hash);

            return redirect()->back();
        }
    }

    public function empty_cart(Request $request) {
        if(Auth::user()) {
            $userId = auth()->user()->id;
            $shopping_cart = Cart::name($userId);
            $shopping_cart->clearItems($request->hash);

            return redirect()->back();
        } else {
            $shopping_cart = Cart::name('shopping_cart');
            $shopping_cart->clearItems($request->hash);

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy() {
        $shopping_cart = Cart::name('shopping_cart');
        $shopping_cart->destroy();
    }
}
