<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->optional()->words(3, true),
            'image_path' => fake()->imageUrl(1200, 400),
            'link_url' => fake()->optional()->url(),
            'is_active' => fake()->boolean(80),
        ];
    }
}
