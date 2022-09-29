<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'likes' => $this->faker->NumberBetween( 1,  400),
            'views' => $this->faker->NumberBetween( 1,  2500),
            'post_id' => $this->faker->NumberBetween( 1,  250),
        ];
    }
}
