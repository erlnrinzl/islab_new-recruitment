<nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href={{ Auth()->check() ? url('dashboard') : url('/') }}>
        <img class="logo" src="{{ asset('image/logo-SIS-PNG-white.png') }}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-5">
          <a class="nav-link" aria-current="page" href={{ Auth()->check() ? url('form?form=ispta') : url('/#section-1') }}>IS Part-Time Lab Assistant</a>
          <a class="nav-link" aria-current="page" href={{ Auth()->check() ? url('form?form=iscsc') : url('/#section-2') }}>IS Case Study Club Member</a>
          <a class="nav-link" aria-current="page" href={{ Auth()->check() ? url('form?form=ispm') : url('/#section-3') }}>IS Project Member</a>
          <!-- Authentication -->
          @if (Auth()->check())
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-nav-link :href="route('logout')"
                  onclick="event.preventDefault(); this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-nav-link>
          </form>
          @else
          <x-nav-link :href="route('login')">
              Sign-In <img class="icon-signin" src="/image/icon-signin.png" alt="">
          </x-nav-link>
          @endif
        </div>
      </div>
    </div>
</nav>