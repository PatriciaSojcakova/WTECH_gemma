<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::create([
            'path' => 'public/image/simple_gold_3-removebg-preview.png',
            'id_product' => Product::where('name','testovaci subjekt')->first()->id,
        ]);
    }
}
