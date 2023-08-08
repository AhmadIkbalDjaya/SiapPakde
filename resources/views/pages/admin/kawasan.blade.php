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
    <h1>Kawasan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profil</li>
      </ol>
    </nav>
  </div>

  <div class="section profile">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#kategori-tab">
                  Kategori & Desa
                </button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kawasan-tab">
                  Kawasan
                </button>
              </li>

            </ul>
            <div class="tab-content pt-2">
              
              <livewire:admin.desa.kawasan.kategori-and-desa-tab />

              <livewire:admin.desa.kawasan.kawasan-tab />

            </div><!-- End Bordered Tabs -->

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
