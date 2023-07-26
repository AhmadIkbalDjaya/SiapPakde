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
            Kelembagaan Desa TondongKura
          </p>
          <p class="sub-title"> Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi Selatan</p>
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
        <div class="col-12">
          <p class="nama-lembaga">
            Badan Permusyawaratan Desa
          </p>
        </div>
        <div class="col-12">
          @if ($desa->bpd->bpd_member->count() > 0)
            <div class="user-container">
              @foreach ($desa->bpd->bpd_member as $bpd_member)
                <div class="user-box mx-3">
                  <div class="photo-box">
                    <img src="..." class="img-fluid user-photo" alt="...">
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
                    <img src="..." class="img-fluid user-photo" alt="...">
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
                            <img src="..." class="img-fluid user-photo" alt="...">
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
                    <img src="..." class="img-fluid user-photo" alt="...">
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
                    <img src="..." class="img-fluid user-photo" alt="...">
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
            Lembaga Pemberdayaan Manusia
          </p>
        </div>
        <div class="col-12">
          @if ($desa->lpm->count() > 0)
            <div class="user-container">
              @foreach ($desa->lpm as $lpm)
                <div class="user-box mx-3">
                  <div class="photo-box">
                    <img src="..." class="img-fluid user-photo" alt="...">
                  </div>
                  <p class="name">{{ $lpm->nama }}</p>
                  <p class="position">{{ $lpm->jabatan }}</p>
                </div>
              @endforeach
            </div>
          @else
            <h4 class="text-center">Lembaga Pemberdayaan Manusia Belum Ditambahkan</h4>
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection
