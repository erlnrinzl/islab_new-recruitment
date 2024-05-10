<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => $this->faker->year('+10 years'),
            'period_name' => $this->faker->randomElement(['Ganjil', 'Genap']) . "-" . $this->faker->year('+10 years'),
            'category' => $this->faker->word(),
            'batch' => $this->faker->randomDigit(),
        ];
    }
}
