@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('/css/user/home.css') }}" />
@endpush

@section('content')
  <section id="home-hero" class="mt-5">
    <div class="container">
      <div class="row align-content-center">
        <div class="col-12">
          <img src="{{ asset('img/logo_kabupaten.webp') }}" class="img-fluid rounded-5" alt="siap-pakde" width="75" />
        </div>
        <p class="col-md-12 title">SIAP PAKDE</p>
        <p class="col-md-10 sub-title">Sistem Informasi Administrasi Pemerintahan Aparat dan Kelembagaan Desa</p>
      </div>
    </div>
  </section>

  <section id="welcome" class="py-5">
    <div class="container py-3">
      <div class="row align-items-center">
        <div class="col-md-6 mb-3">
          <h1 class="say-welcome text-center">Selamat Datang</h1>
        </div>
        <div class="col-md-6 mb-3">
          <p class="title under">Apa itu Siap Pakde ?</p>
          <p class="description">
            Siap Pakde adalah sistem informasi tentang setiap desa yang ada di wilayah Kabupaten Gowa. Website ini
            didesain
            untuk memberikan akses mudah dan transparansi informasi seputar administrasi pemerintahan, kelembagaan desa,
            BUMDES, dan publikasi terkini.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="feature" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row justify-content-center">
            <div class="col-md-6 col-10 mb-3">
              <div class="feature-box p-4 text-center shadow rounded-1">
                <div class="image-circle mx-auto rounded-circle">
                  <img src="{{ asset('img/village-icon.webp') }}" class="img-fluid" alt="...">
                </div>
                <p class="title">Profil Desa</p>
                <p class="sub-title">Kenali desa dengan melihat profil mereka</p>
              </div>
            </div>
            <div class="col-md-6 col-10 mb-3">
              <div class="feature-box p-4 text-center shadow rounded-1">
                <div class="image-circle mx-auto rounded-circle">
                  <img src="{{ asset('img/bumdes-icon.webp') }}" class="img-fluid" alt="...">
                </div>
                <p class="title">Bumdes</p>
                <p class="sub-title">Lihat badan usaha yang dimiliki desa</p>
              </div>
            </div>
            <div class="col-md-6 col-10 mb-3">
              <div class="feature-box p-4 text-center shadow rounded-1">
                <div class="image-circle mx-auto rounded-circle">
                  <img src="{{ asset('img/kelembagaan-icon.webp') }}" class="img-fluid" alt="...">
                </div>
                <p class="title">Kelembagaan</p>
                <p class="sub-title">Lihat dan kenali kelembagaan desa</p>
              </div>
            </div>
            <div class="col-md-6 col-10 mb-3">
              <div class="feature-box p-4 text-center shadow rounded-1">
                <div class="image-circle mx-auto rounded-circle">
                  <img src="{{ asset('img/publikasi-icon.webp') }}" class="img-fluid" alt="...">
                </div>
                <p class="title">Publikasi</p>
                <p class="sub-title">Lebih transparant dengan melihat publikasi desa</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-12 right-feature">
          <p class="title">
            Pilih desa untuk lihat profil dan mengenali potensi desa
          </p>
          <p class="sub-title">
            Kenali desa dengan melihat profil untuk mengetahui potensi desa, lihat badan usaha yang dimilik desa, kenali kelembagaan desa, dan lihat publikasi desa
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="village-list" class="py-5">
    <div class="container">
      <div class="row">
        <p class="title-section under">Lihat Profil Desa</p>
      </div>
      <div class="row">
        @foreach ($desas as $desa)
        <div class="col-md-3 col-6 mb-3 p-3">
          <a href="{{ route('profile.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none">
            <div class="village-box shadow rounded-1">
              <img src="{{ asset('img/village-1.webp') }}" class="card-img-top" alt="...">
              <div class="card-body px-2 pt-2 pb-1">
                <p class="card-title">{{ $desa->nama }}</p>
                <p class="card-sub-title" >{{ $desa->alamat }}</p>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
      <div class="row text-end">
        <div class="col-12">
          <a href="{{ route('profile') }}" class="text-decoration-none fw-bold text-dark">Lihat Lebih Banyak ></a>
        </div>
      </div>
    </div>
  </section>
@endsection
