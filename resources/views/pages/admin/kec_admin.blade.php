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
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active">Kecamatan</li>
      </ol>
    </nav>
  </div>
  <livewire:admin.kec-admin />
@endsection
