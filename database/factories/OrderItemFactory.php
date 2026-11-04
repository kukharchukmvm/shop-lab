<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;

    public function definition(): array
    {
        return [
            'quantity' => $this->faker->numberBetween(1, 10),
            'order_id'   => Order::factory(),
            'product_id' => Product::factory(),
            'name'  => fn (array $attrs) => Product::find($attrs['product_id'])->name,
            'price' => fn (array $attrs) => Product::find($attrs['product_id'])->price,
        ];
    }
}
