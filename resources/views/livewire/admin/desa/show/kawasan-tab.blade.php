<div>
  <h5 class="card-title">Kawasan Desa</h5>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-kawasan"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> Kawasan
  </button>

  <!-- Table with hoverable rows -->
  @if ($kawasans->count() > 0)
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="white-space: nowrap">No</th>
            <th scope="col" style="white-space: nowrap">Nama</th>
            <th scope="col" style="white-space: nowrap">Kategori</th>
            <th scope="col" style="white-space: nowrap">foto</th>
            <th scope="col" style="white-space: nowrap">Deskripsi</th>
            <th scope="col" style="white-space: nowrap">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kawasans as $kawasan)
            <tr>
              <th scope="row" style="white-space: nowrap" class="text-center">{{ $loop->iteration }}</th>
              <td style="white-space: nowrap">{{ $kawasan->nama }}</td>
              <td style="white-space: nowrap">{{ $kawasan->kategori_kawasan->nama }}</td>
              <td style="white-space: nowrap">
                <span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#modal-show-image-kawasan"
                  style="cursor: pointer" wire:click="setField({{ $kawasan->id }})">
                  <i class="bi bi-card-image"></i>
                </span>
              </td>
              <td>
                <p
                  style="max-width: 100px; overflow: hidden; text-overflow:ellipsis; display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;">
                  {{ $kawasan->deskripsi }}
                </p>
              </td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $kawasan->id }})' class="badge bg-warning text-white"
                  data-bs-toggle="modal" data-bs-target="#modal-edit-kawasan" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span wire:click='setField({{ $kawasan->id }})' class="badge bg-danger" data-bs-toggle="modal"
                  data-bs-target="#modal-delete-kawasan" style="cursor: pointer">
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
      Kawasan Belum Ditambahkan
    </h4>
  @endif
  <!-- End Table with hoverable rows -->

  {{-- Modal Show Image --}}
  <div wire:ignore.self class="modal fade" id="modal-show-image-kawasan" tabindex="-1"
    aria-labelledby="modal-show-imageLabel-kawasan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Preview Gambar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('storage/' . $show_foto) }}" class="img-fluid" alt="..." style="max-width: 100%;">
        </div>
      </div>
    </div>
  </div>
  {{-- EndModal Show Image --}}

  <!-- Modal Create -->
  <div wire:ignore.self class="modal fade" id="modal-create-kawasan" tabindex="-1"
    aria-labelledby="modal-create-kawasanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-kawasanLabel">Tambah Kawasan Desa</h1>
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
              <label for="kategori_kawasan_id" class="col-md-4 col-lg-3 col-form-label py-0">
                Kategori
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <select wire:model="kategori_kawasan_id"
                  class="form-select @error('kategori_kawasan_id') is-invalid @enderror"
                  aria-label="Default select example" id="kategori_kawasan_id">
                  <option hidden>Kategori Kawasan</option>
                  @foreach ($kategories as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                  @endforeach
                </select>
                @error('kategori_kawasan_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="deskripsi" class="col-md-4 col-lg-3 col-form-label py-0">
                Deskripsi
                @include('components.ui.form.optional')
              </label>
              <div class="col-md-8 col-lg-9">
                <textarea wire:model='deskripsi' name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                  id="deskripsi" style="height: 100px"></textarea>
                @error('deskripsi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="foto" class="col-md-4 col-lg-3 col-form-label py-0">
                Foto
                <p class="input-label input-required p-0 m-0 d-inline" style="font-size: .7rem">
                  image
                </p>
                <p class="input-label input-required text-danger p-0 m-0 d-inline" style="font-size: .7rem">
                  (wajib) *
                </p>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="foto" class="form-control @error('foto') is-invalid @enderror" type="file"
                  id="foto" accept="image/*">
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
  {{-- End Modal Create --}}

  <!-- Modal update -->
  <div wire:ignore.self class="modal fade" id="modal-edit-kawasan" tabindex="-1"
    aria-labelledby="modal-edit-kawasanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-kawasanLabel">Edit Kawasan Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="update({{ $kawasan_edit_id }})" action="">
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
              <label for="kategori_kawasan_id" class="col-md-4 col-lg-3 col-form-label py-0">
                Kategori
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <select wire:model="kategori_kawasan_id"
                  class="form-select @error('kategori_kawasan_id') is-invalid @enderror"
                  aria-label="Default select example" id="kategori_kawasan_id">
                  <option hidden>Kategori Kawasan</option>
                  @foreach ($kategories as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                  @endforeach
                </select>
                @error('kategori_kawasan_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="deskripsi" class="col-md-4 col-lg-3 col-form-label py-0">
                Deskripsi
                @include('components.ui.form.optional')
              </label>
              <div class="col-md-8 col-lg-9">
                <textarea wire:model='deskripsi' name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                  id="deskripsi" style="height: 100px"></textarea>
                @error('deskripsi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="foto" class="col-md-4 col-lg-3 col-form-label py-0">
                Foto
                <p class="input-label input-required p-0 m-0 d-inline" style="font-size: .7rem">
                  image
                </p>
                <p class="input-label input-required p-0 m-0 d-inline" style="font-size: .7rem">
                  (opsional)
                </p>
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="foto" class="form-control @error('foto') is-invalid @enderror" type="file"
                  id="foto" accept="image/*">
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
          <button type="submit" class="btn btn-warning">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal update --}}

  {{--  Modal Delete  --}}
  <div wire:ignore.self class="modal fade" id="modal-delete-kawasan" tabindex="-1"
    aria-labelledby="modal-delete-kawasanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-kawasanLabel">Konfirmasi Hapus Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus {{ $nama }}?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $kawasan_id }})' type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete --}}

  @include('components.toast')
</div>
