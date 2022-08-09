<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
        'name' => $this->faker->name,
        'nis' => $this->faker->numerify('##########'),
        'stu_score' => $this->faker->numberBetween(0,10)
      ];
    }
}
