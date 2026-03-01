<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory(),
            'nim' => fake()->unique()->numerify('NIM#####'),
            'photo_path' => fake()->optional()->imageUrl(200, 200, 'people'),
            'class_room_id' => ClassRoom::inRandomOrder()->value('id') ?? ClassRoom::factory(),
            'school_year' => fake()->numberBetween(2020, 2025),
            'gender' => fake()->randomElement(['male', 'female']),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'status' => fake()->randomElement(['active', 'on_lave', 'graduated', 'inactive']),
        ];
    }
}
