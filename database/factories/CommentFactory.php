<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => rand(1, 30),
            'user_id' => rand(1, 10),
            'title' => $this->faker->word,
            'body' => $this->faker->text($maxNbChars = 30)
        ];
    }
}
