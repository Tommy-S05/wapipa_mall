<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $user1 = User::create([
            'name' => 'Tommy Rafael Sanchez Feliz',
            'email' => 'tommy-s05@hotmail.com',
            'password' => Hash::make('123456789')
        ]);
    }
}
