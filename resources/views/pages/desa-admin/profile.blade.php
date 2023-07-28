@extends('layouts.admin')

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

  <livewire:admin-desa.profile-section />
  
@endsection
