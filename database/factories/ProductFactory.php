<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            'sku' => $this->faker->unique()->regexify('[A-Z0-9]{10}'),
            'stock_count' => $this->faker->numberBetween(0, 100),
            'name' => Str::title($this->faker->sentence(3)),
            'description' => Str::title($this->faker->sentence(10)),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'img_url' => null
        ];
    }
}
