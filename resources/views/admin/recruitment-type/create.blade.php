@extends('layouts.admin-v2')
@section('container')
    {{ Breadcrumbs::render('recruitment-type.create') }}
    <h2>Create New Recruitment Role</h2>

    <form action="{{ route('recruitment-type.store') }}" method="POST">
        @csrf
        <div class="card mt-2">
            <div class="card-header">
                Recruitment Role
            </div>
            <div class="card-body">
                <div class="row container">
                    <div class="form-group align-items-center mb-4 col-6">
                        <label class="mb-1" for="role_name">
                            Role Name
                        </label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type role name..." id="role_name"
                                name="role_name" value="{{ old('role_name') }}" autocomplete="name" autofocus required>
                        </div>
                        @error('role_name')
                            <span class="invalid-tooltip" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group align-items-center mb-4 col-6">
                        <label class="mb-1" for="role_tag">
                            Role Tag
                        </label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type role tag..." id="role_tag"
                                name="role_tag" value="{{ old('role_tag') }}" autocomplete="name" autofocus required>
                        </div>
                        @error('role_tag')
                            <span class="invalid-tooltip" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group align-items-center mb-4 col-12">
                        <label class="mb-1" for="role_tag">
                            Role Description
                        </label>
                        <div class="input-group">
                            <textarea class="form-control" id="role_description" name="role_description" placeholder="type role description here..."
                                rows="5" required></textarea>
                        </div>
                        @error('role_tag')
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
