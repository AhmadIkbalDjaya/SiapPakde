@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/kawasan.css') }}">
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
          <p class="sub-title">Kawasan Perdesaan</p>
          <p class="title">
            Lihat Informasi Kawasan Perdesaan
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
          <h5 class="title">Kawasan Perdesaan</h5>
          <p class="description">
            Kawasan Perdesaan adalah submenu yang menyajikan data lengkap mengenai kawasan kelor di desa terpilih.
            Informasi meliputi berbagai aspek seperti luas wilayah, kegiatan ekonomi, potensi alam, fasilitas publik,
            serta upaya pengembangan dan pelestariannya.
          </p>
        </div>
      </div>
    </div>
  </section>

  <livewire:user.village-list :directTo="'kawasan'"/>
@endsection
