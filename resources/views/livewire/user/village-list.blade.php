<section id="village-list" class="py-5">
  <div class="container">
    @if ($desas->count() > 0)
      <div class="row align-items-center">
        <div class="col-lg-8">
          <p class="title-section under">Cari Desa</p>
        </div>
        <div class="col-lg-4 col-10">
          <input wire:model='search' class="form-control" type="text" placeholder="Cari Desa"
            aria-label="default input example">
        </div>
      </div>
      <div class="row justify-content-evenly ">
        @foreach ($desas as $desa)
          <div class="col-md-3 col-6 mb-3 p-3">
            <a href="{{ route($directTo . '.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none">
              <div class="village-box shadow rounded-1">
                <img src="{{ asset('img/village-1.webp') }}" class="card-img-top" alt="...">
                <div class="card-body px-2 pt-2 pb-1">
                  <p class="card-title">{{ $desa->nama }}</p>
                  <p class="card-sub-title">{{ $desa->alamat }}</p>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    @else
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h5 class="title-section text-center">Belum ada desa yang terdaftar</h5>
        </div>
      </div>
    @endif

  </div>
</section>
