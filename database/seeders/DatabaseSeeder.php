<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 5 users
        
        $users = User::factory(5)->create();

        // 5-10 ideas
        Idea::factory(10)->create();

        // 5-10 comments
        Comment::factory(10)->create();
        // followers
    }
}
