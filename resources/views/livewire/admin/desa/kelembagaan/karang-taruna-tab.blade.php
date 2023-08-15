<div wire:ignore.self class="tab-pane fade pt-3" id="karang-taruna-desa">

  <h5 class="card-title">Kader Karang Taruna</h5>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-karang-taruna"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> Karang Taruna
  </button>

  <!-- Table with hoverable rows -->
  @if ($karang_tarunas->count() > 0)
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="white-space: nowrap">No</th>
            <th scope="col" style="white-space: nowrap">Nama</th>
            <th scope="col" style="white-space: nowrap">Jabatan</th>
            <th scope="col" style="white-space: nowrap">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($karang_tarunas as $karang_taruna)
            <tr>
              <th scope="row" style="white-space: nowrap">{{ $loop->iteration }}</th>
              <td style="white-space: nowrap">{{ $karang_taruna->nama }}</td>
              <td style="white-space: nowrap">{{ $karang_taruna->jabatan }}</td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $karang_taruna->id }})' class="badge bg-warning text-white"
                  data-bs-toggle="modal" data-bs-target="#modal-edit-karang-taruna" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span wire:click='setField({{ $karang_taruna->id }})' class="badge bg-danger" data-bs-toggle="modal"
                  data-bs-target="#modal-delete-karang-taruna" style="cursor: pointer">
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
      Karang Taruna Belum Ditambahkan
    </h4>
  @endif
  <!-- End Table with hoverable rows -->

  <!-- Modal Create karang-taruna -->
  <div wire:ignore.self class="modal fade" id="modal-create-karang-taruna" tabindex="-1"
    aria-labelledby="modal-create-karang-tarunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-karang-tarunaLabel">Tambah karang-taruna
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="store" action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-4 col-lg-3 col-form-label py-0">
                Nama
                @include('components.ui.form.required')
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
              <label for="jabatan" class="col-md-4 col-lg-3 col-form-label py-0">
                Jabatan
                @include('components.ui.form.required')
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Create karang-taruna --}}

  <!-- Modal Edit karang-taruna -->
  <div wire:ignore.self class="modal fade" id="modal-edit-karang-taruna" tabindex="-1"
    aria-labelledby="modal-edit-karang-tarunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-karang-tarunaLabel">Edit karang-taruna</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="update({{ $karang_taruna_edit_id }})" action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-4 col-lg-3 col-form-label py-0">
                Nama
                @include('components.ui.form.required')
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
              <label for="jabatan" class="col-md-4 col-lg-3 col-form-label py-0">
                Jabatan
                @include('components.ui.form.required')
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Edit karang-taruna --}}

  {{-- Modal Delete karang-taruna --}}
  <div wire:ignore.self class="modal fade" id="modal-delete-karang-taruna" tabindex="-1"
    aria-labelledby="modal-delete-karang-tarunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus karang-taruna
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus {{ $nama }}?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $karang_taruna_id }})' type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete karang-taruna --}}
  @include('components.toast')
</div>
