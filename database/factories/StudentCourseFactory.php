<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CampusCourse;
use App\Models\Student;
use App\Models\StudentCourse;

class StudentCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => CampusCourse::factory(),
            'student_id' => Student::factory(),
            'student_grade' => $this->faker->randomFloat(0, 0, 99999.),
        ];
    }
}
