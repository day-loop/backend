<?php

namespace Database\Seeders\Local\Loop;

use App\Models\Loop\LoopAction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoopActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LoopAction::factory()->count(10)->create();
    }
}
