<div wire:ignore.self class="tab-pane fade pt-3" id="lpm-desa">

  <h5 class="card-title">Kader LPM</h5>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-lpm"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> LPM
  </button>
  <!-- Modal Create lpm -->
  <div wire:ignore.self class="modal fade" id="modal-create-lpm" tabindex="-1" aria-labelledby="modal-create-lpmLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-lpmLabel">Tambah LPM</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="store" action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-4 col-lg-3 col-form-label">
                Nama
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
                Jabatan
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
  {{-- End Modal Create lpm --}}

  <!-- Table with hoverable rows -->
  @if ($lpms->count() > 0)
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
          @foreach ($lpms as $lpm)
            <tr>
              <th scope="row" style="white-space: nowrap">{{ $loop->iteration }}</th>
              <td style="white-space: nowrap">{{ $lpm->nama }}</td>
              <td style="white-space: nowrap">{{ $lpm->jabatan }}</td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $lpm->id }})' class="badge bg-warning text-white"
                  data-bs-toggle="modal" data-bs-target="#modal-edit-lpm" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span wire:click='setField({{ $lpm->id }})' class="badge bg-danger" data-bs-toggle="modal"
                  data-bs-target="#modal-delete-lpm" style="cursor: pointer">
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
      Lembaga Pemberdayaan Manusia Belum Ditambahkan
    </h4>
  @endif
  <!-- End Table with hoverable rows -->

  <!-- Modal Edit lpm -->
  <div wire:ignore.self class="modal fade" id="modal-edit-lpm" tabindex="-1" aria-labelledby="modal-edit-lpmLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-lpmLabel">Edit LPM</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="update({{ $lpm_edit_id }})" action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-4 col-lg-3 col-form-label">
                Nama
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
                Jabatan
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
  {{-- End Modal Edit lpm --}}

  {{-- Modal Delete lpm --}}
  <div wire:ignore.self class="modal fade" id="modal-delete-lpm" tabindex="-1"
    aria-labelledby="modal-delete-lpmLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus lpm</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus {{ $nama }}?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $lpm_id }})' type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete lpm --}}

  @include('components.toast')
</div>
