<?php

namespace Database\Seeders\Local\Topic;

use App\Models\Topic\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topic::factory()->count(10)->create();
    }
}
