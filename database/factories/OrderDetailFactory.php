<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->randomElement([ 1, 2,3,4,5]),
            'order_id' => $this->faker->randomElement([ 1, 2,3,4,5]),
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(10000, 1000000),
        ];
    }
}
