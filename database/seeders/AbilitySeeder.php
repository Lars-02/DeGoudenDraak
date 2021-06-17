<?php

namespace Database\Seeders;

use App\Models\Ability;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ability::factory()->createMany([
            ['name' => '*.*', 'label' => 'Pass any policy'],
            ['name' => 'user.*', 'label' => 'Pass all user policies'],
            ['name' => 'user.viewAny', 'label' => 'May view users'],
            ['name' => 'user.update', 'label' => 'May update users'],
            ['name' => 'user.delete', 'label' => 'May delete users'],
        ]);
    }
}
