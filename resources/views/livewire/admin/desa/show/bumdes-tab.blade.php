<div>
  <h5 class="card-title">Badan Usaha Milik Desa</h5>
  {{-- create button --}}
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-bumdes"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> Bumdes
  </button>

  <!-- Table with hoverable rows -->
  @if ($bumdeses->count() > 0)
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="white-space: nowrap">No</th>
            <th scope="col" style="white-space: nowrap">Nama</th>
            <th scope="col" style="white-space: nowrap">Status</th>
            <th scope="col" style="white-space: nowrap">Unit Usaha</th>
            <th scope="col" style="white-space: nowrap">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bumdeses as $bumdes)
            <tr>
              <th scope="row" style="white-space: nowrap" class="text-center">{{ $loop->iteration }}</th>
              <td style="white-space: nowrap">{{ $bumdes->nama }}</td>
              <td style="white-space: nowrap">
                @if ($bumdes->sertifikasi)
                  Sertifikasi
                @else
                  Belum Sertifikasi
                @endif
              </td>
              <td style="white-space: nowrap">{{ $bumdes->unit_usaha }}</td>
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $bumdes->id }})' class="badge bg-info text-white" data-bs-toggle="modal"
                  data-bs-target="#modal-show-bumdes" style="cursor: pointer">
                  <i class="bi bi-eye"></i>
                </span>
                <span wire:click='setField({{ $bumdes->id }})' class="badge bg-warning text-white"
                  data-bs-toggle="modal" data-bs-target="#modal-edit-bumdes" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span wire:click='setField({{ $bumdes->id }})' class="badge bg-danger" data-bs-toggle="modal"
                  data-bs-target="#modal-delete-bumdes" style="cursor: pointer">
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
      Bumdes Belum Ditambahkan
    </h4>
  @endif
  <!-- End Table with hoverable rows -->

  <!-- Modal show -->
  <div wire:ignore.self class="modal fade" id="modal-show-bumdes" tabindex="-1"
    aria-labelledby="modal-show-bumdesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-show-bumdesLabel">Detail Bumdes</h1>
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
              Direktur
            </label>
            <div class="col-7 col-lg-8">
              {{ $direktur }}
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Status
            </label>
            <div class="col-7 col-lg-8">
              @if ($sertifikasi)
                Sertifikasi
              @else
                Belum Serfikasikasi
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Jumlah Pegawai
            </label>
            <div class="col-7 col-lg-8">
              {{ $jumlah_pegawai }} Orang
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Unit Usaha
            </label>
            <div class="col-7 col-lg-8">
              {{ $unit_usaha }}
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-5 col-lg-4 py-0">
              Kontak
            </label>
            <div class="col-7 col-lg-8">
              {{ $phone }}
            </div>
          </div>
          @if ($sertifikasi)
            <div class="row mb-3">
              <label class="col-5 col-lg-4 py-0">
                Sertifikat
              </label>
              <div class="col-7 col-lg-8">
                <a href="{{ asset('storage/' . $bumdes->file_sertifikat) }}" download="sertifikat {{ $bumdes->nama }}"
                  class="text-decoration-none">
                  <i class="bi bi-file-earmark-pdf-fill text-danger"></i>
                  Download Sertifikat
                </a>
              </div>
              @if ($show_file_sertifikat)
                {{-- <iframe src="{{ asset('storage/'.$show_file_sertifikat) }}" width="600" height="450"></iframe> --}}
                <embed src="{{ asset('storage/' . $show_file_sertifikat) }}" type="application/pdf" width="600"
                  height="450">
              @endif
            </div>
          @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal show --}}

  <!-- Modal Create -->
  <div wire:ignore.self class="modal fade" id="modal-create-bumdes" tabindex="-1"
    aria-labelledby="modal-create-bumdesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-bumdesLabel">Tambah Bumdes</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='store' action="">
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
              <label for="direktur" class="col-md-4 col-lg-3 col-form-label py-0">
                Direktur
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='direktur' name="direktur" type="text"
                  class="form-control @error('direktur') is-invalid @enderror" id="direktur" value="">
                @error('direktur')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="" class="col-md-4 col-lg-3 col-form-label py-0">
                Status
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9 d-flex">
                <div class="form-check me-2">
                  <input wire:model='sertifikasi' class="form-check-input @error('sertifikasi') is-invalid @enderror"
                    type="radio" name="sertifikasi" id="sudah" value="1" checked>
                  <label class="form-check-label py-0" for="sudah">
                    Serifikasi
                  </label>
                </div>
                <div class="form-check me-2">
                  <input wire:model='sertifikasi' class="form-check-input @error('sertifikasi') is-invalid @enderror"
                    type="radio" name="sertifikasi" id="belum" value="0">
                  <label class="form-check-label" for="belum">
                    Belum
                  </label>
                </div>
                @error('sertifikasi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="jumlah_pegawai" class="col-md-4 col-lg-3 col-form-label py-0">
                J Pegawai
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='jumlah_pegawai' name="jumlah_pegawai" type="number" min="0"
                  class="form-control @error('jumlah_pegawai') is-invalid @enderror" id="jumlah_pegawai"
                  value="">
                @error('jumlah_pegawai')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="unit_usaha" class="col-md-4 col-lg-3 col-form-label py-0">
                Unit Usaha
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='unit_usaha' name="unit_usaha" type="text"
                  class="form-control @error('unit_usaha') is-invalid @enderror" id="unit_usaha" value="">
                @error('unit_usaha')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="phone" class="col-md-4 col-lg-3 col-form-label py-0">
                Telepon
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='phone' name="phone" type="number"
                  class="form-control @error('phone') is-invalid @enderror" id="phone" value="">
                @error('phone')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            @if ($sertifikasi)
              <div class="row mb-3">
                <label for="file_sertifikat" class="col-md-4 col-lg-3 col-form-label py-0">
                  Sertifikat
                  <p class="input-label input-required p-0 m-0 d-inline" style="font-size: .7rem">
                    .pdf
                  </p>
                  <p class="input-label input-required text-danger p-0 m-0 d-inline" style="font-size: .7rem">
                    (wajib) *
                  </p>
                </label>
                <div class="col-md-8 col-lg-9">
                  @if ($sertifikasi)
                    <input wire:model='file_sertifikat' name="file_sertifikat" type="file"
                      class="form-control @error('file_sertifikat') is-invalid @enderror" id="file_sertifikat"
                      value="" accept=".pdf">
                    @error('file_sertifikat')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  @endif
                </div>
              </div>
            @endif
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
  <div wire:ignore.self class="modal fade" id="modal-edit-bumdes" tabindex="-1"
    aria-labelledby="modal-edit-bumdesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-bumdesLabel">Edit Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='update({{ $bumdes_edit_id }})' action="">
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
              <label for="direktur" class="col-md-4 col-lg-3 col-form-label py-0">
                Direktur
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='direktur' name="direktur" type="text"
                  class="form-control @error('direktur') is-invalid @enderror" id="direktur" value="">
                @error('direktur')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="" class="col-md-4 col-lg-3 col-form-label py-0">
                Status
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9 d-flex">
                <div class="form-check me-2">
                  <input wire:model='sertifikasi' class="form-check-input @error('sertifikasi') is-invalid @enderror"
                    type="radio" name="sertifikasi" id="sudah" value="1" checked>
                  <label class="form-check-label py-0" for="sudah">
                    Serifikasi
                  </label>
                </div>
                <div class="form-check me-2">
                  <input wire:model='sertifikasi' class="form-check-input @error('sertifikasi') is-invalid @enderror"
                    type="radio" name="sertifikasi" id="belum" value="0">
                  <label class="form-check-label" for="belum">
                    Belum
                  </label>
                </div>
                @error('sertifikasi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="jumlah_pegawai" class="col-md-4 col-lg-3 col-form-label py-0">
                J Pegawai
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='jumlah_pegawai' name="jumlah_pegawai" type="number" min="0"
                  class="form-control @error('jumlah_pegawai') is-invalid @enderror" id="jumlah_pegawai"
                  value="">
                @error('jumlah_pegawai')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="unit_usaha" class="col-md-4 col-lg-3 col-form-label py-0">
                Unit Usaha
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='unit_usaha' name="unit_usaha" type="text"
                  class="form-control @error('unit_usaha') is-invalid @enderror" id="unit_usaha" value="">
                @error('unit_usaha')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="phone" class="col-md-4 col-lg-3 col-form-label py-0">
                Telepon
                @include('components.ui.form.required')
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='phone' name="phone" type="number"
                  class="form-control @error('phone') is-invalid @enderror" id="phone" value="">
                @error('phone')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            @if ($sertifikasi)
              <div class="row mb-3">
                <label for="file_sertifikat" class="col-md-4 col-lg-3 col-form-label py-0">
                  Sertifikat
                  <p class="input-label input-required p-0 m-0 d-inline" style="font-size: .7rem">
                    .pdf
                  </p>
                  @if (!$show_file_sertifikat)
                    <p class="input-label input-required text-danger p-0 m-0 d-inline" style="font-size: .7rem">
                      (wajib) *
                    </p>
                  @endif
                </label>
                <div class="col-md-8 col-lg-9">
                  @if ($sertifikasi)
                    <input wire:model='file_sertifikat' name="file_sertifikat" type="file"
                      class="form-control @error('file_sertifikat') is-invalid @enderror" id="file_sertifikat"
                      value="" accept=".pdf">
                    @error('file_sertifikat')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  @endif
                </div>
              </div>
            @endif
            {{-- <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Foto
              </label>
              <div class="col-md-8 col-lg-9">
                <input class="form-control" type="file" id="formFile">
              </div>
            </div> --}}
            {{-- <div class="row mb-3">
              <div class="col-md-4 col-lg-3"></div>
              <div class="col-md-8 col-lg-9">
                <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..." style="max-width: 100%">
              </div>
            </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Edit --}}

  {{-- Modal Delete --}}
  <div wire:ignore.self class="modal fade" id="modal-delete-bumdes" tabindex="-1"
    aria-labelledby="modal-delete-bumdesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus {{ $nama }}?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $bumdes_id }})' type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete --}}
  @include('components.toast')
</div>
