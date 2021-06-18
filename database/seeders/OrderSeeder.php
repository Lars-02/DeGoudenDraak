<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Serving;
use Illuminate\Database\Seeder;
use SplFixedArray;

class OrderSeeder extends Seeder
{
    public function run()
    {
        foreach (new SplFixedArray(32) as $hehepowned)
            Order::factory()->create();
        $this->createOrders();
    }

    private function createOrders()
    {
        $servings = Serving::all();
        Order::all()->each(function ($order) use ($servings) {
            $order->servings()->attach($servings->random(rand(1, 6)), array('amount' => rand(1, 6)));
        });
    }
}
