<?php

namespace Database\Factories\Loop;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loop\LoopAction>
 */
class LoopActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'loop_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->word,
        ];
    }
}
