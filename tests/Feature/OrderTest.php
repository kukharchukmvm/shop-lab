<?php

namespace Tests\Feature;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_create_order_empty_array(): void
    {

        $response = $this->postJson('/api/order', []);
        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['items']);
    }
    public function test_create_order_with_product(): void {
       $product = Product::factory()->create();
       $data['items'] = [$product->id];
       $response = $this->postJson('/api/order', $data);

       $response->assertStatus(201);
    }



}
