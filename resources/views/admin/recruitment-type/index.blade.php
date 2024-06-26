@extends('layouts.admin-v2')
@section('container')
    {{ Breadcrumbs::render('recruitment-type.index') }}
    <div class="d-flex justify-content-between">
        <h2>Role Pendaftaran</h2>
        <div>
            <a class="btn btn-primary" href="{{ route('recruitment-type.create') }}">
                <i class="text-white-50 fw-bold pe-1 bi bi-plus"></i>
                <span>New Role</span>
            </a>
        </div>
    </div>

    <div class="card mt-2">
        <div class="card-header">
            <div class="d-flex justify-content-end">
                <form action="" class="align">
                    <input type="text" placeholder="type to search">
                    <button class="btn btn-sm btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-progress">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Role</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recruitmentTypes as $type)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ $type['type_name'] }}
                            </td>
                            <td>
                                <span class="badge text-bg-primary">{{ strtoupper($type['type_slug']) }}</span>
                            </td>

                            <td>
                                <div class="d-flex">
                                    <div class="mx-2">
                                        <a class="btn btn-sm btn-warning"
                                            href="{{ route('recruitment-type.edit', $type['id']) }}">
                                            edit
                                        </a>
                                    </div>
                                    <div class="mx-2">
                                        <form method="POST" action="{{ route('recruitment-type.destroy', $type['id']) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
