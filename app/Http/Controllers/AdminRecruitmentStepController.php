<?php

namespace App\Http\Controllers;

use App\Models\RecruitmentStep;
use App\Models\RecruitmentType;
use Illuminate\Http\Request;

class AdminRecruitmentStepController extends Controller
{
    public function index()
    {
        $recruitmentSteps = RecruitmentStep::with('type')->get();

        return view('admin.recruitment-step.index', compact('recruitmentSteps'));
    }

    public function create()
    {
        $recruitmentTypes = RecruitmentType::all();

        return view('admin.recruitment-step.create', compact('recruitmentTypes'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'recruitment_role_id' => 'required|exists:recruitment_types,id',
            'step_name' => 'required',
            'step_order' => 'required|numeric',
            'step_description' => 'required',
            'step_score_min' => 'required',
        ]);

        RecruitmentStep::create([
            'type_id' => $validatedData['recruitment_role_id'],
            'step_name' => $validatedData['step_name'],
            'step_order' => $validatedData['step_order'],
            'step_description' => $validatedData['step_description'],
            'step_score_min' => $validatedData['step_score_min']
        ]);

        return redirect()->route('recruitment-step.index')->with('message', 'New recruitment period created!');
    }

    public function show(RecruitmentStep $recruitmentStep)
    {
        //
    }

    public function edit(RecruitmentStep $recruitmentStep)
    {
        $recruitmentTypes = RecruitmentType::all();

        return view('admin.recruitment-step.edit', compact('recruitmentStep', 'recruitmentTypes'));
    }

    public function update(Request $request, RecruitmentStep $recruitmentStep)
    {
        $validatedData = $request->validate([
            'recruitment_role_id' => 'required|exists:recruitment_types,id',
            'step_name' => 'required',
            'step_order' => 'required|numeric',
            'step_description' => 'required',
            'step_score_min' => 'required',
        ]);

        $recruitmentStep->update([
            'type_id' => $validatedData['recruitment_role_id'],
            'step_name' => $validatedData['step_name'],
            'step_order' => $validatedData['step_order'],
            'step_description' => $validatedData['step_description'],
            'step_score_min' => $validatedData['step_score_min']
        ]);

        return redirect()->route('recruitment-step.index')->with('message', 'New recruitment period created!');
    }

    public function destroy(RecruitmentStep $recruitmentStep)
    {
        $recruitmentStep->delete();
        return redirect()->route('recruitment-step.index')->with('message', 'Recruitment step deleted successfully!');
    }
}
