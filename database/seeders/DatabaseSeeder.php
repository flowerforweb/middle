<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Comment;
use App\Models\Cour;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create();
        Comment::factory(50)->create();
        Cour::factory(50)->create();
        Question::factory(50)->create();
        Test::factory(50)->create();
        Lesson::factory(50)->create();
    }
}
