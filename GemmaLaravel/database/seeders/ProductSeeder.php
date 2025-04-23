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
        $data = [
            'Prstene' => [
                'Jednoduché' => [
                    [
                        'name' => 'Aurora Shine',
                        'description' => 'Elegantný zlatý prsteň s jemným leskom a čistými líniami. Vhodný na každodenné nosenie aj špeciálne príležitosti.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 7,
                        'price' => 820,
                    ],
                    [
                        'name' => 'Ruby Blossom',
                        'description' => 'Zlatý prsteň s romantickým nádychom a klasickým tvarom. Pôsobí jemne a zároveň nadčasovo.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 3,
                        'price' => 640,
                    ],
                    [
                        'name' => 'Sapphire Grace',
                        'description' => 'Zlatý prsteň s decentnými detailmi, ktoré podčiarkujú ženskosť. Ideálny ako darček pre výnimočnú osobu.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 6,
                        'price' => 710,
                    ],
                    [
                        'name' => 'Pearl Whisper',
                        'description' => 'Jemný zlatý prsteň so sofistikovaným dizajnom. Dokonale ladí s elegantným štýlom obliekania.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 2,
                        'price' => 580,
                    ],
                    [
                        'name' => 'Golden Noble',
                        'description' => 'Pánsky zlatý prsteň s dôrazom na luxus a jednoduchosť. Doplňuje moderný aj klasický šatník.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 5,
                        'price' => 910,
                    ],
                    [
                        'name' => 'Rubin Lord',
                        'description' => 'Masívny zlatý prsteň s výrazným pánskym charakterom. Výborne sa hodí k formálnym aj voľnočasovým outfitom.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 1,
                        'price' => 760,
                    ],
                    [
                        'name' => 'Ocean Crown',
                        'description' => 'Luxusný zlatý prsteň pre mužov s citom pre detail. Je výnimočný svojím spracovaním a štýlom.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 10,
                        'price' => 850,
                    ],
                    [
                        'name' => 'Silver Titan',
                        'description' => 'Moderný strieborný prsteň s čistým dizajnom. Skvelo dopĺňa každodenné aj večerné outfity.',
                        'material' => 'striebro',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 4,
                        'price' => 420,
                    ],
                    [
                        'name' => 'Crimson Edge',
                        'description' => 'Titanový prsteň s výraznou hranou a robustným vzhľadom. Ideálny pre mužov, ktorí majú radi originálny dizajn.',
                        'material' => 'titanium',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 9,
                        'price' => 600,
                    ],
                    [
                        'name' => 'Midnight Star',
                        'description' => 'Štýlový titanový prsteň s tmavým odtieňom. Dodáva ruke tajomný a elegantný nádych.',
                        'material' => 'titanium',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 3,
                        'price' => 550,
                    ],
                    [
                        'name' => 'Pearl Touch',
                        'description' => 'Unisex strieborný prsteň s decentným leskom. Vhodný pre každého, kto obľubuje minimalistické šperky.',
                        'material' => 'striebro',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 6,
                        'price' => 330,
                    ],
                    [
                        'name' => 'Ruby Zen',
                        'description' => 'Minimalistický prsteň so zameraním na symetriu a čistotu tvaru. Skvelý doplnok pre každodenné nosenie.',
                        'material' => 'striebro',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 2,
                        'price' => 290,
                    ],
                    [
                        'name' => 'Steel Moon',
                        'description' => 'Titanový prsteň s industriálnym nádychom. Ideálny pre tých, ktorí majú radi netradičný dizajn.',
                        'material' => 'titanium',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 8,
                        'price' => 470,
                    ],
                    [
                        'name' => 'Diamond Pulse',
                        'description' => 'Univerzálny titanový prsteň s moderným vzhľadom. Vhodný na každodenné nosenie i výnimočné udalosti.',
                        'material' => 'titanium',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 1,
                        'price' => 510,
                    ],
                ],

                'Vrstviteľné' => [
                    [
                        'name' => 'Golden Layers',
                        'description' => 'Jemný zlatý prsteň navrhnutý pre vrstvenie. Jeho tenké línie pôsobia elegantne a nenápadne.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 4,
                        'price' => 490,
                    ],
                    [
                        'name' => 'Delicate Glow',
                        'description' => 'Minimalistický zlatý prsteň ideálny na kombinovanie s ďalšími kúskami. Dodáva ruke žiarivý nádych bez zbytočnej nápadnosti.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 5,
                        'price' => 510,
                    ],
                    [
                        'name' => 'Soft Glimmer',
                        'description' => 'Tenký zlatý prsteň so súčasným dizajnom pre ženy, ktoré preferujú jemný štýl. Výborne vynikne v kombináciách.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 6,
                        'price' => 530,
                    ],


                    [
                        'name' => 'Silver Line',
                        'description' => 'Elegantný strieborný prsteň vhodný pre vrstvenie. Zaujme svojou čistou geometriou a univerzálnym využitím.',
                        'material' => 'striebro',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 7,
                        'price' => 270,
                    ],
                    [
                        'name' => 'Moonlight Band',
                        'description' => 'Jednoduchý prsteň zo striebra, ktorý skvelo doplní akýkoľvek outfit. Vrstviť sa dá s inými šperkami alebo nosiť samostatne.',
                        'material' => 'striebro',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 3,
                        'price' => 250,
                    ],
                    [
                        'name' => 'Frosted Touch',
                        'description' => 'Prsteň s matným efektom, ktorý dodáva ruke jemný lesk. Strieborný povrch je ideálny na každodenné vrstvenie.',
                        'material' => 'striebro',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 2,
                        'price' => 280,
                    ],


                    [
                        'name' => 'Titan Mist',
                        'description' => 'Ultratenký titanový prsteň pre moderné ženy. Vrstvený vzhľad vytvára jedinečný a futuristický štýl.',
                        'material' => 'titanium',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 4,
                        'price' => 320,
                    ],


                    [
                        'name' => 'Iron Layer',
                        'description' => 'Robustný titanový prsteň pre pánov, ktorí majú radi silný dizajn. Ideálny na vrstvenie so širšími kúskami.',
                        'material' => 'titanium',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 3,
                        'price' => 450,
                    ],
                    [
                        'name' => 'Steel Shadow',
                        'description' => 'Elegantný a zároveň pevný prsteň z titanu. Pôsobí decentne a v kombináciách vytvára zaujímavý kontrast.',
                        'material' => 'titanium',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 5,
                        'price' => 470,
                    ],


                    [
                        'name' => 'Golden Flow',
                        'description' => 'Unisex zlatý prsteň s hladkým povrchom, vhodný na vrstvenie. Jeho univerzálny tvar z neho robí nadčasový doplnok.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 4,
                        'price' => 560,
                    ],
                    [
                        'name' => 'Layer Beam',
                        'description' => 'Zlatý prsteň pre každého, kto má rád nenápadnú eleganciu. Skvelo sa hodí k iným zlatým kúskom.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 3,
                        'price' => 540,
                    ],


                    [
                        'name' => 'Silver Loop',
                        'description' => 'Jednoduchý strieborný prsteň s dôrazom na funkčnosť. Výborne sa kombinuje s inými minimalistickými šperkami.',
                        'material' => 'striebro',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 6,
                        'price' => 310,
                    ],

                ],

                'Obrúčky' => [
                    [
                        'name' => 'Eternal Bond',
                        'description' => 'Klasická zlatá obrúčka, ktorá symbolizuje večnú lásku. Je navrhnutá tak, aby poskytovala nadčasovú krásu a pohodlie.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 5,
                        'price' => 700,
                    ],
                    [
                        'name' => 'Golden Unity',
                        'description' => 'Elegantná zlatá obrúčka s jemným leskom, ktorá doplní každý svadobný deň. Vhodná pre každú ženu, ktorá hľadá dokonalý symbol spojenia.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 4,
                        'price' => 760,
                    ],


                    [
                        'name' => 'Silver Harmony',
                        'description' => 'Tenká strieborná obrúčka s čistým dizajnom. Ideálna pre tých, ktorí preferujú jemný a minimalistický štýl.',
                        'material' => 'striebro',
                        'stone_color' => null,
                        'purpose' => 'zeny',
                        'quantity' => 3,
                        'price' => 390,
                    ],


                    [
                        'name' => 'Golden Legacy',
                        'description' => 'Pánska zlatá obrúčka, ktorá sa vyznačuje elegantným a silným dizajnom. Je perfektným doplnkom pre náročného muža.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 7,
                        'price' => 850,
                    ],
                    [
                        'name' => 'Noble Ring',
                        'description' => 'Široká zlatá obrúčka pre mužov, ktorí hľadajú výrazný a luxusný vzhľad. Je ideálna pre každodenné nosenie aj špeciálne príležitosti.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 8,
                        'price' => 920,
                    ],
                    [
                        'name' => 'Regal Gold',
                        'description' => 'Masívna obrúčka v zlatom prevedení, ktorá dodá každému mužovi prestížny vzhľad. Je to skvelý symbol večnej lásky a záväzku.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'muzi',
                        'quantity' => 5,
                        'price' => 980,
                    ],


                    [
                        'name' => 'Pure Circle',
                        'description' => 'Kruhová zlatá obrúčka, ktorá zaujme svojou čistotou a jednoduchým tvarom. Vhodná pre každého, kto hľadá nadčasovú eleganciu.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 10,
                        'price' => 770,
                    ],
                    [
                        'name' => 'Golden Harmony',
                        'description' => 'Unisex zlatá obrúčka, ktorá spája eleganciu a pohodlie. Je ideálna pre každodenné nosenie a dopĺňa každú osobnosť.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 6,
                        'price' => 690,
                    ],
                    [
                        'name' => 'Twilight Ring',
                        'description' => 'Obrúčka v zlate s jemným povrchom, ktorá je vhodná pre každého, kto chce niečo jednoduché a vkusné. Kombinuje moderný a tradičný dizajn.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 9,
                        'price' => 740,
                    ],
                    [
                        'name' => 'Elegant Loop',
                        'description' => 'Jemná zlatá obrúčka s hladkým povrchom, ktorá ladí s akýmkoľvek štýlom. Ideálna pre tých, ktorí si cenia jednoduchú krásu.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 7,
                        'price' => 710,
                    ],
                    [
                        'name' => 'Golden Touch',
                        'description' => 'Elegantná obrúčka v zlatom prevedení, ktorá dopĺňa každú ruku s eleganciou. Je skvelým symbolom vzťahu a oddanosti.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 8,
                        'price' => 800,
                    ],
                    [
                        'name' => 'Luminous Ring',
                        'description' => 'Zlatá obrúčka s jemným leskom, ideálna na každodenné nosenie. Hodí sa pre každého, kto má rád nadčasové šperky.',
                        'material' => 'zlato',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 11,
                        'price' => 850,
                    ],


                    [
                        'name' => 'Silver Eternity',
                        'description' => 'Tenká strieborná obrúčka, ktorá je ideálna pre minimalistov. Vyniká jednoduchosťou a prispôsobivosťou k iným šperkom.',
                        'material' => 'striebro',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 5,
                        'price' => 350,
                    ],


                    [
                        'name' => 'Titanium Balance',
                        'description' => 'Titanová obrúčka s elegantným dizajnom, ktorá je odolná a zároveň štýlová. Skvele sa hodí pre tých, ktorí preferujú odolnosť a moderný vzhľad.',
                        'material' => 'titanium',
                        'stone_color' => null,
                        'purpose' => 'unisex',
                        'quantity' => 3,
                        'price' => 480,
                    ],
                ],

                'S kamienkom' => [
                        [
                            'name' => 'Golden Diamond Radiance',
                            'description' => 'Elegantný zlatý prsteň s diamantovým kameňom, ktorý vytvára nádherný lesk. Ideálny na špeciálne príležitosti, kde si chcete pritiahnúť pozornosť.',
                            'material' => 'zlato',
                            'stone_color' => 'diamant',
                            'purpose' => 'zeny',
                            'quantity' => 1,
                            'price' => 1200,
                        ],
                        [
                            'name' => 'Golden Diamond Glow',
                            'description' => 'Zlatý prsteň s brilantným diamantovým kameňom, ktorý vyžaruje luxus. Tento prsteň je ideálny pre tých, ktorí si cení eleganciu a štýl.',
                            'material' => 'zlato',
                            'stone_color' => 'diamant',
                            'purpose' => 'zeny',
                            'quantity' => 1,
                            'price' => 1250,
                        ],
                        [
                            'name' => 'Golden Diamond Sparkle',
                            'description' => 'Luxusný zlatý prsteň s diamantovým detailom, ktorý podčiarkuje sofistikovaný vzhľad. Skvele sa hodí k večerným šatám a špeciálnym udalostiam.',
                            'material' => 'zlato',
                            'stone_color' => 'diamant',
                            'purpose' => 'zeny',
                            'quantity' => 1,
                            'price' => 1300,
                        ],
                        [
                            'name' => 'Golden Diamond Shine',
                            'description' => 'Zlatý prsteň s diamantovým kameňom, ktorý oslní svojím vzhľadom. Tento prsteň je perfektný darček pre výnimočnú osobu.',
                            'material' => 'zlato',
                            'stone_color' => 'diamant',
                            'purpose' => 'zeny',
                            'quantity' => 1,
                            'price' => 1400,
                        ],

                        [
                            'name' => 'Ruby Golden Desire',
                            'description' => 'Zlatý prsteň s rubínovým kameňom, ktorý dodáva prsteňu vášnivý a elegantný vzhľad. Skvele sa hodí na romantické príležitosti a večierky.',
                            'material' => 'zlato',
                            'stone_color' => 'rubin',
                            'purpose' => 'zeny',
                            'quantity' => 1,
                            'price' => 1100,
                        ],
                        [
                            'name' => 'Ruby Golden Charm',
                            'description' => 'Luxusný prsteň s rubínovým kameňom, ktorý zdôrazňuje krásu a vášeň. Tento prsteň je ideálny na romantické a výnimočné príležitosti.',
                            'material' => 'zlato',
                            'stone_color' => 'rubin',
                            'purpose' => 'zeny',
                            'quantity' => 1,
                            'price' => 1150,
                        ],

                        [
                            'name' => 'Sapphire Golden Charm',
                            'description' => 'Zlatý prsteň so zafírom, ktorý je znakom čistoty a krásy. Tento prsteň je vhodný na každodenné nosenie aj špeciálne príležitosti.',
                            'material' => 'zlato',
                            'stone_color' => 'zafir',
                            'purpose' => 'zeny',
                            'quantity' => 1,
                            'price' => 1250,
                        ],
                        [
                            'name' => 'Sapphire Golden Desire',
                            'description' => 'Zlatý prsteň so zafírom, ktorý vyžaruje sofistikovanosť. Ideálny na každodenné nosenie aj špeciálne príležitosti.',
                            'material' => 'zlato',
                            'stone_color' => 'zafir',
                            'purpose' => 'zeny',
                            'quantity' => 1,
                            'price' => 1300,
                        ],

                        [
                            'name' => 'Silver Diamond Glow',
                            'description' => 'Elegantný strieborný prsteň s diamantovým kameňom, ktorý vyžaruje jemný lesk. Ideálny na každodenné nosenie a každú príležitosť.',
                            'material' => 'striebro',
                            'stone_color' => 'diamant',
                            'purpose' => 'zeny',
                            'quantity' => 1,
                            'price' => 650,
                        ],

                        [
                            'name' => 'Sapphire Golden Brilliance',
                            'description' => 'Pánsky zlatý prsteň so zafírom, ktorý je dokonalým symbolom elegancie a odvahy. Tento prsteň je ideálny pre mužov, ktorí preferujú štýlové doplnky.',
                            'material' => 'zlato',
                            'stone_color' => 'zafir',
                            'purpose' => 'muzi',
                            'quantity' => 1,
                            'price' => 1400,
                        ],

                        [
                            'name' => 'Sapphire Silver Legend',
                            'description' => 'Strieborný prsteň so zafírom, ktorý je ideálny pre mužov, ktorí preferujú nadčasovú eleganciu. Tento prsteň je vhodný na formálne aj neformálne príležitosti.',
                            'material' => 'striebro',
                            'stone_color' => 'zafir',
                            'purpose' => 'muzi',
                            'quantity' => 1,
                            'price' => 600,
                        ],

                        [
                            'name' => 'Crimson Titanium Ruby',
                            'description' => 'Titanový prsteň s rubínovým kameňom, ktorý dodáva šperku silný a odvážny charakter. Skvelý doplnok pre tých, ktorí sa neboja vyniknúť.',
                            'material' => 'titanium',
                            'stone_color' => 'rubin',
                            'purpose' => 'muzi',
                            'quantity' => 1,
                            'price' => 750,
                        ],

                        [
                            'name' => 'Sapphire Gold Light',
                            'description' => 'Unisex zlatý prsteň so zafírom, ktorý vytvára nádherný vzhľad. Tento prsteň je ideálny na každý deň a pre všetky príležitosti.',
                            'material' => 'zlato',
                            'stone_color' => 'zafir',
                            'purpose' => 'unisex',
                            'quantity' => 1,
                            'price' => 1250,
                        ],
                        [
                            'name' => 'Sapphire Gold Charm',
                            'description' => 'Elegantný zlatý prsteň so zafírom, vhodný na špeciálne príležitosti. Tento prsteň je dokonalým doplnkom pre každý elegantný outfit.',
                            'material' => 'zlato',
                            'stone_color' => 'zafir',
                            'purpose' => 'unisex',
                            'quantity' => 1,
                            'price' => 1300,
                        ],

                        [
                            'name' => 'Silver Diamond Essence',
                            'description' => 'Strieborný prsteň s diamantovým detailom, ktorý je skvelý pre každodenné nosenie. Tento prsteň je ideálny pre tých, ktorí hľadajú jednoduchý, ale elegantný kúsok.',
                            'material' => 'striebro',
                            'stone_color' => 'diamant',
                            'purpose' => 'unisex',
                            'quantity' => 1,
                            'price' => 550,
                        ],
                        [
                            'name' => 'Sapphire Silver Wonder',
                            'description' => 'Strieborný prsteň so zafírom, ideálny pre tých, ktorí hľadajú niečo elegantné a nadčasové. Tento prsteň doplní každý outfit a zvýrazní váš štýl.',
                            'material' => 'striebro',
                            'stone_color' => 'zafir',
                            'purpose' => 'unisex',
                            'quantity' => 1,
                            'price' => 580,
                        ],
                        [
                            'name' => 'Sapphire Silver Essence',
                            'description' => 'Strieborný prsteň so zafírom, ktorý je perfektným doplnkom k akémukoľvek outfitu. Tento prsteň sa hodí na každú príležitosť, či už formálnu alebo neformálnu.',
                            'material' => 'striebro',
                            'stone_color' => 'zafir',
                            'purpose' => 'unisex',
                            'quantity' => 1,
                            'price' => 600,
                        ],

                        [
                            'name' => 'Titanium Pearl Serenity',
                            'description' => 'Titanový prsteň s perlou, ideálny pre tých, ktorí preferujú minimalistický, no elegantný vzhľad. Tento prsteň je dokonalý doplnok k každodennému štýlu.',
                            'material' => 'titanium',
                            'stone_color' => 'perla',
                            'purpose' => 'unisex',
                            'quantity' => 1,
                            'price' => 350,
                        ],
                ],
            ],
            'Náušnice' => [
                'Perlové' => [
                    [
                        'name' => 'Perlové náušnice',
                        'description' => 'Elegantné náušnice s perlami',
                        'material' => 'zlato',
                        'stone_color' => 'perla',
                        'purpose' => 'zeny',
                        'quantity' => 6,
                        'price' => 650,
                    ],
                ],
            ],
        ];

        foreach ($data as $categoryName => $subcategories) {
            $category = Category::firstOrCreate(['name' => $categoryName]);

            foreach ($subcategories as $subcategoryName => $products) {
                $subcategory = Subcategory::firstOrCreate([
                    'name' => $subcategoryName,
                    'category_id' => $category->id,
                ]);

                foreach ($products as $productData) {
                    Product::create(array_merge($productData, [
                        'subcategory_id' => $subcategory->id,
                    ]));
                }
            }
        }
    }
}
