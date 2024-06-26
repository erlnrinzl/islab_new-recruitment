<?php

namespace App\Http\Controllers;

use App\Models\CampusMajor;
use App\Models\RecruitmentDetail;
use App\Models\RecruitmentPeriod;
use App\Models\RecruitmentType;
use Illuminate\Http\Request;

class AdminRecruitmentDetailController extends Controller
{

    public function index()
    {
        $recruitmentDetails = RecruitmentDetail::with('period', 'type', 'major')->get();

        $groupedDetails = [];
        foreach ($recruitmentDetails as $detail) {
            $periodTypeKey = $detail->period->id . '-' . $detail->type->id . '-' . $detail->gpa_required;
            if (!isset($groupedDetails[$periodTypeKey])) {
                $groupedDetails[$periodTypeKey] = [
                    'detail' => $detail,
                    'majors' => [],
                    'binusians' => [],
                ];
            }

            if (!in_array($detail->major, $groupedDetails[$periodTypeKey]['majors'])) {
                $groupedDetails[$periodTypeKey]['majors'][] = $detail->major;
            }
            if (!in_array($detail->binusian, $groupedDetails[$periodTypeKey]['binusians'])) {
                $groupedDetails[$periodTypeKey]['binusians'][] = $detail->binusian;
            }
        }

        return view('admin.recruitment-detail.index', compact('groupedDetails'));
    }


    public function create()
    {   
        $recruitment_periods = RecruitmentPeriod::all();
        $recruitment_types = RecruitmentType::all();
        $majors = CampusMajor::all();

        $current_year = date('Y');
        $binusians = range(($current_year % 100) + 1, ($current_year % 100) + 5);

        return view('admin.recruitment-detail.create', compact('recruitment_periods','recruitment_types','majors','binusians'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'period_name_id' => 'required|exists:recruitment_periods,id',
            'batch' => 'required|numeric',
            'date_start' => 'required',
            'date_end' => 'required',
            'recruitment_role_id' => 'required|exists:recruitment_types,id',
            'recruitment_major_id' => 'required|array',
            'recruitment_major_id.*' => 'exists:campus_majors,id',
            'binusian' => 'required|array',
            'binusian.*' => 'numeric',
            'recruitment_gpa' => 'required'
        ]);

        foreach ($validatedData['binusian'] as $binusian) {
            foreach ($validatedData['recruitment_major_id'] as $major_selected) {
                $newDetail = new RecruitmentDetail;
                $newDetail->period_id = $validatedData['period_name_id'];
                $newDetail->batch = $validatedData['batch'];
                $newDetail->date_start = $validatedData['date_start'];
                $newDetail->date_end = $validatedData['date_end'];
                $newDetail->type_id = $validatedData['recruitment_role_id'];
                $newDetail->gpa_required = $validatedData['recruitment_gpa'];
                $newDetail->major_id = $major_selected;
                $newDetail->binusian = $binusian;
                $newDetail->save();
            }
        }

        return redirect()->route('recruitment-detail.index')->with('message', 'New recruitment detail created!');
    }

    public function show(RecruitmentDetail $recruitmentDetail)
    {
        //
    }

    public function edit($type_slug, $hashedParams)
    {
        list($period_id, $batch, $gpa) = explode('-', base64_decode($hashedParams));
        $recruitment = compact('period_id', 'batch', 'gpa');

        $recruitment_details = RecruitmentDetail::whereHas('type', function ($query) use ($type_slug) {
            $query->where('type_slug', $type_slug);
        })->where('batch', $batch)->where('gpa_required',$gpa)->where('period_id', $period_id)->get();
        
        $recruitment_periods = RecruitmentPeriod::all();
        $recruitment_types = RecruitmentType::all();

        $majors = CampusMajor::all();

        $current_year = date('Y');
        $binusian_range = range(($current_year % 100) + 1, ($current_year % 100) + 5);
        $binusian_unique = $recruitment_details->unique('binusian')->pluck('binusian')->toArray();
        $binusians = array_unique(array_merge($binusian_unique, $binusian_range));
        sort($binusians);

        $majors_selected = $recruitment_details->pluck('major_id')->toArray();
        $binusian_selected = $recruitment_details->pluck('binusian')->toArray();

        return view('admin.recruitment-detail.edit', compact('recruitment','recruitment_details', 'type_slug','hashedParams','recruitment_periods','recruitment_types','majors','majors_selected','binusians','binusian_selected'));
    }

