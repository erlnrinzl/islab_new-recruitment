<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/tahapan.css"> --}}
    <link rel="stylesheet" href="/css/app.css">
    <title>Tahapan</title>
</head>
<body>
    {{-- Navbar --}}
    @include('partials.navbar-admin')
    {{-- Navbar --}}

    {{-- section --}}
    @yield('container')

    {{-- Footer --}}
    {{-- @include('partials.footer') --}}
    {{-- Footer --}}

    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>