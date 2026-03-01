<?php

namespace Database\Factories;

use App\Models\{Student, Achievement};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achievement_student>
 */
class AchievementStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "student_id" => Student::inRandomOrder()->value('id') ?? Student::factory(),
            "achievement_id" => Achievement::inRandomOrder()->value('id') ?? Achievement::factory(),
        ];
    }
}
