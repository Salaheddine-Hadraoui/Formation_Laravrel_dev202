<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
   
    /**
     * Define the model's default state.
     * $
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->sentence(3),
            'content'=> fake()->paragraph(),
            'author'=> fake()->name(),
            'slug'=> fake()->slug(),
            'language'=> fake()->randomElement(['en','ar','fr'])
        ];
    }
}
