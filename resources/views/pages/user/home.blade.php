@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('/css/user/home.css') }}" />
@endpush

@section('content')
  <section id="home-hero" class="mt-5">
    <div class="container">
      <div class="row align-content-center">
        <div class="col-12">
          <img src="{{ asset('img/logo_kabupaten.png') }}" class="img-fluid rounded-5" alt="siap-pakde" width="75" />
        </div>
        <p class="col-md-12 title">SIAP PAKDE</p>
        <p class="col-md-10 sub-title">Sistem Informasi Administrasi Pemerintahan Aparat dan Kelembagaan Desa</p>
      </div>
    </div>
  </section>

  <section id="welcome" class="py-5">
    <div class="container py-3">
      <div class="row align-items-center">
        <div class="col-md-6 text-center">
          <h1>Selamat Datang</h1>
        </div>
        <div class="col-md-6">
          <h5 class="title">Apa itu Siap Pakde</h5>
          <p class="description">
            Siap Pakde adalah sistem informasi tentang setiap desa yang ada di wilayah Kabupaten Gowa. Website ini didesain
            untuk memberikan akses mudah dan transparansi informasi seputar administrasi pemerintahan, kelembagaan desa,
            BUMDES, kawasan perdesaan, dan publikasi terkini.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="feature" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box py-1 px-2 my-3 rounded-3 shadow">
            <h4>Fitur</h4>
            <p class="mb-1">Desa-desa penuh daya tarik!</p>
            <img src="https://picsum.photos/1036/354" class="img-fluid rounded-3" alt="...">
          </div>
        </div>
        <div class="col-md-6">
          <div class="box py-1 px-2 my-3 rounded-3 shadow">
            <h4>Fitur</h4>
            <p class="mb-1">Desa-desa penuh daya tarik!</p>
            <img src="https://picsum.photos/536/354" class="img-fluid rounded-3" alt="...">
          </div>
        </div>
        <div class="col-md-6">
          <div class="box py-1 px-2 my-3 rounded-3 shadow">
            <h4>Fitur</h4>
            <p class="mb-1">Desa-desa penuh daya tarik!</p>
            <img src="https://picsum.photos/536/354" class="img-fluid rounded-3" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="village" class="py-5">
    <div class="container">
      <div class="row">
        <h2>Lihat Profile Desa</h2>
      </div>
      <div class="row">
        @foreach ($desas as $desa)
          <div class="col-md-4 col-6 my-3">
            <a href="">
              <div class="box rounded-5 village-box shadow">
                <h3 class="text-center">{{ $desa->nama }} <br> <span class="address">{{ $desa->alamat }}</span></h3>
                <img src="{{ asset('storage/' . $desa->foto) }}" class="img-fluid rounded-5" alt="...">
              </div>
            </a>
          </div>
        @endforeach
      </div>
      <div class="row text-end">
        <div class="col-12">
          <a href="{{ route('profile') }}" class="text-decoration-none">Lihat Lebih Banyak ></a>
        </div>
      </div>
    </div>
  </section>
@endsection
