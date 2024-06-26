<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/tahapan.css"> --}}
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>


    <title>Admin</title>
</head>

<body id='page-top'>
    <div class="wrapper">

        {{-- side bar --}}
        <aside class="sidebar p-2">
            <div class="logo pb-4">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="{{ asset('image/logo-SIS-PNG-white.png') }}" alt="">
                </a>
            </div>

            <hr class="text-white">

            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Nav Item - Dashboard -->
                <li>
                    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                        <i class="text-white-50 px-1 bi bi-speedometer"></i>
                        <span class="text-white">Dashboard</span>
                    </a>
                </li>
                <hr class="text-white">

                <li class="nav-item py-2">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapse-superadmin" role="button"
                        aria-expanded="false" aria-controls="collapse-superadmin">
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="text-white-50 px-1 bi bi-person-workspace"></i>
                                <span class="text-white fs-6">Super Admin</span>
                            </div>
                            <i class="px-1 text-white bi bi-chevron-right"></i>
                        </div>
                    </a>

                    <div class="collapse" id="collapse-superadmin">
                        <ul class="ms-1 text-white">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/recruitment-type">Recruitment Type</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/recruitment-period">Periode Pendaftaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/user-admin">List Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/user-mahasiswa">List Mahasiswa</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item py-2">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapse-recruitment" role="button"
                        aria-expanded="false" aria-controls="collapse-recruitment">
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="text-white-50 px-1 bi bi-person-workspace"></i>
                                <span class="text-white fs-6">Recruitment Management</span>
                            </div>
                            <i class="px-1 text-white bi bi-chevron-right"></i>
                        </div>
                    </a>

                    <div class="collapse" id="collapse-recruitment">
                        <ul class="ms-1 text-white">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/recruitment-detail">Periode dan Eligibilitas IPK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Eligibilitas Nilai Matkul</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/recruitment-step">Tahapan Pendaftaran</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item py-2">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapse-registration" role="button"
                        aria-expanded="false" aria-controls="collapse-registration">
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="text-white-50 px-1 bi bi-file-earmark-arrow-up"></i>
                                <span class="text-white fs-6">Registration Management</span>
                            </div>
                            <i class="px-1 text-white bi bi-chevron-right"></i>
                        </div>
                    </a>
                    <div class="collapse" id="collapse-registration">
                        <ul class="ms-1 text-white">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/registrant">List Pendaftar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Input IPK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Input Nilai Matkul</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Penilaian</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item py-2">
                    <a class="nav-link" data-bs-toggle="collapse" href="#" role="button">
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="text-white-50 px-1 bi bi-gear"></i>
                                <span class="text-white fs-6">System Management</span>
                            </div>
                        </div>
                    </a>
                </li>

                <hr class="text-white">

                <li class="nav-item py-2">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapse-system" role="button"
                        aria-expanded="false" aria-controls="collapse-system">
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="text-white-50 px-1 bi bi-people"></i>
                                <span class="text-white fs-6">User Management</span>
                            </div>
                            <i class="px-1 text-white bi bi-chevron-right"></i>
                        </div>
                    </a>
                    <div class="collapse" id="collapse-system">
                        <ul class="ms-1 text-white">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Role</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Aksesbilitas</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </aside>

        <main class="w-100">
            <nav
                class="navbar navbar-expand-lg navbar-light bg-white topbar mb-4 px-4 static-top shadow
            d-flex justify-content-end
            ">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="px-1 bi bi-layout-sidebar"></i>
                </button>



                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->

                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="px-1 bi bi-person"></i>
                                <span class="fs-6">{{ Auth::user()->name }}</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </nav>

            <div class="container-fluid">
                @yield('container')
            </div>
        </main>

    </div>
    @include('partials.footer')

    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>

</body>
