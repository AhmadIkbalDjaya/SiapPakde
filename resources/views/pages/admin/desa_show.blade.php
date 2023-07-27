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
    <h1>Desa</h1>
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

            <img src="{{ asset('storage/' . $desa->foto) }}" alt="Profile" class="rounded-circle">
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
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-desa">Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bumdes-desa">Bumdes</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kelembagaan-desa">Kelembagaan</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kawasan-desa">Kawasan</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#publikasi-desa">Publikasi</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <livewire:admin.desa.show.profile-tab :desa="$desa" />

              <livewire:admin.desa.show.bumdes-tab :desa="$desa" />

              <livewire:admin.desa.kelembagaan-tab :desa="$desa" />

              <div class="tab-pane fade pt-3" id="kawasan-desa">
                <h5 class="card-title">Kawasan Perdesaan</h5>


              </div>

              <div class="tab-pane fade pt-3" id="publikasi-desa">
                <h5 class="card-title">Publikasi Desa</h5>

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
