<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,3),
            'title' => $this->faker->sentence(mt_rand(5,10)),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(mt_rand(5, 10)),
            'excerpt' => $this->faker->paragraph()
        ];
    }
}
