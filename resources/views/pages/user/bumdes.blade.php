@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/user/bumdes.css') }}">
  @livewireStyles
@endpush

@push('userScript')
  @livewireScripts
@endpush

@section('content')
  <section id="hero" class="mt-5">
    <div class="container">
      <div class="row pt-5 align-content-center">
        <div class="col-lg-8 col-md-10">
          <p class="sub-title">Bumdes</p>
          <p class="title">
            Lihat Badan Usaha yang Dimiliki Desa
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="description" class="py-5">
    <div class="container py-3">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6 col-11 justify-content-center">
          <div class="photo-box mx-auto">
            <img src="{{ asset('img/profile-1.jpg') }}" class="img-fluid " alt="...">
          </div>
        </div>
        <div class="col-md-6 col-10 mb-4 mt-3">
          <h5 class="title under">Apa itu Bumdes?</h5>
          <p class="description">
            BUMDes adalah badan usaha yang dimiliki dan dikelola oleh desa untuk meningkatkan kesejahteraan ekonomi
            melalui inovasi dan unit usaha yang beragam. Masyarakat terlibat dalam proses pengambilan keputusan dan
            pembagian keuntungan, menciptakan peluang berkelanjutan bagi desa.
          </p>
        </div>
      </div>
    </div>
  </section>

  <livewire:user.village-list :directTo="'bumdes'">
  @endsection
