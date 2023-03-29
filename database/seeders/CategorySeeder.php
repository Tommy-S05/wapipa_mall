<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Category::create([
            'name' => 'Computadora',
            'slug' => Str::slug('Computadora', '-'),
            'description' => 'Esta categoria es para todas las computadoras.'
        ]);

        Category::create([
            'name' => 'Celular',
            'slug' => Str::slug('Celular', '-'),
            'description' => 'Esta categoria es para todos los celulares.'
        ]);
    }
}
