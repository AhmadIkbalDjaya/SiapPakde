@extends('layouts.admin')

@push('adminStyle')
@endpush

@push('adminScript')
@endpush

@section('main')
  <div class="pagetitle">
    <h1>Desa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div>

  <div class="section profile">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{ asset('admin/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
            <h2>Desa TondongKura</h2>
            <h6 class="text-center">
              Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi
              Selatan
            </h6>
            <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-desa">Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bumdes-desa">Bumdes</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kelembagaan-desa">Kelembagaan</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kawasan-desa">Kawasan</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#publikasi-desa">Publikasi</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-desa">
                <h5 class="card-title">Profile Desa</h5>
                {{-- <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus.
                  Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet
                  perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                <h5 class="card-title">Profile Details</h5> --}}

                <form action="">
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                      Nama Desa
                    </label>
                    <div class="col-md-8 col-lg-9">
                      <input name="fullName" type="text" class="form-control" id="fullName" value="TondongKura">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                      Alamat Desa
                    </label>
                    <div class="col-md-8 col-lg-9">
                      <input name="fullName" type="text" class="form-control" id="fullName" value="">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                      Deskripsi Desa
                    </label>
                    <div class="col-md-8 col-lg-9">
                      <textarea name="about" class="form-control" id="about" style="height: 100px"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                      Latitude
                    </label>
                    <div class="col-md-8 col-lg-9">
                      <input name="fullName" type="text" class="form-control" id="fullName" value="">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                      longitude
                    </label>
                    <div class="col-md-8 col-lg-9">
                      <input name="fullName" type="text" class="form-control" id="fullName" value="">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                      Foto Desa
                    </label>
                    <div class="col-md-8 col-lg-9">
                      <input class="form-control" type="file" id="formFile">
                    </div>
                  </div>
                </form>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="bumdes-desa">

                <h5 class="card-title">Badan Usaha Milik Desa</h5>
                {{-- tambah bumdes --}}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#modal-create-bumdes">
                  <i class="bi bi-plus-lg"></i> Bumdes
                </button>
                <!-- Modal Create -->
                <div class="modal fade" id="modal-create-bumdes" tabindex="-1"
                  aria-labelledby="modal-create-bumdesLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-create-bumdesLabel">Tambah Desa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="">
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              Nama
                            </label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="text" class="form-control" id="fullName"
                                value="">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              Direktur
                            </label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="text" class="form-control" id="fullName"
                                value="">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              Status
                            </label>
                            <div class="col-md-8 col-lg-9 d-flex">
                              <div class="form-check me-2">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                  value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                  Serifikasi
                                </label>
                              </div>
                              <div class="form-check me-2">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                  value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                  Belum
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              J Pegawai
                            </label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="number" min="0" class="form-control"
                                id="fullName" value="">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              Unit Usaha
                            </label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="text" class="form-control" id="fullName"
                                value="">
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
                {{-- end tambah bumdes --}}

                <!-- Table with hoverable rows -->
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col" style="white-space: nowrap">No</th>
                        <th scope="col" style="white-space: nowrap">Nama</th>
                        <th scope="col" style="white-space: nowrap">Nama Direktur</th>
                        <th scope="col" style="white-space: nowrap">Status</th>
                        <th scope="col" style="white-space: nowrap">Pegawai</th>
                        <th scope="col" style="white-space: nowrap">Unit Usaha</th>
                        <th scope="col" style="white-space: nowrap">Foto</th>
                        <th scope="col" style="white-space: nowrap">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="white-space: nowrap" class="text-center">1</th>
                        <td style="white-space: nowrap">Warung Terapung</td>
                        <td style="white-space: nowrap">Ahmad Ikbal Djaya</td>
                        <td style="white-space: nowrap">Sertifikasi</td>
                        <td style="white-space: nowrap" class="text-center">10</td>
                        <td style="white-space: nowrap">Kuliner</td>
                        <td style="white-space: nowrap" class="text-center">
                          <span class="badge bg-primary" data-bs-toggle="modal"
                            data-bs-target="#modal-show-image-bumdes" style="cursor: pointer">
                            <i class="bi bi-card-image"></i>
                          </span>
                        </td>
                        <td style="white-space: nowrap">
                          <span class="badge bg-warning text-white" data-bs-toggle="modal"
                            data-bs-target="#modal-edit-bumdes" style="cursor: pointer">
                            <i class="bi bi-pencil-square"></i>
                          </span>
                          <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-bumdes"
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
                <div class="modal fade" id="modal-show-image-bumdes" tabindex="-1"
                  aria-labelledby="modal-show-imageLabel-bumdes" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Preview Gambar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="{{ asset('img/home-bg.jpg') }}" class="img-fluid" alt="..."
                          style="max-width: 100%;">
                      </div>
                    </div>
                  </div>
                </div>
                {{-- EndModal Show Image --}}

                {{-- Modal Edit --}}
                <div class="modal fade" id="modal-edit-bumdes" tabindex="-1" aria-labelledby="modal-edit-bumdesLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-edit-bumdesLabel">Edit Desa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="">
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              Nama
                            </label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="text" class="form-control" id="fullName"
                                value="">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              Direktur
                            </label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="text" class="form-control" id="fullName"
                                value="">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              Status
                            </label>
                            <div class="col-md-8 col-lg-9 d-flex">
                              <div class="form-check me-2">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                  value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                  Serifikasi
                                </label>
                              </div>
                              <div class="form-check me-2">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                  value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                  Belum
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              J Pegawai
                            </label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="number" min="0" class="form-control"
                                id="fullName" value="">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                              Unit Usaha
                            </label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="text" class="form-control" id="fullName"
                                value="">
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
                {{-- End Modal Edit --}}

                {{-- Modal Delete --}}
                <div class="modal fade" id="modal-delete-bumdes" tabindex="-1"
                  aria-labelledby="modal-delete-bumdesLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-delete-bumdesLabel">Konfirmasi Hapus Desa</h1>
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
                {{-- End Modal Delete --}}

              </div>

              <div class="tab-pane fade pt-3" id="kelembagaan-desa">

                <!-- Settings Form -->
                <form>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                    <div class="col-md-8 col-lg-9">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="changesMade" checked>
                        <label class="form-check-label" for="changesMade">
                          Changes made to your account
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="newProducts" checked>
                        <label class="form-check-label" for="newProducts">
                          Information on new products and services
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="proOffers">
                        <label class="form-check-label" for="proOffers">
                          Marketing and promo offers
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                        <label class="form-check-label" for="securityNotify">
                          Security alerts
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form><!-- End settings Form -->

              </div>

              <div class="tab-pane fade pt-3" id="kawasan-desa">
                <!-- Change Password Form -->
                <form>

                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->

              </div>

              <div class="tab-pane fade pt-3" id="publikasi-desa">
                <h1>Publikasi Desa</h1>
              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
