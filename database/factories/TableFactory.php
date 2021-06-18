<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\Serving;
use App\Models\Table;
use Illuminate\Database\Eloquent\Factories\Factory;

class TableFactory extends Factory
{
    protected $model = Table::class;

    function definition()
    {
        return [
            'seats' => $this->faker->numberBetween(1, 7),
        ];
    }

}
