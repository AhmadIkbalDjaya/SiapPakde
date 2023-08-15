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
        <a class="nav-link {{ Request::is('sapa-admin/admin*') ? '' : 'collapsed' }}" data-bs-target="#admin-nav"
          data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Admin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="admin-nav" class="nav-content collapse {{ Request::is('sapa-admin/admin*') ? 'show' : '' }}"
          data-bs-parent="#sidebar-nav">
          <li class="nav-link {{ Request::is('sapa-admin/admin-kec*') ? '' : 'collapsed' }}">
            <a href="{{ route('admin.kec-admin') }}">
              <i class="bi bi-circle"></i><span>Admin Kecamatan</span>
            </a>
          </li>
          <li class="nav-link {{ Request::is('sapa-admin/admin-desa*') ? '' : 'collapsed' }}">
            <a href="{{ route('admin.desa-admin') }}">
              <i class="bi bi-circle"></i><span>Admin Desa</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('sapa-admin/kategori-kawasan*') || Request::is('sapa-admin/kecamatan*') ? '' : 'collapsed' }}"
          data-bs-target="#master-data-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="master-data-nav"
          class="nav-content collapse {{ Request::is('sapa-admin/kategori-kawasan*') || Request::is('sapa-admin/kecamatan*') ? 'show' : '' }}"
          data-bs-parent="#sidebar-nav">
          <li class="nav-link {{ Request::is('sapa-admin/kecamatan*') ? '' : 'collapsed' }}">
            <a href="{{ route('admin.kecamatan') }}">
              <i class="bi bi-circle"></i><span>Kecamatan</span>
            </a>
          </li>
          <li class="nav-link {{ Request::is('sapa-admin/kategori-kawasan*') ? '' : 'collapsed' }}">
            <a href="{{ route('admin.kategori-kawasan') }}">
              <i class="bi bi-circle"></i><span>Kategori Kawasan</span>
            </a>
          </li>
        </ul>
      </li>
      {{-- End Admin Nav Item --}}
    @endif

    @if (auth()->user()->role == 1)
      <li class="nav-heading">
        <h6>
          {{ auth()->user()->kecamatan->nama }}
        </h6>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('kec-admin') ? '' : 'collapsed' }}"
          href="{{ route('kec-admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
    @endif

    @if (auth()->user()->role == 2)
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
          <i class="bi bi-person-circle"></i>
          <span>Profil</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/perangkat-desa*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.perangkat-desa') }}">
          <i class="bi bi-people"></i>
          <span>Perangkat Desa</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/bumdes*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.bumdes') }}">
          <i class="bi bi-briefcase"></i>
          <span>Bumdes</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/kelembagaan*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.kelembagaan') }}">
          <i class="bi bi-person-lines-fill"></i>
          <span>Kelembagaan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/publikasi*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.publikasi') }}">
          <i class="bi bi-building"></i>
          <span>Publikasi</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('desa-admin/kawasan*') ? '' : 'collapsed' }}"
          href="{{ route('desa-admin.kawasan') }}">
          <i class="bi bi-tree"></i>
          <span>Kawasan</span>
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
