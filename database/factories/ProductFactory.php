<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'description' => fake()->text(1000),
            'price' => fake()->numberBetween(100, 10000),
            'image' => fake()->imageUrl(500, 500),
            'category_id' => fake()->numberBetween(1, 5),
        ];
    }
}
