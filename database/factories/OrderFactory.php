<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address' => "Hồ Chí Minh",
            'user_id' => $this->faker->randomElement([ 1, 2,3,4,5]),
            'code' => Str::upper(Str::random(10)),
            'total' => $this->faker->numberBetween(10000, 1000000),
        ];
    }
}
