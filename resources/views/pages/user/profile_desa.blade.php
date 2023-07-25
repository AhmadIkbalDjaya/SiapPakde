@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/profile_desa.css') }}">
  <!-- Tambahkan pustaka Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endpush

@push('userScript')
  <script>
    // console.log('{{ $desa->latitude }}');
    // Inisialisasi peta
    var map = L.map("maps").setView([-6.8751, 109.0436], 10); // Koordinat tengah peta dan zoom level

    // Tambahkan peta dasar menggunakan Leaflet Provider Tiles
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution: "© OpenStreetMap contributors",
    }).addTo(map);

    // Data koordinat desa (contoh data, Anda bisa mengganti ini dengan data dari database)
    var desaLocations = [{
      nama: "Desa A",
      latitude: '{{ $desa->latitude }}',
      longitude: '{{ $desa->longitude }}'
    }, ];

    // Tambahkan marker untuk setiap lokasi desa
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
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-3">
          <h4>{{ $desa->nama }}</h4>
          <h6>
            {{ $desa->penjelasan }}
          </h6>
        </div>
        <div class="col-md-6 mb-3">
          <div>
            <img src="{{ asset('storage/' . $desa->foto) }}" class="img-fluid rounded-3" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="perangkat-desa" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center">Perangkat Desa</h2>
        </div>
      </div>
      <div class="row">
        @if ($desa->perangkat_desa->count() > 0)
          @foreach ($desa->perangkat_desa as $pd)
            <div class="col-md-6 my-3">
              <div class="box shadow">
                <div class="row px-1 py-1 align-items-center">
                  <div class="col-4">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyuNFyw05KSucqjifL3PhDFrZLQh7QAS-DTw&usqp=CAU"
                      class="img-fluid" alt="..." style="">
                  </div>
                  <div class="col-8">
                    <table class="table table-sm table-borderless">
                      <tr>
                        <td colspan="3" class="jabatan">{{ $pd->jabatan }}</td>
                      </tr>
                      <tr>
                        <td colspan="3" class="nama">{{ $pd->nama }}</td>
                      </tr>
                      <tr class="other">
                        <td>Usia</td>
                        <td>: </td>
                        <td>{{ $pd->umur }} Tahun</td>
                      </tr>
                      <tr class="other">
                        <td>Pendidikan</td>
                        <td>: </td>
                        <td>{{ $pd->pendidikan }}</td>
                      </tr>
                      <tr class="other">
                        <td>Agama</td>
                        <td>: </td>
                        <td>{{ $pd->agama }}</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <div class="col-12 py-5">
            <h5 class="text-center">Perangkat Desa Belum Ditambahkan</h5>
          </div>
        @endif
      </div>
    </div>
  </section>

  <section id="map" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4>Kunjungi Desa Sekarang Juga</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div>
            <div id="maps" style="height: 350px;" class="rounded-2"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="other-info" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center">Lihat Infomasi Lainnya</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="text-center py-3">
            <h3>Bumdes</h3>
          </div>
        </div>
        <div class="col-6">
          <div class="text-center py-3">
            <h3>Kelembagaan</h3>
          </div>
        </div>
        <div class="col-6">
          <div class="text-center py-3">
            <h3>Kawasan</h3>
          </div>
        </div>
        <div class="col-6">
          <div class="text-center py-3">
            <h3>Publikasi</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
