<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\Serving;
use App\Models\Table;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Offer::class;

    function definition()
    {
        $tablenumber = $this->faker->numberBetween(1, count(Table::all()));
        $maxGuests = Table::where('id', '=', "$tablenumber")->first()->seats;
        return [
            'table_id' => $tablenumber,
            'user_id' => $this->faker->numberBetween(1, count(User::all())),
            'start_time' => Carbon::now(),
            'duration' => $this->faker->dateTimeBetween('+1 hours', '+13 hours')->format("Y-m-d"),
            'guests' => $this->faker->numberBetween(1, $maxGuests),
            'help_request' => 0,
        ];
    }

}
