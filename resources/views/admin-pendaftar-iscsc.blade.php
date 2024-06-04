@extends('layouts.admin')
@section('container')
<div class="container-fluid">
    <div class="row d-flex mt-2 text-center">
        <div class="col">
            <h3>Pendaftar [ISCSC]</h3>
        </div>
    </div>
    @include('partials.dropdown-table')
    <div class="row mt-4">
        <div class="col">
          <table class="table table-bordered table-progress">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Posisi</th>
                <th scope="col">Periode</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kampus Area</th>
                <th scope="col">Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Matthew C.H.B</td>
                <td>PTA</td>
                <td>Semester Genap 2023/2024</td>
                <td>BIT</td>
                <td>Bekasi</td>
                <td>Accepted</td>
                <td><button class="btn btn-primary upload-btn">Detail</button></td>
              </tr>
              <tr>
                <td>Matthew C.H.B</td>
                <td>PTA</td>
                <td>Semester Genap 2023/2024</td>
                <td>BIT</td>
                <td>Bekasi</td>
                <td>Accepted</td>
                <td><button class="btn btn-primary upload-btn">Detail</button></td>
              </tr>
              <tr>
                <td>Matthew C.H.B</td>
                <td>PTA</td>
                <td>Semester Ganjil 2023/2024</td>
                <td>BIT</td>
                <td>Bekasi</td>
                <td>Rejected</td>
                <td><button class="btn btn-primary upload-btn">Detail</button></td>
              </tr>
              <tr>
                <td>Matthew C.H.B</td>
                <td>PTA</td>
                <td>Semester Ganjil 2023/2024</td>
                <td>BIT</td>
                <td>Bekasi</td>
                <td>Waiting...</td>
                <td><button class="btn btn-primary upload-btn">Detail</button></td>
              </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection