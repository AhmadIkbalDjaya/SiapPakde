<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    @if (auth()->user()->role == 0)
      {{-- Admin Nav Item --}}
      <li class="nav-item">
        <a class="nav-link {{ Request::is('sapa-admin') ? '' : 'collapsed' }}" href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      {{-- <li class="nav-heading">Pages</li> --}}

      <li class="nav-item">
        <a class="nav-link {{ Request::is('sapa-admin/desa*') ? '' : 'collapsed' }}" href="{{ route('admin.desa') }}">
          <i class="bi bi-houses"></i>
          <span>Desa</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('sapa-admin/admin-desa*') ? '' : 'collapsed' }}"
          href="{{ route('admin.desa-admin') }}">
          <i class="bi bi-person"></i>
          <span>Admin Desa</span>
        </a>
      </li>

      {{-- End Admin Nav Item --}}
    @endif

    @if (auth()->user()->role == 1)
      <li class="nav-heading">
        <h6>
          {{ auth()->user()->desa->nama }}
        </h6>
      </li>

      {{-- Desa Admin Nav Item --}}
      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/profile*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.profile') }}">
          <i class="bi bi-grid"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/perangkat-desa*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.perangkat-desa') }}">
          <i class="bi bi-grid"></i>
          <span>Perangkat Desa</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/bumdes*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.bumdes') }}">
          <i class="bi bi-grid"></i>
          <span>Bumdes</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/kelembagaan*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.kelembagaan') }}">
          <i class="bi bi-grid"></i>
          <span>Kelembagaan</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/publikasi*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.publikasi') }}">
          <i class="bi bi-grid"></i>
          <span>Publikasi</span>
        </a>
      </li>

      {{-- End Desa Admin Nav Item --}}
    @endif

    {{-- logout --}}
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('logout') }}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li>
  </ul>

</aside>
