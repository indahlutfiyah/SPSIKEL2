<!DOCTYPE html>
<html>
     @extends('penjadwalan')
    @section('container')
    <div class="card">
      <div class="card-header">
        <div class ="pull-left">
        <strong>Tambah DATA PENGAJUAN</strong>
        </div>
      <div class="pull-left">
        <a href="/pengajuanhonor" class="btn btn-secondary btn-sm">
          <i class= "fa fa-undo"></i>Back
        </a>
      </div>
    </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-md-4">
        <form action="/pengajuanhonor/store" method="post" enctype="multipart/form-data">
          @csrf
            {{-- <div class="form-group">
            <label class="">id_kecamatan</label>
              <input type="number" name="id_kecamatan"  required="required" ></td>
            </div> --}}
            {{-- <div class="form-group">
                <label class="">Surat Pengajuan Honor</label>
                  <input type="text" name="surat"  required="required" ></td>
             </div> --}}
             <div class="mb-3">
                <label for="formFile" class="form-label">Surat Pengajuan</label>
                <input class="form-control" type="file" id="formFile" name="formFile">
              </div>
             <div class="form-group">
              <label class="">jenis pengajuan</label><br>
                <input type="text" name="jenis" required="required"></td>
              </div>
              <div class="form-group">
                <label class="radio-inline">STATUS</label><br>
                <input type="radio" name="status" required="required" value="cair">Cair 
                <input type="radio" name="status" required="required" value="Belum Cair">Belum Cair
             </div>
            
          
            
                <button type="submit" class="btn btn-primary">Submit</button> 
        </form>
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