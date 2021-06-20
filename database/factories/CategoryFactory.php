<?php

namespace Database\Factories;

use App\Models\Allergen;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Serving;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    function definition()
    {
        return [
            'version' => 'A',
            'number' => count(Category::all()) + 1,
            'name' => $this->faker->name,
        ] ;
    }

}
