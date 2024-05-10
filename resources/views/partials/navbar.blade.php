<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img class="logo" src="{{ asset('image/logo-SIS-PNG-white.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-5">
        <a class="nav-link" aria-current="page" href="#section-1">IS Case Study Club Member</a>
        <a class="nav-link" aria-current="page" href="#section-2">IS Part-Time Lab Assistant</a>
        <a class="nav-link" aria-current="page" href="#section-3">IS Project Member</a>
        <a class="nav-link ms-lg-6 " aria-current="page" href="{{ url('/auth/redirect') }}">Sign-In
          <img class="icon-signin" src="/image/icon-signin.png" alt="">
        </a>
      </div>
    </div>
  </div>
</nav>
