<div wire:ignore.self class="tab-pane fade pt-3" id="kelembagaan-desa">
  <h5 class="card-title">Kelembagaan Desa</h5>
  {{-- tabs kelembagaan --}}
  <ul class="nav nav-tabs nav-tabs-bordered px-3 justify-content-between">

    <li class="nav-item">
      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#bpd-desa">BPD</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pkk-desa">PKK</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#posyandu-desa">Posyandu</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kpm-desa">KPM</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#karang-taruna-desa">Karang
        Taruna</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#lpm-desa">LPM</button>
    </li>

  </ul>

  <div class="tab-content pt-2">

    {{-- Tab BPD  --}}
    <livewire:admin.desa.kelembagaan.bpd-tab :desa="$desa" />
    {{-- End Tab BPD  --}}

    {{-- Tab PKK  --}}
    <div class="tab-pane fade pt-3" id="pkk-desa">

      <h5 class="card-title">Kader PKK</h5>
      {{-- tambah bumdes --}}
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-pkk">
        <i class="bi bi-plus-lg"></i> pkk
      </button>
      <!-- Modal Create pkk -->
      <div class="modal fade" id="modal-create-pkk" tabindex="-1" aria-labelledby="modal-create-pkkLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-create-pkkLabel">Tambah pkk</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Create pkk --}}

      <!-- Table with hoverable rows -->
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">No</th>
              <th scope="col" style="white-space: nowrap">Nama</th>
              <th scope="col" style="white-space: nowrap">Jabatan</th>
              <th scope="col" style="white-space: nowrap">Foto</th>
              <th scope="col" style="white-space: nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="white-space: nowrap">1</th>
              <td style="white-space: nowrap">Ahmad Ikbal Djaya</td>
              <td style="white-space: nowrap">Kapala Desa</td>
              <td style="white-space: nowrap">
                <span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#modal-show-image-pkk"
                  style="cursor: pointer">
                  <i class="bi bi-card-image"></i>
                </span>
              </td>
              <td style="white-space: nowrap">
                <span class="badge bg-warning text-white" data-bs-toggle="modal" data-bs-target="#modal-edit-pkk"
                  style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-pkk"
                  style="cursor: pointer">
                  <i class="bi bi-trash"></i>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End Table with hoverable rows -->

      {{-- Modal Show Image --}}
      <div class="modal fade" id="modal-show-image-pkk" tabindex="-1" aria-labelledby="modal-show-image-pkkLabel"
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
      </div>
      {{-- End Modal Show Image --}}

      <!-- Modal Edit pkk -->
      <div class="modal fade" id="modal-edit-pkk" tabindex="-1" aria-labelledby="modal-edit-pkkLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-edit-pkkLabel">Edit pkk</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                    <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                      style="max-width: 100%">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning">Edit</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Edit pkk --}}

      {{-- Modal Delete pkk --}}
      <div class="modal fade" id="modal-delete-pkk" tabindex="-1" aria-labelledby="modal-delete-pkkLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus pkk</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Yakin Ingin Menghapus?</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Delete pkk --}}

    </div>
    {{-- End Tab PKK  --}}

    {{-- Tab posyandu  --}}
    <div class="tab-pane fade pt-3" id="posyandu-desa">

      <h5 class="card-title">Kader posyandu</h5>
      {{-- tambah bumdes --}}
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
        data-bs-target="#modal-create-posyandu">
        <i class="bi bi-plus-lg"></i> posyandu
      </button>
      <!-- Modal Create posyandu -->
      <div class="modal fade" id="modal-create-posyandu" tabindex="-1" aria-labelledby="modal-create-posyanduLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-create-posyanduLabel">Tambah posyandu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                    <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                      style="max-width: 100%">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Create posyandu --}}

      <!-- Table with hoverable rows -->
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">No</th>
              <th scope="col" style="white-space: nowrap">Nama</th>
              <th scope="col" style="white-space: nowrap">Jabatan</th>
              <th scope="col" style="white-space: nowrap">Foto</th>
              <th scope="col" style="white-space: nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="white-space: nowrap">1</th>
              <td style="white-space: nowrap">Ahmad Ikbal Djaya</td>
              <td style="white-space: nowrap">Kapala Desa</td>
              <td style="white-space: nowrap">
                <span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#modal-show-image-posyandu"
                  style="cursor: pointer">
                  <i class="bi bi-card-image"></i>
                </span>
              </td>
              <td style="white-space: nowrap">
                <span class="badge bg-warning text-white" data-bs-toggle="modal"
                  data-bs-target="#modal-edit-posyandu" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-posyandu"
                  style="cursor: pointer">
                  <i class="bi bi-trash"></i>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End Table with hoverable rows -->

      {{-- Modal Show Image --}}
      <div class="modal fade" id="modal-show-image-posyandu" tabindex="-1"
        aria-labelledby="modal-show-image-posyanduLabel" aria-hidden="true">
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
      </div>
      {{-- End Modal Show Image --}}

      <!-- Modal Edit posyandu -->
      <div class="modal fade" id="modal-edit-posyandu" tabindex="-1" aria-labelledby="modal-edit-posyanduLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-edit-posyanduLabel">Edit posyandu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                    <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                      style="max-width: 100%">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning">Edit</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Edit posyandu --}}

      {{-- Modal Delete posyandu --}}
      <div class="modal fade" id="modal-delete-posyandu" tabindex="-1" aria-labelledby="modal-delete-posyanduLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus posyandu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Yakin Ingin Menghapus?</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Delete posyandu --}}

    </div>
    {{-- End Tab posyandu  --}}

    {{-- Tab kpm  --}}
    <div class="tab-pane fade pt-3" id="kpm-desa">

      <h5 class="card-title">Kader kpm</h5>
      {{-- tambah bumdes --}}
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
        data-bs-target="#modal-create-kpm">
        <i class="bi bi-plus-lg"></i> kpm
      </button>
      <!-- Modal Create kpm -->
      <div class="modal fade" id="modal-create-kpm" tabindex="-1" aria-labelledby="modal-create-kpmLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-create-kpmLabel">Tambah kpm</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                    <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                      style="max-width: 100%">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Create kpm --}}

      <!-- Table with hoverable rows -->
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">No</th>
              <th scope="col" style="white-space: nowrap">Nama</th>
              <th scope="col" style="white-space: nowrap">Jabatan</th>
              <th scope="col" style="white-space: nowrap">Foto</th>
              <th scope="col" style="white-space: nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="white-space: nowrap">1</th>
              <td style="white-space: nowrap">Ahmad Ikbal Djaya</td>
              <td style="white-space: nowrap">Kapala Desa</td>
              <td style="white-space: nowrap">
                <span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#modal-show-image-kpm"
                  style="cursor: pointer">
                  <i class="bi bi-card-image"></i>
                </span>
              </td>
              <td style="white-space: nowrap">
                <span class="badge bg-warning text-white" data-bs-toggle="modal" data-bs-target="#modal-edit-kpm"
                  style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-kpm"
                  style="cursor: pointer">
                  <i class="bi bi-trash"></i>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End Table with hoverable rows -->

      {{-- Modal Show Image --}}
      <div class="modal fade" id="modal-show-image-kpm" tabindex="-1" aria-labelledby="modal-show-image-kpmLabel"
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
      </div>
      {{-- End Modal Show Image --}}

      <!-- Modal Edit kpm -->
      <div class="modal fade" id="modal-edit-kpm" tabindex="-1" aria-labelledby="modal-edit-kpmLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-edit-kpmLabel">Edit kpm</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                    <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                      style="max-width: 100%">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning">Edit</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Edit kpm --}}

      {{-- Modal Delete kpm --}}
      <div class="modal fade" id="modal-delete-kpm" tabindex="-1" aria-labelledby="modal-delete-kpmLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus kpm</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Yakin Ingin Menghapus?</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Delete kpm --}}

    </div>
    {{-- End Tab kpm  --}}

    {{-- Tab karang-taruna  --}}
    <div class="tab-pane fade pt-3" id="karang-taruna-desa">

      <h5 class="card-title">Kader karang-taruna</h5>
      {{-- tambah bumdes --}}
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
        data-bs-target="#modal-create-karang-taruna">
        <i class="bi bi-plus-lg"></i> karang-taruna
      </button>
      <!-- Modal Create karang-taruna -->
      <div class="modal fade" id="modal-create-karang-taruna" tabindex="-1"
        aria-labelledby="modal-create-karang-tarunaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-create-karang-tarunaLabel">Tambah karang-taruna
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                    <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                      style="max-width: 100%">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Create karang-taruna --}}

      <!-- Table with hoverable rows -->
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">No</th>
              <th scope="col" style="white-space: nowrap">Nama</th>
              <th scope="col" style="white-space: nowrap">Jabatan</th>
              <th scope="col" style="white-space: nowrap">Foto</th>
              <th scope="col" style="white-space: nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="white-space: nowrap">1</th>
              <td style="white-space: nowrap">Ahmad Ikbal Djaya</td>
              <td style="white-space: nowrap">Kapala Desa</td>
              <td style="white-space: nowrap">
                <span class="badge bg-primary" data-bs-toggle="modal"
                  data-bs-target="#modal-show-image-karang-taruna" style="cursor: pointer">
                  <i class="bi bi-card-image"></i>
                </span>
              </td>
              <td style="white-space: nowrap">
                <span class="badge bg-warning text-white" data-bs-toggle="modal"
                  data-bs-target="#modal-edit-karang-taruna" style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-karang-taruna"
                  style="cursor: pointer">
                  <i class="bi bi-trash"></i>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End Table with hoverable rows -->

      {{-- Modal Show Image --}}
      <div class="modal fade" id="modal-show-image-karang-taruna" tabindex="-1"
        aria-labelledby="modal-show-image-karang-tarunaLabel" aria-hidden="true">
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
      </div>
      {{-- End Modal Show Image --}}

      <!-- Modal Edit karang-taruna -->
      <div class="modal fade" id="modal-edit-karang-taruna" tabindex="-1"
        aria-labelledby="modal-edit-karang-tarunaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-edit-karang-tarunaLabel">Edit karang-taruna</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                    <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                      style="max-width: 100%">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning">Edit</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Edit karang-taruna --}}

      {{-- Modal Delete karang-taruna --}}
      <div class="modal fade" id="modal-delete-karang-taruna" tabindex="-1"
        aria-labelledby="modal-delete-karang-tarunaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus karang-taruna
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Yakin Ingin Menghapus?</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Delete karang-taruna --}}

    </div>
    {{-- End Tab karang-taruna  --}}

    {{-- Tab lpm  --}}
    <div class="tab-pane fade pt-3" id="lpm-desa">

      <h5 class="card-title">Kader lpm</h5>
      {{-- tambah bumdes --}}
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
        data-bs-target="#modal-create-lpm">
        <i class="bi bi-plus-lg"></i> lpm
      </button>
      <!-- Modal Create lpm -->
      <div class="modal fade" id="modal-create-lpm" tabindex="-1" aria-labelledby="modal-create-lpmLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-create-lpmLabel">Tambah lpm</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                    <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                      style="max-width: 100%">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Create lpm --}}

      <!-- Table with hoverable rows -->
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">No</th>
              <th scope="col" style="white-space: nowrap">Nama</th>
              <th scope="col" style="white-space: nowrap">Jabatan</th>
              <th scope="col" style="white-space: nowrap">Foto</th>
              <th scope="col" style="white-space: nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="white-space: nowrap">1</th>
              <td style="white-space: nowrap">Ahmad Ikbal Djaya</td>
              <td style="white-space: nowrap">Kapala Desa</td>
              <td style="white-space: nowrap">
                <span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#modal-show-image-lpm"
                  style="cursor: pointer">
                  <i class="bi bi-card-image"></i>
                </span>
              </td>
              <td style="white-space: nowrap">
                <span class="badge bg-warning text-white" data-bs-toggle="modal" data-bs-target="#modal-edit-lpm"
                  style="cursor: pointer">
                  <i class="bi bi-pencil-square"></i>
                </span>
                <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-lpm"
                  style="cursor: pointer">
                  <i class="bi bi-trash"></i>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End Table with hoverable rows -->

      {{-- Modal Show Image --}}
      <div class="modal fade" id="modal-show-image-lpm" tabindex="-1" aria-labelledby="modal-show-image-lpmLabel"
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
      </div>
      {{-- End Modal Show Image --}}

      <!-- Modal Edit lpm -->
      <div class="modal fade" id="modal-edit-lpm" tabindex="-1" aria-labelledby="modal-edit-lpmLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-edit-lpmLabel">Edit lpm</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Jabatan
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
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
                    <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                      style="max-width: 100%">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning">Edit</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Edit lpm --}}

      {{-- Modal Delete lpm --}}
      <div class="modal fade" id="modal-delete-lpm" tabindex="-1" aria-labelledby="modal-delete-lpmLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus lpm</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Yakin Ingin Menghapus?</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Delete lpm --}}

    </div>
    {{-- End Tab lpm  --}}

  </div>

</div>
