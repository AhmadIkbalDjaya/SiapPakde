<div>
  <h5 class="card-title">Kategori Kawasan</h5>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-kategori"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> Kategori
  </button>
  <!-- Modal Create -->
  <div wire:ignore.self class="modal fade" id="modal-create-kategori" tabindex="-1"
    aria-labelledby="modal-create-kategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-kategoriLabel">Tambah Bumdes</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='store' action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-4 col-lg-3 col-form-label">
                Nama Kategori
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
  @if ($kategories->count() > 0)
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="white-space: nowrap">No</th>
            <th scope="col" style="white-space: nowrap">Nama Kategori</th>
            <th scope="col" style="white-space: nowrap">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kategories as $kategori)
            <tr>
              <th scope="row" style="white-space: nowrap" class="text-center">{{ $loop->iteration }}</th>
              <td style="white-space: nowrap">{{ $kategori->nama }}</td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $kategori->id }})' class="badge bg-warning text-white"
                  data-bs-toggle="modal" data-bs-target="#modal-edit-kategori" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span wire:click='setField({{ $kategori->id }})' class="badge bg-danger" data-bs-toggle="modal"
                  data-bs-target="#modal-delete-kategori" style="cursor: pointer">
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
      Kategori Belum Ditambahkan
    </h5>
  @endif
  <!-- End Table with hoverable rows -->

  {{-- Modal Edit --}}
  <div wire:ignore.self class="modal fade" id="modal-edit-kategori" tabindex="-1"
    aria-labelledby="modal-edit-kategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-kategoriLabel">Edit Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='update({{ $kategori_edit_id }})' action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-4 col-lg-3 col-form-label">
                Nama Kategori
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
  <div wire:ignore.self class="modal fade" id="modal-delete-kategori" tabindex="-1"
    aria-labelledby="modal-delete-kategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-kategoriLabel">Konfirmasi Hapus Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus {{ $nama }}?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $kategori_id }})' type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete --}}
</div>
