<div>
  <h5 class="card-title">Perangkat Desa</h5>
  {{-- tambah perangkat-desa --}}
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-perangkat-desa"
    wire:click='resetFields'>
    <i class="bi bi-plus-lg"></i> Perangkat Desa
  </button>

  <!-- Table with hoverable rows -->
  @if ($perangkat_desas->count() > 0)
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="white-space: nowrap">No</th>
            <th scope="col" style="white-space: nowrap">Nama</th>
            <th scope="col" style="white-space: nowrap">Jabatan</th>
            <th scope="col" style="white-space: nowrap">Jenis Kelamin</th>
            <th scope="col" style="white-space: nowrap">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($perangkat_desas as $pd)
            <tr>
              <th scope="row" style="white-space: nowrap">{{ $loop->iteration }}</th>
              <td style="white-space: nowrap">{{ $pd->nama }}</td>
              <td style="white-space: nowrap">{{ $pd->jabatan }}</td>
              <td style="white-space: nowrap">{{ $pd->jenis_kelamin }}</td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $pd->id }})' class="badge bg-info text-white" data-bs-toggle="modal"
                  data-bs-target="#modal-show-perangkat-desa" style="cursor: pointer">
                  <i class="bi bi-eye"></i>
                </span>
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

  <!-- Modal show -->
  <div wire:ignore.self class="modal fade" id="modal-show-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-show-perangkat-desaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-show-perangkat-desaLabel">Detail Perangkat Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Nama
            </label>
            <div class="col-7 col-lg-8">
              {{ $nama }}
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Jabatan
            </label>
            <div class="col-7 col-lg-8">
              {{ $jabatan }}
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Tempat, Tanggal Lahir
            </label>
            <div class="col-7 col-lg-8">
              {{ $tempat_lahir }}, {{ $tanggal_lahir }}
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Jenis kelamin
            </label>
            <div class="col-7 col-lg-8">
              {{ $jenis_kelamin }}
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Pendidikan
            </label>
            <div class="col-7 col-lg-8">
              {{ $pendidikan }}
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Pekerjaan
            </label>
            <div class="col-7 col-lg-8">
              {{ $pekerjaan }}
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal show --}}

  <!-- Modal Create -->
  <div wire:ignore.self class="modal fade" id="modal-create-perangkat-desa" tabindex="-1"
    aria-labelledby="modal-create-perangkat-desaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-perangkat-desaLabel">Tambah Perangkat Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="storePerangkat" action="">
            <div class="row mb-3">
              <label for="nama" class="col-md-5 col-lg-4 col-form-label py-0">
                Nama
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
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
              <label for="jabatan" class="col-md-5 col-lg-4 col-form-label py-0">
                Jabatan
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
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
              <label for="tempat_lahir" class="col-md-5 col-lg-4 col-form-label py-0">
                Tempat Lahir
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model="tempat_lahir" name="tempat_lahir" type="text"
                  class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" value="">
                @error('tempat_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="tanggal_lahir" class="col-md-5 col-lg-4 col-form-label py-0">
                Tanggal Lahir
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model="tanggal_lahir" name="tanggal_lahir" type="date" min=""
                  class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                  value="">
                @error('tanggal_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="jenis_kelamin" class="col-md-5 col-lg-4 col-form-label py-0">
                Jenis Kelamin
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model="jenis_kelamin" name="jenis_kelamin" type="radio" value="Laki-Laki"
                  class="form-check-input @error('jenis_kelamin') is-invalid @enderror" id="jk-laki-laki">
                <label for="jk-laki-laki" class="form-check-label">Laki-Laki</label>
                <input wire:model="jenis_kelamin" name="jenis_kelamin" type="radio" value="Perempuan"
                  class="form-check-input @error('jenis_kelamin') is-invalid @enderror" id="jk-perempuan">
                <label for="jk-perempuan" class="form-check-label">Perempuan</label>
                @error('jenis_kelamin')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="pendidikan" class="col-md-5 col-lg-4 col-form-label py-0">
                Pendidikan
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
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
              <label for="pekerjaan" class="col-md-5 col-lg-4 col-form-label py-0">
                pekerjaan
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model="pekerjaan" name="pekerjaan" type="text"
                  class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" value="">
                @error('pekerjaan')
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
              <label for="nama" class="col-md-5 col-lg-4 col-form-label py-0">
                Nama
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
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
              <label for="jabatan" class="col-md-5 col-lg-4 col-form-label py-0">
                Jabatan
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
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
              <label for="tempat_lahir" class="col-md-5 col-lg-4 col-form-label py-0">
                Tempat Lahir
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model="tempat_lahir" name="tempat_lahir" type="text"
                  class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" value="">
                @error('tempat_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="tanggal_lahir" class="col-md-5 col-lg-4 col-form-label py-0">
                Tanggal Lahir
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model="tanggal_lahir" name="tanggal_lahir" type="date" min=""
                  class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                  value="">
                @error('tanggal_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="jenis_kelamin" class="col-md-5 col-lg-4 col-form-label py-0">
                Jenis Kelamin
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model="jenis_kelamin" name="jenis_kelamin" type="radio" value="Laki-Laki"
                  class="form-check-input @error('jenis_kelamin') is-invalid @enderror" id="jk-laki-laki">
                <label for="jk-laki-laki" class="form-check-label">Laki-Laki</label>
                <input wire:model="jenis_kelamin" name="jenis_kelamin" type="radio" value="Perempuan"
                  class="form-check-input @error('jenis_kelamin') is-invalid @enderror" id="jk-perempuan">
                <label for="jk-perempuan" class="form-check-label">Perempuan</label>
                @error('jenis_kelamin')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="pendidikan" class="col-md-5 col-lg-4 col-form-label py-0">
                Pendidikan
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
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
              <label for="pekerjaan" class="col-md-5 col-lg-4 col-form-label py-0">
                pekerjaan
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
                <input wire:model="pekerjaan" name="pekerjaan" type="text"
                  class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" value="">
                @error('pekerjaan')
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
