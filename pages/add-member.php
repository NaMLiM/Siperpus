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
            <li class="breadcrumb-item"><a href="index.php">Siperpus</a></li>
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
    <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <h3 class="m-2">Daftar Anggota</h3>
            </div>
          </div>
          <div class="card-body">
            <div class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-bordered table-hover dataTable dtr-inline" role="grid">
                      <thead>
                      <tr role="row"><th class="sorting" tabindex="0" rowspan="1" colspan="1">Nama</th><th class="sorting_desc" tabindex="0" rowspan="1" colspan="1" aria-sort="descending">NIK</th><th class="sorting" tabindex="0" rowspan="1" colspan="1">No. HP</th></tr>
                      </thead>
                      <tbody>
                        <?php
                          $batas = 10;
                          $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                          $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
                  
                          $previous = $halaman - 1;
                          $next = $halaman + 1;
                          
                          $data = mysqli_query($connection,"select * from anggota");
                          $jumlah_data = mysqli_num_rows($data);
                          $total_halaman = ceil($jumlah_data / $batas);

                          $select = mysqli_query($connection, "select * from anggota limit $halaman_awal, $batas");
                          while($data = mysqli_fetch_array($select)){
                              echo "
                                <tr role='row'>
                                  <td class='dtr-control' tabindex='0'>".$data["NAMA_ANGGOTA"]."</td>
                                  <td class='sorting_1'>".$data["NIK"]."</td>
                                  <td>".$data["NOHP_ANGGOTA"]."</td>
                                </tr>
                              ";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-12">
                    <div class="dataTables_paginate paging_simple_numbers">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous">
                          <a <?php if($halaman > 1){ echo "href='?page=borrow-book&halaman=$previous'"; } ?> data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <?php 
                          for($x=1;$x<=$total_halaman;$x++){
                        ?> 
                        <li class="paginate_button page-item">
                          <a href="?page=borrow-book&halaman=<?php echo $x ?>" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $x; ?></a>
                        </li>
                        <?php
                          }
                        ?>	
                        <li class="paginate_button page-item next">
                          <a <?php if($halaman < $total_halaman) { echo "href='?page=borrow-book&halaman=$next'"; } ?> data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- /.card-body -->
          </div>
            <!-- /.card -->
            <!-- /.card -->
        </div>
          <!-- /.col -->
      </div>
        <!-- /.row -->
    </div>
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->