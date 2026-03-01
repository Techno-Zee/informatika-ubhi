<?php

namespace Database\Factories;

use App\Models\{LetterType, Student, User};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LetterRequest>
 */
class LetterRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(['submitted', 'processing', 'rejected', 'approved']);
        $approvedBy = $status === 'approved' ? User::factory() : null;
        $approvedAt = $status === 'approved' ? now() : null;

        return [
            'student_id' => Student::inRandomOrder()->value('id') ?? Student::factory(),
            'letter_type_id' => LetterType::inRandomOrder()->value('id') ?? LetterType::factory(),
            'purpose' => fake()->paragraph(),
            'attachment_path' => fake()->optional()->filePath(),
            'status' => $status,
            'admin_notes' => fake()->optional()->sentence(),
            'approved_by' => $approvedBy,
            'approved_at' => $approvedAt,
        ];
    }
}
