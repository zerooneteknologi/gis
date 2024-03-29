<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galery>
 */
class GaleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tour_id' => mt_rand(1, 5),
            'galeryName' => fake()->streetAddress(),
            'galeryImage' => fake()->imageUrl(400, 400, 'place'),
            'galeryDesc' => fake()->sentence()
        ];
    }
}
