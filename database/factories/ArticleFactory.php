<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . fake()->unique()->numberBetween(1000, 9999),
            'content' => fake()->paragraphs(5, true),
            'thumbnail_path' => fake()->optional()->imageUrl(),
            'status' => fake()->randomElement(['draft', 'published']),
            'author_id' => User::inRandomOrder()->value('id') ?? User::factory(),
        ];
    }
}
