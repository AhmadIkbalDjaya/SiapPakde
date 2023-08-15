<div>
  <h5 class="card-title">Profil Desa</h5>

  <form wire:submit.prevent="updateVillage" action="">
    <div class="row mb-3">
      <label for="nama" class="col-md-4 col-lg-3 col-form-label">
        Nama Desa
        @include('components.ui.form.required')
      </label>
      <div class="col-md-8 col-lg-9">
        <input wire:model='nama' name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
          id="nama" value="">
        @error('nama')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="alamat" class="col-md-4 col-lg-3 col-form-label">
        Alamat Desa
        @include('components.ui.form.required')
      </label>
      <div class="col-md-8 col-lg-9">
        <input wire:model="alamat" name="alamat" type="text"
          class="form-control @error('alamat') is-invalid @enderror" id="alamat" value="">
        @error('alamat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="kecamatan_id" class="col-md-4 col-lg-3 col-form-label">
        Kecamatan
        @include('components.ui.form.required')
      </label>
      <div class="col-md-8 col-lg-9">
        <select wire:model="kecamatan_id" class="form-select @error('kecamatan_id') is-invalid @enderror"
          aria-label="Default select example">
          <option hidden>Pilih Kecamatan</option>
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
    <div class="row mb-3">
      <label for="jumlah_penduduk" class="col-md-4 col-lg-3 col-form-label">
        Jumlah Penduduk
        @include('components.ui.form.required')
      </label>
      <div class="col-md-8 col-lg-9">
        <input wire:model="jumlah_penduduk" name="jumlah_penduduk" type="text"
          class="form-control @error('jumlah_penduduk') is-invalid @enderror" id="jumlah_penduduk" value="">
        @error('jumlah_penduduk')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="potensi" class="col-md-4 col-lg-3 col-form-label">
        Potensi Desa
        @include('components.ui.form.required')
      </label>
      <div class="col-md-8 col-lg-9">
        <textarea wire:model="potensi" name="about" class="form-control @error('potensi') is-invalid @enderror" id="potensi"
          style="height: 100px">
        </textarea>
        @error('potensi')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="latitude" class="col-md-4 col-lg-3 col-form-label">
        Latitude
        @include('components.ui.form.optional')
      </label>
      <div class="col-md-8 col-lg-9">
        <input wire:model="latitude" name="latitude" type="number" step="any"
          class="form-control @error('latitude') is-invalid @enderror" id="latitude" value="">
        @error('latitude')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="longitude" class="col-md-4 col-lg-3 col-form-label">
        longitude
        @include('components.ui.form.optional')
      </label>
      <div class="col-md-8 col-lg-9">
        <input wire:model="longitude" name="longitude" type="number" step="any"
          class="form-control @error('longitude') is-invalid @enderror" id="longitude" value="">
        @error('longitude')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="contact" class="col-md-4 col-lg-3 col-form-label">
        Contact
        @include('components.ui.form.required')
      </label>
      <div class="col-md-8 col-lg-9">
        <input wire:model="contact" name="contact" type="number" step="any"
          class="form-control @error('contact') is-invalid @enderror" id="contact" value="">
        @error('contact')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" class="btn btn-primary btn-sm w-100">Ubah Profil</button>
      </div>
    </div>
  </form>
  @include('components.toast')

</div>
