<?php

namespace Database\Factories;

use App\Models\Epic;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoryFactory extends Factory
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
            'epic_id' => Epic::all()->random()->id,

        ];
    }
}