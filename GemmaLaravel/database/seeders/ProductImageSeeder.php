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
        $productImages = [
            // Jednoduché
            'Aurora Shine'    => '/image/prsten/jednoduche/01_zeny_zlato.png',
            'Ruby Blossom'    => '/image/prsten/jednoduche/02_zeny_zlato.png',
            'Sapphire Grace'  => '/image/prsten/jednoduche/03_zeny_zlato.png',
            'Pearl Whisper'   => '/image/prsten/jednoduche/04_zeny_zlato.png',
            'Golden Noble'    => '/image/prsten/jednoduche/101_muzi_zlato.png',
            'Rubin Lord'      => '/image/prsten/jednoduche/102_muzi_zlato.png',
            'Ocean Crown'     => '/image/prsten/jednoduche/103_muzi_zlato.png',
            'Silver Titan'    => '/image/prsten/jednoduche/104_muzi_striebro.png',
            'Crimson Edge'    => '/image/prsten/jednoduche/105_muzi_titanium.png',
            'Midnight Star'   => '/image/prsten/jednoduche/106_muzi_titanium.png',
            'Pearl Touch'     => '/image/prsten/jednoduche/1001_unisex_striebro.png',
            'Ruby Zen'        => '/image/prsten/jednoduche/1002_unisex_striebro.png',
            'Steel Moon'      => '/image/prsten/jednoduche/1003_unisex_titanium.png',
            'Diamond Pulse'   => '/image/prsten/jednoduche/1004_unisex_titanium.png',
/*
            // Vrstviteľné – Ženy
            'Golden Layers'   => 'layer_gold_1.png',
            'Delicate Glow'   => 'layer_gold_2.png',
            'Soft Glimmer'    => 'layer_gold_3.png',
            'Silver Line'     => 'layer_silver_1.png',
            'Moonlight Band'  => 'layer_silver_2.png',
            'Frosted Touch'   => 'layer_silver_3.png',
            'Titan Mist'      => 'layer_titanium_1.png',

            // Vrstviteľné – Muži
            'Iron Layer'      => 'layer_titanium_2.png',
            'Steel Shadow'    => 'layer_titanium_3.png',

            // Vrstviteľné – Unisex
            'Golden Flow'     => 'layer_gold_4.png',
            'Layer Beam'      => 'layer_gold_5.png',
            'Silver Loop'     => 'layer_silver_4.png',

            // Obrúčky – Ženy
            'Eternal Bond'    => 'ring_gold_1.png',
            'Golden Unity'    => 'ring_gold_2.png',
            'Silver Harmony'  => 'ring_silver_1.png',

            // Obrúčky – Muži
            'Golden Legacy'   => 'ring_gold_3.png',
            'Noble Ring'      => 'ring_gold_4.png',
            'Regal Gold'      => 'ring_gold_5.png',

            // Obrúčky – Unisex
            'Pure Circle'     => 'ring_gold_6.png',
            'Golden Harmony'  => 'ring_gold_7.png',
            'Twilight Ring'   => 'ring_gold_8.png',
            'Elegant Loop'    => 'ring_gold_9.png',
            'Golden Touch'    => 'ring_gold_10.png',
            'Luminous Ring'   => 'ring_gold_11.png',
            'Silver Eternity' => 'ring_silver_2.png',
            'Titanium Balance'=> 'ring_titanium_1.png',

            // Prstene s kamienkom – ženy – zlato – diamant
            'Golden Diamond Radiance' => 'stone_gold_diamond_1.png',
            'Golden Diamond Glow'     => 'stone_gold_diamond_2.png',
            'Golden Diamond Sparkle'  => 'stone_gold_diamond_3.png',
            'Golden Diamond Shine'    => 'stone_gold_diamond_4.png',

            // ženy – zlato – rubín
            'Ruby Golden Desire'      => 'stone_gold_ruby_1.png',
            'Ruby Golden Charm'       => 'stone_gold_ruby_2.png',

            // ženy – zlato – zafír
            'Sapphire Golden Charm'   => 'stone_gold_sapphire_1.png',
            'Sapphire Golden Desire'  => 'stone_gold_sapphire_2.png',

            // ženy – striebro – diamant
            'Silver Diamond Glow'     => 'stone_silver_diamond_1.png',

            // muži – zlato – zafír
            'Sapphire Golden Brilliance' => 'stone_gold_sapphire_3.png',

            // muži – striebro – zafír
            'Sapphire Silver Legend'     => 'stone_silver_sapphire_1.png',

            // muži – titanium – rubín
            'Crimson Titanium Ruby'      => 'stone_titanium_ruby_1.png',

            // unisex – zlato – zafír
            'Sapphire Gold Light'        => 'stone_gold_sapphire_4.png',
            'Sapphire Gold Charm'        => 'stone_gold_sapphire_5.png',

            // unisex – striebro – diamant
            'Silver Diamond Essence'     => 'stone_silver_diamond_2.png',

            // unisex – striebro – zafír
            'Sapphire Silver Wonder'     => 'stone_silver_sapphire_2.png',
            'Sapphire Silver Essence'    => 'stone_silver_sapphire_3.png',

            // unisex – titanium – perla
            'Titanium Pearl Serenity'    => 'stone_titanium_pearl_1.png',*/

        ];

        foreach ($productImages as $productName => $imageFile) {
            $product = Product::where('name', $productName)->first();

            if ($product) {
                ProductImage::create([
                    'path' => 'public/image/' . $imageFile,
                    'id_product' => $product->id,
                ]);
            } else {
                echo "Produkt '$productName' sa nenašiel v databáze.\n";
            }
        }

        /*
        ProductImage::create([
            'path' => 'public/image/simple_gold_3-removebg-preview.png',
            'id_product' => Product::where('name','Aurora Shine')->first()->id,
        ]);*/
    }
}