    public function update(Request $request, $type_slug, $hashedParams)
    {
        $validatedData = $request->validate([
            'period_name_id' => 'required|exists:recruitment_periods,id',
            'batch' => 'required|numeric',
            'date_start' => 'required',
            'date_end' => 'required',
            'recruitment_role_id' => 'required|exists:recruitment_types,id',
            'recruitment_major_id' => 'required|array',
            'recruitment_major_id.*' => 'exists:campus_majors,id',
            'binusian' => 'required|array',
            'binusian.*' => 'numeric',
            'recruitment_gpa' => 'required'
        ]);

        list($period_id, $batch, $gpa) = explode('-', base64_decode($hashedParams));

        $recruitment_details = RecruitmentDetail::whereHas('type', function ($query) use ($type_slug) {
            $query->where('type_slug', $type_slug);
        })->where('batch', $batch)->where('gpa_required', $gpa)->where('period_id', $period_id)->get();
        
        foreach ($recruitment_details as $detail) {
            if (!in_array($detail->binusian, $validatedData['binusian'])) {
                $detail->delete();
            }
        }

        foreach ($validatedData['binusian'] as $binusian) {
            $recruitment_details = RecruitmentDetail::whereHas('type', function ($query) use ($type_slug) {
                $query->where('type_slug', $type_slug);
            })->where('batch', $batch)->where('gpa_required', $gpa)->where('binusian', $binusian)->where('period_id', $period_id)->get();

            foreach ($recruitment_details as $detail) {
                if (!in_array($detail->major_id, $validatedData['recruitment_major_id'])) {
                    $detail->delete();
                }
            }

            foreach ($validatedData['recruitment_major_id'] as $major_selected) {
                $recruitment_details = RecruitmentDetail::whereHas('type', function ($query) use ($type_slug) {
                    $query->where('type_slug', $type_slug);
                })->where('batch', $batch)->where('gpa_required', $gpa)->where('binusian', $binusian)->where('major_id', $major_selected)->where('period_id', $period_id)->get();

                if (count($recruitment_details) === 0) {
                    $newDetail = new RecruitmentDetail;
                    $newDetail->period_id = $validatedData['period_name_id'];
                    $newDetail->batch = $validatedData['batch'];
                    $newDetail->date_start = $validatedData['date_start'];
                    $newDetail->date_end = $validatedData['date_end'];
                    $newDetail->type_id = $validatedData['recruitment_role_id'];
                    $newDetail->gpa_required = $validatedData['recruitment_gpa'];
                    $newDetail->major_id = $major_selected;
                    $newDetail->binusian = $binusian;
                    $newDetail->save();
                }
                else {
                    foreach ($recruitment_details as $detail) {
                        $updateData = [
                            'period_id' => $validatedData['period_name_id'],
                            'batch' => $validatedData['batch'],
                            'date_start' => $validatedData['date_start'],
                            'date_end' => $validatedData['date_end'],
                            'type_id' => $validatedData['recruitment_role_id'],
                            'gpa_required' => $validatedData['recruitment_gpa'],
                        ];
                        
                        $detail->update($updateData);
                    }
                }
            }
        }

        return redirect()->route('recruitment-detail.index')->with('message', 'Recruitment details updated successfully!');
    }

    public function destroy($type_slug, $hashedParams)
    {
        list($period_id, $batch, $gpa) = explode('-', base64_decode($hashedParams));
        $recruitment = compact('period_id', 'batch', 'gpa');

        $recruitment_details = RecruitmentDetail::whereHas('type', function ($query) use ($type_slug) {
            $query->where('type_slug', $type_slug);
        })->where('batch', $batch)->where('gpa_required',$gpa)->where('period_id', $period_id)->get();

        foreach ($recruitment_details as $detail) {
            $detail->delete();
        }

        return redirect()->route('recruitment-detail.index')->with('message', 'Recruitment detail deleted successfully!');
    }
}


