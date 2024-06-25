@extends('layouts.admin-v2')
@section('container')
    {{ Breadcrumbs::render('recruitment-detail.create') }}
    <h2>Create New Recruitment Period Detail</h2>

    <form action="{{ route('recruitment-detail.store') }}" method="POST">
        @csrf
        <div class="card mt-2">
            <div class="card-header">
                Recruitment Period
            </div>
            <div class="card-body">
                <div class="row container">
                    <div class="form-group align-items-center mb-4 col-12">
                        <label class="mb-1" for="period_name">
                            Period Name
                        </label>
                        <div class="input-group">
                            <select class="form-select" id="period_name_id" name="period_name_id" required>
                                <option selected disabled value="default">Choose...</option>
                                @foreach ($recruitmentPeriods as $period)
                                    <option value={{ $period->id }}>{{ $period->period_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('period_name')
                            <span class="invalid-tooltip" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <label class="mb-1" for="batch">
                            Batch
                        </label>
                        <div>
                            <input type="text" class="form-control" placeholder="Batch number" id="batch"
                                name="batch" value="{{ old('batch') }}" required autocomplete="name" autofocus>
                            @error('batch')
                                <span class="invalid-tooltip" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <div class="row">
                            <label class="mb-1" for="date_start">
                                Start Date
                            </label>
                            <div>
                                <input type="date" class="form-control" placeholder="Start date" id="date_start"
                                    name="date_start" value="{{ old('date_start') }}" required autocomplete="bday"
                                    autofocus>
                                @error('date_start')
                                    <span class="invalid-tooltip" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <div class="row">
                            <label class="mb-1" for="date_end">
                                End Date
                            </label>
                            <div>
                                <input type="date" class="form-control" placeholder="End Date" id="date_end"
                                    name="date_end" value="{{ old('date_end') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-tooltip" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <div class="row">
                            <label class="mb-1" for="recruitment_role_id">
                                Applied Roles
                            </label>

                            <div>

                                <select class="form-control selectpicker" id="recruitment_role_id"
                                    name="recruitment_role_id" data-placeholder="Choose roles to be included"
                                    data-live-search="true" required>

                                    <option selected disabled value="default">Choose...</option>

                                    @foreach ($recruitmentTypes as $type)
                                        <option value="{{ $type->id }}">{{ $type->type_slug }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <div class="row">
                            <label class="mb-1" for="recruitment_major_id">
                                Major
                            </label>

                            <div>

                                <select class="form-control selectpicker" id="recruitment_major_id"
                                    name="recruitment_major_id" data-placeholder="Choose major to be included"
                                    data-live-search="true" required>

                                    <option selected disabled value="default">Choose...</option>

                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}">{{ $major->major_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <label class="mb-1" for="binusian">
                            Binusian
                        </label>
                        <div>
                            <input type="text" class="form-control" placeholder="Binusian year" id="binusian"
                                name="binusian" value="{{ old('binusian') }}" required autocomplete="name" autofocus>
                            @error('binusian')
                                <span class="invalid-tooltip" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <label class="mb-1" for="recruitment_gpa">
                            GPA Required
                        </label>
                        <div>
                            <input type="text" class="form-control" placeholder="GPA" id="recruitment_gpa"
                                name="recruitment_gpa" value="{{ old('recruitment_gpa') }}" required autocomplete="name"
                                autofocus>
                            @error('recruitment_gpa')
                                <span class="invalid-tooltip" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success" type="submit"">submit</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
