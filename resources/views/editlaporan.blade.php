<!DOCTYPE html>
<html>
     @extends('penjadwalan')
    @section('container')
    <div class="card">
      @foreach($laporanpkl as $data )
      <div class="card-header">
        <div class ="pull-left">
        <strong>Edit Data Laporan</strong>
        </div>
      <div class="pull-left">
        <a href="/laporanpkl" class="btn btn-secondary btn-sm">
          <i class= "fa fa-undo"></i>Back
        </a>
      </div>
    </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-md-4">
            <div class="form-group">
              <form action="laporanpkl/update" method="post">
                @csrf
                <label class="">NIM</label>
                <input type="text" name="nim" class="form-control" value="{{ $data->NIM }}" required="required"  axlegenght="30" size="50"></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_LAPORAN }}" value="nim"/>
            </div>
            <div class="form-group">
                <label class="">Kategori_Laporan</label>
                <input type="text" name="kategori" class="form-control" value="{{ $data->KATEGORI_LAPORAN }}" required="required"  axlegenght="30" size="50"></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_LAPORAN }}" value="kategori"/>
            </div>
            <div class="form-group">
                <label class="">Judul Laporan</label>
                <input type="text" name="judul" class="form-control" value="{{ $data->JUDUL_LAPORAN }}" required="required"  axlegenght="30" size="50"></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_LAPORAN }}" value="judul"/>
            </div>
            <div class="form-group">
                <label class="">Waktu Upload</label>
                <input type="time" name="waktu" class="form-control" value="{{ $data->WAKTU_UPLOAD }}" required="required"  axlegenght="30" size="50"></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_LAPORAN }}" value="waktu"/>
            </div>
            <div class="form-group">
                <label class="radio-inline">STATUS</label><br>
                <input type="radio" name="status" required="required" value="Diterima">Diterima 
                <input type="radio" name="status" required="required" value="Ditolak">Ditolak
             </div>

                <button type="submit" class="btn btn-primary">Submit</button> 
        </form>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  @endforeach
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