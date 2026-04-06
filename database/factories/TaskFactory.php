<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory {
    public function definition(): array {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'status' => fake()->randomElement(['pending', 'completed']),
            'priority' => fake()->randomElement(['low', 'medium', 'high']),
            'due_date' => fake()->dateTimeBetween('now', '+30 days'),
        ];
    }
}
