@extends('layouts.main')
@section('title','Login')
@section('container')
<section class="container ">
    @if(Session::has('error'))
        <div class="row">
            <div class="col ">
                <div class="alert alert-danger mt-2">
                    {{ Session::get('error') }}
                </div>
            </div>
        </div>   
    @endif
    <div class="row login-btn">
        <div class="col d-flex justify-content-center p-5">
            
            <a href="{{ url('/auth/redirect') }}">
                <img height="67" src="image/login-button.png" alt="microsoft-login-button">
            </a>
        </div>
    </div>
</section>
@endsection