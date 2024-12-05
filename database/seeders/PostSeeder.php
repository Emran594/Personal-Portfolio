<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Generate 10 sample blog posts
        Post::factory()->count(10)->create();
    }
}
