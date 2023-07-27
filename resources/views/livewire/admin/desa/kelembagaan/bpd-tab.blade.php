<div wire:ignore.self class="tab-pane fade pt-3 show active" id="bpd-desa">

  <h5 class="card-title">Badan Permusyawaran Desa</h5>
  {{-- tambah bumdes --}}
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-bpd"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> BPD
  </button>
  <!-- Modal Create BPD -->
  <div wire:ignore.self class="modal fade" id="modal-create-bpd" tabindex="-1" aria-labelledby="modal-create-bpdLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-create-bpdLabel">Tambah BPD</h1>
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
            <div class="row mb-3">
              <label for="keterwakilan_dusun" class="col-md-4 col-lg-3 col-form-label">
                Keterwakilan Dusun
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="keterwakilan_dusun" name="keterwakilan_dusun" type="text" min="0"
                  class="form-control @error('keterwakilan_dusun') is-invalid @enderror" id="keterwakilan_dusun"
                  value="">
                @error('keterwakilan_dusun')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            {{-- <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                Foto
              </label>
              <div class="col-md-8 col-lg-9">
                <input class="form-control" type="file" id="formFile">
              </div>
            </div>
            <div class="row mb-3">
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
  {{-- End Modal Create BPD --}}

  <!-- Table with hoverable rows -->
  @if ($bpd->bpd_member->count() > 0)
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="white-space: nowrap">No</th>
            <th scope="col" style="white-space: nowrap">Nama</th>
            <th scope="col" style="white-space: nowrap">Jabatan</th>
            <th scope="col" style="white-space: nowrap">Keterwakilan Dusun</th>
            {{-- <th scope="col" style="white-space: nowrap">Foto</th> --}}
            <th scope="col" style="white-space: nowrap">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bpd->bpd_member as $bpdM)
            <tr>
              <th scope="row" style="white-space: nowrap">1</th>
              <td style="white-space: nowrap">{{ $bpdM->nama }}</td>
              <td style="white-space: nowrap">{{ $bpdM->jabatan }}</td>
              <td style="white-space: nowrap">{{ $bpdM->keterwakilan_dusun }}</td>
              {{-- <td style="white-space: nowrap">
            <span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#modal-show-image-bpd"
              style="cursor: pointer">
              <i class="bi bi-card-image"></i>
            </span>
          </td> --}}
              <td style="white-space: nowrap">
                <span wire:click='setField({{ $bpdM->id }})' class="badge bg-warning text-white" data-bs-toggle="modal" data-bs-target="#modal-edit-bpd"
                  style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span wire:click='setField({{ $bpdM->id }})' class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-bpd"
                  style="cursor: pointer">
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
      Bpd Belum Ditambahkan
    </h4>
  @endif
  <!-- End Table with hoverable rows -->

  {{-- Modal Show Image --}}
  {{-- <div class="modal fade" id="modal-show-image-bpd" tabindex="-1" aria-labelledby="modal-show-image-bpdLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Preview Gambar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..." style="max-width: 100%;">
        </div>
      </div>
    </div>
  </div> --}}
  {{-- End Modal Show Image --}}

  <!-- Modal Edit BPD -->
  <div wire:ignore.self class="modal fade" id="modal-edit-bpd" tabindex="-1" aria-labelledby="modal-edit-bpdLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-bpdLabel">Edit BPD</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="update({{ $bpd_member_edit_id }})" action="">
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
            <div class="row mb-3">
              <label for="keterwakilan_dusun" class="col-md-4 col-lg-3 col-form-label">
                Keterwakilan Dusun
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model="keterwakilan_dusun" name="keterwakilan_dusun" type="text" min="0"
                  class="form-control @error('keterwakilan_dusun') is-invalid @enderror" id="keterwakilan_dusun"
                  value="">
                @error('keterwakilan_dusun')
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
  {{-- End Modal Edit BPD --}}

  {{-- Modal Delete --}}
  <div wire:ignore.self class="modal fade" id="modal-delete-bpd" tabindex="-1" aria-labelledby="modal-delete-bpdLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus BPD</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus {{ $nama }}?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $bpd_member_id }})' type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete --}}

</div>
