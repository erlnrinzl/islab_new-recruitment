<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RecruitmentDetail;
use App\Models\StudentRegistration;
use App\Models\StudentRegistrationStatus;
use App\Models\Students;

class StudentRegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentRegistration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => mt_rand(1, 31),
            'detail_id' => RecruitmentDetail::factory(),
            'status_id' => StudentRegistrationStatus::factory(),
        ];
    }
}
