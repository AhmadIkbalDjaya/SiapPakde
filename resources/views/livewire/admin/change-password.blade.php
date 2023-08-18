<form wire:submit.prevent='udpatePassword' >
  <div class="row mb-3">
    <label for="password" class="col-md-4 col-lg-3 col-form-label">
      Password Baru
      @include('components.ui.form.required')
    </label>
    <div class="col-md-8 col-lg-9">
      <input wire:model='password' name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
      @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>

  <div class="row mb-3">
    <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">
      Konfirmasi Password
      @include('components.ui.form.required')
    </label>
    <div class="col-md-8 col-lg-9">
      <input wire:model="password_confirmation" name="password_confirmation" type="password"
        class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
      @error('password_confirmation')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>

  <div class="text-center mb-3">
    <button type="submit" class="btn btn-primary">Ubah Password</button>
  </div>
  @include('components.toast')
</form>
