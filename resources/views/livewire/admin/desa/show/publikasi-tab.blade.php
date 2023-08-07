<div wire:ignore.self class="tab-pane fade pt-3" id="publikasi-desa">
  <h5 class="card-title">Publikasi Desa</h5>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-publikasi"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> publikasi
  </button>

  <!-- Table with hoverable rows -->
  @if ($publikasis->count() > 0)
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="white-space: nowrap">No</th>
            <th scope="col" style="white-space: nowrap">Preview</th>
            <th scope="col" style="white-space: nowrap">Description</th>
            <th scope="col" style="white-space: nowrap">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($publikasis as $publikasi)
            <tr>
              <th scope="row" style="white-space: nowrap" class="text-center">{{ $loop->iteration }}</th>
              <td style="white-space: nowrap" class="text-center">
                <span wire:click='setField({{ $publikasi->id }})' class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#modal-show-image-publikasi"
                  style="cursor: pointer">
                  <i class="bi bi-card-image"></i>
                </span>
              </td>
              <td style="white-space: nowrap">{{ $publikasi->description }}</td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $publikasi->id }})' class="badge bg-warning text-white"
                  data-bs-toggle="modal" data-bs-target="#modal-edit-publikasi" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span wire:click='setField({{ $publikasi->id }})' class="badge bg-danger" data-bs-toggle="modal"
                  data-bs-target="#modal-delete-publikasi" style="cursor: pointer">
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
      Publikasi Belum Ditambahkan
    </h4>
  @endif
  <!-- End Table with hoverable rows -->

  <!-- Modal Create publikasi -->
  <div wire:ignore.self class="modal fade" id="modal-create-publikasi" tabindex="-1"
    aria-labelledby="modal-create-publikasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-publikasiLabel">Tambah publikasi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="store" action="" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="dokumentasi" class="col-md-4 col-lg-3 col-form-label">
                Dokumen <span class="text-danger">*</span>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='dokumentasi' name="dokumentasi" class="form-control @error('dokumentasi') is-invalid @enderror"
                  type="file" id="dokumentasi">
                @error('dokumentasi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="description" class="col-md-4 col-lg-3 col-form-label">
                Deskripsi
              </label>
              <div class="col-md-8 col-lg-9">
                <textarea wire:model='description' name="description" class="form-control @error('description') is-invalid @enderror"
                  id="description" style="height: 100px"></textarea>
                @error('description')
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
  {{-- End Modal Create publikasi --}}

  <!-- Modal Edit publikasi -->
  <div wire:ignore.self class="modal fade" id="modal-edit-publikasi" tabindex="-1"
    aria-labelledby="modal-edit-publikasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-publikasiLabel">Edit publikasi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="update({{ $publikasi_edit_id }})" action="" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="dokumentasi" class="col-md-4 col-lg-3 col-form-label">
                Dokumen
                <br>
                <sup>
                  (Optional)
                </sup>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='dokumentasi' name="dokumentasi"
                  class="form-control @error('dokumentasi') is-invalid @enderror" type="file" id="dokumentasi">
                @error('dokumentasi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="description" class="col-md-4 col-lg-3 col-form-label">
                Deskripsi
              </label>
              <div class="col-md-8 col-lg-9">
                <textarea wire:model='description' name="description" class="form-control @error('description') is-invalid @enderror"
                  id="description" style="height: 100px"></textarea>
                @error('description')
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
  {{-- End Modal Edit publikasi --}}

  {{-- Modal Delete --}}
  <div wire:ignore.self class="modal fade" id="modal-delete-publikasi" tabindex="-1"
    aria-labelledby="modal-delete-publikasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus publikasi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $publikasi_id }})' type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete --}}

  {{-- Modal Show Image --}}
  <div wire:ignore.self class="modal fade" id="modal-show-image-publikasi" tabindex="-1"
    aria-labelledby="modal-show-imageLabel-publikasi" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Preview Gambar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('storage/' . $dokumentasi_show) }}" class="img-fluid" alt="..."
            style="max-width: 100%;">
        </div>
      </div>
    </div>
  </div>
  {{-- EndModal Show Image --}}
</div>
