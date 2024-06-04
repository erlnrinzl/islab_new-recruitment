<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CampusCourse;
use App\Models\RecruitmentDetail;
use App\Models\RecruitmentScoreRequirement;

class RecruitmentScoreRequirementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RecruitmentScoreRequirement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => CampusCourse::factory(),
            'detail_id' => RecruitmentDetail::factory(),
            'course_score_min' => $this->faker->randomFloat(0, 0, 4.),
        ];
    }
}
