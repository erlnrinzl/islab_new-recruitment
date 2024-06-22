<?php

namespace App\Http\Controllers;

use App\Models\RecruitmentPeriod;
use Illuminate\Http\Request;

class RecruitmentPeriodController extends Controller
{
    public function index()
    {
        return view('recruitment-period.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recruitment-period.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecruitmentPeriod  $recruitmentPeriod
     * @return \Illuminate\Http\Response
     */
    public function show(RecruitmentPeriod $recruitmentPeriod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecruitmentPeriod  $recruitmentPeriod
     * @return \Illuminate\Http\Response
     */
    public function edit(RecruitmentPeriod $recruitmentPeriod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecruitmentPeriod  $recruitmentPeriod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecruitmentPeriod $recruitmentPeriod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecruitmentPeriod  $recruitmentPeriod
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecruitmentPeriod $recruitmentPeriod)
    {
        //
    }
}
