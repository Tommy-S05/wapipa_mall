<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */
class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_id',
        'name',
        'slug',
        'description',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
