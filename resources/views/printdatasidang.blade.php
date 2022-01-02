<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Data Sidang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend\AdminLTE-master') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('frontend\AdminLTE-master') }}/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend\AdminLTE-master') }}/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Laporan Sidang
          <small class="float-right">Date: {{ date('d-M-Y') }}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Admin, Pengajuan TA.</strong><br>
          Pengajuan TA Universitas Airlangga<br>
          Senin - Jumat, 8.00 Sampai 16.00 WIB<br>
          Jl Darmawangsa 5 No 12A<br>
          Phone: (031) 73732451<br>
          Email: Pengajuan TA@gmail.com
        </address>
      </div>
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>ID Sidang </th>
            {{-- <th>NIP PAA</th> --}}
            <th>NIP DOSEN PENGUJI</th>
            <th>Jenis Sidang</th>
            <th>Ruang Sidang</th>
            <th>Tanggal sidang</th>
            <th>Waktu Sidang</th>
            {{-- <th>Aksi</th> --}}
          </tr>
          </thead>
          <tbody>
            <?php $no=1 ?>
          @foreach ($data as $datasidang)
          <tr>
            <td>{{ $datasidang->ID_SIDANG }}</td>
            {{-- <td>{{ $datasidang->NIP_PAA }}</td> --}}
            <td>{{ $datasidang->NIP_DOSENPENGUJI }}</td>
            <td>{{ $datasidang->JENIS_SIDANG }}</td>
            <td>{{ $datasidang->RUANG_SIDANG }}</td>
            <td>{{ $datasidang->TANGGAL_SIDANG }}</td>
            <td>{{ $datasidang->WAKTU_SIDANG }}</td>
          </tr>
          @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  
    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
