  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pendaftaran
        <small>Semua Data Terkait Pendaftaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pendaftaran Semnas</h3>
              <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Tambah Peserta</a></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>No HP</th>
                  <th>Nim</th>
                  <th>Instansi</th>
                  <th>Alamat</th>
                  <th>Kode Pos</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                
                <tr>
                  <th>Kode</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>No HP</th>
                  <th>Nim</th>
                  <th>Instansi</th>
                  <th>Alamat</th>
                  <th>Kode Pos</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- ============ MODAL ADD PESERTA =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">TAMBAH PESERTA BARU</h3>
            </div>
            <form class="form-horizontal" method="post">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-8">
                            <input name="nama" class="form-control" type="text" placeholder="Nama Peserta..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-8">
                            <input name="email" class="form-control" type="text" placeholder="Email Peserta..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No HP</label>
                        <div class="col-xs-8">
                            <input name="telepon" class="form-control" type="text" placeholder="No HP Peserta..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nim</label>
                        <div class="col-xs-8">
                            <input name="nim" class="form-control" type="text" placeholder="Nim Peserta..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Instansi</label>
                        <div class="col-xs-8">
                            <input name="instansi" class="form-control" type="text" placeholder="Instansi Peserta..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-8">
                            <textarea name="alamat" class="form-control" required=""></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Pos</label>
                        <div class="col-xs-8">
                            <input name="pos" class="form-control" type="text" placeholder="Kode Pos Peserta..." required>
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD PESERTA-->

<script>
    $(document).ready(function(){
        $('#mydata').DataTable();
    });
</script>