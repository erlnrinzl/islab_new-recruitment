@extends('layouts.admin-v2')
@section('container')
    {{-- {{ Breadcrumbs::render('recruitment-period.create') }} --}}
    <h2>View Tahapan</h2>

    <div class="d-flex justify-content-start my-3">
        <a class="btn btn-sm btn-light btn-outer-secondary" href="{{ route('recruitment-step.index') }}">
            <i class="bi bi-arrow-left"></i>
            <span>back</span>
        </a>
    </div>

    <div class="card mt-2">

        <div class="card-header">
            Detail
        </div>
        <div class="card-body">

            <div class="row container">
                <div class="align-items-center mb-4 col-6">
                    <div class="row">
                        <label class="fw-bold mb-1" for="recruitment_role_id">
                            Applied Roles
                        </label>

                        <div>
                            {{ $recruitmentStep->type->type_name }}
                        </div>
                    </div>
                </div>


                <div class="align-items-center mb-4 col-6">
                    <label class="mb-1 fw-bold" for="step_name">
                        Nama Tahapan
                    </label>
                    <div class="input-group">
                        {{ $recruitmentStep->step_name }}
                    </div>
                </div>

                <div class="align-items-center mb-4 col-6">
                    <label class="mb-1 fw-bold" for="step_order">
                        Urutan Tahapan
                    </label>
                    <div class="input-group">
                        {{ $recruitmentStep->step_order }}
                    </div>
                </div>

                <div class="align-items-center mb-4 col-6">
                    <label class="mb-1 fw-bold" for="step_score_min">
                        Minimal Score Required
                    </label>
                    <div>
                        {{ $recruitmentStep->step_score_min }}
                    </div>
                </div>

                <div class="align-items-center mb-4 col-12">
                    <label class="mb-1 fw-bold" for="step_description">
                        Step Description
                    </label>
                    <div class="input-group">
                        {{ $recruitmentStep->step_description }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
