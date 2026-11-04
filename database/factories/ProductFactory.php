<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(1, true),
            'price' => $this->faker->numberBetween(100, 100000),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
