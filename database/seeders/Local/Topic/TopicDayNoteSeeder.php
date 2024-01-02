<?php

namespace Database\Seeders\Local\Topic;

use App\Models\Topic\TopicDayNote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicDayNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopicDayNote::factory()->count(10)->create();
    }
}
