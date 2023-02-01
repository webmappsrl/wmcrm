<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
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
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'business_name' => $this->faker->company(),
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'vat_number' => $this->faker->bothify(),
            'fiscal_code' => $this->faker->bothify(),
        ];
    }
}