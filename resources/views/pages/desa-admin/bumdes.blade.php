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
    <h1>Badan Usaha Milik Desa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>

  <div class="section">
    <div class="card">
      <div class="px-3">
        <livewire:admin.desa.show.bumdes-tab :desa="$desa" />
      </div>
    </div>
  </div>
@endsection
