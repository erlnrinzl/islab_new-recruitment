<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Binus IS Laboratory</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="{{ asset('image/logo-SIS-PNG-white.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-5 d-flex justify-content-between">
                    <a class="nav-link" aria-current="page" href="#section-1">IS Case Study Club Member</a>
                    <a class="nav-link" aria-current="page" href="#section-2">IS Part-Time Lab Assistant</a>
                    <a class="nav-link" aria-current="page" href="#section-3">IS Project Member</a>

                    <div>
                        @if (Route::has('login'))
                            @auth
                                <a class="nav-link" href="{{ url('/dashboard') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a class="nav-link ms-lg-6 " aria-current="page" href="{{ url('/auth/redirect') }}">Sign-In
                                    <img class="icon-signin" src="/image/icon-signin.png" alt="">
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </nav>


    {{-- main content --}}
    <main>
        <div class="container-fluid ms-0 me-0">
            @include('partials.ispta-section')
            @include('partials.iscsc-section')
            @include('partials.ispm-section')
        </div>
    </main>

    <!-- Footer  -->
    @include('partials.footer')
</body>

</html>
