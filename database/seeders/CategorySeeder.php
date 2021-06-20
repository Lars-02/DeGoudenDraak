<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->createMany([
            ['name' => 'Soep'],
            ['name' => 'Voorgerechten'],
            ['name' => 'Bami en Nasi gerechten'],
            ['name' => 'Combinatie gerechten'],
            ['name' => 'Mihoen gerechten'],
            ['name' => 'Chinese bami gerechten'],
            ['name' => 'Indische gerechten'],
            ['name' => 'Eier gerechten'],
            ['name' => 'Groenten gerechten'],
            ['name' => 'Vlees gerechten'],
            ['name' => 'Kip gerechten'],
            ['name' => 'Garnalen gerechten'],
            ['name' => 'Ossenhaas gerechten'],
            ['name' => 'Vissen gerechten'],
            ['name' => 'Peking eend gerechten'],
            ['name' => 'Tiepan specialiteiten'],
            ['name' => 'Vegetarische gerechten'],
            ['name' => 'Kinder menu\'s'],
            ['name' => 'Rijsttafels'],
            ['name' => 'Overig'],
        ]);
    }
}
