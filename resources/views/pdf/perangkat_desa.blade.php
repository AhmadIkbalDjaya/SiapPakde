<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{{ $title }}</title>
  <style>
    main table th,
    main table td {
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
          Data Perangkat Desa
        </h3>
      </caption>
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Tempat, Tanggal Lahir</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Pendidikan</th>
          <th scope="col">Pekerjaan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($desa->perangkat_desa as $pd)
          <tr>
            <th scope="row" style="text-align: center">{{ $loop->iteration }}</th>
            <td>{{ $pd->nama }}</td>
            <td>{{ $pd->jabatan }}</td>
            <td>{{ $pd->tempat_lahir }}, {{ $pd->tanggal_lahir }}</td>
            <td>{{ $pd->jenis_kelamin }}</td>
            <td>{{ $pd->pendidikan }}</td>
            <td>{{ $pd->pekerjaan }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
</body>

</html>
