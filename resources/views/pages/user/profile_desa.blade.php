@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/profile_desa.css') }}">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endpush

@push('userScript')
  <script>
    console.log('{{ $desa->latitude }}');
    console.log('{{ $desa->longitude }}');
    var map = L.map("maps").setView(["{{ $desa->latitude }}", "{{ $desa->longitude }}"], 10);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution: "© OpenStreetMap contributors",
    }).addTo(map);

    var desaLocations = [{
      nama: "Desa A",
      latitude: "{{ $desa->latitude }}",
      longitude: "{{ $desa->longitude }}"
    }, ];

    desaLocations.forEach(function(desa) {
      var marker = L.marker([desa.latitude, desa.longitude]).addTo(map);
      marker.bindPopup(`<b>${desa.nama}</b>`);
    });
  </script>
@endpush

@section('content')
  <section id="hero" class="mt-5">
    <div class="container py-2">
      <div class="row text-center align-items-center">
        <div class="col-md-12">
          <h4>Profile Desa {{ $desa->nama }}</h4>
          <h6>{{ $desa->alamat }}</h6>
        </div>
      </div>
    </div>
  </section>

  <section id="description" class="py-5">
    <div class="container py-3">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6 col-11 mb-4 mt-3">
          <h5 class="title under">{{ $desa->nama }}</h5>
          <div class="data-box">
            <div class="row">
              <div class="col-4">
                Alamat
              </div>
              <div class="col-8">
                {{ $desa->alamat }}
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                Kecamatan
              </div>
              <div class="col-8">
                {{ $desa->kecamatan->nama }}
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                Status
              </div>
              <div class="col-8">
                {{ $desa->status_desa ? $desa->status_desa->nama : '-' }}
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                Potensi
              </div>
              <div class="col-8">
                {{ $desa->potensi }}
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                Penduduk
              </div>
              <div class="col-8">
                {{ $desa->jumlah_penduduk }} Orang
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                Contact
              </div>
              <div class="col-8">
                {{ $desa->contact }}
              </div>
            </div>
          </div>
          {{-- <p class="description">
            {{ $desa->potensi }}
          </p>
          <div class="d-flex justify-content-between mt-5">
            <p class="j-penduduk">{{ number_format($desa->jumlah_penduduk, 0, ',', '.') }} Penduduk</p>
            <p class="contact">Kontak: {{ $desa->contact }}</p>
          </div> --}}
        </div>
        <div class="col-md-6 col-11 justify-content-center">
          <div class="photo-box mx-auto">
            <img src="{{ asset('img/profile-1.jpg') }}" class="img-fluid " alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="perangkat-desa" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center title-section">Perangkat Desa</p>
        </div>
      </div>
      <div class="row">
        @if ($desa->perangkat_desa->count() > 0)
          @foreach ($desa->perangkat_desa as $pd)
            <div class="col-md-6 my-3">
              <div class="box shadow">
                <div class="row px-4 py-3">
                  <div class="col-lg-3 col-3 p-0">
                    <div class="photo-box pt-4">
                      <img src="{{ asset('img/user-icon.webp') }}" class="img-fluid" alt="..." style="">
                    </div>
                  </div>
                  <div class="col-lg-9 col-9">
                    <div class="row align-items-between">
                      <p class="col-12 m-0 box-text">{{ $pd->nama }}</p>
                      <p class="col-12 m-0 box-text">{{ $pd->jabatan }}</p>
                      <p class="col-12 m-0 box-text">{{ $pd->tempat_lahir }}, {{ $pd->tanggal_lahir }}</p>
                      <p class="col-12 m-0 box-text">{{ $pd->jenis_kelamin }}</p>
                      <p class="col-12 m-0 box-text">{{ $pd->pendidikan }}</p>
                      <p class="col-12 m-0 box-text">{{ $pd->pekerjaan }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          <a href="{{ route('pdf.perangkat_desa', ['desa' => $desa]) }}" target="_blank" class="text-decoration-none">
            <i class="bi bi-file-earmark-pdf-fill text-danger"></i>
            Download Data
          </a>
        @else
          <div class="col-12 py-5">
            <h5 class="text-center">Perangkat Desa Belum Ditambahkan</h5>
          </div>
        @endif
      </div>
    </div>
  </section>

  @if ($desa->latitude != null && $desa->longitude != null)
    <section id="map" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-2">
            <h4 class="title-section">Kunjungi Desa Sekarang</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div>
              @if ($desa->latitude != null && $desa->longitude != null)
                <div id="maps" style="height: 350px;" class="rounded-2"></div>
              @else
                <h5 class="text-center my-5">
                  Data Lokasi Belum Ditambahkan
                </h5>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  <section id="other-info" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title-section text-center">Lihat Infomasi Lainnya</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        {{-- <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('profile.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/village-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Profile</p>
            </div>
          </a>
        </div> --}}
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
        <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('publikasi.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/publikasi-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Publikasi</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
