<div class="section profile">
  @push('adminStyle')
    @livewireStyles
    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script> --}}
  @endpush

  @push('adminScript')
    @livewireScripts
    <script src="{{ asset('js/modal.js') }}"></script>
    {{-- <script>
      // Inisialisasi peta
      var map = L.map("maps").setView([-6.8751, 109.0436], 10); // Koordinat tengah peta dan zoom level

      // Tambahkan peta dasar menggunakan Leaflet Provider Tiles
      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "© OpenStreetMap contributors",
      }).addTo(map);

      // Data koordinat desa (contoh data, Anda bisa mengganti ini dengan data dari database)
      var desaLocations = [{
        nama: "Desa A",
        longitude: "{{ $longitude }}",
        latitude: "{{ $latitude }}"
      }, ];

      // Tambahkan marker untuk setiap lokasi desa
      desaLocations.forEach(function(desa) {
        var marker = L.marker([desa.latitude, desa.longitude]).addTo(map);
        marker.bindPopup(`<b>${desa.nama}</b>`);
      });
    </script> --}}
  @endpush
  <div class="row">
    <div class="col-xl-4">
      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="{{ asset('img/village-1.jpg') }}" alt="Profile" class="rounded-1">
          <h2>{{ $nama }}</h2>
          <h3>{{ $alamat }}</h3>
          <div class="social-links mt-2">
            {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
          </div>
        </div>
      </div>

      <button class="btn btn-warning w-100 mb-3 text-white fw-semibold" data-bs-toggle="modal"
        data-bs-target="#modal-edit-profile-desa">
        Edit Desa
      </button>

      <!-- Modal Create -->
      <div wire:ignore.self class="modal fade" id="modal-edit-profile-desa" tabindex="-1"
        aria-labelledby="modal-edit-profile-desaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-edit-profile-desaLabel">Edit Profil Desa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent="update" action="">
                <div class="row mb-3">
                  <label for="nama" class="col-md-4 col-lg-3 col-form-label">
                    Nama <span class="text-danger">*</span>
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model='nama' name="nama" type="text"
                      class="form-control @error('nama') is-invalid @enderror" id="nama" value="">
                    @error('nama')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="alamat" class="col-md-4 col-lg-3 col-form-label">
                    Alamat <span class="text-danger">*</span>
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model="alamat" name="alamat" type="text"
                      class="form-control @error('alamat') is-invalid @enderror" id="alamat" value="">
                    @error('alamat')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="potensi" class="col-md-4 col-lg-3 col-form-label">
                    Potensi <span class="text-danger">*</span>
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <textarea wire:model="potensi" name="about" class="form-control @error('potensi') is-invalid @enderror"
                      id="potensi" style="height: 100px"></textarea>
                    @error('potensi')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="latitude" class="col-md-4 col-lg-3 col-form-label">
                    Latitude
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model="latitude" name="latitude" type="number" step="any"
                      class="form-control @error('latitude') is-invalid @enderror" id="latitude" value="">
                    @error('latitude')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="longitude" class="col-md-4 col-lg-3 col-form-label">
                    longitude
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model="longitude" name="longitude" type="number" step="any"
                      class="form-control @error('longitude') is-invalid @enderror" id="longitude" value="">
                    @error('longitude')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                {{-- <div class="row mb-3">
                  <label for="foto" class="col-md-4 col-lg-3 col-form-label">
                    Foto Desa
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model="foto" class="form-control @error('foto') is-invalid @enderror" type="file"
                      id="foto">
                    @error('foto')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div> --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-warning">Edit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Create --}}
    </div>

    <div class="col-xl-8">
      <div class="card">
        <div class="card-body pt-3">
          <h5 class="card-title">Potensi Desa</h5>
          <p class="small fst-italic" style="text-align: justify;">
            {{ $potensi }}
          </p>
          <h5 class="card-title">Lokasi Desa</h5>
          <div class="row">
            <div class="col-md-6 row">
              <div class="col-6">Longitude:</div>
              <div class="col-6">{{ $longitude }}</div>
            </div>
            <div class="col-md-6 row">
              <div class="col-6">Latitude: </div>
              <div class="col-6">{{ $latitude }}</div>
            </div>
          </div>
          {{-- @if ($latitude != null && $longitude != null)
            <div wire:ignore.self id="maps" style="height: 350px;" class="rounded-2 my-2"></div>
          @else
            <h5 class="text-center my-5">
              Data Lokasi Belum Ditambahkan
            </h5>
          @endif --}}
        </div>
      </div>
    </div>
  </div>
  @include('components.toast')
</div>
