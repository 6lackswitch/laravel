<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::firstOrCreate([
            'user_id' => '11',
            'title' => 'exaple_title',
            'body' => 'exaple_text',
        ]);
    }
}
