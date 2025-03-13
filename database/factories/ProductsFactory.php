<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "src" => fake()->imageUrl(),
            "details" => fake()->paragraph(1),
            "name" => fake()->name(),
            "more_details" => fake()->paragraph(2),
            "price"=>fake()->randomFloat(2,50,1000),
            "discount_percentage"=>fake()->randomFloat(2,0,0.7),
            "brand_id"=>Brand::inRandomOrder()->value('id') ?? Brand::factory()->create()->id,
        ];
    }
}
