@extends('layouts.admin')

@push('adminStyle')
  @livewireStyles
@endpush

@push('adminScript')
  @livewireScripts
  <script src="{{ asset('js/modal.js') }}"></script>
  <script src="{{ asset('js/password.js') }}"></script>
@endpush

@section('main')
  <div class="pagetitle">
    <h1>Admin Kecamatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profil</li>
      </ol>
    </nav>
  </div>
  <livewire:admin.kec-admin />
@endsection
