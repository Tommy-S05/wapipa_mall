<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "code",
        "name",
        "stock",
        "image",
        "sell_price",
        "status",
        "subcategory_id",
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
