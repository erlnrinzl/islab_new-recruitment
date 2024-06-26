@section('title','Login to ' . config('app.name'))
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <section class="container">
        @if (Session::has('error'))
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger mt-2">
                        {{ Session::get('error') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col d-flex justify-content-center p-5">
                <a href="{{ url('/auth/redirect') }}">
                    <img height="67" src="image/login-button.png" alt="microsoft-login-button">
                </a>
            </div>
        </div>
    </section>
</x-guest-layout>
