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
    <div class="container py-3">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6 col-11 justify-content-center">
          <div class="photo-box mx-auto">
            <img src="{{ asset('img/profile-1.jpg') }}" class="img-fluid " alt="...">
          </div>
        </div>
        <div class="col-md-6 col-11 mb-4 mt-3">
          <h5 class="title under">Kelembagaan Desa</h5>
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
