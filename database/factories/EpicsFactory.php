<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EpicsFactory extends Factory
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
            'description' => $this->faker->sentence(30, true),
        ];
    }
}