<?php

namespace App\Http\Controllers;

use App\Models\RecruitmentType;
use Illuminate\Http\Request;

class RecruitmentTypeController extends Controller
{
    public function index()
    {
        $recruitmentTypes = RecruitmentType::all();

        return view('recruitment-type.index', compact('recruitmentTypes'));
    }

    public function create()
    {
        return view('recruitment-type.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'role_name' => 'required',
            'role_tag' => 'required',
            'role_description' => 'required'
        ]);

        $roleIcon = "";

        RecruitmentType::create([
            'type_name' => $validatedData['role_name'],
            'type_slug' => $validatedData['role_tag'],
            'description' => $validatedData['role_description'],
            'icon' => $roleIcon
        ]);

        return redirect()->route('recruitment-type.index')->with('message', 'Recruitment role created!');
    }

    public function show(RecruitmentType $recruitmentType)
    {
        //
    }

    public function edit(RecruitmentType $recruitmentType)
    {
        return view('recruitment-type.edit', compact('recruitmentType'));
    }

    public function update(Request $request, RecruitmentType $recruitmentType)
    {
        $validatedData = $request->validate([
            'role_name' => 'required',
            'role_tag' => 'required',
            'role_description' => 'required'
        ]);

        $recruitmentType->update([
            'type_name' => $validatedData['role_name'],
            'type_slug' => $validatedData['role_tag'],
            'description' => $validatedData['role_description'],
            'icon' => $recruitmentType->icon
        ]);

        return redirect()->route('recruitment-type.index')->with('message', 'Recruitment role updated!');
    }

    public function destroy(RecruitmentType $recruitmentType)
    {
        $recruitmentType->delete();

        return redirect()->route('recruitment-type.index')->with('message', 'Role deleted successfully!');
    }
}
