<div>
  <div class="row py-3 justify-content-between">
    <div class="col-md-6 col-4">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">
        <i class="bi bi-plus-lg"></i> Desa
      </button>

      <!-- Modal -->
      <div wire:ignore.self class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-createLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-createLabel">Tambah Desa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent='storeVillage' action="">
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
                    <input wire:model='alamat' name="alamat" type="text"
                      class="form-control @error('alamat') is-invalid @enderror" id="alamat" value="">
                    @error('alamat')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="penjelasan" class="col-md-4 col-lg-3 col-form-label">
                    Deskripsi <span class="text-danger">*</span>
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <textarea wire:model='penjelasan' name="penjelasan" class="form-control @error('penjelasan') is-invalid @enderror"
                      id="penjelasan" style="height: 100px"></textarea>
                    @error('penjelasan')
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
                    <input wire:model='longitude' name="longitude" type="number"
                      class="form-control @error('longitude') is-invalid @enderror" id="longitude" value="">
                    @error('longitude')
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
                    <input wire:model="latitude" name="latitude" type="number"
                      class="form-control @error('latitude') is-invalid @enderror" id="latitude" value="">
                    @error('latitude')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="foto" class="col-md-4 col-lg-3 col-form-label">
                    Foto Desa
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model="foto" name="foto" class="form-control @error('foto') is-invalid @enderror"
                      type="file" id="foto">
                    @error('foto')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-8">
      <input wire:model='search' class="form-control" type="text" placeholder="Cari Desa"
        aria-label="default input example">
    </div>
  </div>

  <div class="row justify-content-evenly">
    @foreach ($desas as $desa)
      <div class="col-md-3 col-6">
        <a href="{{ route('admin.desa.show', ['desa' => $desa->slug]) }}">
          <div class="card">
            <img src="{{ asset('storage/' . $desa->foto) }}" class="card-img-top" alt="...">
            <div class="card-body px-2">
              <h5 class="card-title py-0" style="font-size: 15px">{{ $desa->nama }}</h5>
              <p class="card-text" style="font-size: 10px">{{ $desa->alamat }}</p>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
