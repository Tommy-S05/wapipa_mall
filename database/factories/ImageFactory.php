<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'url' => $this->faker->randomElement([
                'images/product-b-1.jpg',
                'images/product-b-2.jpg',
                'images/product-b-3.jpg',
                'images/product-b-4.jpg',
                'images/product-f-1.jpg',
                'images/product-f-2.jpg',
                'images/product-f-3.jpg',
                'images/product-f-4.jpg',
                'images/product-img1.jpg',
                'images/product-img2.jpg',
                'images/product-img3.jpg',
                'images/product-img4.jpg',
                'images/product-img5.jpg',
                'images/product-img6.jpg',
                'images/product-img7.jpg',
                'images/product-img8.jpg',
                'images/product-img9.jpg',
                'images/product-img10.jpg',
                'images/product-img11.jpg',
                'images/product-img12.jpg',
                'images/product-img13.jpg',
                'images/product-img14.jpg',
                'images/product-img15.jpg',
                'images/product-img16.jpg',
                'images/product-s-1.jpg',
                'images/product-s-2.jpg',
                'images/product-s-3.jpg',
                'images/product-s-4.jpg',
                'images/product-s-5.jpg',
                'images/product-s-6.jpg',
            ])
        ];
    }
}
