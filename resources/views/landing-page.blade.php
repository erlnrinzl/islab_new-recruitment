@extends('layouts.main')
@section('title','Home')
@section('container')
  <section class="main-page">
    <div class="container-fluid ms-0 me-0">
      @include('partials.islab-section')
      @include('partials.iscsc-section')
      @include('partials.ispm-section')
    </div>
  </section>
@endsection