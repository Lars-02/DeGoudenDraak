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
            ['name' => 'cashier.*', 'label' => 'Pass any cashier policy'],
            ['name' => 'user.viewAny', 'label' => 'May view users'],
            ['name' => 'user.delete', 'label' => 'May delete users'],
            ['name' => 'role.viewAny', 'label' => 'May view roles'],
        ]);
    }
}
