@extends('layouts.admin-v2')
@section('container')
    {{ Breadcrumbs::render('recruitment-period.index') }}
    <div class="d-flex justify-content-between">
        <h2>Periode Pendaftaran</h2>
        <div>
            <a class="btn btn-primary" href="/admin/recruitment-period/create">
                <i class="text-white-50 fw-bold pe-1 bi bi-plus"></i>
                <span>New Period</span>
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
                        <th scope="col">Nama Periode</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recruitmentPeriods as $period)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ $period['period_name'] }}
                            </td>

                            <td>
                                <div class="d-flex">
                                    <div class="mx-2">
                                        <a class="btn btn-sm btn-warning"
                                            href="{{ route('recruitment-period.edit', $period['id']) }}">
                                            edit
                                        </a>
                                    </div>
                                    <div class="mx-2">
                                        <form method="POST"
                                            action="{{ route('recruitment-period.destroy', $period['id']) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" disabled>delete</button>
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
