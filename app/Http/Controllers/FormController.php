<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\CampusStreamCourse as StreamCourse;
use App\Models\RecruitmentDetail;
use App\Models\RecruitmentType;
use App\Models\RecruitmentScoreRequirement;
use App\Models\StudentRegistration;
use App\Models\StudentRegistrationProgress;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        $formType = request('form');
        if (!$formType) {
            return redirect()->route('dashboard');
        }

        $recruitmentType = RecruitmentType::where('type_slug', $formType)->first();
        if (!$recruitmentType) {
            return redirect()->route('dashboard');
        }

        $student = Students::where('user_id', Auth()->user()->id)->first();
        $stream_course = StreamCourse::where('major_id', $student->major_id)->get();
        
        $current_date = Carbon::now();

        $recruitment = RecruitmentDetail::where('type_id', $recruitmentType->id)
            ->where('date_start', '<=', $current_date)
            ->where('date_end', '>=', $current_date)
            ->where('major_id', $student->major_id)
            ->where('binusian', substr($student->nim,0,2))
            ->join('recruitment_periods', 'recruitment_details.period_id', '=', 'recruitment_periods.id')
            ->join('recruitment_types', 'recruitment_details.type_id', '=', 'recruitment_types.id')
            ->select('recruitment_details.id','recruitment_periods.period_name', 'recruitment_types.type_name')
            ->first();

        if (!$recruitment) {
            return redirect()->route('dashboard')->with('error', "You're not eligible to register {$recruitmentType->type_name} role");
        }
        
        $registrationData = StudentRegistration::where('student_id', $student->id)->where('detail_id', $recruitment->id)->first();

        if ($registrationData) {
            return redirect()->route('dashboard')->with('error', "You're already registered {$recruitmentType->type_name} role in {$recruitment->period_name} periods.");
        }

        cookie()->queue(cookie('recruitmentTypeId', $recruitmentType->id, 60));

        // $recruitment_score_required = RecruitmentScoreRequirement::where('detail_id', $recruitment->id)
        // ->join('campus_courses', 'recruitment_score_requirements.course_id', '=', 'campus_courses.id')
        // ->select('campus_courses.course_name', 'recruitment_score_requirements.course_score_min')
        // ->get();

        return view('form', [
            'student' => $student,
            'stream_course' => $stream_course,
            'recruitment' => $recruitment
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|numeric',
            'domicile' => 'required',
            'stream_course' => 'required|exists:campus_stream_courses,id'
        ]);

        // Update the student's data
        $student = Students::where('user_id', Auth()->user()->id)->first();
        $student->phone = $validatedData['phone'];
        $student->domicile = $validatedData['domicile'];
        $student->streamcourse_id = $validatedData['stream_course'];
        $student->save();

        $recruitmentTypeId = $request->cookie('recruitmentTypeId');
        if (!$recruitmentTypeId) {
            return redirect()->route('dashboard')->with('error', 'Invalid recruitment type.');
        }

        // Insert into student_registrations table
        $current_date = Carbon::now();
        
        $recruitment = RecruitmentDetail::where('type_id', $recruitmentTypeId)
            ->where('date_start', '<=', $current_date)
            ->where('date_end', '>=', $current_date)
            ->where('major_id', $student->major_id)
            ->where('binusian', substr($student->nim,0,2))
            ->join('recruitment_periods', 'recruitment_details.period_id', '=', 'recruitment_periods.id')
            ->join('recruitment_types', 'recruitment_details.type_id', '=', 'recruitment_types.id')
            ->select('recruitment_details.id', 'recruitment_periods.period_name', 'recruitment_types.type_name')
            ->first();

        $registration = StudentRegistration::create([
            'student_id' => $student->id,
            'detail_id' => $recruitment->id,
            'status_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Insert into student_registration_progress table
        StudentRegistrationProgress::create([
            'step_id' => 1,
            'registration_id' => $registration->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('dashboard')->with('message', 'Registration successful');
    }
}
