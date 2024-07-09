<?php

namespace Database\Factories;

use App\Models\Cars;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarsCategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_id' => Cars::factory(),
            'category_id' => Categories::factory(),
        ];
    }
}
