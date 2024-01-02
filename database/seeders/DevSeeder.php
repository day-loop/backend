<?php

namespace Database\Seeders;

use Database\Seeders\Local\Loop;
use Database\Seeders\Local\Todo;
use Database\Seeders\Local\Topic;
use Database\Seeders\Local\User\DefaultUserSeeder;
use Database\Seeders\Local\User\UserSeeder;
use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DefaultUserSeeder::class,
            UserSeeder::class,

            // loop
            Loop\LoopSeeder::class,
            Loop\LoopActionSeeder::class,
            Loop\LoopDayActionSeeder::class,

            // topic
            Topic\TopicSeeder::class,
            Topic\TopicDayNoteSeeder::class,

            // todo
            Todo\TodoSeeder::class,
        ]);
    }
}
