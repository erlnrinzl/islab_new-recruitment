@extends('layouts.admin')
@section('container')
<div class="container">
    <div class="row">
        <div class="col text-center my-3">
            <h1 class="fs-1 display-3 text-secondary font-weight-bold">HOME</h1>
        </div>
    </div>
    <div class="row">
        <div class="col my-3">
            <h2 class="font-weight-bold">Welcome Back, !</h2>
        </div>
    </div>
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
@endsection
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>
    
</x-app-layout> --}}
