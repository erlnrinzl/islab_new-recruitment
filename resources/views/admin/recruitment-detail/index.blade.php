@extends('layouts.admin-v2')
@section('container')
    {{ Breadcrumbs::render('recruitment-period.index') }}
    <div class="d-flex justify-content-between">
        <h2>Detail Periode Pendaftaran</h2>
        <div>
            <a class="btn btn-primary" href="{{ route('recruitment-detail.create') }}">
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
                        <th scope="col">Roles</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Major</th>
                        <th scope="col">Binusian</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($groupedDetails as $group)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ strtoupper($group['detail']->type->type_slug) }} - {{ $group['detail']->period->period_name }} <br> Batch {{ $group['detail']->batch }}
                            </td>
                            <td>
                                {{ \Carbon\Carbon::parse($group['detail']->date_start)->format('d M Y') }} - {{ \Carbon\Carbon::parse($group['detail']->date_end)->format('d M Y') }}
                            </td>
                            <td>
                                @foreach($group['majors'] as $major)
                                {{ $loop->index + 1 }}. {{ $major->major_name }}<br>
                                @endforeach
                            </td>
                            <td>
                                {{ implode(', ', array_map(function($binusian) { return 'B' . $binusian; }, $group['binusians'])) }}
                            </td>
                            <td>
                                <div class="d-flex">
                                    <div class="mx-2">
                                        <a class="btn btn-sm btn-warning" href="{{ route('recruitment-detail.editMultiple', ['type_slug' => $group['detail']->type->type_slug, 'hashed_params' => base64_encode($group['detail']->period->id . '-' . $group['detail']->batch . '-' . $group['detail']->gpa_required)]) }}">
                                            edit
                                        </a>
                                    </div>
                                    <div class="mx-2">
                                        <form method="POST"
                                            action="{{ route('recruitment-detail.destroyMultiple', ['type_slug' => $group['detail']->type->type_slug, 'hashed_params' => base64_encode($group['detail']->period->id . '-' . $group['detail']->batch . '-' . $group['detail']->gpa_required)]) }}">
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
