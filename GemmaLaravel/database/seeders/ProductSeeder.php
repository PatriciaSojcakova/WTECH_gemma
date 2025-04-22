<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Test User',
            'description' => 'this is the description of test product',
            'material' => 'diamond',
            'stone_color' => 'none',
            'purpose' => 'woman',
            'quantity' => 5,
            'price' => 500,
        ]);
    }
}
