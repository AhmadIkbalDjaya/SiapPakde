@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
  <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>
@endpush

@push('userScript')
  <script>
    dselect(document.querySelector('#search-village'))
  </script>
@endpush

@section('content')
  <section id="hero" class="mt-5">
    <div class="container">
      <div class="row pt-5 align-content-center">
        <div class="col-lg-8 col-md-10">
          <p class="sub-title">Profile Desa</p>
          <p class="title">
            Temukan desa yang telah terdaftar lihat profile dan jelajahi potensi mereka.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="feature" class="py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 align-self-center">
          <div class="content-text">
            <p class="title">Potensi Umum Masing-Masing Desa</p>
            <p class="sub-title">Setiap desa memiliki potensi unik yang didukung oleh alamat lengkap dan peta lokasi desa.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="">
            <img src="https://picsum.photos/450/450" class="img-fluid rounded-3" alt="...">
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="">
            <img src="https://picsum.photos/450/450" class="img-fluid rounded-3" alt="...">
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="content-text">
            <p class="title">Perangkat Desa dan Kepemimpinan</p>
            <p class="sub-title">
              Kenali perangkat desa beserta usia, pendidikan, dan agama, serta bagaimana mereka membantu membangun desa.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="village-list" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Cari Desa</h2>
        </div>
        <div class="col-lg-4 col-10">
          <select class="form-select" id="search-village" data-dselect-search="true">
            <option value="" hidden selected>Cari Desa</option>
            <option value="chrome">Chrome</option>
            <option value="firefox">Firefox</option>
            <option value="safari">Safari</option>
            <option value="edge">Edge</option>
            <option value="opera">Opera</option>
            <option value="brave">Brave</option>
          </select>
        </div>
      </div>
      <div class="row justify-content-between">
        <div class="col-lg-3 col-md-6 col-6 my-5">
          <div class="text-center">
            <img src="https://picsum.photos/450/450" class="img-fluid rounded-circle" alt="..." width="100"
              height="100">
            <h6 class="pt-2">DESA TEKLAB</h6>
            <P class="">Pangkajene</P>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 my-5">
          <div class="text-center">
            <img src="https://picsum.photos/450/450" class="img-fluid rounded-circle" alt="..." width="100"
              height="100">
            <h6 class="pt-2">DESA TEKLAB</h6>
            <P class="">Pangkajene</P>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 my-5">
          <div class="text-center">
            <img src="https://picsum.photos/450/450" class="img-fluid rounded-circle" alt="..." width="100"
              height="100">
            <h6 class="pt-2">DESA TEKLAB</h6>
            <P class="">Pangkajene</P>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 my-5">
          <div class="text-center">
            <img src="https://picsum.photos/450/450" class="img-fluid rounded-circle" alt="..." width="100"
              height="100">
            <h6 class="pt-2">DESA TEKLAB</h6>
            <P class="">Pangkajene</P>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 my-5">
          <div class="text-center">
            <img src="https://picsum.photos/450/450" class="img-fluid rounded-circle" alt="..." width="100"
              height="100">
            <h6 class="pt-2">DESA TEKLAB</h6>
            <P class="">Pangkajene</P>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 my-5">
          <div class="text-center">
            <img src="https://picsum.photos/450/450" class="img-fluid rounded-circle" alt="..." width="100"
              height="100">
            <h6 class="pt-2">DESA TEKLAB</h6>
            <P class="">Pangkajene</P>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 my-5">
          <div class="text-center">
            <img src="https://picsum.photos/450/450" class="img-fluid rounded-circle" alt="..." width="100"
              height="100">
            <h6 class="pt-2">DESA TEKLAB</h6>
            <P class="">Pangkajene</P>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
