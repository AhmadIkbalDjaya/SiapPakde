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
    <h1>Kawasan Desa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('desa-admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Kawasan</li>
      </ol>
    </nav>
  </div>

  <div class="section">
    <div class="card px-2">
      <div class="px-3">
        <livewire:admin.desa.show.kawasan-tab :desa="$desa" />
      </div>
    </div>
  </div>
@endsection
