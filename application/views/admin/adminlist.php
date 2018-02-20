
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Admin
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Admin</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- /.row -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">List Admin</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>Email</th>
                <th>Status</th>
                <th>ACTION</th>
              </tr>
              <?php $no = 1;
               foreach ($admin as $datas): ?>

              <tr>
                <td><?=$no?></td>
                <td><?=$datas->nim?></td>
                <td><?=$datas->nama_admin?></td>
                <td><?=$datas->email?></td>
                <td><span class="label label-success">Online</span></td>
                <!-- <td><span class="label label-danger">Offline</span></td> -->
                <td><button type="button" class="btn btn-info">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
            <?php $no++; endforeach; ?>
            </table>
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <button type="button" class="btn btn-primary"><i class="fa fa-user-plus"></i> Tambah Admin</button>
          </div>
          <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
