<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */
class ShoppingCartDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        "shopping_cart_id",
        "product_id",
        "quantity",
        "price",
    ];

    public function products() {
        return $this->belongsTo(Product::class);
    }

    public function shopping_carts() {
        return $this->belongsTo(ShoppingCart::class);
    }
}
