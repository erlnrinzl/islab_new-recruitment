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
            'type_id' => mt_rand(1, 3),
            'period_id' => RecruitmentPeriod::factory(),
            'major_id' => CampusMajor::factory(),
            'binusian' => $this->faker->numberBetween(-10000, 10000),
            'gpa_required' => $this->faker->randomFloat(0, 0, 4.),
            'batch' => $this->faker->numberBetween(-10000, 10000),
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
        ];
    }
}
