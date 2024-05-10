<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RecruitmentDetail;
use App\Models\Student;
use App\Models\StudentRegistration;
use App\Models\StudentRegistrationStatus;

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
            'student_id' => Student::factory(),
            'detail_id' => RecruitmentDetail::factory(),
            'status_id' => StudentRegistrationStatus::factory(),
        ];
    }
}
