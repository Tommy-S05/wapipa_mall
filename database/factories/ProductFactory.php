<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        //        $name = $this->faker->unique()->sentence(1);
        return [
            "code" => $this->faker->unique()->numberBetween(0001, 9999),
            "name" => $this->faker->unique()->sentence(1),
            'slug' => $this->faker->unique()->slug,
            "stock" => random_int(5, 20),
            "sell_price" => $this->faker->numberBetween(20000, 200000),
            'short_description' => $this->faker->realText(360, 2),
            //            'short_description' => $this->faker->paragraph(4),
            'long_description' => $this->faker->paragraph(12),
            "category_id" => Category::inRandomOrder()->value('id') ?: factory(Category::class),
        ];
    }
}
