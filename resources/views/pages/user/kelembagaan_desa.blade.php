@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/kelembagaan_desa.css') }}">
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


  <section id="kelembagaan" class="py-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-12">
          <h2 class="heading">Kelembagaan</h2>
        </div>
      </div>
      {{-- bpd --}}
      <div class="row bpd mb-5">
        <div class="col-12 mb-3">
          <div class="row">
            <div class="col-md-9">
              <p class="nama-lembaga">
                Badan Permusyawaratan Desa
              </p>
            </div>
            <div class="col-md-3">
              <button class="btn btn-success w-100 fw-semibold" data-bs-toggle="modal"
                data-bs-target="#show-sk-bpd-modal">
                SK BPD
              </button>
            </div>
          </div>
        </div>
        <div class="col-12">
          @if ($desa->bpd->bpd_member->count() > 0)
            <div class="user-container">
              @foreach ($desa->bpd->bpd_member as $bpd_member)
                <div class="user-box mx-3">
                  <div class="photo-box">
                    <img src="{{ asset('img/def_lembaga.webp') }}" class="img-fluid user-photo" alt="...">
                  </div>
                  <p class="name">{{ $bpd_member->nama }}</p>
                  <p class="position">{{ $bpd_member->jabatan }}</p>
                  <p class="position">{{ $bpd_member->keterwakilan_dusun }}</p>
                </div>
              @endforeach
            </div>
          @else
            <h4 class="text-center">Badan Permusyawaratan Desa Belum Ditambahkan</h4>
          @endif
        </div>
      </div>
      {{-- end bpd --}}

      {{-- kader pkk --}}
      <div class="row bpd mb-5">
        <div class="col-12">
          <p class="nama-lembaga">
            Kader PKK
          </p>
        </div>
        <div class="col-12">
          @if ($desa->kader_pkk->count() > 0)
            <div class="user-container">
              @foreach ($desa->kader_pkk as $kader_pkk)
                <div class="user-box mx-3">
                  <div class="photo-box">
                    <img src="{{ asset('img/def_lembaga.webp') }}" class="img-fluid user-photo" alt="...">
                  </div>
                  <p class="name">{{ $kader_pkk->nama }}</p>
                  <p class="position">{{ $kader_pkk->jabatan }}</p>
                </div>
              @endforeach
            </div>
          @else
            <h4 class="text-center">Kader PKK Belum Ditambahkan</h4>
          @endif
        </div>
      </div>

      {{-- posyandu --}}
      <div class="row bpd mb-5">
        <div class="col-12">
          <p class="nama-lembaga">
            Kader Posyandu
          </p>
        </div>
        <div class="col-12">
          @if ($desa->posyandu->count() > 0)
            @foreach ($desa->posyandu as $posyandu)
              <div class="row">
                <div class="col-12">
                  <p class="sub-nama-lembaga">{{ $posyandu->nama }}</p>
                </div>
                <div class="col-12">
                  @if ($posyandu->kader_posyandu->count() > 0)
                    <div class="user-container">
                      @foreach ($posyandu->kader_posyandu as $kader_posyandu)
                        <div class="user-box mx-3">
                          <div class="photo-box">
                            <img src="{{ asset('img/def_lembaga.webp') }}" class="img-fluid user-photo" alt="...">
                          </div>
                          <p class="name">{{ $kader_posyandu->nama }}</p>
                          <p class="position">{{ $kader_posyandu->jabatan }}</p>
                        </div>
                      @endforeach
                    </div>
                  @else
                    <h4 class="text-center">Kader Posyandu Belum Ditambahkan</h4>
                  @endif
                </div>
              </div>
            @endforeach
          @else
            <h4 class="text-center">Posyandu Belum Ditambahkan</h4>
          @endif
        </div>
      </div>
      {{-- end posyandu --}}

      {{-- kpm --}}
      <div class="row bpd mb-5">
        <div class="col-12">
          <p class="nama-lembaga">
            Kader Pembangunan Manusia
          </p>
        </div>
        <div class="col-12">
          @if ($desa->kpm->count() > 0)
            <div class="user-container">
              @foreach ($desa->kpm as $kpm)
                <div class="user-box mx-3">
                  <div class="photo-box">
                    <img src="{{ asset('img/def_lembaga.webp') }}" class="img-fluid user-photo" alt="...">
                  </div>
                  <p class="name">{{ $kpm->nama }}</p>
                  <p class="position">{{ $kpm->jabatan }}</p>
                </div>
              @endforeach
            </div>
          @else
            <h4 class="text-center">Kader Pembangunan Manusia Belum Ditambahkan</h4>
          @endif
        </div>
      </div>
      {{-- end kpm --}}


      {{-- karang taruna --}}
      <div class="row bpd mb-5">
        <div class="col-12">
          <p class="nama-lembaga">
            Karang Taruna
          </p>
        </div>
        <div class="col-12">
          @if ($desa->karang_taruna->count() > 0)
            <div class="user-container">
              @foreach ($desa->karang_taruna as $karang_taruna)
                <div class="user-box mx-3">
                  <div class="photo-box">
                    <img src="{{ asset('img/def_lembaga.webp') }}" class="img-fluid user-photo" alt="...">
                  </div>
                  <p class="name">{{ $karang_taruna->nama }}</p>
                  <p class="position">{{ $karang_taruna->jabatan }}</p>
                </div>
              @endforeach
            </div>
          @else
            <h4 class="text-center">
              Karang Taruna Belum Ditambahkan
            </h4>
          @endif
        </div>
      </div>
      {{-- end karang taruna --}}

      {{-- lpm --}}
      <div class="row bpd mb-5">
        <div class="col-12">
          <p class="nama-lembaga">
            Lembaga Ketahanan Masyarakat Desa
          </p>
        </div>
        <div class="col-12">
          @if ($desa->lpm->count() > 0)
            <div class="user-container">
              @foreach ($desa->lpm as $lpm)
                <div class="user-box mx-3">
                  <div class="photo-box">
                    <img src="{{ asset('img/def_lembaga.webp') }}" class="img-fluid user-photo" alt="...">
                  </div>
                  <p class="name">{{ $lpm->nama }}</p>
                  <p class="position">{{ $lpm->jabatan }}</p>
                </div>
              @endforeach
            </div>
          @else
            <h4 class="text-center">Lembaga Ketahanan Masyarakat Desa Belum Ditambahkan</h4>
          @endif
        </div>
      </div>
      <a href="{{ route('pdf.kelembagaan_desa', ['desa' => $desa]) }}" target="_blank" class="text-decoration-none">
        <i class="bi bi-file-earmark-pdf-fill text-danger"></i>
        Download Data
      </a>
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
                <img src="{{ asset('img/village-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Profil</p>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('bumdes.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/bumdes-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Bumdes</p>
            </div>
          </a>
        </div>
        {{-- <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('kelembagaan.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/kelembagaan-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Lembaga</p>
            </div>
          </a>
        </div> --}}
        <div class="col-md-2 col-4 mb-3">
          <a href="{{ route('publikasi.desa', ['desa' => $desa->slug]) }}" class="text-decoration-none text-dark">
            <div class="feature-box p-3 text-center shadow rounded-1">
              <div class="image-circle mx-auto rounded-circle">
                <img src="{{ asset('img/publikasi-icon.webp') }}" class="img-fluid" alt="...">
              </div>
              <p class="title">Publikasi</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Show SK BPD Modal --}}
  <div class="modal fade" id="show-sk-bpd-modal" tabindex="-1" aria-labelledby="show-sk-bpd-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="show-sk-bpd-modalLabel">SK BPD</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="text-end">
            <a href="{{ asset('storage/' . $desa->bpd->sk_periode) }}" download="sk_periode"
              class="text-decoration-none text-dark fw-semibold">
              <i class="bi bi-file-earmark-pdf text-danger"></i>
              Download SK
            </a>

          </div>
          <iframe src="{{ asset('storage/' . $desa->bpd->sk_periode) }}" title="download sk" class="w-100"
            height="350">
          </iframe>
        </div>
      </div>
    </div>
  </div>


@endsection
