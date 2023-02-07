<?php

namespace Database\Factories;

use App\Models\User;
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
        if (User::count() == 0) {
            User::factory(10)->create();
        }
        // name, descrption, expire
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(30, true),
            'expire' => $this->faker->date(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
