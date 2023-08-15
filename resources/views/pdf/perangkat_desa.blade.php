<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{{ $title }}</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    main table {
      width: 100%;
      border-collapse: collapse;
      font-size: .65rem;
    }

    main table .table-number {
      text-align: center;
    }

    main th,
    main td {
      border: 1px solid #000000;
      padding: 5px;
      text-align: left;
    }
  </style>
</head>

<body>
  <header>
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $desa->nama }}</td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>{{ $desa->kecamatan->nama }}</td>
      </tr>
    </table>
    
  </header>
  <main>
    <h4>Perangkat Desa</h4>
    <table class="table table-bordered">
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
            <th scope="row" class="table-number">{{ $loop->iteration }}</th>
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
