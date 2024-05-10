<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CampusMajor;
use App\Models\CampusStreamCourse;

class CampusStreamCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CampusStreamCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'major_id' => CampusMajor::factory(),
            'stream_course_name' => $this->faker->word,
        ];
    }
}
