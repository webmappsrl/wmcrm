<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MilestoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // name, descrption, expire
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(30,true),
            'expire' => $this->faker->date(),
        ];
    }
}
