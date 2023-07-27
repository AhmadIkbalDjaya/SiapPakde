<div>
  <h5 class="card-title">Perangkat Desa</h5>
  {{-- tambah perangkat-desa --}}
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-perangkat-desa"
    wire:click='resetFields'>
    <i class="bi bi-plus-lg"></i> Perangkat Desa
  </button>
  <!-- Modal Create -->
  <div wire:ignore.self class="modal fade" id="modal-create-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-create-perangkat-desaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-perangkat-desaLabel">Tambah Perangkat Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="storePerangkat" action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-4 col-lg-3 col-form-label">
                Nama <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="nama" name="nama" type="text"
                  class="form-control @error('nama') is-invalid @enderror" id="nama" value="">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">
                Jabatan <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="jabatan" name="jabatan" type="text"
                  class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" value="">
                @error('jabatan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="usia" class="col-md-4 col-lg-3 col-form-label">
                Usia <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="usia" name="usia" type="number" min="0"
                  class="form-control @error('usia') is-invalid @enderror" id="usia" value="">
                @error('usia')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="pendidikan" class="col-md-4 col-lg-3 col-form-label">
                Pendidikan <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="pendidikan" name="pendidikan" type="text"
                  class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" value="">
                @error('pendidikan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="agama" class="col-md-4 col-lg-3 col-form-label">
                Agama <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="agama" name="agama" type="text"
                  class="form-control @error('agama') is-invalid @enderror" id="agama" value="">
                @error('agama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="foto" class="col-md-4 col-lg-3 col-form-label">
                Foto
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
            </div>
            {{-- preview upload --}}
            {{-- <div class="row mb-3">
              <div class="col-md-4 col-lg-3"></div>
              <div class="col-md-8 col-lg-9">
                <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..." style="max-width: 100%">
              </div>
            </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Create --}}

  <!-- Table with hoverable rows -->
  @if ($perangkat_desas->count() > 0)
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
          @foreach ($perangkat_desas as $pd)
            <tr>
              <th scope="row" style="white-space: nowrap">{{ $loop->iteration }}</th>
              <td style="white-space: nowrap">{{ $pd->nama }}</td>
              <td style="white-space: nowrap">{{ $pd->jabatan }}</td>
              <td style="white-space: nowrap">{{ $pd->usia }}</td>
              <td style="white-space: nowrap">{{ $pd->pendidikan }}</td>
              <td style="white-space: nowrap">{{ $pd->agama }}</td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $pd->id }})' class="badge bg-primary" data-bs-toggle="modal"
                  data-bs-target="#modal-show-image-perangkat-desa" style="cursor: pointer">
                  <i class="bi bi-card-image"></i>
                </span>
              </td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $pd->id }})' class="badge bg-warning text-white"
                  data-bs-toggle="modal" data-bs-target="#modal-edit-perangkat-desa" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span wire:click='setField({{ $pd->id }})' class="badge bg-danger" data-bs-toggle="modal"
                  data-bs-target="#modal-delete-perangkat-desa" style="cursor: pointer">
                  <i class="bi bi-trash"></i>
                </span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @else
    <h4 class="text-center">
      Perangkat Desa Belum Ditambahkan
    </h4>
  @endif
  <!-- End Table with hoverable rows -->

  {{-- Modal Show Image --}}
  <div wire:ignore.self class="modal fade" id="modal-show-image-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-show-imageLabel-perangkat-desa" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Preview Gambar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('storage/' . $preview_image) }}" class="img-fluid" alt="..."
            style="max-width: 100%;">
        </div>
      </div>
    </div>
  </div>
  {{-- EndModal Show Image --}}

  {{-- Modal Edit --}}
  <div wire:ignore.self class="modal fade" id="modal-edit-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-edit-perangkat-desaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-perangkat-desaLabel">Edit Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="update({{ $perangkat_desa_edit_id }})" action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-4 col-lg-3 col-form-label">
                Nama <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="nama" name="nama" type="text"
                  class="form-control @error('nama') is-invalid @enderror" id="nama" value="">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">
                Jabatan <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="jabatan" name="jabatan" type="text"
                  class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" value="">
                @error('jabatan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="usia" class="col-md-4 col-lg-3 col-form-label">
                Usia <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="usia" name="usia" type="number" min="0"
                  class="form-control @error('usia') is-invalid @enderror" id="usia" value="">
                @error('usia')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="pendidikan" class="col-md-4 col-lg-3 col-form-label">
                Pendidikan <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="pendidikan" name="pendidikan" type="text"
                  class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" value="">
                @error('pendidikan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="agama" class="col-md-4 col-lg-3 col-form-label">
                Agama <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="agama" name="agama" type="text"
                  class="form-control @error('agama') is-invalid @enderror" id="agama" value="">
                @error('agama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="foto" class="col-md-4 col-lg-3 col-form-label">
                Foto
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
            </div>
            {{-- preview upload --}}
            {{-- <div class="row mb-3">
              <div class="col-md-4 col-lg-3"></div>
              <div class="col-md-8 col-lg-9">
                <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..." style="max-width: 100%">
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
  {{-- End Modal Edit --}}

  {{-- Modal Delete --}}
  <div wire:ignore.self class="modal fade" id="modal-delete-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-delete-perangkat-desaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-perangkat-desaLabel">Konfirmasi Hapus Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus {{ $nama }}?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $perangkat_desa_id }})' type="button"
            class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete --}}
  @include('components.toast')
</div>
