<?php

namespace Database\Factories\Topic;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic\TopicDayNote>
 */
class TopicDayNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'topic_id' => $this->faker->numberBetween(1, 10),
            'content' => $this->faker->paragraph(3),
        ];
    }
}
