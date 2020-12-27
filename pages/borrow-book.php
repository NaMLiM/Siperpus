<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Peminjaman Buku</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Siperpus</a></li>
            <li class="breadcrumb-item active">Peminjaman Buku</li>
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
                  <label>ID Anggota</label>
                  <input type="text" class="form-control" name="ID_anggota" placeholder="Masukkan ID anggota">
                </div>
                <div class="form-group">
                  <label>ID Buku</label>
                  <input class="form-control" type="text" name="ID_buku" placeholder="Masukkan ID buku">
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
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
