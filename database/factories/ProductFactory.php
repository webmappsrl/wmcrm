<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(10, true),
            'price per unit' => $this->faker->randomFloat(2, 1, 100),
            'is subscribed' => $this->faker->boolean(),
        ];
    }
}