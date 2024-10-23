<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => fake()->unique()->numberBetween(2000, 10000),
            'employer_id' =>Employer::factory(),
            // 'admin' =>  false,
            //
        ];
    }
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'admin' => true
        ]);
    }
}
