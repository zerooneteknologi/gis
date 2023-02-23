<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'     => fake()->numberBetween(1, 5),
            'postTitle'       => fake()->sentence(3),
            'postSlug'        => fake()->slug(3),
            'postImage'       => fake()->imageUrl(640, 480, 'animals', true, 'cats'),
            'postDesc'        => fake()->randomHtml()
        ];
    }
}
