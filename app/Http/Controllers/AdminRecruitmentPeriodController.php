<?php

namespace App\Http\Controllers;

use App\Models\RecruitmentPeriod;
use Illuminate\Http\Request;

class AdminRecruitmentPeriodController extends Controller
{
    public function index()
    {
        $recruitmentPeriods = RecruitmentPeriod::all();

        return view('admin.recruitment-period.index', compact('recruitmentPeriods'));
    }

    public function create()
    {
        return view('admin.recruitment-period.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'period_name' => 'required'
        // ]);

        RecruitmentPeriod::create([
            'period_name' => $request["period_name"]
        ]);

        return redirect()->route('recruitment-period.index')->with('message', 'New recruitment period created!');
    }

    public function show(RecruitmentPeriod $recruitmentPeriod)
    {
        //
    }

    public function edit(RecruitmentPeriod $recruitmentPeriod)
    {
        return view('admin.recruitment-period.edit', compact('recruitmentPeriod'));
    }

    public function update(Request $request, RecruitmentPeriod $recruitmentPeriod)
    {
        $recruitmentPeriod->update([
            'period_name' => $request["period_name"]
        ]);

        return redirect()->route('recruitment-period.index')->with('message', 'Recruitment period updated!');
    }

    public function destroy(RecruitmentPeriod $recruitmentPeriod)
    {
        $recruitmentPeriod->delete();
        return redirect()->route('recruitment-period.index')->with('message', 'Recruitment period deleted successfully!');
    }
}
