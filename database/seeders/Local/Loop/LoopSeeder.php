<?php

namespace Database\Seeders\Local\Loop;

use App\Models\Loop\Loop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loop::factory()->count(10)->create();
    }
}
