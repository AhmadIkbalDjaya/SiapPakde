<nav id="navbar" class="navbar fixed-top navbar-expand-lg shadow">
  <div class="container">
    <a class="navbar-brand brand d-flex align-items-center" href="{{ route('home') }}">
      <img src="{{ asset('img/icon.png') }}" alt="" height="30" class="me-3">
      <span class="brand">SIAP PAKDE</span>
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-center {{ Request::is('/') ? 'active-page' : '' }}" href="{{ route('home') }}">Beranda</a>
        <a class="nav-link text-center {{ Request::is('profile*') ? 'active-page' : '' }}" href="{{ route('profile') }}">Profil Desa</a>
        <a class="nav-link text-center {{ Request::is('bumdes*') ? 'active-page' : '' }}" href="{{ route('bumdes') }}">Bumdes</a>
        <a class="nav-link text-center {{ Request::is('kelembagaan*') ? 'active-page' : '' }}" href="{{ route('kelembagaan') }}">Kelembagaan</a>
        <a class="nav-link text-center {{ Request::is('publikasi*') ? 'active-page' : '' }}" href="{{ route('publikasi') }}">Publikasi</a>
        <a class="nav-link text-center {{ Request::is('kawasan*') ? 'active-page' : '' }}" href="{{ route('kawasan') }}">Kawasan</a>
      </div>
    </div>
  </div>
</nav>