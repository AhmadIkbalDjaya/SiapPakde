@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/kelembagaan.css') }}">
  @livewireStyles
@endpush

@push('userScript')
  @livewireScripts
@endpush

@section('content')
  <section id="hero" class="mt-5">
    <div class="container">
      <div class="row pt-5 align-content-center">
        <div class="col-lg-8 col-md-10">
          <p class="sub-title">Kelembagaan</p>
          <p class="title">
            Lihat Informasi Kelembagaan yang Dimiliki Desa
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="description" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 d-flex align-items-center justify-content-center">
          <div class="brand">
            Siap Pakde
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <h5 class="title">Kelembagaan Desa</h5>
          <p class="description">
            Kelembagaan meliputi Badan Permusyawaratan Desa (BPD), kader PKK, kader Posyandu, kader
            Pembangunan Manusia, Karang Taruna, dan Lembaga Pemberdayaan Masyarakat di desa terpilih. Informasi meliputi
            SK periode BPD, nama dan jabatan anggota BPD, kader PKK, kader Posyandu, kader Pembangunan Manusia, serta
            anggota Karang Taruna dan Lembaga Pemberdayaan Masyarakat.
          </p>
        </div>
      </div>
    </div>
  </section>

  <livewire:user.village-list :directTo="'kelembagaan'">
@endsection
