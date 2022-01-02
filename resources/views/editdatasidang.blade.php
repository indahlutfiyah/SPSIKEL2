<!DOCTYPE html>
<html>
     @extends('penjadwalan')
    @section('container')
    <div class="card">
      @foreach($datasidang as $data )
      <div class="card-header">
        <div class ="pull-left">
        <strong>Edit Data Penjadwalan</strong>
        </div>
      <div class="pull-left">
        <a href="/datasidang" class="btn btn-secondary btn-sm">
          <i class= "fa fa-undo"></i>Back
        </a>
      </div>
    </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-md-4">
            <div class="form-group">
              <form action="datasidang/update" method="post">
                @csrf
                <label class="">NIP DOSEN PENGUJI</label>
                <input type="number" name="id_nip" class="form-control" value="{{ $data->NIP_DOSENPENGUJI }}" required="required"  ></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_SIDANG }}" value=""/>   
            </div>
            <div class="form-group">
                <label class="">Jenis Sidang</label>
                <input type="text" name="jensid" class="form-control" value="{{ $data->JENIS_SIDANG }}" required="required"  axlegenght="30" size="50"></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_SIDANG }}" value=""/>
            </div>
            <div class="form-group">
                <label class="">Ruang Sidang</label>
                <input type="text" name="ruang" class="form-control" value="{{ $data->RUANG_SIDANG }}" required="required"  axlegenght="30" size="50"></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_SIDANG }}" value=""/>
            </div>
            <div class="form-group">
                <label class="">Tanggal Sidang</label>
                <input type="datetime-local" name="tgl" class="form-control" value="{{ $data->TANGGAL_SIDANG }}" required="required"  axlegenght="30" size="50"></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_SIDANG }}" value=""/>
            </div>
            <div class="form-group">
                <label class="">Waktu Sidang</label>
                <input type="time" name="waktu" class="form-control" value="{{ $data->WAKTU_SIDANG }}" required="required"  axlegenght="30" size="50"></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_SIDANG }}" value=""/>
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