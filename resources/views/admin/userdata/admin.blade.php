@extends('layouts.admin-v2')
@section('container')
    <div class="d-flex justify-content-between">
        <h2>List User Admin</h2>
        <div>
            <a class="btn btn-primary" href="/admin/user-admin/create">
                <i class="text-white-50 fw-bold pe-1 bi bi-plus"></i>
                <span>New User Admin</span>
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
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user_admin as $user)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ ucwords(strtolower($user['name'])) }}
                            </td>
                            <td>
                                {{ $user['email'] }}
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
