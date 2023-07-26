<div class="tab-pane fade show active profile-overview" id="profile-desa">
  <h5 class="card-title">Profile Desa</h5>

  <form wire:submit.prevent="updateVillage" action="">
    <div class="row mb-3">
      <label for="nama" class="col-md-4 col-lg-3 col-form-label">
        Nama Desa <span class="text-danger">*</span>
      </label>
      <div class="col-md-8 col-lg-9">
        <input wire:model='nama' name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
          value="">
        @error('nama')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="alamat" class="col-md-4 col-lg-3 col-form-label">
        Alamat Desa <span class="text-danger">*</span>
      </label>
      <div class="col-md-8 col-lg-9">
        <input wire:model="alamat" name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
          id="alamat" value="">
        @error('alamat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="penjelasan" class="col-md-4 col-lg-3 col-form-label">
        Deskripsi Desa <span class="text-danger">*</span>
      </label>
      <div class="col-md-8 col-lg-9">
        <textarea wire:model="penjelasan" name="about" class="form-control @error('penjelasan') is-invalid @enderror" id="penjelasan"
          style="height: 100px"></textarea>
        @error('penjelasan')
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
        <input wire:model="latitude" name="latitude" type="number" step="any" class="form-control @error('latitude') is-invalid @enderror"
          id="latitude" value="">
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
        <input wire:model="longitude" name="longitude" type="number" step="any" class="form-control @error('longitude') is-invalid @enderror"
          id="longitude" value="">
        @error('longitude')
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
        <input wire:model="foto" class="form-control @error('foto') is-invalid @enderror" type="file" id="foto">
        @error('foto')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" class="btn btn-primary btn-sm w-100">Ubah Profile</button>
      </div>
    </div>
  </form>

  <h5 class="card-title">Perangkat Desa</h5>
  {{-- tambah perangkat-desa --}}
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
    data-bs-target="#modal-create-perangkat-desa">
    <i class="bi bi-plus-lg"></i> perangkat-desa
  </button>
  <!-- Modal Create -->
  <div class="modal fade" id="modal-create-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-create-perangkat-desaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-perangkat-desaLabel">Tambah Perangkat Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Nama
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="text" class="form-control" id="fullName" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Jabatan
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="text" class="form-control" id="fullName" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Usia
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="number" min="0" class="form-control" id="fullName"
                  value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Pendidikan
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="text" class="form-control" id="fullName" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Agama
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="text" class="form-control" id="fullName" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Foto
              </label>
              <div class="col-md-8 col-lg-9">
                <input class="form-control" type="file" id="formFile">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-4 col-lg-3"></div>
              <div class="col-md-8 col-lg-9">
                <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..." style="max-width: 100%">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Create --}}

  <!-- Table with hoverable rows -->
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" style="white-space: nowrap">No</th>
          <th scope="col" style="white-space: nowrap">Nama</th>
          <th scope="col" style="white-space: nowrap">Jabatan</th>
          <th scope="col" style="white-space: nowrap">Usia</th>
          <th scope="col" style="white-space: nowrap">Pendidikan</th>
          <th scope="col" style="white-space: nowrap">Agama</th>
          <th scope="col" style="white-space: nowrap">Foto</th>
          <th scope="col" style="white-space: nowrap">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" style="white-space: nowrap">1</th>
          <td style="white-space: nowrap">Ahmad Ikbal Djaya</td>
          <td style="white-space: nowrap">Sekertaris</td>
          <td style="white-space: nowrap">20</td>
          <td style="white-space: nowrap">S.Kom.</td>
          <td style="white-space: nowrap">Islam</td>
          <td style="white-space: nowrap">
            <span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#modal-show-image-perangkat-desa"
              style="cursor: pointer">
              <i class="bi bi-card-image"></i>
            </span>
          </td>
          <td style="white-space: nowrap">
            <span class="badge bg-warning text-white" data-bs-toggle="modal"
              data-bs-target="#modal-edit-perangkat-desa" style="cursor: pointer">
              <i class="bi bi-pencil-square"></i>
            </span>
            <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-perangkat-desa"
              style="cursor: pointer">
              <i class="bi bi-trash"></i>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- End Table with hoverable rows -->

  {{-- Modal Show Image --}}
  <div class="modal fade" id="modal-show-image-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-show-imageLabel-perangkat-desa" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Preview Gambar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..." style="max-width: 100%;">
        </div>
      </div>
    </div>
  </div>
  {{-- EndModal Show Image --}}

  {{-- Modal Edit --}}
  <div class="modal fade" id="modal-edit-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-edit-perangkat-desaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-perangkat-desaLabel">Edit Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Nama
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="text" class="form-control" id="fullName" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Jabatan
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="text" class="form-control" id="fullName" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Usia
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="number" min="0" class="form-control" id="fullName"
                  value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Pendidikan
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="text" class="form-control" id="fullName" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Agama
              </label>
              <div class="col-md-8 col-lg-9">
                <input name="fullName" type="text" class="form-control" id="fullName" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Foto
              </label>
              <div class="col-md-8 col-lg-9">
                <input class="form-control" type="file" id="formFile">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-4 col-lg-3"></div>
              <div class="col-md-8 col-lg-9">
                <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..." style="max-width: 100%">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-warning">Edit</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Edit --}}

  {{-- Modal Delete --}}
  <div class="modal fade" id="modal-delete-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-delete-perangkat-desaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-perangkat-desaLabel">Konfirmasi Hapus Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete --}}

  @include('components.toast')

</div>
