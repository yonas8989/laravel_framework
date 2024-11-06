<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::factory(), 
            'vehicle_number' => $this->faker->unique()->numberBetween(1, 9999),
            'vehicle_model' => $this->faker->word(),
            'year_made' => $this->faker->year(), 
            'driver_name' => $this->faker->name(), 
            'notes' => $this->faker->sentence(), 
        ];
    }
}
