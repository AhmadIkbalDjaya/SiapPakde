@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/profile_desa.css') }}">
  <!-- Tambahkan pustaka Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endpush

@push('userScript')
  <script>
    // Inisialisasi peta
    var map = L.map("maps").setView([-6.8751, 109.0436], 10); // Koordinat tengah peta dan zoom level

    // Tambahkan peta dasar menggunakan Leaflet Provider Tiles
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution: "© OpenStreetMap contributors",
    }).addTo(map);

    // Data koordinat desa (contoh data, Anda bisa mengganti ini dengan data dari database)
    var desaLocations = [{
        nama: "Desa A",
        latitude: -6.8751,
        longitude: 109.0436
      },
    ];

    // Tambahkan marker untuk setiap lokasi desa
    desaLocations.forEach(function(desa) {
      var marker = L.marker([desa.latitude, desa.longitude]).addTo(map);
      marker.bindPopup(`<b>${desa.nama}</b>`);
    });
  </script>
@endpush

@section('content')
  <section id="hero" class="mt-5 bg-danger">
    <div class="container py-2">
      <div class="row text-center align-items-center bg-primary">
        <div class="col-md-12">
          <h4>Profile Desa Tekolabbua</h4>
          <h6>Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi Selatan</h6>
        </div>
      </div>
    </div>
  </section>

  <section id="description" class="my-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-3">
          <h4>Desa Tondong Kura</h4>
          <h6>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti eligendi sit sint minima dicta velit.
          </h6>
        </div>
        <div class="col-md-6 mb-3">
          <div>
            <img
              src="https://awsimages.detik.net.id/community/media/visual/2021/02/14/puncak-tondongkura-pangkep-2.jpeg?w=1200"
              class="img-fluid rounded-3" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="perangkat-desa" class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 my-3">
          <div class="shadow">
            <div class="row px-1 py-1 align-items-center">
              <div class="col-4">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyuNFyw05KSucqjifL3PhDFrZLQh7QAS-DTw&usqp=CAU"
                  class="img-fluid" alt="..." style="">
              </div>
              <div class="col-8">
                <table class="table table-sm table-borderless">
                  <tr>
                    <td colspan="3" class="jabatan">Kepala Desa</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="nama">Ikrar Restu Gibrani</td>
                  </tr>
                  <tr class="other">
                    <td>Usia</td>
                    <td>: </td>
                    <td>32 Tahun</td>
                  </tr>
                  <tr class="other">
                    <td>Pendidikan</td>
                    <td>: </td>
                    <td>S1 Informatika</td>
                  </tr>
                  <tr class="other">
                    <td>Agamad</td>
                    <td>: </td>
                    <td>Islam</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 my-3">
          <div class="shadow">
            <div class="row px-1 py-1 align-items-center">
              <div class="col-4">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyuNFyw05KSucqjifL3PhDFrZLQh7QAS-DTw&usqp=CAU"
                  class="img-fluid" alt="..." style="">
              </div>
              <div class="col-8">
                <table class="table table-sm table-borderless">
                  <tr>
                    <td colspan="3" class="jabatan">Kepala Desa</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="nama">Ikrar Restu Gibrani</td>
                  </tr>
                  <tr class="other">
                    <td>Usia</td>
                    <td>: </td>
                    <td>32 Tahun</td>
                  </tr>
                  <tr class="other">
                    <td>Pendidikan</td>
                    <td>: </td>
                    <td>S1 Informatika</td>
                  </tr>
                  <tr class="other">
                    <td>Agamad</td>
                    <td>: </td>
                    <td>Islam</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 my-3">
          <div class="shadow">
            <div class="row px-1 py-1 align-items-center">
              <div class="col-4">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyuNFyw05KSucqjifL3PhDFrZLQh7QAS-DTw&usqp=CAU"
                  class="img-fluid" alt="..." style="">
              </div>
              <div class="col-8">
                <table class="table table-sm table-borderless">
                  <tr>
                    <td colspan="3" class="jabatan">Kepala Desa</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="nama">Ikrar Restu Gibrani</td>
                  </tr>
                  <tr class="other">
                    <td>Usia</td>
                    <td>: </td>
                    <td>32 Tahun</td>
                  </tr>
                  <tr class="other">
                    <td>Pendidikan</td>
                    <td>: </td>
                    <td>S1 Informatika</td>
                  </tr>
                  <tr class="other">
                    <td>Agamad</td>
                    <td>: </td>
                    <td>Islam</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 my-3">
          <div class="shadow">
            <div class="row px-1 py-1 align-items-center">
              <div class="col-4">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyuNFyw05KSucqjifL3PhDFrZLQh7QAS-DTw&usqp=CAU"
                  class="img-fluid" alt="..." style="">
              </div>
              <div class="col-8">
                <table class="table table-sm table-borderless">
                  <tr>
                    <td colspan="3" class="jabatan">Kepala Desa</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="nama">Ikrar Restu Gibrani</td>
                  </tr>
                  <tr class="other">
                    <td>Usia</td>
                    <td>: </td>
                    <td>32 Tahun</td>
                  </tr>
                  <tr class="other">
                    <td>Pendidikan</td>
                    <td>: </td>
                    <td>S1 Informatika</td>
                  </tr>
                  <tr class="other">
                    <td>Agamad</td>
                    <td>: </td>
                    <td>Islam</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="map" class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4>Kunjunngi Desa Sekarang Juga</h4>
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

  <section id="other-info">
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
