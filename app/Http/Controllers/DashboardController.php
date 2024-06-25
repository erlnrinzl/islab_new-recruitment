<?php

namespace App\Http\Controllers;

use App\Models\StudentRegistration;
use App\Models\StudentRegistrationProgress;
use App\Models\Students;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $student = Students::where('user_id', Auth()->user()->id)->first();
        
        $current_date = Carbon::now();
        $thirty_days_ago = $current_date->copy()->subDays(30);

        $all_reg_data = StudentRegistrationProgress::where('student_registrations.student_id', $student->id)
            ->join('student_registrations', 'student_registration_progress.registration_id', '=', 'student_registrations.id')
            ->join('student_registration_status', 'student_registrations.status_id', '=', 'student_registration_status.id')
            ->join('recruitment_details', 'student_registrations.detail_id', '=', 'recruitment_details.id')
            ->join('recruitment_types', 'recruitment_details.type_id', '=', 'recruitment_types.id')
            ->join('recruitment_periods', 'recruitment_details.period_id', '=', 'recruitment_periods.id')
            ->select('student_registration_progress.registration_id', 'recruitment_types.type_slug', 'recruitment_periods.period_name', 'student_registration_progress.step_id', 'student_registration_progress.score', 'recruitment_details.date_start', 'recruitment_details.date_end','student_registration_status.status_name')
            ->get();

        $current_reg_data = $all_reg_data->filter(function ($item) use ($current_date, $thirty_days_ago) {
            return $item->date_start <= $current_date && $item->date_end >= $thirty_days_ago;
        });

        $past_reg_data = $all_reg_data->filter(function ($item) use ($current_date, $thirty_days_ago) {
            return $item->date_start > $current_date || $item->date_end < $thirty_days_ago;
        });

        function groupData($data)
        {
            return $data->groupBy('registration_id')->map(function ($registration) {
                $type = $registration->first()->type_slug;
                $period_name = $registration->first()->period_name;
                $progress = $registration->pluck('score')->toArray();
                $average = count($progress) / 3;
                $status = $registration->first()->status_name;

                return [
                    'type' => $type,
                    'period_name' => $period_name,
                    'progress' => $progress,
                    'average_progress' => $average,
                    'status_name' => $status,
                ];
            });
        }

        $grouped_current_data = groupData($current_reg_data);
        $grouped_past_data = groupData($past_reg_data);

        $student_registration = StudentRegistration::where('student_id', $student->id)->get();

        $current_reg_progress = $student_registration->map(function ($registration) use ($grouped_current_data) {
            return $grouped_current_data->get($registration->id);
        })->filter();

        $past_reg = $student_registration->map(function ($past_registration) use ($grouped_past_data) {
            return $grouped_past_data->get($past_registration->id);
        })->filter();

        return view('dashboard', ['current_progress' => $current_reg_progress, 'past_reg' => $past_reg]);
    }
}