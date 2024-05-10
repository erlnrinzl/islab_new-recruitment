@extends('layouts.main')

@section('container')
<section class="container login-btn">
    <div class="row">
        <div class="col d-flex justify-content-center p-5">
            <a href="{{ url('/auth/redirect') }}">
                <img src="image/login-button.png" alt="microsoft-login-button">
            </a>
        </div>
    </div>
</section>
@endsection