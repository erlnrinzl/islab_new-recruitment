<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RecruitmentStep;
use App\Models\StudentRegistration;
use App\Models\StudentRegistrationProgress;

class StudentRegistrationProgressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentRegistrationProgress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'step_id' => RecruitmentStep::factory(),
            'registration_id' => StudentRegistration::factory(),
            'score' => $this->faker->randomFloat(0, 0, 99999.),
        ];
    }
}
