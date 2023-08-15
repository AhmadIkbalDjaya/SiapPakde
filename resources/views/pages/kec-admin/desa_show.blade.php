@extends('layouts.admin')

@push('adminStyle')
  @livewireStyles
@endpush

@push('adminScript')
  @livewireScripts
  <script src="{{ asset('js/modal.js') }}"></script>
@endpush

@section('main')
  <div class="pagetitle">
    <h1>Profile Desa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div>

  <div class="section profile">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{ asset('img/village-1.jpg') }}" alt="Profile" class="rounded-1">
            <h2>{{ $desa->nama }}</h2>
            <h6 class="text-center">
              {{ $desa->alamat }}
            </h6>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered justify-content-between">

              <li class="nav-item">
                <button class="nav-link px-2 active" data-bs-toggle="tab" data-bs-target="#profile-desa">Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link px-2" data-bs-toggle="tab" data-bs-target="#perangkat-desa">Perangkat</button>
              </li>

              <li class="nav-item">
                <button class="nav-link px-2" data-bs-toggle="tab" data-bs-target="#bumdes-desa">Bumdes</button>
              </li>

              <li class="nav-item">
                <button class="nav-link px-2" data-bs-toggle="tab" data-bs-target="#kelembagaan-desa">Kelembagaan</button>
              </li>

              <li class="nav-item">
                <button class="nav-link px-2" data-bs-toggle="tab" data-bs-target="#publikasi-desa">Publikasi</button>
              </li>

              <li class="nav-item">
                <button class="nav-link px-2" data-bs-toggle="tab" data-bs-target="#kawasan-desa">Kawasan</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div wire:ignore.self class="tab-pane fade show active profile-overview" id="profile-desa">
                <livewire:admin.desa.show.profile-tab :desa="$desa" />
              </div>

              <div wire:ignore.self class="tab-pane fade profile-edit pt-3" id="perangkat-desa">
                <livewire:admin.desa.show.perangkat-desa-tab :desa="$desa" />
              </div>

              <div wire:ignore.self class="tab-pane fade profile-edit pt-3" id="bumdes-desa">
                <livewire:admin.desa.show.bumdes-tab :desa="$desa" />
              </div>

              <div wire:ignore.self class="tab-pane fade pt-3" id="kelembagaan-desa">
                <livewire:admin.desa.kelembagaan-tab :desa="$desa" />
              </div>

              <div wire:ignore.self class="tab-pane fade pt-3" id="publikasi-desa">
                <livewire:admin.desa.show.publikasi-tab :desa="$desa" />
              </div>

              <div wire:ignore.self class="tab-pane fade profile-edit pt-3" id="kawasan-desa">
                <livewire:admin.desa.show.kawasan-tab :desa="$desa" />
              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
