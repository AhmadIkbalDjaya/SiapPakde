@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('/css/home.css') }}" />
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
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6">
          <h1>Selamat Datang</h1>
        </div>
        <div class="col-md-6 description">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam praesentium voluptatum laborum quis. Suscipit
          excepturi aliquam sed deleniti praesentium dolorem sint, repellendus pariatur veniam! Omnis?
        </div>
      </div>
    </div>
  </section>

  <section id="feature" class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box py-4 px-4 my-3 rounded-5">
            <h4>Fitur</h4>
            <p class="mb-5">Desa-desa penuh daya tarik!</p>
            <img src="https://picsum.photos/1036/354" class="img-fluid rounded-3" alt="...">
          </div>
        </div>
        <div class="col-md-6">
          <div class="box py-4 px-4 my-3 rounded-5">
            <h4>Fitur</h4>
            <p class="mb-5">Desa-desa penuh daya tarik!</p>
            <img src="https://picsum.photos/536/354" class="img-fluid rounded-3" alt="...">
          </div>
        </div>
        <div class="col-md-6">
          <div class="box py-4 px-4 my-3 rounded-5">
            <h4>Fitur</h4>
            <p class="mb-5">Desa-desa penuh daya tarik!</p>
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
        <div class="col-md-4 col-6 my-3">
          <a href="">
            <div class="box rounded-5 village-box">
              <h3>Nama Desa</h3>
              <img src="https://picsum.photos/536" class="img-fluid rounded-5" alt="...">
            </div>
          </a>
        </div>
        <div class="col-md-4 col-6 my-3">
          <a href="">
            <div class="box rounded-5 village-box">
              <h3>Nama Desa</h3>
              <img src="https://picsum.photos/536" class="img-fluid rounded-5" alt="...">
            </div>
          </a>
        </div>
        <div class="col-md-4 col-6 my-3">
          <a href="">
            <div class="box rounded-5 village-box">
              <h3>Nama Desa</h3>
              <img src="https://picsum.photos/536" class="img-fluid rounded-5" alt="...">
            </div>
          </a>
        </div>
        <div class="col-md-4 col-6 my-3">
          <a href="">
            <div class="box rounded-5 village-box">
              <h3>Nama Desa</h3>
              <img src="https://picsum.photos/536" class="img-fluid rounded-5" alt="...">
            </div>
          </a>
        </div>
        <div class="col-md-4 col-6 my-3">
          <a href="">
            <div class="box rounded-5 village-box">
              <h3>Nama Desa</h3>
              <img src="https://picsum.photos/536" class="img-fluid rounded-5" alt="...">
            </div>
          </a>
        </div>
        <div class="col-md-4 col-6 my-3">
          <a href="">
            <div class="box rounded-5 village-box">
              <h3>Nama Desa</h3>
              <img src="https://picsum.photos/536" class="img-fluid rounded-5" alt="...">
            </div>
          </a>
        </div>
      </div>
      <div class="row text-end">
        <div class="col-12">
          <a href="" class="text-decoration-none">Lihat Lebih Banyak ></a>
        </div>
      </div>
    </div>
  </section>
@endsection
