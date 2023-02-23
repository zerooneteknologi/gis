<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tourName'       => fake()->catchPhrase(),
            'tourSlug'       => fake()->slug(3),
            'tourLat'        => fake()->latitude($min = -90, $max = 90),
            'tourLon'        => fake()->longitude($min = -180, $max = 180),
            'tourImg'        => fake()->imageUrl(640, 480, 'animals', true, 'cats'),
            'tourAddress'    => fake()->streetAddress(),
            'tourDesc'       => fake()->randomHtml()
        ];
    }
}
