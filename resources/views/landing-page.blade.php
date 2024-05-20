@extends('layouts.main')
@section('title','Home - ' . config('app.name'))
@section('container')
  <section class="main-page">
    <div class="container-fluid ms-0 me-0">
      @include('partials.ispta-section')
      @include('partials.iscsc-section')
      @include('partials.ispm-section')
    </div>
  </section>
@endsection