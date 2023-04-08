<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->word();
        $slug = \Str::slug($name, '-');
        return [
            'name' => $name,
            'slug' => $slug,
            'parent_id' => $this->faker->randomElement([ 1, 2,3,4,5]),
            'featured' => 1,
        ];
    }
}
