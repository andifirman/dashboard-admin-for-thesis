<?php

namespace Database\Factories;

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
      return [
        "name"          =>  $this->faker->word,
        "sku"           =>  $this->faker->unique()->randomNumber,
        "description"   =>  \Str::random(20),
        "price"         =>  $this->faker->numberBetween(1000, 10000),
        "quantity"      =>  $this->faker->numberBetween(1,100),
        "sales"         =>  $this->faker->numberBetween(1,100)
      ];
    }
}
