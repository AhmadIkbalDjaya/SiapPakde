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
    <h4>Badan Usaha Milik Desa</h4>
    <table class="table table-bordered">
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
            <th scope="row" class="table-number">{{ $loop->iteration }}</th>
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
