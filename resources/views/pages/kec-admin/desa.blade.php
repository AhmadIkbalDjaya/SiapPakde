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
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('kec-admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Desa</li>
      </ol>
    </nav>
  </div>

  <div class="section dashboard">
    <div class="row">
      <livewire:admin.desa.admin-village-list />
    </div>
  </div>
@endsection
