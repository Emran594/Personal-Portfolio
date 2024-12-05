<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence, // Random blog title
            'slug' => $this->faker->slug, // Random slug
            'featured_image' => $this->faker->imageUrl(800, 600, 'blog', true, 'Featured Image'), // Random image URL
            'description' => $this->faker->paragraphs(5, true), // Random paragraphs as description
        ];
    }
}
