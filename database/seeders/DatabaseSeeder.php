<?php

namespace Database\Seeders;

use App\Models\Journal;
use App\Models\Label;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(1000)->create();
         Journal::factory(10000)->create();
         Task::factory(10000)->create();
         Label::factory(100)->create();
    }
}
