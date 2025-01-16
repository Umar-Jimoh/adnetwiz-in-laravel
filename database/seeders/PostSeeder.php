<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'First post',
                'slug' => 'first-post',
                'content' => 'This is first post content',
                'status' => 'published',
                'user_id' => 1,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second post',
                'slug' => 'second-post',
                'content' => 'This is second post content',
                'status' => 'draft',
                'user_id' => 1,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third post',
                'slug' => 'third-post',
                'content' => 'This is third post content',
                'status' => 'published',
                'user_id' => 1,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fourth post',
                'slug' => 'fourth-post',
                'content' => 'This is fourth post content',
                'status' => 'published',
                'user_id' => 1,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fifth post',
                'slug' => 'fifth-post',
                'content' => 'This is fifth post content',
                'status' => 'draft',
                'user_id' => 1,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    
        DB::table('posts')->insert($posts);
    }
}
