<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RecruitmentStep;
use App\Models\RecruitmentType;

class RecruitmentStepFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RecruitmentStep::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_id' => RecruitmentType::factory(),
            'step_name' => $this->faker->word,
            'step_order' => $this->faker->numberBetween(-10000, 10000),
            'step_description' => $this->faker->text,
            'step_score_min' => $this->faker->randomFloat(0, 0, 4.),
        ];
    }
}
