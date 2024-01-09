<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'user_id' => $this->faker->numberBetween(1, 3),
            'company_id' => $this->faker->numberBetween(1, 3),
            'is_completed' => $this->faker->boolean,
            'start_at' => now(),
            'expired_at' => now()->addDays($this->faker->numberBetween(1, 30)),
        ];
    }
}
