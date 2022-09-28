<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            'post_id' => '30',
            'user_id' => '10',
            'title' => 'exaple_title',
            'body' => 'example_text',
        ]);
    }
}
