@extends('layouts.admin')

@push('adminStyle')
  @livewireStyles
@endpush

@push('adminScript')
  @livewireScripts
@endpush

@section('main')
  <div class="pagetitle">
    <h1>Profile Desa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
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
      <div class="col-12-md">
        <div class="card">
          <div class="px-3">
            <livewire:admin.desa.show.profile-tab :desa="$desa" />
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
