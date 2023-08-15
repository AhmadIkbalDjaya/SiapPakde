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
    <h3>Kelembagaan Desa</h3>

    <div>
      <h4>Badan Permusyawaratan Desa</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Keterwakilan Dusun</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($desa->bpd->bpd_member as $bpd_member)
            <tr>
              <th scope="row" class="table-number">{{ $loop->iteration }}</th>
              <td>{{ $bpd_member->nama }}</td>
              <td>{{ $bpd_member->jabatan }}</td>
              <td>{{ $bpd_member->keterwakilan_dusun }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div>
      <h4>Kader Pkk</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($desa->kader_pkk as $kader_pkk)
            <tr>
              <th scope="row" class="table-number">{{ $loop->iteration }}</th>
              <td>{{ $kader_pkk->nama }}</td>
              <td>{{ $kader_pkk->jabatan }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div>
      <h4>Kader Posyandu</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Posyandu</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($desa->posyandu as $posyandu)
            @foreach ($posyandu->kader_posyandu as $kader_posyandu)
              <tr>
                <th scope="row" class="table-number">{{ $loop->iteration }}</th>
                <td>{{ $kader_posyandu->nama }}</td>
                <td>{{ $kader_posyandu->jabatan }}</td>
                <td>{{ $kader_posyandu->posyandu->nama }}</td>
              </tr>
            @endforeach
          @endforeach
        </tbody>
      </table>
    </div>

    <div>
      <h4>Kader Pembangunan Manusia</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($desa->kpm as $kpm)
            <tr>
              <th scope="row" class="table-number">{{ $loop->iteration }}</th>
              <td>{{ $kpm->nama }}</td>
              <td>{{ $kpm->jabatan }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div>
      <h4>Karang Taruna</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($desa->karang_taruna as $karang_taruna)
            <tr>
              <th scope="row" class="table-number">{{ $loop->iteration }}</th>
              <td>{{ $karang_taruna->nama }}</td>
              <td>{{ $karang_taruna->jabatan }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div>
      <h4>Lembaga Pemberdayaan Manusia</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($desa->lpm as $lpm)
            <tr>
              <th scope="row" class="table-number">{{ $loop->iteration }}</th>
              <td>{{ $lpm->nama }}</td>
              <td>{{ $lpm->jabatan }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>


  </main>
</body>

</html>
