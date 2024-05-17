<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'priority' => fake()->randomElement(['bassa', 'media', 'alta']),
            'user_id' => User::factory(),
            'project_id' => Project::factory(),
            'stato' => fake()->randomElement(['Backlog', 'To do', 'In progress', 'Done'])


        ];
    }
}
