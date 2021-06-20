<?php

namespace Database\Seeders;

use App\Models\Allergen;
use App\Models\Category;
use App\Models\Serving;
use Illuminate\Database\Seeder;

class AllergenSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $allergens = Allergen::factory()->createMany([
            ['name' => 'Melk'],
            ['name' => 'Gluten'],
            ['name' => 'Noten'],
            ['name' => 'Ei'],
            ['name' => 'Vis'],
            ['name' => 'Pinda\'s'],
            ['name' => 'Noten'],
            ['name' => 'Schaaldieren'],
            ['name' => 'Weekdieren'],
            ['name' => 'Selderij'],
            ['name' => 'Mosterd'],
            ['name' => 'Sesamzaad'],
            ['name' => 'Sulfiet'],
        ]);

        Serving::all()->each(function ($serving) use ($allergens) {
            $serving->allergens()->attach($allergens->random(rand(0, 3)));
        });
    }
}
