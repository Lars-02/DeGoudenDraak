<?php

namespace Database\Factories;

use App\Models\Allergen;
use App\Models\Offer;
use App\Models\Serving;
use Illuminate\Database\Eloquent\Factories\Factory;

class AllergenFactory extends Factory
{
    protected $model = Allergen::class;

    function definition()
    {
        return [
            'name' => $this->faker->name,
        ] ;
    }

}
