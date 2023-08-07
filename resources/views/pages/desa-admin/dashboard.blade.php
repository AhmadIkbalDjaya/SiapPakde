@extends('layouts.admin')

@section('main')
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="section dashboard">
    <div class="row">
      {{-- left section --}}
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="profile-card pt-4 d-flex flex-column align-items-center">
              <img src="{{ asset('img/profile-1.jpg') }}" alt="Profile" class="rounded-3 img-fluid">
              <h2>{{ $desa->nama }}</h2>
              <h6>{{ $desa->alamat }}</h6>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <h5 class="card-title">Potensi Desa</h5>
            <p class="small fst-italic" style="text-align: justify;">
              {{ $desa->potensi }}
            </p>
            <h5 class="card-title">Lokasi Desa</h5>
            <div class="row">
              <div class="col-12 row">
                <div class="col-6">Longitude:</div>
                <div class="col-6">{{ $desa->longitude }}</div>
              </div>
              <div class="col-12 row">
                <div class="col-6">Latitude: </div>
                <div class="col-6">{{ $desa->latitude }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- right section --}}
      <div class="col-lg-8">
        <div class="row">
          {{-- perangkat desa card --}}
          <div class="col-md-12">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Perangkat Desa</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $perangkat_desa_count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Total</span> <span
                      class="text-muted small pt-2 ps-1">Perangkat
                      Desa</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end perangkat desa card --}}
          
          {{-- bumdes card --}}
          <div class="col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Bumdes</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $bumdes_count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Total</span> <span
                      class="text-muted small pt-2 ps-1">Bumdes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end bumdes card --}}

          {{-- bpd card --}}
          <div class="col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">BPD</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $bpd_count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Total</span> <span
                      class="text-muted small pt-2 ps-1">bpd</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end bpd card --}}

          {{-- kader_pkk card --}}
          <div class="col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Kader PKK</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $kader_pkk_count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Total</span> <span
                      class="text-muted small pt-2 ps-1">kader_pkk</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end kader_pkk card --}}
          
          {{-- posyandu card --}}
          <div class="col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Posyandu</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $posyandu_count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Total</span> <span
                      class="text-muted small pt-2 ps-1">posyandu</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end posyandu card --}}

          {{-- kader_posyandu card --}}
          <div class="col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Kader Posyandu</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $kader_posyandu_count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Total</span> <span
                      class="text-muted small pt-2 ps-1">kader_posyandu</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end kader_posyandu card --}}

          {{-- kpm card --}}
          <div class="col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">KPM</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $kpm_count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Total</span> <span
                      class="text-muted small pt-2 ps-1">kpm</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end kpm card --}}

          {{-- karang_taruna card --}}
          <div class="col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Kader Karang Taruna</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $karang_taruna_count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Total</span> <span
                      class="text-muted small pt-2 ps-1">karang_taruna</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end karang_taruna card --}}

          {{-- lpm card --}}
          <div class="col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">LPM</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $lpm_count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Total</span> <span
                      class="text-muted small pt-2 ps-1">lpm</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end lpm card --}}
        </div>
      </div>
    </div>
  </div>
@endsection
