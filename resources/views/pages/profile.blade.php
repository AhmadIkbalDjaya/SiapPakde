@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')
  <section id="hero" class="mt-5">
    <div class="container py-5">
      <div class="row pt-5 my-5">
        <div class="col-lg-8 col-md-10">
          <p class="sub-title">Profile Desa</p>
          <p class="title">
            Temukan desa yang telah terdaftar lihat profile dan jelajahi potensi mereka.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div>
            <h3>Potensi Umum Masing-Masing Desa</h3>
            <p>Setiap desa memiliki potensi unik yang didukung oleh alamat lengkap dan peta lokasi desa.</p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="https://picsum.photos/1036/354" class="img-fluid rounded-3" height="100" alt="...">

        </div>
      </div>
      <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
      </div>
    </div>
  </section>
@endsection
