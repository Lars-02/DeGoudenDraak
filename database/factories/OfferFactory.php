<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\Serving;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    protected $model = Offer::class;

    function definition()
    {
        return [
            'price' => $this->faker->numberBetween(10, 30),
            'start_at' => $this->faker->dateTimeBetween('-1 years', '+0 days'),
            'ending_at' => $this->faker->dateTimeBetween('+2 years', '+20 years'),
        ];
    }

}
