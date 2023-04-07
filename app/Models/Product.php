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
        "slug",
        "stock",
        //        "image",
        "sell_price",
        'short_description',
        'long_description',
        'state',
        "status",
        'category_id',
        //        "subcategory_id",
    ];

    public function images() {
        return $this->morphMany(Image::class, 'model');
    }

    //    public function images() {
    //        return $this->morphToMany('App\Image', 'imageable');
    //    }

    public function upload_images($request, $product) {
        $images_url = [];
        if($request->hasFile('images')) {
            $images = $request->file('images');
            foreach($images as $image) {
                $filename = time() . "-" . $image->getClientOriginalName();
                $destinationPath = 'images/';
                $uploadSuccess = $image->move($destinationPath, $filename);
                $images_url[]['url'] = $destinationPath . $filename;
            }
            $product->images()->createMany($images_url);
        }
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    public static function get_active_products() {
        return self::where('status', 'ACTIVE');
    }

    public static function get_new_products() {
        return self::where('state', 'NEW');
    }

    public static function get_like_new_products() {
        return self::where('state', 'LIKE NEW');
    }

    public static function get_used_products() {
        return self::where('state', 'USED');
    }
}
