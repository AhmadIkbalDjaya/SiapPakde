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
    <table class="table table-bordered" style="width: 100%; border-collapse: collapse; font-size: .65rem;">
      <caption style="margin-bottom: 12px">
        <h3>
          Data Bumdes
        </h3>
      </caption>
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Direktur</th>
          <th scope="col">Status</th>
          <th scope="col">Pegawai</th>
          <th scope="col">Unit Usaha</th>
          <th scope="col">Telepon</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($desa->bumdes as $bumdes)
          <tr>
            <th scope="row" style="text-align: center">{{ $loop->iteration }}</th>
            <td>{{ $bumdes->nama }}</td>
            <td>{{ $bumdes->direktur }}</td>
            <td>
              @if ($bumdes->sertifikasi)
                Serifikasi
              @else
                Belum Sertifikasi
              @endif
            </td>
            <td>{{ $bumdes->jumlah_pegawai }}</td>
            <td>{{ $bumdes->unit_usaha }}</td>
            <td>{{ $bumdes->phone }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
</body>

</html>
