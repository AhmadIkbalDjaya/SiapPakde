@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/bumdes_desa.css') }}">
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

  <section id="bumdes-list" class="py-5">
    <div class="container">
      <div class="row">
        @if ($bumdeses->count() > 0)
          @foreach ($bumdeses as $bumdes)
            <div class="col-md-6 mb-4">
              <div class="bumdes-box px-4 py-3 shadow">
                <div class="row align-items-center">
                  <div class="col-3 px-0">
                    <div class="photo-box py-3">
                      <img src="{{ asset('img/bumdes-icon2.png') }}" class="img-fluid" alt="...">
                    </div>
                  </div>
                  <div class="col-9">
                    <p class="nama-bumdes">{{ $bumdes->nama }}</p>
                    <table>
                      <tr>
                        <td>
                          <i class="fa-solid fa-user-tie"></i> Direktur
                        </td>
                        <td>:</td>
                        <td>
                          {{ $bumdes->direktur }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fa-solid fa-award"></i> Status
                        </td>
                        <td>:</td>
                        <td>
                          @if ($bumdes->sertifikasi)
                            Sertifikasi
                          @else
                            Belum Sertifikasi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fa-solid fa-network-wired"></i> Unit Usaha
                        </td>
                        <td>:</td>
                        <td>
                          {{ $bumdes->unit_usaha }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fa-solid fa-user"></i> Pegawai
                        </td>
                        <td>:</td>
                        <td>
                          {{ $bumdes->jumlah_pegawai }} Orang
                        </td>
                      </tr>
                      <tr>
                        <td><i class="bi bi-telephone-fill"></i> {{ $bumdes->phone }}</td>
                        <td></td>
                        @if ($bumdes->sertifikasi)
                          <td>
                            <a href="{{ asset('storage/' . $bumdes->file_sertifikat) }}"
                              download="sertifikat {{ $bumdes->nama }}" class="text-decoration-none">
                              <i class="bi bi-file-earmark-pdf-fill text-danger"></i>
                              Lihat Sertifikat
                            </a>
                          </td>
                        @endif
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <h3 class="my-5 text-center">
            Bumdes Belum Ditambahkan
          </h3>
        @endif
        <a href="{{ route('pdf.bumdes_desa', ['desa' => $desa]) }}" target="_blank" class="text-decoration-none">
          <i class="bi bi-file-earmark-pdf-fill text-danger"></i>
          Download Data
        </a>
      </div>
    </div>
  </section>

  <section id="other-info" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title-section text-center">Lihat Infomasi Lainnya</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('profile.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/village-icon.png') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Profil</p>
            </div>
          </a>
        </div>
        {{-- <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('bumdes.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/bumdes-icon.png') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Bumdes</p>
            </div>
          </a>
        </div> --}}
        <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('kelembagaan.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/kelembagaan-icon.png') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Lembaga</p>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('publikasi.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/publikasi-icon.png') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Publikasi</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
