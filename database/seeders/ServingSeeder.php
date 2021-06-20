<?php

namespace Database\Seeders;

use App\Models\Serving;
use Illuminate\Database\Seeder;

class ServingSeeder extends Seeder {

    public function run()
    {
        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 1,
            'name' => 'Soep Ling Fa',
            'price' => 3.8,
            'category_id' => 1,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 2,
            'name' => 'Kippensoep',
            'price' => 2.9,
            'category_id' => 1,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 3,
            'name' => 'Tomatensoep',
            'price' => 2.9,
            'category_id' => 1,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 4,
            'name' => 'Haaienvinnensoep',
            'price' => 3.1,
            'category_id' => 1,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 5,
            'name' => 'Champignonsoep',
            'price' => 3.3,
            'category_id' => 1,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 6,
            'name' => 'Pekingsoep',
            'price' => 3.8,
            'category_id' => 1,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 7,
            'name' => 'Wan Tan Soep',
            'price' => 4.3,
            'category_id' => 1,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 8,
            'name' => 'Chinese Champignonsoep',
            'price' => 4.1,
            'category_id' => 1,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 10,
            'name' => 'Loempia Ling Fa',
            'price' => 6.2,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => 'Met atjar, ananas en pindasaus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 11,
            'name' => 'Loempia Compleet',
            'price' => 6.2,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => 'Met gesmoord rundvlees en pikante saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 12,
            'name' => 'Loempia met Kip',
            'price' => 3.9,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 13,
            'name' => 'Loempia',
            'price' => 3.8,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 14,
            'name' => 'Chinese mini loempia',
            'price' => 4.9,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => '4 stuks'
        ]);

        Serving::create([
            'version' => 'A',
            'spice' => rand(0, 3),
            'number' => 14,
            'name' => 'Vegetarische mini loempia',
            'price' => 4.9,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => '12 stuks'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 15,
            'name' => 'Kroepoek',
            'price' => 2.5,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'A',
            'spice' => rand(0, 3),
            'number' => 15,
            'name' => 'Casave Kroepoek',
            'price' => 2.7,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 16,
            'name' => 'Pangsit Goreng',
            'price' => 3.9,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => '7 stuks'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 17,
            'name' => 'Pisang Goreng',
            'price' => 3.4,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => '5 stuks'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 18,
            'name' => 'Chinese Dim Sum',
            'price' => 5.4,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => 'Mini loempia, kerry ko, pangsit goreng, garnalenpasteitje'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 19,
            'name' => 'Saté Babi',
            'price' => 5.4,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => '4 stuks'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 20,
            'name' => 'Saté Ajam',
            'price' => 5.4,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => '4 stuks'
        ]);

        Serving::create([
            'version' => 'A',
            'spice' => rand(0, 3),
            'number' => 20,
            'name' => 'Saté Garnalen',
            'price' => 9.9,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => '3 stuks'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 21,
            'name' => 'Fong Mei Ha',
            'price' => 8.1,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => 'Krokant gepaneerd garnalen, 4 stuks'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 22,
            'name' => 'Patat',
            'price' => 2.3,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 23,
            'name' => 'Tsa Siu Mai',
            'price' => 3.5,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => 'Gebakken vleespasteitje, 4 stuks'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 24,
            'name' => 'Atjar',
            'price' => 3,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 25,
            'name' => 'Witte Rijst',
            'price' => 3,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 26,
            'name' => 'Grote Pindasaus',
            'price' => 3.9,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 27,
            'name' => 'Kleine Pindasaus',
            'price' => 2.3,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 28,
            'name' => 'Kippenpootje',
            'price' => 2.3,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 29,
            'name' => 'Halve Kip',
            'price' => 6,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'H',
            'spice' => rand(0, 3),
            'number' => 29,
            'name' => 'Kroket',
            'price' => 1.4,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'G',
            'spice' => rand(0, 3),
            'number' => 29,
            'name' => 'Frikandel',
            'price' => 1.4,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'H',
            'spice' => rand(0, 3),
            'number' => 180,
            'name' => 'Kleine Sambal',
            'price' => 2.5,
            'category_id' => 2,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 30,
            'name' => 'Bami of Nasi Goreng Ling Fa',
            'price' => 14.3,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 31,
            'name' => 'Bami of Nasi Goreng met ei',
            'price' => 5,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 32,
            'name' => 'Bami of Nasi Goreng speciaal',
            'price' => 8.5,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 33,
            'name' => 'Bami of Nasi Goreng met saté',
            'price' => 8.5,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => '3 stuks'
        ]);

        Serving::create([
            'version' => 'A',
            'spice' => rand(0, 3),
            'number' => 34,
            'name' => 'Nasi Yeung Chow',
            'price' => 11.9,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => 'Met garnaaltjes en Cha Sieuw-vlees'
        ]);

        Serving::create([
            'version' => 'B',
            'spice' => rand(0, 3),
            'number' => 34,
            'name' => 'Bami Yeung Chow',
            'price' => 11.9,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => 'Met garnaaltjes en Cha Sieuw-vlees'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 39,
            'name' => 'Nasi Yeung Chow',
            'price' => 35,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 36,
            'name' => 'Bami of Nasi Malay',
            'price' => 9.3,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 37,
            'name' => 'Bami of Nasi met kipfilet',
            'price' => 9.3,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 38,
            'name' => 'Bami of Nasi met varkensvlees',
            'price' => 9.3,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 39,
            'name' => 'Bami of Nasi met garnalen',
            'price' => 14.3,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 40,
            'name' => 'Bami of Nasi met ossenhaas',
            'price' => 15.3,
            'category_id' => 3,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 41,
            'name' => 'Babi Pangang, Foe Yong Hani en saté',
            'price' => 15.8,
            'category_id' => 4,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 46,
            'name' => 'Babi Pangang, Tjap Tjoy en saté',
            'price' => 15.8,
            'category_id' => 4,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 42,
            'name' => 'Babi Pangang, Koe Loe Yuk en saté',
            'price' => 15.8,
            'category_id' => 4,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 43,
            'name' => 'Babi Pangang, Tau Sie Kai en saté',
            'price' => 16.5,
            'category_id' => 4,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 44,
            'name' => 'Koe Loe Yuk, Foe Yong Hai en saté',
            'price' => 15.8,
            'category_id' => 4,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 45,
            'name' => 'Koe Loe Yuk, Tjap Tjoy en saté',
            'price' => 15.8,
            'category_id' => 4,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 46,
            'name' => 'Foe Yong Hai, Tjap Tjoy en saté',
            'price' => 15.8,
            'category_id' => 4,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 47,
            'name' => 'Foe Yong Hai, Kip Kerrie en Saté',
            'price' => 16.5,
            'category_id' => 4,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 50,
            'name' => 'Mihoen Ling Fa',
            'price' => 16.4,
            'category_id' =>5,
            'offer_id' => rand(1, 9),
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 51,
            'name' => 'Mihoen met varkensvlees',
            'price' => 9.3,
            'category_id' => 5,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 52,
            'name' => 'Mihoen met kipfilet',
            'price' => 11.4,
            'category_id' => 5,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 53,
            'name' => 'Mihoen met ossenhaas',
            'price' => 16.4,
            'category_id' => 5,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 54,
            'name' => 'Mihoen met garnalen',
            'price' => 15.3,
            'category_id' => 5,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 55,
            'name' => 'Mihoen Singapore-style',
            'price' => 11.9,
            'category_id' => 5,
            'offer_id' => rand(1, 9),
            'description' => 'Met kleine garnaaltjes en Cha Sieuw-vlees en kerrie poeder'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 56,
            'name' => 'Mihoen met Cha Sieuw vlees',
            'price' => 11.2,
            'category_id' => 5,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 57,
            'name' => 'Chinese Bami Ling Fa',
            'price' => 16.9,
            'category_id' => 6,
            'offer_id' => rand(1, 9),
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 58,
            'name' => 'Chinese Bami met varkensvlees',
            'price' => 11.1,
            'category_id' => 6,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'A',
            'spice' => rand(0, 3),
            'number' => 58,
            'name' => 'Chinese Bami met kipfilet',
            'price' => 11.2,
            'category_id' => 6,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'B',
            'spice' => rand(0, 3),
            'number' => 58,
            'name' => 'Chinese Bami met Cha Sieuw-vlees',
            'price' => 12.2,
            'category_id' => 6,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'C',
            'spice' => rand(0, 3),
            'number' => 58,
            'name' => 'Chinese Bami met garnalen',
            'price' => 15.8,
            'category_id' => 6,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'D',
            'spice' => rand(0, 3),
            'number' => 58,
            'name' => 'Chinese Bami met ossenhaas',
            'price' => 17.4,
            'category_id' => 6,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'M',
            'spice' => rand(0, 3),
            'number' => 1,
            'name' => 'Bami of Nasi Rames Ling Fa',
            'price' => 15.3,
            'category_id' => 7,
            'offer_id' => rand(1, 9),
            'description' => 'Babi Pangan, Foe Yong Hai, Daging Roedjak, Atjar en kippenpootje'
        ]);

        Serving::create([
            'version' => 'M',
            'spice' => rand(0, 3),
            'number' => 2,
            'name' => 'Bami of Nasi Rames',
            'price' => 8.8,
            'category_id' => 7,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'M',
            'spice' => rand(0, 3),
            'number' => 3,
            'name' => 'Bami of Nasi Rames speciaal',
            'price' => 11.8,
            'category_id' => 7,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'M',
            'spice' => rand(0, 3),
            'number' => 4,
            'name' => 'Gado Gado',
            'price' => 7.6,
            'category_id' => 7,
            'offer_id' => rand(1, 9),
            'description' => 'Met wittte rijst'
        ]);

        Serving::create([
            'version' => 'M',
            'spice' => rand(0, 3),
            'number' => 5,
            'name' => 'Daging Smoor',
            'price' => 13.3,
            'category_id' => 7,
            'offer_id' => rand(1, 9),
            'description' => 'Met wittte rijst'
        ]);

        Serving::create([
            'version' => 'M',
            'spice' => rand(0, 3),
            'number' => 6,
            'name' => 'Daging Roedjak',
            'price' => 13.3,
            'category_id' => 7,
            'offer_id' => rand(1, 9),
            'description' => 'Met wittte rijst'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 59,
            'name' => 'Foe Yong Hai Ling Fa',
            'price' => 16.4,
            'category_id' => 8,
            'offer_id' => rand(1, 9),
            'description' => 'Ossenhaas, garnalen en kipfilet'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 60,
            'name' => 'Foe Yong Hai met varkensvlees',
            'price' => 8.8,
            'category_id' => 8,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 61,
            'name' => 'Foe Yong Hai met kipfilet',
            'price' => 9.2,
            'category_id' => 8,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 62,
            'name' => 'Foe Yong Hai met garnalen',
            'price' => 15.3,
            'category_id' => 8,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 63,
            'name' => 'Foe Yong Hai met krab',
            'price' => 15.3,
            'category_id' => 8,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'A',
            'spice' => rand(0, 3),
            'number' => 63,
            'name' => 'Foe Yong Hai met Cha Sieuw Vlees',
            'price' => 11.2,
            'category_id' => 8,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'B',
            'spice' => rand(0, 3),
            'number' => 63,
            'name' => 'Foe Yong Hai met ossenhaas',
            'price' => 16.4,
            'category_id' => 8,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 64,
            'name' => 'Tjap Tjoy Ling Fa',
            'price' => 16.4,
            'category_id' => 9,
            'offer_id' => rand(1, 9),
            'description' => 'Ossenhaas, garnalen en kipfilet'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 65,
            'name' => 'Tjap Tjoy met varkensvlees',
            'price' => 8.8,
            'category_id' => 9,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 66,
            'name' => 'Tjap Tjoy met kipfilet',
            'price' => 9.2,
            'category_id' => 9,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 67,
            'name' => 'Tjap Tjoy met ossenhaas',
            'price' => 16.4,
            'category_id' => 9,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 68,
            'name' => 'Tjap Tjoy met garnalen',
            'price' => 15.3,
            'category_id' => 9,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 70,
            'name' => 'Babi Pangang',
            'price' => 12.2,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 71,
            'name' => 'Babi Pangang in ketjapsaus',
            'price' => 12.3,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 72,
            'name' => 'Cha Sieuw',
            'price' => 13.3,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => 'Rood geroosterd varkensvlees'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 73,
            'name' => 'Cha Sieuw in pikante saus',
            'price' => 13.8,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 74,
            'name' => 'Geroosterde speenvarken',
            'price' => 13.8,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 75,
            'name' => 'Koe Loe Yuk',
            'price' => 11.9,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => 'Bolletjes vlees met zoetzure saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 76,
            'name' => 'Varkenshaas met kerriesaus',
            'price' => 11.9,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 77,
            'name' => 'Varkenshaas met ketjapsaus',
            'price' => 11.9,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 78,
            'name' => 'Varkenshaas met tomatensaus',
            'price' => 11.9,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'A',
            'spice' => rand(0, 3),
            'number' => 78,
            'name' => 'Varkenshaas met champignons in knoflooksaus',
            'price' => 11.9,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'B',
            'spice' => rand(0, 3),
            'number' => 78,
            'name' => 'Varkenshaas met Chinese champignons',
            'price' => 12.2,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 79,
            'name' => 'Varkenshaas met zwarte bonensaus',
            'price' => 12.2,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'A',
            'spice' => rand(0, 3),
            'number' => 79,
            'name' => 'Varkenshaas met verse ananas in zoetzure saus',
            'price' => 13.3,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'B',
            'spice' => rand(0, 3),
            'number' => 79,
            'name' => 'Yu Sian Yuk',
            'price' => 13.3,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => 'Varkenshaas met licht zoet pikante kruiden saus'
        ]);

        Serving::create([
            'version' => 'C',
            'spice' => rand(0, 3),
            'number' => 79,
            'name' => 'SzeChuan Yuk',
            'price' => 13.3,
            'category_id' => 10,
            'offer_id' => rand(1, 9),
            'description' => 'Varkenshaas met pittige kruiden saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 80,
            'name' => 'Ajam Pangang',
            'price' => 13,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 81,
            'name' => 'Ajam Pangang in ketjapsaus',
            'price' => 13,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 82,
            'name' => 'Koe Loe Kai',
            'price' => 13,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => 'Bolletjes kip met zoetzure saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 83,
            'name' => 'Kipfilet met kerriesaus',
            'price' => 13,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 84,
            'name' => 'Kipfilet met champignons in knoflooksaus',
            'price' => 13,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 85,
            'name' => 'Kipfilet met tomatensaus',
            'price' => 13,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 86,
            'name' => 'Kipfilet met ketjapsaus',
            'price' => 13,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 87,
            'name' => 'Kipfilet met broccoli in knoflooksaus',
            'price' => 13.3,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 88,
            'name' => 'Kipfilet met Chinese champignons',
            'price' => 13.3,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 89,
            'name' => 'Kipfilet met zwarte pepersaus',
            'price' => 13.3,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 90,
            'name' => 'Kipfilet met verse ananas in zoetzure saus',
            'price' => 13.3,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 91,
            'name' => 'Kipfilet met zwarte pepersaus',
            'price' => 13.3,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 92,
            'name' => 'Tjieuw Yem Kai',
            'price' => 13.3,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => 'Licht gebraden kipfilet met zout en peper'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 93,
            'name' => 'Yao Koe Kai',
            'price' => 13.3,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => 'Kipfilet met cashewnoten in licht pikante saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 94,
            'name' => 'Lychee Kai',
            'price' => 13.8,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => 'Licht gebraden kipfilet met lychee in zoetzure saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 95,
            'name' => 'Yu Sian Kai',
            'price' => 13.3,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => 'Kipfilet met licht zoet pikante kruidensaus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 96,
            'name' => 'Sze Chuan Kai',
            'price' => 13.8,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 97,
            'name' => 'Kung Bao Kai',
            'price' => 13.8,
            'category_id' => 11,
            'offer_id' => rand(1, 9),
            'description' => 'Kipfilet met cashewnoten in pittige saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 98,
            'name' => 'Garnalen met champignons in knoflooksaus',
            'price' => 15.9,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 99,
            'name' => 'Garnalen met tomatensaus',
            'price' => 15.9,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 100,
            'name' => 'Garnalen met ketjapsaus',
            'price' => 15.9,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 101,
            'name' => 'Garnalen met broccoli',
            'price' => 16.1,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 102,
            'name' => 'Garnalen met Chinese champignons',
            'price' => 16.1,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 103,
            'name' => 'Garnalen met kerriesaus',
            'price' => 16.1,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 104,
            'name' => 'Garnalen met zwarte bonensaus',
            'price' => 16.1,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 105,
            'name' => 'Garnalen met zwarte pepersaus',
            'price' => 16.1,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 106,
            'name' => 'Garnalen met chilisaus',
            'price' => 16.1,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 107,
            'name' => 'Yu Sian Haa',
            'price' => 16.1,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => 'Garnalen met licht zoet pikante kruidensaus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 108,
            'name' => 'Tjieuw Yem Haa',
            'price' => 16.1,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => 'Licht gebraden garnalen met zout en peper'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 109,
            'name' => 'Tja Tai Haa',
            'price' => 16.1,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => 'Krokant gebakken garnalen'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 110,
            'name' => 'Sze Chuan Haa',
            'price' => 16.4,
            'category_id' => 12,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 111,
            'name' => 'Ossenhaas met chanpignons in knoflooksaus',
            'price' => 16.9,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 112,
            'name' => 'Ossenhaas met tomatensaus',
            'price' => 16.9,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 113,
            'name' => 'Ossenhaas met ketjapsaus',
            'price' => 16.9,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 114,
            'name' => 'Ossenhaas met broccoli',
            'price' => 17.1,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 115,
            'name' => 'Ossenhaas met Chinese champignons',
            'price' => 17.1,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 116,
            'name' => 'Ossenhaas met kerriesaus',
            'price' => 17.1,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 117,
            'name' => 'Ossenhaas met zwarte bonensaus',
            'price' => 17.1,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 118,
            'name' => 'Ossenhaas met zwarte pepersaus',
            'price' => 17.1,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 119,
            'name' => 'Yu Sian Ngau Yuk',
            'price' => 17.1,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => 'Ossenhaas met licht zoet pikante kruidensaus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 120,
            'name' => 'Sze Chuan Ngau Yuk',
            'price' => 17.4,
            'category_id' => 13,
            'offer_id' => rand(1, 9),
            'description' => 'Ossenhaar met pittige kruiden saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 121,
            'name' => 'Visfilet met kerriesaus',
            'price' => 14.5,
            'category_id' => 14,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 122,
            'name' => 'Visfilet met oestersaus',
            'price' => 14.5,
            'category_id' => 14,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 123,
            'name' => 'Visfilet met zoetzure saus',
            'price' => 14.5,
            'category_id' => 14,
            'offer_id' => rand(1, 9),
            'description' => 'Licht gebraden visfilet met verse ananas in zoetzure saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 124,
            'name' => 'Hong Shau Yu',
            'price' => 14.5,
            'category_id' => 14,
            'offer_id' => rand(1, 9),
            'description' => 'Licht gebraden visfilet in zoete pikante saus'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 125,
            'name' => 'Tjeuw Yem Yu',
            'price' => 15,
            'category_id' => 14,
            'offer_id' => rand(1, 9),
            'description' => 'Licht gebraden visfilet met zout en peper'
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 126,
            'name' => 'San Sching Po',
            'price' => 16.1,
            'category_id' => 14,
            'offer_id' => rand(1, 9),
            'description' => 'Visfilet, garnalen, krab en groenten in knoflooksaus'
        ]);

        Serving::create([
            'version' => 'P',
            'spice' => rand(0, 3),
            'number' => 1,
            'name' => 'Geroosterde Peking Eend',
            'price' => 16.6,
            'category_id' => 15,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'P',
            'spice' => rand(0, 3),
            'number' => 2,
            'name' => 'Peking Eend met verse ananas in zoetzure saus',
            'price' => 17.1,
            'category_id' => 15,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'P',
            'spice' => rand(0, 3),
            'number' => 3,
            'name' => 'Peking Eend met Chinese champignons in oestersaus',
            'price' => 17.1,
            'category_id' => 15,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'P',
            'spice' => rand(0, 3),
            'number' => 4,
            'name' => 'Yu Sian Ya',
            'price' => 17.1,
            'category_id' => 15,
            'offer_id' => rand(1, 9),
            'description' => 'Peking eend met licht zoet pikante kruidensaus'

        ]);

        Serving::create([
            'version' => 'T',
            'spice' => rand(0, 3),
            'number' => 1,
            'name' => 'Tiepan Ling Fa',
            'price' => 17.9,
            'category_id' => 16,
            'offer_id' => rand(1, 9),
            'description' => 'Garnalen, kipfilet en groenten in zwarte pepersaus'
        ]);

        Serving::create([
            'version' => 'T',
            'spice' => rand(0, 3),
            'number' => 2,
            'name' => 'Tiepan Kai',
            'price' => 15.3,
            'category_id' => 16,
            'offer_id' => rand(1, 9),
            'description' => 'Licht gebraden kipfilet en groenten met zoet pikante saus'
        ]);

        Serving::create([
            'version' => 'T',
            'spice' => rand(0, 3),
            'number' => 3,
            'name' => 'Tiepan San Yuk',
            'price' => 17.1,
            'category_id' => 16,
            'offer_id' => rand(1, 9),
            'description' => 'Licht gebraden varkenshaas, kipfilet, ossenhaas en groenten met zoet pikante saus'
        ]);

        Serving::create([
            'version' => 'T',
            'spice' => rand(0, 3),
            'number' => 4,
            'name' => 'Tiepan Haa',
            'price' => 17.4,
            'category_id' => 16,
            'offer_id' => rand(1, 9),
            'description' => 'Garnalen en groenten met zoet pikante saus'
        ]);

        Serving::create([
            'version' => 'T',
            'spice' => rand(0, 3),
            'number' => 5,
            'name' => 'Tiepan Ngau Yuk',
            'price' => 19.5,
            'category_id' => 16,
            'offer_id' => rand(1, 9),
            'description' => '5 stuks ossenhaas en groenten met zoet pikante saus'
        ]);

        Serving::create([
            'version' => 'V',
            'spice' => rand(0, 3),
            'number' => 4,
            'name' => 'Tau Fu Po',
            'price' => 15.3,
            'category_id' => 16,
            'offer_id' => rand(1, 9),
            'description' => 'Sojakaas, cha sieuw, garnalen en chinese paddenstoelen'
        ]);

        Serving::create([
            'version' => 'V',
            'spice' => rand(0, 3),
            'number' => 1,
            'name' => 'Vegetarische Tjap Tjoy',
            'price' => 8.3,
            'category_id' => 17,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'V',
            'spice' => rand(0, 3),
            'number' => 2,
            'name' => 'Lo Han Zhai',
            'price' => 11.2,
            'category_id' => 17,
            'offer_id' => rand(1, 9),
            'description' => 'Sojakaas, chinese paddenstoelen en groenten in knoflooksaus'
        ]);

        Serving::create([
            'version' => 'V',
            'spice' => rand(0, 3),
            'number' => 3,
            'name' => 'Vegetarische Foe Yong Hai',
            'price' => 8.3,
            'category_id' => 17,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'K',
            'spice' => rand(0, 3),
            'number' => 1,
            'name' => 'Frites, saté (2st.) en ei',
            'price' => 6.5,
            'category_id' => 18,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'K',
            'spice' => rand(0, 3),
            'number' => 2,
            'name' => 'Frites, kippootje en ei',
            'price' => 6.5,
            'category_id' => 18,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'K',
            'spice' => rand(0, 3),
            'number' => 3,
            'name' => 'Frites, mini loempia (2st.) en ei',
            'price' => 6.5,
            'category_id' => 18,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'K',
            'spice' => rand(0, 3),
            'number' => 4,
            'name' => 'Kinder Bami of Nasi met saté (2st.) en ei',
            'price' => 6.5,
            'category_id' => 18,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'R',
            'spice' => rand(0, 3),
            'number' => 1,
            'name' => 'Indische rijsttafel (voor 1 persoon)',
            'price' => 16.4,
            'category_id' => 19,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'R',
            'spice' => rand(0, 3),
            'number' => 2,
            'name' => 'Indische rijsttafel',
            'price' => 15,
            'category_id' => 19,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'R',
            'spice' => rand(0, 3),
            'number' => 3,
            'name' => 'Chinese Indische Rijsttafel',
            'price' => 16.5,
            'category_id' => 19,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'R',
            'spice' => rand(0, 3),
            'number' => 4,
            'name' => 'Chinese Rijsttafel',
            'price' => 17,
            'category_id' => 19,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'R',
            'spice' => rand(0, 3),
            'number' => 5,
            'name' => 'Kantones Rijsttafel',
            'price' => 23,
            'category_id' => 19,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'R',
            'spice' => rand(0, 3),
            'number' => 6,
            'name' => 'Sze Chuan Rijsttafel',
            'price' => 23,
            'category_id' => 19,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'B',
            'spice' => rand(0, 3),
            'number' => 1,
            'name' => 'Buffet Menu A, per persoon',
            'price' => 12.8,
            'category_id' => 20,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => 'B',
            'spice' => rand(0, 3),
            'number' => 2,
            'name' => 'Buffet Menu B, per persoon',
            'price' => 15,
            'category_id' => 20,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 127,
            'name' => 'Bami of Nasi Goreng ipv rijst',
            'price' => 1.9,
            'category_id' => 20,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 128,
            'name' => 'Mihoen Goreng ipv rijst',
            'price' => 2.5,
            'category_id' => 20,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);

        Serving::create([
            'version' => null,
            'spice' => rand(0, 3),
            'number' => 129,
            'name' => 'Chinese Bami ipv rijst',
            'price' => 2.5,
            'category_id' => 20,
            'offer_id' => rand(1, 9),
            'description' => ''
        ]);
    }
}
