<nav id="navbar" class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">SIAP PAKDE</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-center active" aria-current="page" href="{{ route('home') }}">Beranda</a>
        <a class="nav-link text-center" href="{{ route('profile') }}">Profile Desa</a>
        <a class="nav-link text-center" href="{{ route('bumdes') }}">Bumdes</a>
        <a class="nav-link text-center" href="{{ route('kelembagaan') }}">Kelembagaan</a>
        <a class="nav-link text-center" href="{{ route('kawasan') }}">Kawasan Perdesaan</a>
        <a class="nav-link text-center" href="{{ route('publikasi') }}">Publikasi</a>
      </div>
    </div>
  </div>
</nav>