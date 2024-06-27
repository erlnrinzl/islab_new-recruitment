<?php

namespace App\Http\Controllers;

use App\Models\RecruitmentScoreRequirement;
use App\Http\Controllers\Controller;
use App\Models\RecruitmentDetail;
use Illuminate\Http\Request;

class AdminCourseEligibilityController extends Controller
{
    public function index()
    {
        $recruitmentDetails = RecruitmentDetail::with('recruitmentScoreRequirements')->get();

        return view('admin.course-eligibility.index', compact('recruitmentDetails'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(RecruitmentScoreRequirement $recruitmentScoreRequirement)
    {
        //
    }

    public function edit(RecruitmentScoreRequirement $recruitmentScoreRequirement)
    {
        //
    }

    public function update(Request $request, RecruitmentScoreRequirement $recruitmentScoreRequirement)
    {
        //
    }

    public function destroy(RecruitmentScoreRequirement $recruitmentScoreRequirement)
    {
        //
    }
}
