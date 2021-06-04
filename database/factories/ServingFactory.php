<?php

namespace Database\Factories;

use App\Models\Serving;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServingFactory extends Factory
{
    protected $model = Serving::class;

    function definition()
    {
        return [
            'version',
            'spice',
            'number',
            'affix',
            'name',
            'price',
            'dishtype_id',
            'description'
        ];
    }

}
