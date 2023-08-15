<div>
  <h5 class="card-title">kecamatan Kawasan</h5>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-kecamatan"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> kecamatan
  </button>

  <!-- Table with hoverable rows -->
  @if ($kecamatans->count() > 0)
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="white-space: nowrap">No</th>
            <th scope="col" style="white-space: nowrap">Nama kecamatan</th>
            <th scope="col" style="white-space: nowrap">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kecamatans as $kecamatan)
            <tr>
              <th scope="row" style="white-space: nowrap" class="text-center">{{ $loop->iteration }}</th>
              <td style="white-space: nowrap">{{ $kecamatan->nama }}</td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $kecamatan->id }})' class="badge bg-warning text-white"
                  data-bs-toggle="modal" data-bs-target="#modal-edit-kecamatan" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span wire:click='setField({{ $kecamatan->id }})' class="badge bg-danger" data-bs-toggle="modal"
                  data-bs-target="#modal-delete-kecamatan" style="cursor: pointer">
                  <i class="bi bi-trash"></i>
                </span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @else
    <h5 class="text-center my-3">
      kecamatan Belum Ditambahkan
    </h5>
  @endif
  <!-- End Table with hoverable rows -->

  <!-- Modal Create -->
  <div wire:ignore.self class="modal fade" id="modal-create-kecamatan" tabindex="-1"
    aria-labelledby="modal-create-kecamatanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-kecamatanLabel">Tambah Kecamatan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='store' action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-5 col-lg-4 col-form-label py-0">
                Nama kecamatan
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model='nama' name="nama" type="text"
                  class="form-control @error('nama') is-invalid @enderror" id="nama" value="">
                @error('nama')
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
  {{-- End Modal Create --}}

  {{-- Modal Edit --}}
  <div wire:ignore.self class="modal fade" id="modal-edit-kecamatan" tabindex="-1"
    aria-labelledby="modal-edit-kecamatanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-kecamatanLabel">Edit Kecamatan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='update({{ $kecamatan_edit_id }})' action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-5 col-lg-4 col-form-label py-0">
                Nama kecamatan
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model='nama' name="nama" type="text"
                  class="form-control @error('nama') is-invalid @enderror" id="nama" value="">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
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
  <div wire:ignore.self class="modal fade" id="modal-delete-kecamatan" tabindex="-1"
    aria-labelledby="modal-delete-kecamatanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-kecamatanLabel">Konfirmasi Hapus Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus {{ $nama }}?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $kecamatan_id }})' type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete --}}
</div>
