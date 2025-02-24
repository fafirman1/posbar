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
        return [
            'name'=>$this->faker->name,
            'price'=>$this->faker->numberBetween(10000, 100000),
            'stock'=>$this->faker->numberBetween(1, 100),
            'category'=>$this->faker->randomElement(['Food','Beer','Soda','Whisky','Wine','Beverage','Liquor']),
            'image'=>$this->faker->imageUrl(),
        ];
    }
}
