@extends('layouts.admin-v2')
@section('container')
    <div class="container">
        <h2>Welcome Back, {{ Auth::user()->name }}!</h2>

        <div class="row">
            <div class="col my-3">
                <p class="h4">Mohon untuk melihat terlebih dahulu GuideBook yang disediakan:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 my-3">
                <a href="{{ url('/guidebook-admin.pdf') }}" class="btn btn-primary">Download GuideBook Admin</a>
            </div>
            <div class="col-3 my-3">
                <a href="{{ url('/guidebook-student.pdf') }}" class="btn btn-secondary">Download GuideBook Student</a>
            </div>
        </div>
    </div>
@endsection
