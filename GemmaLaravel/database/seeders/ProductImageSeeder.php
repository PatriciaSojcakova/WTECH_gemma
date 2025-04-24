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
            //prsten
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
            'Golden Layers'   => [
                'prsten/vrstvitelne/01_zeny_zlato.png',
                'prsten/vrstvitelne/01_zeny_zlato - kópia.png',
            ],
            'Delicate Glow'   => [
                'prsten/vrstvitelne/02_zeny_zlato.png',
                'prsten/vrstvitelne/02_zeny_zlato - kópia.png',
            ],
            'Soft Glimmer'    => [
                'prsten/vrstvitelne/03_zeny_zlato.png',
                'prsten/vrstvitelne/03_zeny_zlato - kópia.png',
            ],
            'Silver Line'     => [
                'prsten/vrstvitelne/04_zeny_striebro.png',
                'prsten/vrstvitelne/04_zeny_striebro - kópia.png',
            ],
            'Moonlight Band'  => [
                'prsten/vrstvitelne/05_zeny_striebro.png',
                'prsten/vrstvitelne/05_zeny_striebro - kópia.png',
            ],
            'Frosted Touch'   => [
                'prsten/vrstvitelne/06_zeny_striebro.png',
                'prsten/vrstvitelne/06_zeny_striebro - kópia.png',
            ],
            'Titan Mist'      => [
                'prsten/vrstvitelne/07_zeny_titanium.png',
                'prsten/vrstvitelne/07_zeny_titanium - kópia.png',
            ],
            'Iron Layer'      => [
                'prsten/vrstvitelne/101_muzi_titanium.png',
                'prsten/vrstvitelne/101_muzi_titanium - kópia.png',
            ],
            'Steel Shadow'    => [
                'prsten/vrstvitelne/102_muzi_titanium.png',
                'prsten/vrstvitelne/102_muzi_titanium - kópia.png',
            ],
            'Golden Flow'     => [
                'prsten/vrstvitelne/1001_unisex_zlato.png',
                'prsten/vrstvitelne/1001_unisex_zlato - kópia.png',
            ],
            'Layer Beam'      => [
                'prsten/vrstvitelne/1002_unisex_zlato.png',
                'prsten/vrstvitelne/1002_unisex_zlato - kópia.png',
            ],
            'Silver Loop'     => [
                'prsten/vrstvitelne/1003_unisex_striebro.png',
                'prsten/vrstvitelne/1003_unisex_striebro - kópia.png',
            ],

            // Obrúčky
            'Eternal Bond'    => [
                'prsten/obrucky/01_zeny_zlato.png',
                'prsten/obrucky/01_zeny_zlato(2).png',
            ],
            'Golden Unity'    => [
                'prsten/obrucky/02_zeny_zlato.png',
                'prsten/obrucky/02_zeny_zlato(2).png',
            ],
            'Silver Harmony'  => [
                'prsten/obrucky/03_zeny_striebro.png',
                'prsten/obrucky/03_zeny_striebro(2).png',
            ],
            'Golden Legacy'   => [
                'prsten/obrucky/101_muzi_zlato.png',
                'prsten/obrucky/101_muzi_zlato(2).png',
            ],
            'Noble Ring'      => [
                'prsten/obrucky/102_muzi_zlato.png',
                'prsten/obrucky/102_muzi_zlato(2).png',
            ],
            'Regaly Gold'      => [
                'prsten/obrucky/103_muzi_zlato.png',
                'prsten/obrucky/103_muzi_zlato(2).png',
            ],
            'Pure Circle'     => [
                'prsten/obrucky/1001_unisex_zlato.png',
                'prsten/obrucky/1001_unisex_zlato(2).png',
            ],
            'Golden Harmony'  => [
                'prsten/obrucky/1002_unisex_zlato.png',
                'prsten/obrucky/1002_unisex_zlato(2).png',
            ],
            'Twilight Ring'   => [
                'prsten/obrucky/1003_unisex_zlato.png',
                'prsten/obrucky/1003_unisex_zlato(2).png',
            ],
            'Elegant Loop'    => [
                'prsten/obrucky/1004_unisex_zlato.png',
                'prsten/obrucky/1004_unisex_zlato(2).png',
            ],
            'Golden Touch'    => [
                'prsten/obrucky/1005_unisex_zlato.png',
                'prsten/obrucky/1005_unisex_zlato(2).png',
            ],
            'Luminous Ring'   => [
                'prsten/obrucky/1006_unisex_zlato.png',
                'prsten/obrucky/1006_unisex_zlato(2).png',
            ],
            'Silver Eternity' => [
                'prsten/obrucky/1007_unisex_striebro.png',
                'prsten/obrucky/1007_unisex_striebro(2).png',
            ],
            'Titanium Balance'=> [
                'prsten/obrucky/1008_unisex_titanium.png',
                'prsten/obrucky/1008_unisex_titanium(2).png',
            ],

            // Prstene s kamienkom
            'Golden Diamond Radiance' => [
                'prsten/s_kamienkom/01_zeny_zlato_diamant.png',
                'prsten/s_kamienkom/01_zeny_zlato_diamant - kópia.png',
            ],
            'Golden Diamond Glow' => [
                'prsten/s_kamienkom/02_zeny_zlato_diamant.png',
                'prsten/s_kamienkom/02_zeny_zlato_diamant - kópia.png',
            ],
            'Golden Diamond Sparkle' => [
                'prsten/s_kamienkom/03_zeny_zlato_diamant.png',
                'prsten/s_kamienkom/03_zeny_zlato_diamant - kópia.png',
            ],
            'Golden Diamond Shine' => [
                'prsten/s_kamienkom/06_zeny_zlato_diamant.png',
                'prsten/s_kamienkom/06_zeny_zlato_diamant - kópia.png',
            ],
            'Ruby Golden Desire' => [
                'prsten/s_kamienkom/05_zeny_zlato_rubin.png',
                'prsten/s_kamienkom/05_zeny_zlato_rubin - kópia.png',
            ],
            'Ruby Golden Charm' => [
                'prsten/s_kamienkom/09_zeny_zlato_rubin.png',
                'prsten/s_kamienkom/09_zeny_zlato_rubin - kópia.png',
            ],
            'Sapphire Golden Charm' => [
                'prsten/s_kamienkom/04_zeny_zlato_zafir.png',
                'prsten/s_kamienkom/04_zeny_zlato_zafir - kópia.png',
            ],
            'Sapphire Golden Desire' => [
                'prsten/s_kamienkom/07_zeny_zlato_zafir.png',
                'prsten/s_kamienkom/07_zeny_zlato_zafir - kópia.png',
            ],
            'Silver Diamond Glow' => [
                'prsten/s_kamienkom/08_zeny_striebro_diamant.png',
                'prsten/s_kamienkom/08_zeny_striebro_diamant - kópia.png',
            ],
            'Sapphire Golden Brilliance' => [
                'prsten/s_kamienkom/102_muzi_zlato_zafir.png',
                'prsten/s_kamienkom/102_muzi_zlato_zafir - kópia.png',
            ],
            'Sapphire Silver Legend' => [
                'prsten/s_kamienkom/101_muzi_strieborny_zafir.png',
                'prsten/s_kamienkom/101_muzi_strieborny_zafir - kópia.png',
            ],
            'Crimson Titanium Ruby' => [
                'prsten/s_kamienkom/103_muzi_titanium_rubin.png',
                'prsten/s_kamienkom/103_muzi_titanium_rubin - kópia.png',
            ],
            'Sapphire Gold Light' => [
                'prsten/s_kamienkom/1001_unisex_zlato_zafir.png',
                'prsten/s_kamienkom/1001_unisex_zlato_zafir - kópia.png',
            ],
            'Sapphire Gold Charm' => [
                'prsten/s_kamienkom/1002_unisex_zlato_zafir.png',
                'prsten/s_kamienkom/1002_unisex_zlato_zafir - kópia.png',
            ],
            'Silver Diamond Essence' => [
                'prsten/s_kamienkom/1004_unisex_striebro_diamant.png',
                'prsten/s_kamienkom/1004_unisex_striebro_diamant - kópia.png',
            ],
            'Sapphire Silver Wonder' => [
                'prsten/s_kamienkom/1005_unisex_striebro_zafir.png',
                'prsten/s_kamienkom/1005_unisex_striebro_zafir - kópia.png',
            ],
            'Sapphire Silver Essence' => [
                'prsten/s_kamienkom/1006_unisex_striebro_zafir.png',
                'prsten/s_kamienkom/1006_unisex_striebro_zafir - kópia.png',
            ],
            'Titanium Pearl Serenity' => [
                'prsten/s_kamienkom/1007_unisex_striebro_perla.png',
                'prsten/s_kamienkom/1007_unisex_striebro_perla - kópia.png',
            ],



            //nausnice
            //puzetkove
            'Eternal Bloom' => [
                'nausnice/puzetkove/01_zeny_zlato_diamant.png',
                'nausnice/puzetkove/01_zeny_zlato_diamant - kópia.png',
            ],
            'Midnight Crown' => [
                'nausnice/puzetkove/02_zeny_titanium_zafir.png',
                'nausnice/puzetkove/02_zeny_titanium_zafir - kópia.png',
            ],
            'Scarlet Dream' => [
                'nausnice/puzetkove/03_zeny_striebro_diamant.png',
                'nausnice/puzetkove/03_zeny_striebro_diamant - kópia.png',
            ],
            'Luna Whisper' => [
                'nausnice/puzetkove/04_zeny_zlato_zafir.png',
                'nausnice/puzetkove/04_zeny_zlato_zafir - kópia.png',
            ],
            'Crimson Touch' => [
                'nausnice/puzetkove/05_zeny_titanium.png',
                'nausnice/puzetkove/05_zeny_titanium - kópia.png',
            ],
            'Velvet Line' => [
                'nausnice/puzetkove/06_zeny_striebro_diamant.png',
                'nausnice/puzetkove/06_zeny_striebro_diamant - kópia.png',
            ],
            'Twilight Flame' => [
                'nausnice/puzetkove/07_zeny_zlato_rubin.png',
                'nausnice/puzetkove/07_zeny_zlato_rubin - kópia.png',
            ],
            'Opal Glow' => [
                'nausnice/puzetkove/08_zeny_striebro_rubin.png',
                'nausnice/puzetkove/08_zeny_striebro_rubin - kópia.png',
            ],

            //kruhove
            'Golden Whispering' => [
                'nausnice/kruhove/01_zeny_zlato.png',
                'nausnice/kruhove/01_zeny_zlato - kópia.png',
            ],
            'Luna Touch' => [
                'nausnice/kruhove/02_zeny_zlato.png',
                'nausnice/kruhove/02_zeny_zlato - kópia.png',
            ],
            'Diamond Heartbeat' => [
                'nausnice/kruhove/03_zeny_striebro_diamant.png',
                'nausnice/kruhove/03_zeny_striebro_diamant - kópia.png',
            ],
            'Steel Harmony' => [
                'nausnice/kruhove/04_zeny_titanium.png',
                'nausnice/kruhove/04_zeny_titanium - kópia.png',
            ],
            'Titan Flow' => [
                'nausnice/kruhove/05_zeny_titanium.png',
                'nausnice/kruhove/05_zeny_titanium - kópia.png',
            ],
            'Zen Gold' => [
                'nausnice/kruhove/1001_unisex_zlato.png',
                'nausnice/kruhove/1001_unisex_zlato - kópia.png',
            ],
            'Echo Silver' => [
                'nausnice/kruhove/1002_unisex_striebro.png',
                'nausnice/kruhove/1002_unisex_striebro - kópia.png',
            ],

            //perlove
            'Pearl Fog' => [
                'nausnice/perlove/01_zeny_zlato.png',
                'nausnice/perlove/01_zeny_zlato - kópia.png',
            ],
            'Golden Pearl Drop' => [
                'nausnice/perlove/02_zeny_zlato.png',
                'nausnice/perlove/02_zeny_zlato - kópia.png',
            ],
            'Aurora Shell' => [
                'nausnice/perlove/03_zeny_striebro.png',
                'nausnice/perlove/03_zeny_striebro - kópia.png',
            ],
            'Silver Pearl Dot' => [
                'nausnice/perlove/04_zeny_striebro.png',
                'nausnice/perlove/04_zeny_striebro - kópia.png',
            ],
            'Ocean Light' => [
                'nausnice/perlove/05_zeny_striebro.png',
                'nausnice/perlove/05_zeny_striebro - kópia.png',
            ],
            'Pearl Harmony' => [
                'nausnice/perlove/06_zeny_titanium.png',
                'nausnice/perlove/06_zeny_titanium - kópia.png',
            ],
            'Titan Pearl Glow' => [
                'nausnice/perlove/07_zeny_zlato.png',
                'nausnice/perlove/07_zeny_zlato - kópia.png',
            ],

            //visiace
            'Ruby Elegance' => [
                'nausnice/visiace/01_zeny_zlato_rubin.png',
                'nausnice/visiace/01_zeny_zlato_rubin - kópia.png',
            ],
            'Crimson Glow' => [
                'nausnice/visiace/02_zeny_zlato_rubin.png',
                'nausnice/visiace/02_zeny_zlato_rubin - kópia.png',
            ],
            'Golden Radiation' => [
                'nausnice/visiace/03_zeny_striebro_zafir.png',
                'nausnice/visiace/03_zeny_striebro_zafir - kópia.png',
            ],
            'Diamond Spark' => [
                'nausnice/visiace/04_zeny_striebro.png',
                'nausnice/visiace/04_zeny_striebro - kópia.png',
            ],
            'Silver Glow' => [
                'nausnice/visiace/05_zeny_zlato_diamant.png',
                'nausnice/visiace/05_zeny_zlato_diamant - kópia.png',
            ],
            'Blue Radiance' => [
                'nausnice/visiace/06_striebro_zafir.png',
                'nausnice/visiace/06_striebro_zafir - kópia.png',
            ],
            'Sapphire Dream' => [
                'nausnice/visiace/07_zeny_zlato_diamant.png',
                'nausnice/visiace/07_zeny_zlato_diamant - kópia.png',
            ],
            'Ocean Blue' => [
                'nausnice/visiace/08_zeny_striebro_zafir.png',
                'nausnice/visiace/08_zeny_striebro_zafir - kópia.png',
            ],
            'Titanium Shine' => [
                'nausnice/visiace/09_zeny_titanium_diamant.png',
                'nausnice/visiace/09_zeny_titanium_diamant - kópia.png',
            ],



            //nahrdelnik
            //retiazkove
            'Golden Eternity' => [
                'nahrdelnik/retiazkove/01_zeny_zlato.png',
                'nahrdelnik/retiazkove/01_zeny_zlato - kópia.png',
            ],
            'Golden Strength' => [
                'nahrdelnik/retiazkove/101_muzi_zlato.png',
                'nahrdelnik/retiazkove/101_muzi_zlato - kópia.png',
            ],
            'Bold Gold' => [
                'nahrdelnik/retiazkove/102_muzi_zlato.png',
                'nahrdelnik/retiazkove/102_muzi_zlato - kópia.png',
            ],
            'Regal Gold' => [
                'nahrdelnik/retiazkove/103_muzi_zlato.png',
                'nahrdelnik/retiazkove/103_muzi_zlato - kópia.png',
            ],
            'Unisex Gold Chain' => [
                'nahrdelnik/retiazkove/1001_unisex_zlato.png',
                'nahrdelnik/retiazkove/1001_unisex_zlato - kópia.png',
            ],
            'Silver Minimalism' => [
                'nahrdelnik/retiazkove/1002_unisex_striebro.png',
                'nahrdelnik/retiazkove/1002_unisex_striebro - kópia.png',
            ],

            //s priveskom
            'Golden Essences' => [
                'nahrdelnik/s_priveskom/01_zeny_zlato.png',
                'nahrdelnik/s_priveskom/01_zeny_zlato - kópia.png',
            ],
            'Diamond Glowing' => [
                'nahrdelnik/s_priveskom/02_zeny_zlato.png',
                'nahrdelnik/s_priveskom/02_zeny_zlato - kópia.png',
            ],
            'Royal Sapphire Pendant' => [
                'nahrdelnik/s_priveskom/03_zeny_zlato_zafir.png',
                'nahrdelnik/s_priveskom/03_zeny_zlato_zafir - kópia.png',
            ],
            'Sapphire Radiance' => [
                'nahrdelnik/s_priveskom/04_zeny_zlato_zafir.png',
                'nahrdelnik/s_priveskom/04_zeny_zlato_zafir - kópia.png',
            ],
            'Titan Diamond Charm' => [
                'nahrdelnik/s_priveskom/05_zeny_titanium.png',
                'nahrdelnik/s_priveskom/05_zeny_titanium - kópia.png',
            ],
            'Silver Diamond Shine' => [
                'nahrdelnik/s_priveskom/06_zeny_striebro.png',
                'nahrdelnik/s_priveskom/06_zeny_striebro - kópia.png',
            ],

            //perlove
            'Golden Pearl Elegance' => [
                'nahrdelnik/perlove/01_zeny_zlato.png',
                'nahrdelnik/perlove/01_zeny_zlato - kópia.png',
            ],
            'Golden Radiance' => [
                'nahrdelnik/perlove/02_zeny_striebro.png',
                'nahrdelnik/perlove/02_zeny_striebro - kópia.png',
            ],
            'Silver Pearl Charm' => [
                'nahrdelnik/perlove/03_zeny_zlato.png',
                'nahrdelnik/perlove/03_zeny_zlato - kópia.png',
            ],

            //chokers
            'Glowing Silver' => [
                'nahrdelnik/chokers/01_zeny_striebro.png',
                'nahrdelnik/chokers/01_zeny_striebro - kópia.png',
            ],
            'Titan Touches' => [
                'nahrdelnik/chokers/1001_unisex_titanium.png',
                'nahrdelnik/chokers/1001_unisex_titanium - kópia.png',
            ],
            'Golden Essence' => [
                'nahrdelnik/chokers/1002_unisex_zlato.png',
                'nahrdelnik/chokers/1002_unisex_zlato - kópia.png',
            ],




            //naramok
            //pevne
            'Crystal Embrace' => [
                'naramok/pevne/01_zeny_striebro_diamant.png',
                'naramok/pevne/01_zeny_striebro_diamant - kópia.png',
            ],
            'Golden Radiant' => [
                'naramok/pevne/02_zeny_zlato_diamant.png',
                'naramok/pevne/02_zeny_zlato_diamant - kópia.png',
            ],
            'Steel Core' => [
                'naramok/pevne/101_muzi_titanium.png',
                'naramok/pevne/101_muzi_titanium - kópia.png',
            ],
            'Silver Edge' => [
                'naramok/pevne/102_muzi_striebro.png',
                'naramok/pevne/102_muzi_striebro - kópia.png',
            ],
            'Sapphire Line' => [
                'naramok/pevne/1001_unisex_titanium_zafir.png',
                'naramok/pevne/1001_unisex_titanium_zafir - kópia.png',
            ],
            'Silent Silver' => [
                'naramok/pevne/1002_unisex_striebro.png',
                'naramok/pevne/1002_unisex_striebro - kópia.png',
            ],

            //retiazkove
            'Golden Grace' => [
                'naramok/retiazkove/01_zeny_zlato.png',
                'naramok/retiazkove/01_zeny_zlato - kópia.png',
            ],
            'Silver Whisper' => [
                'naramok/retiazkove/02_zeny_striebro.png',
                'naramok/retiazkove/02_zeny_striebro - kópia.png',
            ],
            'Iron Path' => [
                'naramok/retiazkove/101_muzi_striebro.png',
                'naramok/retiazkove/101_muzi_striebro - kópia.png',
            ],
            'Crown Link' => [
                'naramok/retiazkove/102_muzi_zlato_diamant.png',
                'naramok/retiazkove/102_muzi_zlato_diamant - kópia.png',
            ],
            'Titan Thread' => [
                'naramok/retiazkove/1001_unisex_titanium.png',
                'naramok/retiazkove/1001_unisex_titanium - kópia.png',
            ],
            'Silent Bond' => [
                'naramok/retiazkove/1002_unisex_titanium.png',
                'naramok/retiazkove/1002_unisex_titanium - kópia.png',
            ],

            //kamienkove
            'Silver Pearl Touch' => [
                'naramok/kamienkove/01_zeny_striebro_perla.png',
                'naramok/kamienkove/01_zeny_striebro_perla - kópia.png',
            ],
            'Golden Shell Line' => [
                'naramok/kamienkove/02_zeny_zlato_perla.png',
                'naramok/kamienkove/02_zeny_zlato_perla - kópia.png',
            ],
            'Titan Shadow' => [
                'naramok/kamienkove/101_muzi_titanium.png',
                'naramok/kamienkove/101_muzi_titanium - kópia.png',
            ],
            'Steel Drift' => [
                'naramok/kamienkove/102_muzi_titanium.png',
                'naramok/kamienkove/102_muzi_titanium - kópia.png',
            ],
            'Moonlit Pearl' => [
                'naramok/kamienkove/103_muzi_striebro_perla.png',
                'naramok/kamienkove/103_muzi_striebro_perla - kópia.png',
            ],
            'Auric Line' => [
                'naramok/kamienkove/1001_unisex_zlato.png',
                'naramok/kamienkove/1001_unisex_zlato - kópia.png',
            ],
            'Sapphire Halo' => [
                'naramok/kamienkove/1002_unisex_striebro_zafir.png',
                'naramok/kamienkove/1002_unisex_striebro_zafir - kópia.png',
            ],






            //kolekcie
            //lady of elegance
            'Golden Mirror' => [
                'kolekcie/lady_of_elegance/01_zeny_zlato.png',
                'kolekcie/lady_of_elegance/01_zeny_zlato - kópia.png',
            ],
            'Diamond Aurora' => [
                'kolekcie/lady_of_elegance/02_zeny_striebro_zafir.png',
                'kolekcie/lady_of_elegance/02_zeny_striebro_zafir - kópia.png',
            ],
            'Silver Dusk' => [
                'kolekcie/lady_of_elegance/03_zeny_titanium_perla.png',
                'kolekcie/lady_of_elegance/03_zeny_titanium_perla - kópia.png',
            ],
            'Sapphire Mist' => [
                'kolekcie/lady_of_elegance/04_zeny_striebro_diamant.png',
                'kolekcie/lady_of_elegance/04_zeny_striebro_diamant - kópia.png',
            ],
            'Pearl Ember' => [
                'kolekcie/lady_of_elegance/05_zeny_zlato_diamant.png',
                'kolekcie/lady_of_elegance/05_zeny_zlato_diamant - kópia.png',
            ],

            //signature of nature
            'Golden Blossom' => [
                'kolekcie/signature_of_nature/01_zeny_zlato.png',
                'kolekcie/signature_of_nature/01_zeny_zlato - kópia.png',
            ],
            'Golden Horizon' => [
                'kolekcie/signature_of_nature/02_zeny_zlato.png',
                'kolekcie/signature_of_nature/02_zeny_zlato - kópia.png',
            ],
            'Golden Serenade' => [
                'kolekcie/signature_of_nature/03_zeny_zlato.png',
                'kolekcie/signature_of_nature/03_zeny_zlato - kópia.png',
            ],
            'Golden Mirage' => [
                'kolekcie/signature_of_nature/04_zeny_zlato.png',
                'kolekcie/signature_of_nature/04_zeny_zlato - kópia.png',
            ],
            'Golden Whisper' => [
                'kolekcie/signature_of_nature/05_zeny_zlato.png',
                'kolekcie/signature_of_nature/05_zeny_zlato - kópia.png',
            ],

            //tiara
            'Diamond Radiance' => [
                'kolekcie/tiara/01_zeny_silver_diamant.png',
                'kolekcie/tiara/01_zeny_silver_diamant - kópia.png',
            ],
            'Silver Grace' => [
                'kolekcie/tiara/02_zeny_zlato_diamant.png',
                'kolekcie/tiara/02_zeny_zlato_diamant - kópia.png',
            ],
            'Twilight Sparkle' => [
                'kolekcie/tiara/03_zeny_striebro_rubin.png',
                'kolekcie/tiara/03_zeny_striebro_rubin - kópia.png',
            ],
            'Crimson Dream' => [
                'kolekcie/tiara/04_zeny_striebro_diamant.png',
                'kolekcie/tiara/04_zeny_striebro_diamant - kópia.png',
            ],
            'Blue Serenity' => [
                'kolekcie/tiara/05_zeny_titanium_zafir.png',
                'kolekcie/tiara/05_zeny_titanium_zafir - kópia.png',
            ],

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
