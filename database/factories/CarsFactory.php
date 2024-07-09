<?php

namespace Database\Factories;

use App\Models\Brands;
use App\Models\Cars;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $colors = ['yellow', 'black', 'white', 'blue'];
        return [
            'color' => $this->faker->randomElement($colors),
            'description' => $this->faker->text('10'),
            'number_plate' => $this->faker->text('7'),
            'price' => 100000,
            'year' => 2020,
            'image' => 'some image',
            'images' => [],
            'brand_id' => Brands::factory(),
        ];
    }
}
