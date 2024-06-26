@extends('layouts.admin-v2')
@section('container')
    <div class="d-flex justify-content-between">
        <h2>List Pendaftar</h2>
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
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Region</th>
                        <th scope="col">Major</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registrants as $registrant)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ strtoupper($registrant->detail->type['type_slug']) }}
                            </td>
                            <td>
                                {{ ucwords(strtolower($registrant->student['name'])) }}
                            </td>
                            <td>
                                {{ $registrant->student['nim'] }}
                            </td>
                            <td>
                                {{ $registrant->student->region['region_name'] }}
                            </td>
                            <td>
                                {{ $registrant->student->major['major_name'] }}
                            </td>
                            <td>
                                {{ $registrant->student['email'] }}
                            </td>
                            <td>
                                <div class="d-flex">
                                    <div class="mx-2">
                                        <a class="btn btn-sm btn-warning"
                                            href="#">
                                            edit
                                        </a>
                                    </div>
                                    <div class="mx-2">
                                        <form method="POST"
                                            action="#">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit" disabled>delete</button>
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
