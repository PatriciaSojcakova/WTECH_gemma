<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::firstOrCreate(['name' => 'Prstene']);
        $subcategory = Subcategory::firstOrCreate([
            'name' => 'Jednoduché',
            'category_id' => $category->id,
        ]);

        Product::create([
            'name' => 'testovaci subjekt',
            'description' => 'this is the description of test product',
            'material' => 'zlato',
            'stone_color' => 'diamant',
            'purpose' => 'zeny',
            'quantity' => 5,
            'price' => 500,
            'subcategory_id' => $subcategory->id,

        ]);
    }
}
