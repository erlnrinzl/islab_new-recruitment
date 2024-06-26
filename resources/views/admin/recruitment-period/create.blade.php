@extends('layouts.admin-v2')
@section('container')
    {{ Breadcrumbs::render('recruitment-period.create') }}
    <h2>Create New Recruitment Period</h2>

    <form action="{{ route('recruitment-period.store') }}" method="POST">
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
                            <input type="text" class="form-control" placeholder="Type period name..." id="period_name"
                                name="period_name" value="{{ old('period_name') }}" autocomplete="name" autofocus>
                        </div>
                        @error('period_name')
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
