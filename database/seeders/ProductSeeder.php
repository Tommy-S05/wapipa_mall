<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $product = Product::create([
            'code' => '0001',
            'name' => 'Lenovo L340 Gaming',
            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
            'stock' => 25,
            'sell_price' => 45500.00,
            'short_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus turpis in eu mi.",
            'long_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin nibh sit amet commodo nulla. Fusce id velit ut tortor. Malesuada pellentesque elit eget gravida.",
            'category_id' => 1
        ]);
        $image_url[0]['url'] = 'images/Laptop-Gamer-Lenovo-Core-I7-L340.jpg';
        $image_url[1]['url'] = 'images/Laptop-Gamer-Lenovo-Core-I7-L340-2.jpg';
        $product->images()->createMany($image_url);
        //        $product1 = new Product();
        //        $product1->code = "0001";
        //        $product1->name = "Lenovo L340 Gaming";
        //        $product1->slug = Str::slug('Lenovo L340 Gaming', '-');
        //        $product1->stock = 25;
        //        //        $product1->image = "1675449040-Laptop-Gamer-Lenovo-Core-I7-L340";
        //        $product1->sell_price = 45500.00;
        //        $product1->short_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus turpis in eu mi.';
        //        $product1->long_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin nibh sit amet commodo nulla. Fusce id velit ut tortor. Malesuada pellentesque elit eget gravida.';
        //        $product1->category_id = 1;
        //        $product1->save();

        $product = Product::create([
            'code' => '0002',
            'name' => 'Iphone 14 Pro Max',
            'slug' => Str::slug('Iphone 14 Pro Max', '-'),
            'stock' => 15,
            'sell_price' => 115500.00,
            'short_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus turpis in eu mi.",
            'long_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin nibh sit amet commodo nulla. Fusce id velit ut tortor. Malesuada pellentesque elit eget gravida.",
            'category_id' => 2
        ]);
        $image_url[0]['url'] = 'images/Iphone-14-Pro-Max.jpg';
        $image_url[1]['url'] = 'images/Iphone-14-Pro-Max-2.jpg';
        $product->images()->createMany($image_url);
        //        $product2 = new Product();
        //        $product2->code = "0002";
        //        $product2->name = "Iphone 14 Pro Max";
        //        $product2->slug = Str::slug('Iphone 14 Pro Max', '-');
        //        $product2->stock = 15;
        //        //        $product2->image = "1675621667-iphone14-pro-max";
        //        $product2->sell_price = 115500.00;
        //        $product2->short_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus turpis in eu mi.';
        //        $product2->long_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin nibh sit amet commodo nulla. Fusce id velit ut tortor. Malesuada pellentesque elit eget gravida. ';
        //        $product2->category_id = 2;
        //        $product2->save();
    }
}
