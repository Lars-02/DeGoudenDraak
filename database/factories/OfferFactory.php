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
            'start_at' => $this->faker->dateTimeBetween('-1 years', '+2 weeks')->format("Y-m-d"),
            'ending_at' => $this->faker->dateTimeBetween('+2 weeks', '+1 years')->format("Y-m-d"),
        ];
    }

}
