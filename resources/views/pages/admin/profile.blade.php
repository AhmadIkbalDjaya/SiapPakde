@extends('layouts.admin')

@push('adminStyle')
  @livewireStyles
@endpush

@push('adminScript')
  @livewireScripts
@endpush

@section('main')
  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div>

  <section class="section profile">
    <div class="row">
      <div class="card">
        <ul class="nav nav-tabs nav-tabs-bordered">

          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profile</button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">
              Ubah Password
            </button>
          </li>

        </ul>
        <div class="tab-content pt-2">

          <div class="tab-pane fade show active profile-overview" id="profile-overview">
            <h5 class="card-title">Detail Profil</h5>

            <div class="row">
              <div class="col-lg-3 col-md-4 label ">Username</div>
              <div class="col-lg-9 col-md-8">{{ auth()->user()->username }}</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Role</div>
              <div class="col-lg-9 col-md-8">
                @if (auth()->user()->role == 0)
                  Super Admin
                @elseif(auth()->user()->role == 1)
                  Admin Kecamatan
                @elseif(auth()->user()->role == 2)
                  Admin Desa
                @endif
              </div>
            </div>

            @if (auth()->user()->role == 1)
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Kecamatan</div>
                <div class="col-lg-9 col-md-8">{{ auth()->user()->kecamatan->nama }}</div>
              </div>
            @elseif (auth()->user()->role == 2)
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Desa</div>
                <div class="col-lg-9 col-md-8">{{ auth()->user()->desa->nama }}</div>
              </div>
            @endif

          </div>

          <div wire:ignore.self class="tab-pane fade pt-3" id="profile-change-password">
            <livewire:admin.change-password />
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
