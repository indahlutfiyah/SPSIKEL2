@extends('penjadwalan')
@section('container')

<!DOCTYPE html>
<html>

    <div class="card me-5">
      <div class="card-header">
        <h3 class="card-title">Data Penjadwalan </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <div class="card-body">
          <form action="/datasidang/cari" method="get">
           <div class="input-group input-group-sm">
               <input type="text" class="form-control form-control-navbar" name="cari" value="{{ request('cari') }}"
               placeholder="Ketikan sesuatu" aria-label="Search" >
               <div class="input-group-append">
               <button class="btn btn-navbar" type="submit">
                 <i class="fas fa-search"></i>
               </button>
               </div>
           </div>
              </form>
              <br>
        {{-- <p><a href="/createdatasidang"<button type="button" class="btn btn-primary">Tambah Data</button></a>
          <a href="/printdatasidang" target="_blank" class="btn btn-danger">Print PDF</a> |  --}}
          {{-- <a href="trashhistory_posyandu"<button type="button" class="btn btn-warning">Sampah</button></a> --}}
        </p>
        <div class="animated fadeIn">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
        </div>
        <table id="example1" class="table table-bordered table-striped">
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
          @foreach($data as $datasidang )
          <tbody>
          <tr>
            <td>{{ $datasidang->ID_SIDANG }}</td>
            {{-- <td>{{ $datasidang->NIP_PAA }}</td> --}}
            <td>{{ $datasidang->NIP_DOSENPENGUJI }}</td>
            <td>{{ $datasidang->JENIS_SIDANG }}</td>
            <td>{{ $datasidang->RUANG_SIDANG }}</td>
            <td>{{ $datasidang->TANGGAL_SIDANG }}</td>
            <td>{{ $datasidang->WAKTU_SIDANG }}</td>
            <td>
              {{-- <a href="/editdatasidang{{ $datasidang->ID_SIDANG }}"><i class="far fa-edit"></i></a> |  --}}
               {{-- <a href="/hapusdatasidang{{ $datasidang->ID_SIDANG }}"><i class="fas fa-trash-alt" style="color :red"></i></a> --}}
               {{-- <form action="{{ url('hapus'.$datasidang->ID_SIDANG ) }}" method="GET" class="d-inline" onsubmit="return confirm('Hapus Data ?')">
                @method('hapus')
                @csrf
                <button class="btn btn-danger btn-sm">
                  <i class="fas fa-trash-alt"></i></button> --}} 
                    {{-- <i class="fa fa-trash"></i></button> --}}
            </td> 

          </tr>
          @endforeach
   
          </tbody>
         
        </table>
        <br>
        {{-- <div class="pull-right">
          {{ $data->links() }}
    </div> --}}
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
</html>