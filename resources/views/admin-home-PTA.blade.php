@extends('layouts.admin')
@section('container')
<div class="container-fluid">
    <div class="row d-flex mt-2 text-center">
        <div class="col">
            <h3>Periode [Part Time Assistant]</h3>
        </div>
    </div>
    @include('partials.dropdown-table')
    <div class="row mt-4">
        <div class="col">
            <table class="table table-bordered table-progress">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Kampus Area</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>placeholder</td>
                        <td>placeholder</td>
                        <td>placeholder</td>
                        <td>placeholder</td>
                        <td>placeholder</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection




{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>
    <style>
        .dropdown-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            padding: 20px;
            border-radius: 10px;
        }

        .dropdown-title {
            text-align: center;
            width: 100%; 
            margin-bottom: 20px;
            font-weight: bold; 
        }
        .dropdown-toggle,
        .search-btn {
            background-color: #FFFFFF;
            color: #000000;
            border: 2px solid #ced4da; 
            border-radius: 66px;
            padding: 5px 20px;
        }

        .table thead th {
            background-color: #0096D9;
            color: #FFFFFF;
        }

        .table tbody td {
            background-color: #FFFFFF;
        }
    </style>
</x-app-layout> --}}
