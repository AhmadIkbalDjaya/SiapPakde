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
    <h1>Kategori Kawasan</h1>
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
          <div class="card-body">
            <livewire:admin.master-data.kategori-kawasan />
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
