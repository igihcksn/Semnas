<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Admin
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="admin">admin</a></li>
      <li class="active">Tambah Admin</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah admin</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->

          <?php $errornim = ""; if(form_error('nim')){
                $errornim = "has-error";
          } ?>
          <?php $errornama = ""; if(form_error('nama')){
                $errornama = "has-error";
          } ?>
          <?php $erroremail = ""; if(form_error('email')){
                $erroremail = "has-error";
          } ?>
          <?php $errorpass = ""; if(form_error('password')){
                $errorpass = "has-error";
          } ?>


          <form method="post" action="addadmin">
            <div class="box-body">
              <div class="form-group has-feedback <?=$errornim?>">
                <label for="exampleInputEmail1 " >NIM</label>
                <input type="text" class="form-control" name="nim"  placeholder="Masukan Nim" >
                <span class="help-block"><?=form_error('nim')?></span>
              </div>
              <div class="form-group has-feedback <?=$errornama?>">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama"  placeholder="Masukan Nama Lengkap" >
                <span class="help-block"><?=form_error('nama')?></span>
              </div>
              <div class="form-group has-feedback <?=$erroremail?>">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email"  placeholder="Masukan Email" >
                <span class="help-block"><?=form_error('email')?></span>
              </div>
              <div class="form-group has-feedback <?=$errorpass?>">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password"  placeholder="Masukan Password">
                <span class="help-block"><?=form_error('password')?></span>
              </div>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
