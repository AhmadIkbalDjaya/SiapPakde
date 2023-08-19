@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/publikasi_desa.css') }}">
@endpush

@section('content')
  <section id="hero" class="mt-5">
    <div class="container text-center">
      <div class="row pt-5 align-content-center">
        <div class="col-lg-12 col-md-12">
          <p class="title">
            {{ $desa->nama }}
          </p>
          <p class="sub-title"> {{ $desa->alamat }}</p>
        </div>
      </div>
    </div>
  </section>

  <section id="publikasi" class="py-5">
    <div class="row justify-content-center">
      @if ($desa->publikasi->count() > 0)
        @foreach ($desa->publikasi as $publikasi)
          <div class="col-md-6 text-center">
            <img src="{{ asset('storage/' . $publikasi->dokumentasi) }}" alt="" class="img-fluid">
          </div>
        @endforeach
      @else
          <h4 class="text-center">Publikasi Belum Ditambahkan</h4>
      @endif
    </div>
  </section>

  <section id="other-info" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title-section text-center">Lihat Infomasi Lainnya</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('profile.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/village-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Profil</p>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('bumdes.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/bumdes-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Bumdes</p>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('kelembagaan.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/kelembagaan-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Lembaga</p>
            </div>
          </a>
        </div>
        {{-- <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('publikasi.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/publikasi-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Publikasi</p>
            </div>
          </a>
        </div> --}}
      </div>
    </div>
  </section>
@endsection
