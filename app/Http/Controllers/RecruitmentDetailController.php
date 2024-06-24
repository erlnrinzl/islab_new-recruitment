<?php

namespace App\Http\Controllers;

use App\Models\CampusMajor;
use App\Models\RecruitmentDetail;
use App\Models\RecruitmentPeriod;
use App\Models\RecruitmentType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RecruitmentDetailController extends Controller
{

    public function index()
    {
        $recruitmentDetails = RecruitmentDetail::with('period', 'type', 'major')->get();

        return view('recruitment-detail.index', compact('recruitmentDetails'));
    }


    public function create()
    {
        $recruitmentPeriods = RecruitmentPeriod::all();
        $recruitmentTypes = RecruitmentType::all();
        $majors = CampusMajor::all();

        return view('recruitment-detail.create', compact('recruitmentPeriods', 'recruitmentTypes', 'majors'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'period_name_id' => 'required|exists:recruitment_periods,id',
            'batch' => 'required|numeric',
            "date_start" => 'required',
            "date_end" => 'required',
            'recruitment_role_id' => 'required|exists:recruitment_types,id',
            'recruitment_major_id' => 'required|exists:campus_majors,id',
            'binusian' => 'required',
            'recruitment_gpa' => 'required'
        ]);

        RecruitmentDetail::create([
            'period_id' => $validatedData['period_name_id'],
            'batch' => $validatedData['batch'],
            'date_start' => $validatedData['date_start'],
            'date_end' => $validatedData['date_end'],
            'type_id' => $validatedData['recruitment_role_id'],
            'major_id' => $validatedData['recruitment_major_id'],
            'binusian' => $validatedData['binusian'],
            'gpa_required' => $validatedData['recruitment_gpa'],
        ]);

        return redirect()->route('recruitment-detail.index')->with('message', 'New recruitment detail created!');
    }

    public function show(RecruitmentDetail $recruitmentDetail)
    {
        //
    }

    public function edit(RecruitmentDetail $recruitmentDetail)
    {
        $recruitmentPeriods = RecruitmentPeriod::all();
        $recruitmentTypes = RecruitmentType::all();
        $majors = CampusMajor::all();

        return view('recruitment-detail.edit', compact('recruitmentDetail', 'recruitmentPeriods', 'recruitmentTypes', 'majors'));
    }

    public function update(Request $request, RecruitmentDetail $recruitmentDetail)
    {

        $validatedData = $request->validate([
            'period_name_id' => 'required|exists:recruitment_periods,id',
            'batch' => 'required|numeric',
            "date_start" => 'required',
            "date_end" => 'required',
            'recruitment_role_id' => 'required|exists:recruitment_types,id',
            'recruitment_major_id' => 'required|exists:campus_majors,id',
            'binusian' => 'required',
            'recruitment_gpa' => 'required'
        ]);

        $recruitmentDetail->update([
            'period_id' => $validatedData['period_name_id'],
            'batch' => $validatedData['batch'],
            'date_start' => $validatedData['date_start'],
            'date_end' => $validatedData['date_end'],
            'type_id' => $validatedData['recruitment_role_id'],
            'major_id' => $validatedData['recruitment_major_id'],
            'binusian' => $validatedData['binusian'],
            'gpa_required' => $validatedData['recruitment_gpa'],
        ]);

        return redirect()->route('recruitment-detail.index')->with('message', 'Recruitment detail updated!');
    }

    public function destroy(RecruitmentDetail $recruitmentDetail)
    {
        $recruitmentDetail->delete();
        return redirect()->route('recruitment-detail.index')->with('message', 'Recruitment detail deleted successfully!');
    }
}
