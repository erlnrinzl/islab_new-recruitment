@extends('layouts.admin-v2')
@section('container')
    {{-- {{ Breadcrumbs::render('recruitment-period.create') }} --}}
    <h2>Create New Recruitment Steps</h2>

    <form action="{{ route('recruitment-step.store') }}" method="POST">
        @csrf
        <div class="card mt-2">

            <div class="card-header">
                Recruitment Step
            </div>
            <div class="card-body">

                <div class="row container">
                    <div class="form-group align-items-center mb-4 col-4">
                        <div class="row">
                            <label class="mb-1" for="recruitment_role_id">
                                Applied Roles
                            </label>

                            <div>
                                <select class="form-control selectpicker" id="recruitment_role_id"
                                    name="recruitment_role_id" data-placeholder="Choose roles to be included"
                                    data-actions-box="true" data-live-search="true" required>
                                    @foreach ($recruitmentTypes as $type)
                                        <option value="{{ $type->id }}" data-subtext="{{ $type->type_name }}">
                                            <div>
                                                <span>{{ strtoupper($type->type_slug) }}</span>
                                            </div>
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group align-items-center mb-4 col-4">
                        <label class="mb-1" for="step_name">
                            Step Name
                        </label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type step name..." id="step_name"
                                name="step_name" value="{{ old('step_name') }}" autocomplete="name" autofocus required>
                        </div>
                        @error('step_name')
                            <span class="invalid-tooltip" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <label class="mb-1" for="step_order">
                            Step Order
                        </label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Step order" id="step_order"
                                name="step_order" value="{{ old('step_order') }}" autocomplete="name" autofocus required>
                        </div>
                        @error('step_order')
                            <span class="invalid-tooltip" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <label class="mb-1" for="step_score_min">
                            Minimal Score Required
                        </label>
                        <div>
                            <input type="text" class="form-control" placeholder="Minimal Score" id="step_score_min"
                                name="step_score_min" value="{{ old('step_score_min') }}" required autocomplete="name"
                                autofocus>
                            @error('step_score_min')
                                <span class="invalid-tooltip" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group align-items-center mb-4 col-12">
                        <label class="mb-1" for="step_description">
                            Step Description
                        </label>
                        <div class="input-group">
                            <textarea class="form-control" id="step_description" name="step_description" placeholder="Type step description here..."
                                rows="5" required></textarea>
                        </div>
                        @error('step_description')
                            <span class="invalid-tooltip" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success" type="submit"">submit</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
