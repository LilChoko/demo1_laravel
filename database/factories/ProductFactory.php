<?php

namespace Database\Factories;

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
        $aImages = [
            fake()->randomElement(['product-1.jpg', 'product-2.jpg', 'product-3.jpg', 'product-4.jpg', 'product-5.jpg', 'product-6.jpg', 'product-7.jpg', 'product-8.jpg', 'product-9.jpg', 'product-10.jpg' ]),
            fake()->randomElement(['product-1.jpg', 'product-2.jpg', 'product-3.jpg', 'product-4.jpg', 'product-5.jpg', 'product-6.jpg', 'product-7.jpg', 'product-8.jpg', 'product-9.jpg', 'product-10.jpg' ]),
            fake()->randomElement(['product-1.jpg', 'product-2.jpg', 'product-3.jpg', 'product-4.jpg', 'product-5.jpg', 'product-6.jpg', 'product-7.jpg', 'product-8.jpg', 'product-9.jpg', 'product-10.jpg' ]),
            fake()->randomElement(['product-1.jpg', 'product-2.jpg', 'product-3.jpg', 'product-4.jpg', 'product-5.jpg', 'product-6.jpg', 'product-7.jpg', 'product-8.jpg', 'product-9.jpg', 'product-10.jpg' ]),
            fake()->randomElement(['product-1.jpg', 'product-2.jpg', 'product-3.jpg', 'product-4.jpg', 'product-5.jpg', 'product-6.jpg', 'product-7.jpg', 'product-8.jpg', 'product-9.jpg', 'product-10.jpg' ])
        ];
        return [
            'name' => fake()->words(3, true),
            'description' => fake()->paragraph(),
            'ratting' => fake()->numberBetween(1, 5),
            'original_price' => fake()->randomFloat(2, 200, 500),
            'sale_price' => fake()->randomFloat(2, 10, 100),
            'quantity' => fake()->randomNumber(3, true),
            'size' => fake()->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
            'color' => fake()->colorName(),
            'images' => json_encode($aImages),
            'category_id' => fake()->numberBetween(1, 5)
        ];
    }
}
