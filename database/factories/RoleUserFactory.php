<?php

namespace Database\Factories;

use App\Models\{User, Role};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoleUser>
 */
class RoleUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::inRandomOrder()->value('id') ?? User::factory(),
            "role_id" => Role::inRandomOrder()->value('id') ?? Role::factory(),
        ];
    }
}
