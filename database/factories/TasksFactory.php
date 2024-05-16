<?php

namespace Database\Factories;

use App\Models\Clients;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
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
            'project_id' => Projects::factory(),
            'stato' => fake()->randomElement(['Backlog', 'To do', 'In progress', 'Done'])


        ];
    }
}
