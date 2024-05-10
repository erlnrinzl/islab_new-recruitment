<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RecruitmentPeriod;

class RecruitmentPeriodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RecruitmentPeriod::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'period_name' => $this->faker->word,
            'batch' => $this->faker->numberBetween(-10000, 10000),
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
        ];
    }
}
