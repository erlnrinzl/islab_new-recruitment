<?php

namespace Database\Seeders;

use App\Models\CampusCourse;
use App\Models\CampusMajor;
use App\Models\CampusStreamCourse;
use App\Models\Period;
use App\Models\RecruitmentDetail;
use App\Models\RecruitmentPeriod;
use App\Models\RecruitmentScoreRequirement;
use App\Models\RecruitmentStep;
use App\Models\RecruitmentType;
use App\Models\StudentCourse;
use App\Models\StudentRegistration;
use App\Models\StudentRegistrationProgress;
use App\Models\StudentRegistrationStatus;
use App\Models\Students;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // CampusCourse::factory(10)->create();
        // CampusStreamCourse::factory(3)->create();
        // RecruitmentPeriod::factory(5)->create();
        // RecruitmentDetail::factory(5)->create();
        // RecruitmentStep::factory(2)->create();
        // RecruitmentScoreRequirement::factory(5)->create();
        // StudentCourse::factory(10)->create();
        // StudentRegistration::factory(5)->create();
        // StudentRegistrationProgress::factory(5)->create();

        // DB::table('campus_majors')->delete();
        DB::table('campus_courses')->delete();
        DB::table('campus_stream_courses')->delete();
        DB::table('students')->delete();
        DB::table('student_registration_statuses')->delete();
        DB::table('recruitment_types')->delete();
        DB::table('recruitment_periods')->delete();
        DB::table('recruitment_details')->delete();
        DB::table('recruitment_steps')->delete();
        DB::table('recruitment_score_requirements')->delete();
        DB::table('student_registrations')->delete();
        DB::table('student_registration_progress')->delete();
        DB::table('student_courses')->delete();

        // $json = File::get("database/seeders/json/campusMajors.json");
        // $types = json_decode($json);
        // foreach ($types as $type) {
        //     CampusMajor::create([
        //         'type_name' => $type->name,
        //         'type_slug' => $type->slug,
        //         'description' => $type->description,
        //         'icon' => $type->icon,
        //     ]);
        // }

        $json = File::get("database/seeders/json/campusCourses.json");
        $courses = json_decode($json);
        foreach ($courses as $course) {
            CampusCourse::create([
                'id' => $course->id,
                'course_name' => $course->course_name,
                'course_credit' => $course->course_credit,
            ]);
        }

        $json = File::get("database/seeders/json/campusStreamCourses.json");
        $streams = json_decode($json);
        foreach ($streams as $stream) {
            CampusStreamCourse::create([
                'id' => $stream->id,
                'major_id' => $stream->major_id,
                'stream_course_name' => $stream->stream_course_name,
            ]);
        }

        $json = File::get("database/seeders/json/students.json");
        $students = json_decode($json);
        foreach ($students as $student) {
            Students::create([
                'major_id' => $student->major_id,
                'region_id' => $student->region_id,
                'email' => $student->email,
                'nim' => $student->nim,
                'name' => $student->name,
                'gpa' => $student->gpa
            ]);
        }

        $json = File::get("database/seeders/json/studentRegistrationStatuses.json");
        $statuses = json_decode($json);
        foreach ($statuses as $status) {
            StudentRegistrationStatus::create([
                'id' => $status->id,
                'status_name' => $status->status_name,
            ]);
        }

        $json = File::get("database/seeders/json/recruitmentTypes.json");
        $types = json_decode($json);
        foreach ($types as $type) {
            RecruitmentType::create([
                'type_name' => $type->name,
                'type_slug' => $type->slug,
                'description' => $type->description,
                'icon' => $type->icon,
            ]);
        }

        $json = File::get("database/seeders/json/recruitmentPeriods.json");
        $periods = json_decode($json);
        foreach ($periods as $period) {
            RecruitmentPeriod::create([
                'id' => $period->id,
                'period_name' => $period->period_name,
            ]);
        }

        $json = File::get("database/seeders/json/recruitmentDetails.json");
        $details = json_decode($json);
        foreach ($details as $detail) {
            RecruitmentDetail::create([
                'id' => $detail->id,
                'type_id' => $detail->type_id,
                'period_id' => $detail->period_id,
                'batch' => $detail->batch,
                'date_start' => $detail->date_start,
                'date_end' => $detail->date_end,
                'major_id' => $detail->major_id,
                'binusian' => $detail->binusian,
                'gpa_required' => $detail->gpa_required,
            ]);
        }

        $json = File::get("database/seeders/json/recruitmentSteps.json");
        $steps = json_decode($json);
        foreach ($steps as $step) {
            RecruitmentStep::create([
                'id' => $step->id,
                'type_id' => $step->type_id,
                'step_name' => $step->step_name,
                'step_order' => $step->step_order,
                'step_description' => $step->step_description,
                'step_score_min' => $step->step_score_min,
            ]);
        }

        $json = File::get("database/seeders/json/recruitmentScoreRecruitments.json");
        $scores = json_decode($json);
        foreach ($scores as $score) {
            RecruitmentScoreRequirement::create([
                'id' => $score->id,
                'course_id' => $score->course_id,
                'detail_id' => $score->detail_id,
                'course_score_min' => $score->course_score_min,
            ]);
        }

        $json = File::get("database/seeders/json/studentRegistrations.json");
        $registrations = json_decode($json);
        foreach ($registrations as $registration) {
            StudentRegistration::create([
                'id' => $registration->id,
                'student_id' => $registration->student_id,
                'detail_id' => $registration->detail_id,
                'status_id' => $registration->status_id,
            ]);
        }

        $json = File::get("database/seeders/json/studentRegistrationProgress.json");
        $progresses = json_decode($json);
        foreach ($progresses as $progress) {
            StudentRegistrationProgress::create([
                'id' => $progress->id,
                'step_id' => $progress->step_id,
                'registration_id' => $progress->registration_id,
                'score' => $progress->score,
            ]);
        }
    }
}
