<?php

namespace Database\Factories;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;

    public function definition(): array
    {
        $product = Product::factory()->create();
        return [
            'product_id' => $product->id,
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $product->price,
            'name' => $product->name,
        ];
    }
}
