@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/Publikasi.css') }}">
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
          <p class="sub-title">Publikasi</p>
          <p class="title">
            Lihat Publikasi Dari Desa yang terdaftar
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
          <h5 class="title under">Publikasi</h5>
          <p class="description">
            Publikasi menyajikan dokumen APBDes (Anggaran Pendapatan dan Belanja Desa) di desa terpilih, berisi rencana
            dan realisasi anggaran desa. Informasi ini penting untuk transparansi dan akuntabilitas pengelolaan keuangan
            desa.
          </p>
        </div>
      </div>
    </div>
  </section>
  {{-- <section id="description" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 d-flex align-items-center justify-content-center">
          <div class="brand">
            Siap Pakde
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <h5 class="title">Publikasi</h5>
          <p class="description">
            Publikasi menyajikan dokumen APBDes (Anggaran Pendapatan dan Belanja Desa) di desa terpilih, berisi rencana
            dan realisasi anggaran desa. Informasi ini penting untuk transparansi dan akuntabilitas pengelolaan keuangan
            desa.
          </p>
        </div>
      </div>
    </div>
  </section> --}}

  <livewire:user.village-list :directTo="'publikasi'" />
@endsection
