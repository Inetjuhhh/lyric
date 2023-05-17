<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Lyric;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserLyric>
 */
class UserLyricFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'lyric_id' => Lyric::factory()
        ];
    }
}
