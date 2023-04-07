<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;

/**
 * @mixin Builder
 */
class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        "status",
        "user_id",
        "order_date",
    ];

    public function shopping_cart_details() {
        return $this->hasMany(ShoppingCartDetail::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    /*
    public static function findOrCreateBySessionId($shopping_cart_id) {
        if($shopping_cart_id) {
            $shoppingCart = self::find($shopping_cart_id);
            return $shoppingCart;
        } else {
            $shoppingCart = self::create();
            return $shoppingCart;
        }
    }
    */

    //    public static function findBySession($shopping_cart_id) {
    //        return self::find($shopping_cart_id);
    //    }

    //    public static function createWithoutSession() {
    //        $shoppingCart = self::create();
    //        return $shoppingCart;
    //    }

    //    public static function getCartById($shopping_cart_id) {
    //        if($shopping_cart_id) {
    //            return ShoppingCart::find($shopping_cart_id);
    //        } else {
    //            return ShoppingCart::create();
    //        }
    //    }
}
