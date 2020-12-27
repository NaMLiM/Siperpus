<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pencarian Buku</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Siperpus</a></li>
            <li class="breadcrumb-item active">Pencarian Buku</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
   <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                  <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                      <thead>
                      <tr role="row"><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">ID</th><th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending">Judul Buku</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Penulis Buku</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Persedian</th></tr>
                      </thead>
                      <tbody>
                        <?php
                          $batas = 10;
                          $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                          $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
                  
                          $previous = $halaman - 1;
                          $next = $halaman + 1;
                          
                          $data = mysqli_query($connection,"select * from buku");
                          $jumlah_data = mysqli_num_rows($data);
                          $total_halaman = ceil($jumlah_data / $batas);

                          $select = mysqli_query($connection, "select * from buku limit $halaman_awal, $batas");
                          while($data = mysqli_fetch_array($select)){
                            echo "
                              <tr role='row'>
                                <td class='dtr-control' tabindex='0'>".$data["id_buku"]."</td>
                                <td class='sorting_1'>".$data["nama_buku"]."</td>
                                <td>".$data["penulis_buku"]."</td>
                                <td>".$data["stok_buku"]."</td>
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
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous" id="example2_previous">
                          <a <?php if($halaman > 1){ echo "href='?page=search-book&halaman=$previous'"; } ?> aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <?php 
                          for($x=1;$x<=$total_halaman;$x++){
                        ?> 
                        <li class="paginate_button page-item">
                          <a href="?page=search-book&halaman=<?php echo $x ?>" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $x; ?></a>
                        </li>
                        <?php
                          }
                        ?>	
                        <li class="paginate_button page-item next" id="example2_next">
                          <a <?php if($halaman < $total_halaman) { echo "href='?page=search-book&halaman=$next'"; } ?> aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
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
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

