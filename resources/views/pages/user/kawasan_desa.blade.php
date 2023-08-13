@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/kawasan_desa.css') }}">
@endpush

@section('content')
  <section id="hero" class="mt-5">
    <div class="container text-center">
      <div class="row pt-5 align-content-center">
        <div class="col-lg-12 col-md-12">
          <p class="title">
            {{ $desa->nama }}
          </p>
          <p class="sub-title"> {{ $desa->alamat }}</p>
        </div>
      </div>
    </div>
  </section>

  <section id="kawasan" class="py-5">
    <div class="container">
      @foreach ($kategories as $kategori)
        @if (
            $desa->kawasan->contains(function ($kawasanItem) use ($kategori) {
                return $kawasanItem->kategori_kawasan_id == $kategori->id;
            }))
          <div class="row justify-content-center mb-5">
            <h3 class="title-section">{{ $kategori->nama }}</h3>
            @foreach ($desa->kawasan as $kawasan)
              @if ($kawasan->kategori_kawasan_id == $kategori->id)
                <div class="row justify-content-center align-items-center mb-5">
                  <div class="col-md-6 col-11 justify-content-center">
                    <div class="photo-box mx-auto">
                      <img src="{{ asset('storage/' . $kawasan->foto) }}" class="img-fluid " alt="...">
                    </div>
                  </div>
                  <div class="col-md-6 col-10 mb-4 mt-3">
                    <h5 class="title under">{{ $kawasan->nama }}</h5>
                    <p class="description">
                      {{ $kawasan->deskripsi }}
                    </p>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
        @endif
      @endforeach
    </div>
  </section>
@endsection
