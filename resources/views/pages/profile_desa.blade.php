@extends('layouts.user')

@push('userStyle')
  <link rel="stylesheet" href="{{ asset('css/profile_desa.css') }}">
@endpush

@section('content')
  <section id="hero" class="mt-5 bg-danger">
    <div class="container py-2">
      <div class="row text-center align-items-center bg-primary">
        <div class="col-md-12">
          <h4>Profile Desa Tekolabbua</h4>
          <h6>Kec. Pangkajene, Kabupaten Pangkajene Dan Kepulauan, Sulawesi Selatan</h6>
        </div>
      </div>
    </div>
  </section>

  <section id="description" class="my-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-3">
          <h4>Desa Tondong Kura</h4>
          <h6>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti eligendi sit sint minima dicta velit.
          </h6>
        </div>
        <div class="col-md-6 mb-3">
          <div>
            <img
              src="https://awsimages.detik.net.id/community/media/visual/2021/02/14/puncak-tondongkura-pangkep-2.jpeg?w=1200"
              class="img-fluid rounded-3" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="perangkat-desa">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="shadow">
            <div class="row">
              <div class="col-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyuNFyw05KSucqjifL3PhDFrZLQh7QAS-DTw&usqp=CAU" class="img-fluid" alt="..." style="">
              </div>
              <div class="col-8">
                <table class="table table-sm table-borderless">
                  <tr>
                    <td colspan="3">Kepala Desa</td>
                  </tr>
                  <tr>
                    <td colspan="3">Ikrar Restu Gibrani</td>
                  </tr>
                  <tr>
                    <td>Usia</td>
                    <td>: </td>
                    <td>32 Tahun</td>
                  </tr>
                  <tr>
                    <td>Pendidikan</td>
                    <td>: </td>
                    <td>S1 Informatika</td>
                  </tr>
                  <tr>
                    <td>Agamad</td>
                    <td>: </td>
                    <td>Islam</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
      </div>
    </div>
  </section>
@endsection
