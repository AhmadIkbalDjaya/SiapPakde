<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ Request::is('sapa-admin') ? '' : 'collapsed' }}" href="{{ route('admin.dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    {{-- <li class="nav-heading">Pages</li> --}}

    <li class="nav-item">
      <a class="nav-link {{ Request::is('sapa-admin/desa*') ? '' : 'collapsed' }}" href="{{ route('admin.desa') }}">
        <i class="bi bi-houses"></i>
        <span>Desa</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link {{ Request::is('sapa-admin/admin-desa*') ? '' : 'collapsed' }}"
        href="{{ route('admin.desa-admin') }}">
        <i class="bi bi-person"></i>
        <span>Admin Desa</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('logout') }}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Login Page Nav -->

  </ul>

</aside>
