<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{{ $title }}</title>
  <style>
    main th,
    main td {
      border: 1px solid #000000;
      padding: 5px;
      text-align: left;
    }
  </style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; margin: 0; padding: 0">
  <header style="text-align: center">
    <h2>Siap Pakde</h2>
    <h3 style="margin: 0 50px">Sistem Informasi Administrasi Pemerintahan Aparat dan Kelembahaan Desa</h3>
    <hr>
    <div class="box" style="margin-bottom: 75px">
      <div style="float: left">
        <table>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $desa->nama }}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $desa->alamat }}</td>
          </tr>
        </table>
      </div>
      <div style="float: right">
        <table>
          <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td>{{ $desa->kecamatan->nama }}</td>
          </tr>
          <tr>
            <td>Kontak</td>
            <td>:</td>
            <td>{{ $desa->contact }}</td>
          </tr>
        </table>
      </div>

    </div>

  </header>
  <main>
    <h3 style="text-align: center">Kelembagaan Desa</h3>

    @if ($desa->bpd->bpd_member->count() > 0)

    <div>
      <table class="table table-bordered" style="width: 100%; border-collapse: collapse; font-size: .65rem;">
        <caption style="margin-bottom: 12px">
          <h4>
            Badan Permusyawaratan Desa
          </h4>
        </caption>
        <thead>
          <tr>
            <th scope="col" style="text-align: center;">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Keterwakilan Dusun</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($desa->bpd->bpd_member as $bpd_member)
            <tr>
              <th scope="row" style="text-align: center;">{{ $loop->iteration }}</th>
              <td>{{ $bpd_member->nama }}</td>
              <td>{{ $bpd_member->jabatan }}</td>
              <td>{{ $bpd_member->keterwakilan_dusun }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif

    @if ($desa->kader_pkk->count() > 0)
      <div>
        <table class="table table-bordered" style="width: 100%; border-collapse: collapse; font-size: .65rem;">
          <caption style="margin-bottom: 12px">
            <h4>
              Kader Pkk
            </h4>
          </caption>
          <thead>
            <tr>
              <th scope="col" style="text-align: center;">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($desa->kader_pkk as $kader_pkk)
              <tr>
                <th scope="row" style="text-align: center;">{{ $loop->iteration }}</th>
                <td>{{ $kader_pkk->nama }}</td>
                <td>{{ $kader_pkk->jabatan }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif

    @if ($desa->posyandu->count() > 0)
      <div>
        <table class="table table-bordered" style="width: 100%; border-collapse: collapse; font-size: .65rem;">
          <caption style="margin-bottom: 12px">
            <h4>
              Kader Posyandu
            </h4>
          </caption>
          <thead>
            <tr>
              <th scope="col" style="text-align: center;">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Posyandu</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($desa->posyandu as $posyandu)
              @foreach ($posyandu->kader_posyandu as $kader_posyandu)
                <tr>
                  <th scope="row" style="text-align: center;">{{ $loop->iteration }}</th>
                  <td>{{ $kader_posyandu->nama }}</td>
                  <td>{{ $kader_posyandu->jabatan }}</td>
                  <td>{{ $kader_posyandu->posyandu->nama }}</td>
                </tr>
              @endforeach
            @endforeach
          </tbody>
        </table>
      </div>
    @endif

    @if ($desa->kpm->count() > 0)
      <div>
        <table class="table table-bordered" style="width: 100%; border-collapse: collapse; font-size: .65rem;">
          <caption style="margin-bottom: 12px">
            <h4>
              Kader Pembangunan Manusia
            </h4>
          </caption>
          <thead>
            <tr>
              <th scope="col" style="text-align: center;">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($desa->kpm as $kpm)
              <tr>
                <th scope="row" style="text-align: center;">{{ $loop->iteration }}</th>
                <td>{{ $kpm->nama }}</td>
                <td>{{ $kpm->jabatan }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif

    @if ($desa->karang_taruna->count() > 0)
      <div>
        <table class="table table-bordered" style="width: 100%; border-collapse: collapse; font-size: .65rem;">
          <caption style="margin-bottom: 12px">
            <h4>
              Kader Karang taruna
            </h4>
          </caption>
          <thead>
            <tr>
              <th scope="col" style="text-align: center;">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($desa->karang_taruna as $karang_taruna)
              <tr>
                <th scope="row" style="text-align: center;">{{ $loop->iteration }}</th>
                <td>{{ $karang_taruna->nama }}</td>
                <td>{{ $karang_taruna->jabatan }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif

    @if ($desa->lpm->count() > 0)
      <div>
        <table class="table table-bordered" style="width: 100%; border-collapse: collapse; font-size: .65rem;">
          <caption style="margin-bottom: 12px">
            <h4>
              Lembaga Ketahanan Masyarakat Desa
            </h4>
          </caption>
          <thead>
            <tr>
              <th scope="col" style="text-align: center;">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($desa->lpm as $lpm)
              <tr>
                <th scope="row" style="text-align: center;">{{ $loop->iteration }}</th>
                <td>{{ $lpm->nama }}</td>
                <td>{{ $lpm->jabatan }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif


  </main>
</body>

</html>
