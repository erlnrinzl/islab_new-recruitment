<x-app-layout>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="mt-4 mb-4 dropdown-container">
                    <h3 class="dropdown-title">Periode [Part Time Assistant]</h3>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Periode
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Jurusan
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            Status
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                            Kampus
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                            <li><a class="dropdown-item" href="#">placeholder</a></li>
                            <li><a class="dropdown-item" href="#">Splaceholder</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-primary search-btn">Search</button>
                </div>

                <div class="mb-4">
                    <table class="table table-bordered">
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
    </div>
</x-app-layout>
