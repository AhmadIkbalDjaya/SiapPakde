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
    <h1>Perangkat Desa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('desa-admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Perangkat Desa</li>
      </ol>
    </nav>
  </div>

  <div class="section">
    <div class="card">
      <div class="px-3">
        <livewire:admin.desa.show.perangkat-desa-tab :desa="$desa" />
      </div>
    </div>
  </div>
@endsection
