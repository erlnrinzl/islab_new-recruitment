@extends('layouts.admin-v2')
@section('container')
    <h2>Create New Recruitment Period Detail</h2>

    <form action="{{ route('recruitment-detail.updateMultiple', [$type_slug, $hashedParams]) }}" method="POST">
        @csrf
        @method('PUT')
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
                                <option disabled value="default">Choose...</option>
                                @foreach ($recruitment_periods as $period)
                                    @if ($recruitment['period_id'] == $period)
                                        <option selected value={{ $period->id }}>{{ $period->period_name }}</option>
                                    @else
                                        <option value={{ $period->id }}>{{ $period->period_name }}</option>
                                    @endif
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
                                name="batch" value="{{ $recruitment['batch'] }}" required autocomplete="name"
                                autofocus>
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
                                name="date_start" value="{{ \Carbon\Carbon::parse($recruitment_details->first()->date_start)->format('Y-m-d') }}" required
                                autocomplete="bday" autofocus>
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
                                    name="date_end" value="{{ \Carbon\Carbon::parse($recruitment_details->first()->date_end)->format('Y-m-d') }}" required
                                    autocomplete="name" autofocus>
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

                                    <option disabled value="default">Choose...</option>

                                    @foreach ($recruitment_types as $type)
                                        @if ($recruitment_details->first()->type == $type)
                                            <option selected value="{{ $type->id }}">{{ strtoupper($type->type_slug) }}</option>
                                        @else
                                            <option value="{{ $type->id }}">{{ strtoupper($type->type_slug) }}</option>
                                        @endif
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
                                @foreach($majors as $major)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $major->id }}" name="recruitment_major_id[]" id="major_{{ $major->id }}" {{ in_array($major->id, $majors_selected) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="major_{{ $major->id }}">
                                            {{ $major->major_name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <label class="mb-1" for="binusian">
                            Binusian
                        </label>
                        <div>
                            @foreach($binusians as $binusian)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $binusian }}" name="binusian[]" id="binusian_{{ $binusian }}" {{ in_array($binusian, $binusian_selected) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="binusian_{{ $binusian }}">
                                        B{{ $binusian }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group align-items-center mb-4 col-4">
                        <label class="mb-1" for="recruitment_gpa">
                            GPA Required
                        </label>
                        <div>
                            <input type="text" class="form-control" placeholder="GPA" id="recruitment_gpa"
                                name="recruitment_gpa" value="{{ $recruitment_details->first()->gpa_required }}" required
                                autocomplete="name" autofocus>
                            @error('recruitment_gpa')
                                <span class="invalid-tooltip" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success" type="submit"">Update</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
