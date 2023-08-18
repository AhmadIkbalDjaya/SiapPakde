<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="{{ asset('assets/img/logo.png') }}" alt="">
    <span class="d-none d-lg-block">Siap Pakde</span>
  </a>

  {{-- <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar --> --}}

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      {{-- <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon--> --}}

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="{{ asset('img/user-profile.jpg') }}" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->username }}</span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>{{ auth()->user()->username }}</h6>
            <span>
              @if (auth()->user()->role == 0)
                Super Admin
              @elseif(auth()->user()->role == 1)
                Admin Kecamatan
              @elseif(auth()->user()->role == 2)
                Admin Desa
              @endif
            </span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            @if (auth()->user()->role == 0)
              <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.user.profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            @elseif(auth()->user()->role == 1)
              <a class="dropdown-item d-flex align-items-center" href="{{ route('kec-admin.user.profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            @elseif(auth()->user()->role == 2)
              <a class="dropdown-item d-flex align-items-center" href="{{ route('desa-admin.user.profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            @endif
            {{-- <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.user.profile') }}">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a> --}}
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header>
