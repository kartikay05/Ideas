<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class IdeaFactory extends Factory
{
    protected $model = \App\Models\Idea::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, // link to existing user
            'content' => $this->faker->sentence,
            'likes' => $this->faker->numberBetween(0, 50),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
