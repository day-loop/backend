<?php

namespace Database\Factories\Todo;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'todo' => $this->faker->sentence(3),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
