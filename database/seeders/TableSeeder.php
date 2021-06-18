<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Table;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    public function run()
    {
        Table::factory(16)->create();
    }
}
