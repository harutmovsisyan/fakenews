<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3, false),
            'content' => $this->faker->text,
            'owner_id' => User::get()->random()->id,
            'category_id' => Category::get()->random()->id,
            'is_published' => random_int(1,2),
        ];
    }
}
