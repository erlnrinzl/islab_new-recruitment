<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CampusMajor;
use App\Models\CampusRegion;
use App\Models\CampusStreamCourse;
use App\Models\Students;
use App\Models\User;

class StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nim' => $this->faker->numberBetween(-10000, 10000),
            'user_id' => User::factory(),
            'major_id' => CampusMajor::factory(),
            'region_id' => CampusRegion::factory(),
            'streamcourse_id' => CampusStreamCourse::factory(),
            'name' => $this->faker->name,
            'domicile' => $this->faker->word,
            'active_status' => $this->faker->boolean,
            'gpa' => $this->faker->randomFloat(0, 0, 99999.),
        ];
    }
}
