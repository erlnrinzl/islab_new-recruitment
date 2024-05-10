<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CampusMajor;
use App\Models\RecruitmentDetail;
use App\Models\RecruitmentPeriod;
use App\Models\RecruitmentType;

class RecruitmentDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RecruitmentDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_id' => RecruitmentType::factory(),
            'period_id' => RecruitmentPeriod::factory(),
            'major_id' => CampusMajor::factory(),
            'binusian' => $this->faker->numberBetween(-10000, 10000),
            'gpa_required' => $this->faker->randomFloat(0, 0, 99999.),
        ];
    }
}
