@extends('layouts.admin-v2')
@section('container')
    {{-- {{ Breadcrumbs::render('recruitment-period.index') }} --}}
    <div class="d-flex justify-content-between">
        <h2>Tahapan Pendaftaran</h2>
        <div>
            <a class="btn btn-primary" href="{{ route('recruitment-step.create') }}">
                <i class="text-white-50 fw-bold pe-1 bi bi-plus"></i>
                <span>Tambah</span>
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
                        <th scope="col">Role</th>
                        <th scope="col">Nama Tahapan</th>
                        <th scope="col">Minimal Score</th>
                        <th scope="col">Urutan Tahap</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recruitmentSteps as $step)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ $step->type->type_name }}
                            </td>
                            <td>
                                {{ $step['step_name'] }}
                            </td>
                            <td>
                                {{ $step->step_score_min }}
                            </td>
                            <td>
                                {{ $step->step_order }}
                            </td>

                            <td class="d-flex justify-content-center">
                                <div class="d-flex">
                                    <div class="mx-2">
                                        <a class="btn btn-sm btn-outline-info"
                                            href="{{ route('recruitment-step.show', $step['id']) }}">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </div>
                                    <div class="mx-2">
                                        <a class="btn btn-sm btn-warning"
                                            href="{{ route('recruitment-step.edit', $step['id']) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </div>
                                    <div class="mx-2">
                                        <form method="POST" action="{{ route('recruitment-step.destroy', $step['id']) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
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
