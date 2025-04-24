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
            'Aurora Shine' => [
                'prsten/jednoduche/01_zeny_zlato.png',
                'prsten/jednoduche/01_zeny_zlato(2).png',
                'prsten/jednoduche/01_zeny_zlato(3).png',
            ],

            'Ruby Blossom' => [
                'prsten/jednoduche/02_zeny_zlato.png',
                'prsten/jednoduche/02_zeny_zlato(2).png',
                'prsten/jednoduche/02_zeny_zlato(3).png',
            ],

            'Sapphire Grace' => [
                'prsten/jednoduche/03_zeny_zlato.png',
                'prsten/jednoduche/03_zeny_zlato(2).png',
                'prsten/jednoduche/03_zeny_zlato(3).png',
            ],

            'Pearl Whisper' => [
                'prsten/jednoduche/04_zeny_zlato.png',
                'prsten/jednoduche/04_zeny_zlato(2).png',
                'prsten/jednoduche/04_zeny_zlato(3).png',
            ],

            'Golden Noble' => [
                'prsten/jednoduche/101_muzi_zlato.png',
                'prsten/jednoduche/101_muzi_zlato(2).png',
                'prsten/jednoduche/101_muzi_zlato(3).png',
            ],

            'Rubin Lord' => [
                'prsten/jednoduche/102_muzi_zlato.png',
                'prsten/jednoduche/102_muzi_zlato(2).png',
                'prsten/jednoduche/102_muzi_zlato(3).png',
            ],

            'Ocean Crown' => [
                'prsten/jednoduche/103_muzi_zlato.png',
                'prsten/jednoduche/103_muzi_zlato(2).png',
                'prsten/jednoduche/103_muzi_zlato(3).png',
            ],

            'Silver Titan' => [
                'prsten/jednoduche/104_muzi_striebro.png',
                'prsten/jednoduche/104_muzi_striebro(2).png',
                'prsten/jednoduche/104_muzi_striebro(3).png',
            ],

            'Crimson Edge' => [
                'prsten/jednoduche/105_muzi_titanium.png',
                'prsten/jednoduche/105_muzi_titanium(2).png',
                'prsten/jednoduche/105_muzi_titanium(3).png',
            ],

            'Midnight Star' => [
                'prsten/jednoduche/106_muzi_titanium.png',
                'prsten/jednoduche/106_muzi_titanium(2).png',
                'prsten/jednoduche/106_muzi_titanium(3).png',
            ],

            'Pearl Touch' => [
                'prsten/jednoduche/1001_unisex_striebro.png',
                'prsten/jednoduche/1001_unisex_striebro(2).png',
                'prsten/jednoduche/1001_unisex_striebro(3).png',
            ],

            'Ruby Zen' => [
                'prsten/jednoduche/1002_unisex_striebro.png',
                'prsten/jednoduche/1002_unisex_striebro(2).png',
                'prsten/jednoduche/1002_unisex_striebro(3).png',
            ],

            'Steel Moon' => [
                'prsten/jednoduche/1003_unisex_titanium.png',
                'prsten/jednoduche/1003_unisex_titanium(2).png',
                'prsten/jednoduche/1003_unisex_titanium(3).png',
            ],

            'Diamond Pulse' => [
                'prsten/jednoduche/1004_unisex_titanium.png',
                'prsten/jednoduche/1004_unisex_titanium(2).png',
                'prsten/jednoduche/1004_unisex_titanium(3).png',
            ],


            // Vrstviteľné
            'Golden Layers'   => ['prsten/vrstvitelne/01_zeny_zlato.png'],
            'Delicate Glow'   => ['prsten/vrstvitelne/02_zeny_zlato.png'],
            'Soft Glimmer'    => ['prsten/vrstvitelne/03_zeny_zlato.png'],
            'Silver Line'     => ['prsten/vrstvitelne/04_zeny_striebro.png'],
            'Moonlight Band'  => ['prsten/vrstvitelne/05_zeny_striebro.png'],
            'Frosted Touch'   => ['prsten/vrstvitelne/06_zeny_striebro.png'],
            'Titan Mist'      => ['prsten/vrstvitelne/07_zeny_titanium.png'],
            'Iron Layer'      => ['prsten/vrstvitelne/101_muzi_titanium.png'],
            'Steel Shadow'    => ['prsten/vrstvitelne/102_muzi_titanium.png'],
            'Golden Flow'     => ['prsten/vrstvitelne/1001_unisex_zlato.png'],
            'Layer Beam'      => ['prsten/vrstvitelne/1002_unisex_zlato.png'],
            'Silver Loop'     => ['prsten/vrstvitelne/1003_unisex_striebro.png'],

            // Obrúčky
            'Eternal Bond'    => ['prsten/obrucky/01_zeny_zlato.png'],
            'Golden Unity'    => ['prsten/obrucky/02_zeny_zlato.png'],
            'Silver Harmony'  => ['prsten/obrucky/03_zeny_striebro.png'],
            'Golden Legacy'   => ['prsten/obrucky/101_muzi_zlato.png'],
            'Noble Ring'      => ['prsten/obrucky/102_muzi_zlato.png'],
            'Regal Gold'      => ['prsten/obrucky/103_muzi_zlato.png'],
            'Pure Circle'     => ['prsten/obrucky/1001_unisex_zlato.png'],
            'Golden Harmony'  => ['prsten/obrucky/1002_unisex_zlato.png'],
            'Twilight Ring'   => ['prsten/obrucky/1003_unisex_zlato.png'],
            'Elegant Loop'    => ['prsten/obrucky/1004_unisex_zlato.png'],
            'Golden Touch'    => ['prsten/obrucky/1005_unisex_zlato.png'],
            'Luminous Ring'   => ['prsten/obrucky/1006_unisex_zlato.png'],
            'Silver Eternity' => ['prsten/obrucky/1007_unisex_striebro.png'],
            'Titanium Balance'=> ['prsten/obrucky/1008_unisex_titanium.png'],

            // Prstene s kamienkom
            'Golden Diamond Radiance' => ['prsten/s_kamienkom/01_zeny_zlato_diamant.png'],
            'Golden Diamond Glow' => ['prsten/s_kamienkom/02_zeny_zlato_diamant.png'],
            'Golden Diamond Sparkle' => ['prsten/s_kamienkom/03_zeny_zlato_diamant.png'],
            'Golden Diamond Shine' => ['prsten/s_kamienkom/06_zeny_zlato_diamant.png'],
            'Ruby Golden Desire' => ['prsten/s_kamienkom/05_zeny_zlato_rubin.png'],
            'Ruby Golden Charm' => ['prsten/s_kamienkom/09_zeny_zlato_rubin.png'],
            'Sapphire Golden Charm' => ['prsten/s_kamienkom/04_zeny_zlato_zafir.png'],
            'Sapphire Golden Desire' => ['prsten/s_kamienkom/07_zeny_zlato_zafir.png'],
            'Silver Diamond Glow' => ['prsten/s_kamienkom/08_zeny_striebro_diamant.png'],
            'Sapphire Golden Brilliance' => ['prsten/s_kamienkom/102_muzi_zlato_zafir.png'],
            'Sapphire Silver Legend' => ['prsten/s_kamienkom/101_muzi_strieborny_zafir.png'],
            'Crimson Titanium Ruby' => ['prsten/s_kamienkom/103_muzi_titanium_rubin.png'],
            'Sapphire Gold Light' => ['prsten/s_kamienkom/1001_unisex_zlato_zafir.png'],
            'Sapphire Gold Charm' => ['prsten/s_kamienkom/1002_unisex_zlato_zafir.png'],
            'Silver Diamond Essence' => ['prsten/s_kamienkom/1004_unisex_striebro_diamant.png'],
            'Sapphire Silver Wonder' => ['prsten/s_kamienkom/1005_unisex_striebro_zafir.png'],
            'Sapphire Silver Essence' => ['prsten/s_kamienkom/1006_unisex_striebro_zafir.png'],
            'Titanium Pearl Serenity' => ['prsten/s_kamienkom/1007_unisex_striebro_perla.png'],

        ];

        foreach ($productImages as $productName => $imageFiles) {
            $product = Product::where('name', $productName)->first();

            if ($product) {
                // Ak produkt existuje, pridáme obrázky
                foreach ($imageFiles as $imageFile) {
                    ProductImage::create([
                        'path' => $imageFile, // Pridáme cestu k obrázku
                        'id_product' => $product->id, // ID produktu
                    ]);
                }
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
