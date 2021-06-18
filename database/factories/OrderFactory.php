<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\Order;
use App\Models\Serving;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    function definition()
    {
        return [
            'table_id' => $this->faker->numberBetween(1, count(Table::all())),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
