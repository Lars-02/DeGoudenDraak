<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AbilitySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            OfferSeeder::class,
            ServingSeeder::class,
            AllergenSeeder::class,
            TableSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
