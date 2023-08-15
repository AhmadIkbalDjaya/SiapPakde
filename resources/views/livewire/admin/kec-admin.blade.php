<div class="section">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Admin kecamatan</h5>
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-admin"
            wire:click='resetField'>
            <i class="bi bi-plus-lg"></i>
            Admin kecamatan
          </button>
          <!-- Modal Create -->
          <div wire:ignore.self class="modal fade" id="modal-create-admin" tabindex="-1"
            aria-labelledby="modal-create-adminLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="modal-create-adminLabel">Tambah Bumdes</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form wire:submit.prevent='store' action="">
                    <div class="row mb-3">
                      <label for="username" class="col-md-4 col-lg-3 col-form-label">
                        username
                      </label>
                      <div class="col-md-8 col-lg-9">
                        <input wire:model='username' name="username" type="text"
                          class="form-control @error('username') is-invalid @enderror" id="username" value="">
                        @error('username')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="password" class="col-md-4 col-lg-3 col-form-label">
                        password
                      </label>
                      <div class="col-md-8 col-lg-9">
                        <div class="input-group">
                          <input wire:model="password" name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" id="password" value="">
                          <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility()">
                            <i id="password-icon" class="bi bi-eye-fill"></i>
                          </button>
                        </div>
                        @error('password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="kecamatan_id" class="col-md-4 col-lg-3 col-form-label">Kecamatan</label>
                      <div class="col-md-8 col-lg-9">
                        <select wire:model='kecamatan_id' class="form-select @error('kecamatan_id') is-invalid @enderror"
                          aria-label="Default select example" id="kecamatan_id">
                          <option hidden>Pilih kecamatan</option>
                          @foreach ($kecamatans as $kecamatan)
                            <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama }}</option>
                          @endforeach
                        </select>
                        @error('kecamatan_id')
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
          @if ($users->count() > 0)
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col" style="white-space: nowrap">No</th>
                    <th scope="col" style="white-space: nowrap">Username</th>
                    <th scope="col" style="white-space: nowrap">kecamatan</th>
                    <th scope="col" style="white-space: nowrap">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <th scope="row" style="white-space: nowrap">{{ $loop->iteration }}</th>
                      <td style="white-space: nowrap">{{ $user->username }}</td>
                      <td style="white-space: nowrap">{{ $user->kecamatan->nama }}</td>
                      <td style="white-space: nowrap">
                        <span wire:click='setField({{ $user->id }})' class="badge bg-warning text-white"
                          data-bs-toggle="modal" data-bs-target="#modal-edit-admin" style="cursor: pointer">
                          <i class="bi bi-pencil-square"></i>
                        </span>
                        <span wire:click='setField({{ $user->id }})' class="badge bg-danger" data-bs-toggle="modal"
                          data-bs-target="#modal-delete-admin" style="cursor: pointer">
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
              Admin kecamatan Belum Ditambahkan
            </h4>
          @endif

        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit -->
  <div wire:ignore.self class="modal fade" id="modal-edit-admin" tabindex="-1"
    aria-labelledby="modal-edit-adminLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-edit-adminLabel">Tambah Bumdes</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='update({{ $user_edit_id }})' action="">
            <div class="row mb-3">
              <label for="username" class="col-md-4 col-lg-3 col-form-label">
                username
              </label>
              <div class="col-md-8 col-lg-9">
                <input wire:model='username' name="username" type="text"
                  class="form-control @error('username') is-invalid @enderror" id="username" value="">
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="password" class="col-md-4 col-lg-3 col-form-label">
                password <br> <sup style="font-size: 10px">Optional</sup>
              </label>
              <div class="col-md-8 col-lg-9">
                <div class="input-group">
                  <input wire:model="password" name="password" type="password"
                    class="form-control @error('password') is-invalid @enderror" id="password" value="">
                  <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility()">
                    <i id="password-icon" class="bi bi-eye-fill"></i>
                  </button>
                </div>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="kecamatan_id" class="col-md-4 col-lg-3 col-form-label">Posyandu</label>
              <div class="col-md-8 col-lg-9">
                <select wire:model='kecamatan_id' class="form-select @error('kecamatan_id') is-invalid @enderror"
                  aria-label="Default select example" id="kecamatan_id">
                  <option hidden>Pilih kecamatan</option>
                  @foreach ($kecamatans as $kecamatan)
                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama }}</option>
                  @endforeach
                </select>
                @error('kecamatan_id')
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
  {{-- End Modal Create --}}

  {{-- Modal Delete admin --}}
  <div wire:ignore.self class="modal fade" id="modal-delete-admin" tabindex="-1"
    aria-labelledby="modal-delete-adminLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-delete-adminLabel">Konfirmasi Hapus admin
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin Ingin Menghapus {{ $username }}?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click='destroy({{ $user_id }})' type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Delete admin --}}

  @include('components.toast')
</div>
