@extends('layouts.admin')

@section('main')
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <div class="col-md-4">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">Desa</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-houses"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $desa_count }}</h6>
                <a href="{{ route('admin.desa') }}" class="text-success small pt-1 fw-bold">Lihat</a>
                <span class="text-muted small pt-2 ps-1">Desa</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">Admin Kecamatan</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-briefcase"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $kec_admin_count }}</h6>
                <a href="{{ route('admin.kec-admin') }}" class="text-success small pt-1 fw-bold">Lihat</a>
                <span class="text-muted small pt-2 ps-1">Admin Kecamatan</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">Admin Desa</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $desa_admin_count }}</h6>
                <a href="{{ route('admin.desa-admin') }}" class="text-success small pt-1 fw-bold">Lihat</a>
                <span class="text-muted small pt-2 ps-1">Admin Desa</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pagetitle">
      <h1>Desa Terbaru</h1>
    </div><!-- End Page Title -->

    <div class="row justify-content-evenly">
      @if ($desas->count() > 0)
        @foreach ($desas as $desa)
          <div class="col-md-3 col-6">
            <a href="{{ route('admin.desa.show', ['desa' => $desa->slug]) }}">
              <div class="card">
                <img src="{{ asset('img/default.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body px-2">
                  <h5 class="card-title py-0" style="font-size: 15px">{{ $desa->nama }}</h5>
                  <p class="card-text" style="font-size: 10px">{{ $desa->alamat }}</p>
                </div>
              </div>
            </a>
          </div>
        @endforeach
        <div class="col-12 text-end">
          <p>
            <a href="">Lihat Desa Lainnya ></a>
          </p>
        </div>
      @else
        <div class="pagetile text-center">
          <h5>Belum Ada Desa yang Ditambahkan</h5>
        </div>
      @endif
    </div>
  </section>
@endsection
