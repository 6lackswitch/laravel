<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->count(10)->create();
        \App\Models\Post::factory()->count(30)->create();
        \App\Models\Tag::factory()->count(10)->create();
        \App\Models\Comment::factory()->count(100)->create();

        foreach (\App\Models\Post::all() as $post) {
            $tags = \App\Models\Tag::inRandomOrder()->take(rand(1, 4))->pluck('id');
            $post->tags()->attach($tags);
        }
    }
}
