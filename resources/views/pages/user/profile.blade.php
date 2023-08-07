@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
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
          <p class="sub-title">Profil Desa</p>
          <p class="title">
            Temukan desa yang telah terdaftar lihat profil dan jelajahi potensi mereka.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="feature" class="py-5">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-5 col-10 align-self-center">
          <div class="content-text">
            <p class="title">Potensi Umum Masing-Masing Desa</p>
            <p class="sub-title">Setiap desa memiliki potensi unik yang didukung oleh alamat lengkap dan peta lokasi desa.
            </p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="photo-box mx-auto">
            <img src="{{ asset('img/profile-1.jpg') }}" class="img-fluid " alt="...">
          </div>
        </div>
      </div>
      <div class="row mt-5 justify-content-center">
        <div class="col-md-5">
          <div class="photo-box mx-auto">
            <img src="{{ asset('img/profile-2.jpg') }}" class="img-fluid " alt="...">
          </div>
        </div>
        <div class="col-md-5 col-10 align-self-center">
          <div class="content-text">
            <p class="title">Perangkat Desa dan Kepemimpinan</p>
            <p class="sub-title">Kenali perangkat desa beserta usia, pendidikan, dan agama, serta bagaimana mereka
              membantu membangun desa.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <livewire:user.village-list :directTo="'profile'" />
@endsection
