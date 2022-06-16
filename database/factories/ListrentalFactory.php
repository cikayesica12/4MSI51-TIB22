<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListrentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imagevehicle' => $this->faker->name(),
            'typerental' => $this->faker->name(),
            'brand' => $this->faker->name(),
            'price' => random_int(400000,100000000),
            'status' => $this->faker->name(),
        ];
    }
}
