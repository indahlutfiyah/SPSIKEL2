@extends('penjadwalan')
@section('container')

<!DOCTYPE html>
<html>

    <div class="card me-5">
      <div class="card-header">
        <h3 class="card-title">Laporan PKL/MAGANG </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <div class="card-body">
          {{-- <form action="/kelurahan/cari" method="get">
           <div class="input-group input-group-sm">
               <input type="text" class="form-control form-control-navbar" name="cari" value="{{ request('cari') }}"
               placeholder="Ketikan sesuatu" aria-label="Search" >
               <div class="input-group-append">
               <button class="btn btn-navbar" type="submit">
                 <i class="fas fa-search"></i>
               </button>
               </div>
           </div>
              </form> --}}
              <br>
        <p><a href="createlaporan"<button type="button" class="btn btn-primary">Tambah Data</button></a>  
          {{-- <a href="/printdatasidang" target="_blank" class="btn btn-danger">Print PDF</a> | 
          <a href="trashhistory_posyandu"<button type="button" class="btn btn-warning">Sampah</button></a> --}}
        </p>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID Laporan </th>
            <th>NIM</th>
            <th>Kategori Laporan</th>
            <th>Judul Laporan</th>
            <th>Waktu upload</th>
            <th>Status</th>
            {{-- <th>Waktu Sidang</th> --}}
            {{-- <th>Aksi</th> --}}
          </tr>
          </thead>
          @foreach($data as $laporanpkl )
          <tbody>
          <tr>
            <td>{{ $laporanpkl->ID_LAPORAN }}</td>
            <td>{{ $laporanpkl->NIM }}</td>
            <td>{{ $laporanpkl->KATEGORI_LAPORAN }}</td>
            <td>
              <a href="{{ asset('/storage/post-file/'. $laporanpkl->JUDUL_LAPORAN ) }}" target="_blank" rel="nooppener noreferrer">LIhat File</a>
            </td>
            <td>{{ $laporanpkl->WAKTU_UPLOAD }}</td>
            <td>{{ $laporanpkl->STATUS }}</td>
            {{-- <td>{{ $pengajuanhonor->TANGGAL_SIDANG }}</td>
            <td>{{ $pengajuanhonor->WAKTU_SIDANG }}</td> --}}
            <td>
              <a href="/editlaporan{{ $laporanpkl->ID_LAPORAN }}"><i class="far fa-edit"></i></a> 
               {{-- <a href="/hapusbalita{{ $balita->ID_BALITA }}"><i class="fas fa-trash-alt" style="color :red"></i></a> --}}
               {{-- <form action="{{ url('hapus'.$datasidang->ID_SIDANG ) }}" method="GET" class="d-inline" onsubmit="return confirm('Hapus Data ?')">
                @method('hapus')
                @csrf
                <button class="btn btn-danger btn-sm">
                  <i class="fas fa-trash-alt"></i></button>
                    {{-- <i class="fa fa-trash"></i></button> --}}
            </td> 

          </tr>
          @endforeach
   
          </tbody>
         
        </table>
        <br>
        <div class="pull-right">
          {{ $data->links() }}
    </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
 <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
@endsection 
{{-- </html> --}}