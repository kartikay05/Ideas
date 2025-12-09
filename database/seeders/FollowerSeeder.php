<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class FollowerSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            $followers = $users->where('id', '!=', $user->id)->random(2); // each user follows 2 others
            foreach ($followers as $follower) {
                $user->followers()->attach($follower->id);
            }
        }
    }
}
