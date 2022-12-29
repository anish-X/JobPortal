<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'name' => fake()->name(),
            'registration_number' => fake()->randomNumber(),
            'email' =>fake()->email(),
            'address' => fake()->address(),
            'description' => fake()->text( $maxNbChars = 200),
            'logo' => fake()->imageUrl(),
            'is_active' => 1,
            'company_categories_id' => fake()->numberBetween(1,10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
