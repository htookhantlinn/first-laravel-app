<?php

namespace Database\Factories;

use Faker\Factory as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = Faker::create();
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'category_id' => rand(1, 10),
        ];
    }
}
