@extends('layouts.admin')

@push('adminStyle')
  <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
  <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>
@endpush

@push('adminScript')
  <script>
    dselect(document.querySelector('#search-village'))
  </script>
@endpush

@section('main')
  <div class="pagetitle">
    <h1>Desa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>

  <div class="row py-3 justify-content-between">
    <div class="col-md-6 col-4">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">
        Desa <i class="bi bi-plus-lg"></i>
      </button>

      <!-- Modal -->
      <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-createLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-createLabel">Tambah Desa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                    Nama Desa
                  </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
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
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-8">
      <select class="form-select" id="search-village" data-dselect-search="true" style="width: 75%">
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

  <div class="row justify-content-evenly">
    <div class="col-md-3 col-6">
      <div class="card">
        <img src="{{ asset('admin/img/card.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body px-2">
          <h5 class="card-title py-0" style="font-size: 15px">Desa TondongKura</h5>
          <p class="card-text" style="font-size: 10px">Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi
            Selatan</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card">
        <img src="{{ asset('admin/img/card.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body px-2">
          <h5 class="card-title py-0" style="font-size: 15px">Desa TondongKura</h5>
          <p class="card-text" style="font-size: 10px">Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi
            Selatan</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card">
        <img src="{{ asset('admin/img/card.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body px-2">
          <h5 class="card-title py-0" style="font-size: 15px">Desa TondongKura</h5>
          <p class="card-text" style="font-size: 10px">Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi
            Selatan</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card">
        <img src="{{ asset('admin/img/card.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body px-2">
          <h5 class="card-title py-0" style="font-size: 15px">Desa TondongKura</h5>
          <p class="card-text" style="font-size: 10px">Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi
            Selatan</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card">
        <img src="{{ asset('admin/img/card.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body px-2">
          <h5 class="card-title py-0" style="font-size: 15px">Desa TondongKura</h5>
          <p class="card-text" style="font-size: 10px">Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi
            Selatan</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card">
        <img src="{{ asset('admin/img/card.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body px-2">
          <h5 class="card-title py-0" style="font-size: 15px">Desa TondongKura</h5>
          <p class="card-text" style="font-size: 10px">Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi
            Selatan</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card">
        <img src="{{ asset('admin/img/card.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body px-2">
          <h5 class="card-title py-0" style="font-size: 15px">Desa TondongKura</h5>
          <p class="card-text" style="font-size: 10px">Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi
            Selatan</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card">
        <img src="{{ asset('admin/img/card.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body px-2">
          <h5 class="card-title py-0" style="font-size: 15px">Desa TondongKura</h5>
          <p class="card-text" style="font-size: 10px">Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi
            Selatan</p>
        </div>
      </div>
    </div>
  </div>
@endsection
