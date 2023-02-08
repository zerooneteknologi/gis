<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tittleWeb' => fake()->domainWord(),
            'descWeb' => fake()->sentence(),
            'tittleAdmin' => fake()->domainWord(),
            'officeAddress' => fake()->address(),
            'logo' => 'logo/xfXzY49D53SQINtZ3ktP8DBMghIsuxCnZpryUwoF.png'
        ];
    }
}
