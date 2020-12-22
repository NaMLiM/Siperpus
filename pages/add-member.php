<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pendaftaran Anggota</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Siperpus</a></li>
            <li class="breadcrumb-item active">Pendaftaran Anggota</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
        <div class="col-lg-12">
          <div class="card">
            <forma ction="../system/add-member-proses.php" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label>NIK</label>
                  <input type="text" class="form-control" name="NIK" placeholder="Masukkan NIK">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" type="text" name="Nama" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input class="form-control" type="text" name="NoHP" placeholder="Masukkan nomor telepon">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" name="username" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->