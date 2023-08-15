<div wire:ignore.self class="tab-pane fade pt-3" id="posyandu-desa">
  <div class="row">
    {{-- posyandu --}}
    <div class="col-md-4">
      <h5 class="card-title"> posyandu</h5>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-posyandu"
        wire:click='resetPosyanduField'>
        <i class="bi bi-plus-lg"></i> Posyandu
      </button>

      <!-- Table with hoverable rows -->
      @if ($posyandus->count() > 0)
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col" style="white-space: nowrap">No</th>
                <th scope="col" style="white-space: nowrap">Nama</th>
                <th scope="col" style="white-space: nowrap">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posyandus as $posyandu)
                <tr>
                  <th scope="row" style="white-space: nowrap">{{ $loop->iteration }}</th>
                  <td style="white-space: nowrap">{{ $posyandu->nama }}</td>
                  <td style="white-space: nowrap">
                    <span wire:click='setPosyanduField({{ $posyandu->id }})' class="badge bg-warning text-white"
                      data-bs-toggle="modal" data-bs-target="#modal-edit-posyandu" style="cursor: pointer">
                      <i class="bi bi-pencil-square"></i>
                    </span>
                    <span wire:click='setPosyanduField({{ $posyandu->id }})' class="badge bg-danger"
                      data-bs-toggle="modal" data-bs-target="#modal-delete-posyandu" style="cursor: pointer">
                      <i class="bi bi-trash"></i>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <h5 class="text-center">
          Posyandu Belum Ditambahkan
        </h5>
      @endif
      <!-- End Table with hoverable rows -->

      <!-- Modal Create  posyandu -->
      <div wire:ignore.self class="modal fade" id="modal-create-posyandu" tabindex="-1"
        aria-labelledby="modal-create-posyanduLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-create-posyanduLabel">Tambah Posyandu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent='storePosyandu' action="">
                <div class="row mb-3">
                  <label for="nama_posyandu" class="col-md-4 col-lg-3 col-form-label py-0">
                    Nama Posyandu
                    @include('components.ui.form.required')
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model='nama_posyandu' name="nama_posyandu" type="text"
                      class="form-control @error('nama_posyandu') is-invalid @enderror" id="nama_posyandu"
                      value="">
                    @error('nama_posyandu')
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
      {{-- End Modal Create  posyandu --}}

      <!-- Modal Edit  posyandu -->
      <div wire:ignore.self class="modal fade" id="modal-edit-posyandu" tabindex="-1"
        aria-labelledby="modal-edit-posyanduLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-edit-posyanduLabel">Edit Posyandu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent='updatePosyandu({{ $posyandu_edit_id }})' action="">
                <div class="row mb-3">
                  <label for="nama_posyandu" class="col-md-4 col-lg-3 col-form-label py-0">
                    Nama Posyandu
                    @include('components.ui.form.required')
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model='nama_posyandu' name="nama_posyandu" type="text"
                      class="form-control @error('nama_posyandu') is-invalid @enderror" id="nama_posyandu"
                      value="">
                    @error('nama_posyandu')
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
      {{-- End Modal Edit  posyandu --}}

      {{-- Modal Delete  posyandu --}}
      <div wire:ignore.self class="modal fade" id="modal-delete-posyandu" tabindex="-1"
        aria-labelledby="modal-delete-posyanduLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus Posyandu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>
                Yakin Ingin Menghapus {{ $nama_posyandu }}? <br>
                Kader Posyandu Juga Akan Di hapus
              </h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button wire:click='destroyPosyandu({{ $posyandu_id }})' type="button"
                class="btn btn-danger">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Delete  posyandu --}}
    </div>

    {{-- kader posyandu --}}
    <div class="col-md-8">
      <h5 class="card-title">Kader Posyandu</h5>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
        data-bs-target="#modal-create-kader-posyandu">
        <i class="bi bi-plus-lg"></i> Kader Posyandu
      </button>

      <!-- Table with hoverable rows -->
      @if ($kader_posyandus->count() > 0)
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col" style="white-space: nowrap">No</th>
                <th scope="col" style="white-space: nowrap">Nama</th>
                <th scope="col" style="white-space: nowrap">Jabatan</th>
                <th scope="col" style="white-space: nowrap">Posyandu</th>
                <th scope="col" style="white-space: nowrap">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kader_posyandus as $kader_posyandu)
                <tr>
                  <th scope="row" style="white-space: nowrap">{{ $loop->iteration }}</th>
                  <td style="white-space: nowrap">{{ $kader_posyandu->nama }}</td>
                  <td style="white-space: nowrap">{{ $kader_posyandu->jabatan }}</td>
                  <td style="white-space: nowrap">{{ $kader_posyandu->posyandu->nama }}</td>
                  <td style="white-space: nowrap">
                    <span wire:click='setKaderPosyanduField({{ $kader_posyandu->id }})'
                      class="badge bg-warning text-white" data-bs-toggle="modal"
                      data-bs-target="#modal-edit-kader-posyandu" style="cursor: pointer">
                      <i class="bi bi-pencil-square"></i>
                    </span>
                    <span wire:click='setKaderPosyanduField({{ $kader_posyandu->id }})' class="badge bg-danger"
                      data-bs-toggle="modal" data-bs-target="#modal-delete-kader-posyandu" style="cursor: pointer">
                      <i class="bi bi-trash"></i>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <h5 class="text-center">
          Kader Posyandu Belum Ditambahkan
        </h5>
      @endif
      <!-- End Table with hoverable rows -->

      <!-- Modal Create kader posyandu -->
      <div wire:ignore.self class="modal fade" id="modal-create-kader-posyandu" tabindex="-1"
        aria-labelledby="modal-create-kader-posyanduLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-create-kader-posyanduLabel">Tambah posyandu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent='storeKaderPosyandu' action="">
                <div class="row mb-3">
                  <label for="nama" class="col-md-4 col-lg-3 col-form-label py-0">
                    Nama
                    @include('components.ui.form.required')
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
                  <label for="jabatan" class="col-md-4 col-lg-3 col-form-label py-0">
                    Jabatan
                    @include('components.ui.form.required')
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model='jabatan' name="jabatan" type="text"
                      class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" value="">
                    @error('jabatan')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="select_posyandu_id" class="col-md-4 col-lg-3 col-form-label py-0">
                    Posyandu
                    @include('components.ui.form.required')
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <select wire:model='select_posyandu_id'
                      class="form-select @error('select_posyandu_id') is-invalid @enderror"
                      aria-label="Default select example" id="select_posyandu_id">
                      <option hidden>Pilih Posyandu</option>
                      @foreach ($posyandus as $posyandu)
                        <option value="{{ $posyandu->id }}">{{ $posyandu->nama }}</option>
                      @endforeach
                    </select>
                    @error('select_posyandu_id')
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
      {{-- End Modal Create kader posyandu --}}

      <!-- Modal Edit kader posyandu -->
      <div wire:ignore.self class="modal fade" id="modal-edit-kader-posyandu" tabindex="-1"
        aria-labelledby="modal-edit-kader-posyanduLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-edit-kader-posyanduLabel">Edit posyandu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent='updateKaderPosyandu({{ $kader_posyandu_edit_id }})' action="">
                <div class="row mb-3">
                  <label for="nama" class="col-md-4 col-lg-3 col-form-label py-0">
                    Nama
                    @include('components.ui.form.required')
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
                  <label for="jabatan" class="col-md-4 col-lg-3 col-form-label py-0">
                    Jabatan
                    @include('components.ui.form.required')
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input wire:model='jabatan' name="jabatan" type="text"
                      class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" value="">
                    @error('jabatan')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="select_posyandu_id" class="col-md-4 col-lg-3 col-form-label py-0">
                    Posyandu
                    @include('components.ui.form.required')
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <select wire:model='select_posyandu_id'
                      class="form-select @error('select_posyandu_id') is-invalid @enderror"
                      aria-label="Default select example" id="select_posyandu_id">
                      <option hidden>Pilih Posyandu</option>
                      @foreach ($posyandus as $posyandu)
                        <option value="{{ $posyandu->id }}">{{ $posyandu->nama }}</option>
                      @endforeach
                    </select>
                    @error('select_posyandu_id')
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
      {{-- End Modal Edit kader posyandu --}}

      {{-- Modal Delete kader posyandu --}}
      <div wire:ignore.self class="modal fade" id="modal-delete-kader-posyandu" tabindex="-1"
        aria-labelledby="modal-delete-kader-posyanduLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus posyandu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Yakin Ingin Menghapus {{ $nama }}?</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button wire:click='destroyKaderPosyandu({{ $kader_posyandu_id }})' type="button"
                class="btn btn-danger">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Delete kader posyandu --}}

    </div>
  </div>
  @include('components.toast')
</div>
