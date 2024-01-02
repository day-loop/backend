<?php

namespace Database\Seeders\Local\Loop;

use Illuminate\Database\Seeder;
use App\Models\Loop\LoopDayAction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LoopDayActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LoopDayAction::factory()->count(10)->create();
    }
}
