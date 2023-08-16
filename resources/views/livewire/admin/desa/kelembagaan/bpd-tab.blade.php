<div wire:ignore.self class="tab-pane fade pt-3 show active" id="bpd-desa">

  <h5 class="card-title">Badan Permusyawaran Desa</h5>
  {{-- tambah bumdes --}}
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-bpd"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> BPD
  </button>
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-show-sk-bpd"
    wire:click='resetField'>
    SK Periode
  </button>

  <!-- Table with hoverable rows -->
  @if ($bpd)
    @if ($bpd->bpd_member->count() > 0)
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">No</th>
              <th scope="col" style="white-space: nowrap">Nama</th>
              <th scope="col" style="white-space: nowrap">Jabatan</th>
              <th scope="col" style="white-space: nowrap">Keterwakilan Dusun</th>
              <th scope="col" style="white-space: nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bpd->bpd_member as $bpdM)
              <tr>
                <th scope="row" style="white-space: nowrap">{{ $loop->iteration }}</th>
                <td style="white-space: nowrap">{{ $bpdM->nama }}</td>
                <td style="white-space: nowrap">{{ $bpdM->jabatan }}</td>
                <td style="white-space: nowrap">{{ $bpdM->keterwakilan_dusun }}</td>
                <td style="white-space: nowrap">
                  <span wire:click='setField({{ $bpdM->id }})' class="badge bg-warning text-white"
                    data-bs-toggle="modal" data-bs-target="#modal-edit-bpd" style="cursor: pointer">
                    <i class="bi bi-pencil-square"></i>
                  </span>
                  <span wire:click='setField({{ $bpdM->id }})' class="badge bg-danger" data-bs-toggle="modal"
                    data-bs-target="#modal-delete-bpd" style="cursor: pointer">
                    <i class="bi bi-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif
  @else
    <h4 class="text-center">
      Bpd Belum Ditambahkan
    </h4>
  @endif
  <!-- End Table with hoverable rows -->

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
              <label for="keterwakilan_dusun" class="col-md-5 col-lg-4 col-form-label py-0">
                Keterwakilan Dusun
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
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
          <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Create BPD --}}

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
              <label for="keterwakilan_dusun" class="col-md-5 col-lg-4 col-form-label py-0">
                Keterwakilan Dusun
                @include('components.ui.form.required')
              </label>
              <div class="col-md-7 col-lg-8">
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
  <div wire:ignore.self class="modal fade" id="modal-delete-bpd" tabindex="-1"
    aria-labelledby="modal-delete-bpdLabel" aria-hidden="true">
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

  {{-- Modal Show sk --}}
  <div wire:ignore.self class="modal fade" id="modal-show-sk-bpd" tabindex="-1"
    aria-labelledby="modal-show-sk-bpdLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">SK BPD</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-between align-items-center mb-3 gap-1">
            <form wire:submit.prevent='updateSk' action="" enctype="multipart/form-data">
              <div class="d-flex gap-1">
                <input wire:model='sk_periode' name="sk_periode"
                  class="form-control form-control-sm @error('sk_periode') is-invalid @enderror" id="formFileSm"
                  type="file">
                <button type="submit" class="btn btn-sm btn-primary">Upload</button>
              </div>
            </form>
            <div>
              @if ($show_sk_periode != null)
                <button wire:click='destroySk' class="btn btn-danger btn-sm" style="cursor: pointer">
                  <i class="bi bi-trash"></i>
                </button>
              @endif
            </div>
          </div>
          <div class="mb-3">
            @if ($show_sk_periode != null)
              <a href="{{ asset('storage/' . $show_sk_periode) }}" download="sk_periode"
                class="text-decoration-none text-dark">
                <i class="bi bi-file-earmark-pdf text-danger"></i>
                Download PDF
              </a>
            @endif
          </div>
          @if ($show_sk_periode)
            <iframe src="{{ asset('storage/' . $show_sk_periode) }}" frameborder="0" class="w-100"
              height="350"></iframe>
          @else
            <h6 class="text-center">SK Periode Belum Ditambahkan</h6>
          @endif
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Show sk --}}

  @include('components.toast')
</div>
