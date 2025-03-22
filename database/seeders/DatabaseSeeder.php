<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        Post::factory(10)->create();

        // Post::factory(10)->create([
        //     'title' => 'Test Title',
        //     'content' => 'Content example',
        //     'author'=>'Test Author',
        //     'slug'=>'slug-test-example',
        //     'language'=>'ar'
        // ]);
    }
}
