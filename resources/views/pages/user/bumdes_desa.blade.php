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
            Bumdes Desa TondongKura
          </p>
          <p class="sub-title"> Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi Selatan</p>
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
              <div class="bumdes-box px-3 py-3 shadow">
                <div class="row align-items-center">
                  <div class="col-4">
                    <img src="https://picsum.photos/200/250" class="img-fluid" alt="...">
                  </div>
                  <div class="col-8">
                    <p class="nama-bumdes">{{ $bumdes->nama }}</p>
                    <table>
                      <tr>
                        <td>
                          <i class="fa-solid fa-user-tie"></i> Nama Direktur
                        </td>
                        <td>:</td>
                        <td>
                          {{ $bumdes->direktur }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fa-solid fa-award"></i> Status Bumdes
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
                          <i class="fa-solid fa-user"></i> Jumlah Pegawai
                        </td>
                        <td>:</td>
                        <td>
                          {{ $bumdes->jumlah_pegawai }} Orang
                        </td>
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
      </div>
    </div>
  </section>
@endsection
