@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/Publikasi.css') }}">

  <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
  <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>
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
          <p class="sub-title">Publikasi</p>
          <p class="title">
            Lihat Publikasi Dari Desa yang terdaftar
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="description" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 d-flex align-items-center justify-content-center">
          <div class="brand">
            Siap Pakde
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <h5 class="title">Publikasi</h5>
          <p class="description">
            Publikasi menyajikan dokumen APBDes (Anggaran Pendapatan dan Belanja Desa) di desa terpilih, berisi rencana
            dan realisasi anggaran desa. Informasi ini penting untuk transparansi dan akuntabilitas pengelolaan keuangan
            desa.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="village-list" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Daftar Desa</h2>
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
