<section id="village-list" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h2>Cari Desa</h2>
      </div>
      <div class="col-lg-4 col-10">
        <input wire:model='search' class="form-control" type="text" placeholder="Cari Desa"
          aria-label="default input example">
      </div>
    </div>
    <div class="row justify-content-evenly">
      @foreach ($desas as $desa)
        <div class="col-lg-3 col-md-6 col-6 my-5">
          <div class="text-center">
            <a href="{{ route($directTo.'.desa', ['desa'=>$desa->slug]) }}">
              <img src="{{ asset('storage/' . $desa->foto) }}" class="img-fluid rounded-circle" alt="..."
                style="height: 100px; width: 100px">
            </a>
            <h6 class="pt-2 fw-bold">{{ $desa->nama }}</h6>
            <P class="fw-semibold">{{ $desa->alamat }}</P>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
