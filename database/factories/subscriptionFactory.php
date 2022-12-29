<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subscription>
 */
class subscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this-> faker->word,
            'rate'=>$this->faker->numberBetween($min= 1000 ,$max= 10000),
            'duration'=>$this->faker->year(),
        ];
    }

}
