<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_name"=> $this->faker->name,
            "last_name"=> $this->faker->lastName,
            "email"=> $this->faker->email,
            "password"=> $this->faker->password,  //
        ];
    }

}
