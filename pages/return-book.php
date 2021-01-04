<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengembalian Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Siperpus</a></li>
                        <li class="breadcrumb-item active">Pengembalian Buku</li>
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
                    <form action="system/return-proses.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>ID Peminjaman</label>
                                <input class="form-control" type="text" name="ID_Peminjaman" placeholder="Masukkan ID Buku">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit Pengembalian</button>
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
                                <h3 class="m-2">Riwayat</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered table-hover dataTable dtr-inline" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">ID Pengembalian</th>
                                                    <th class="sorting_desc" tabindex="0" rowspan="1" colspan="1" aria-sort="descending">ID Peminjaman</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Waktu Pengembalian</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $batas = 10;
                                                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                                                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                                                $previous = $halaman - 1;
                                                $next = $halaman + 1;

                                                $data = mysqli_query($connection, "SELECT * FROM pengembalian");
                                                $jumlah_data = mysqli_num_rows($data);
                                                $total_halaman = ceil($jumlah_data / $batas);

                                                $select = mysqli_query($connection, "SELECT * FROM pengembalian limit $halaman_awal, $batas");
                                                while ($data = mysqli_fetch_array($select)) {
                                                    echo "
                                <tr role='row'>
                                  <td class='dtr-control' tabindex='0'>" . $data["ID_PENGEMBALIAN"] . "</td>
                                  <td>" . $data["ID_PEMINJAMAN"] . "</td>
                                  <td>" . $data["WAKTU_PENGEMBALIAN"] . "</td>
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
                                                    <a <?php if ($halaman > 1) {
                                                            echo "href='?page=borrow-book&halaman=$previous'";
                                                        } ?> data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <?php
                                                for ($x = 1; $x <= $total_halaman; $x++) {
                                                ?>
                                                    <li class="paginate_button page-item">
                                                        <a href="?page=borrow-book&halaman=<?php echo $x ?>" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $x; ?></a>
                                                    </li>
                                                <?php
                                                }
                                                ?>
                                                <li class="paginate_button page-item next" id="example2_next">
                                                    <a <?php if ($halaman < $total_halaman) {
                                                            echo "href='?page=borrow-book&halaman=$next'";
                                                        } ?> data-dt-idx="7" tabindex="0" class="page-link">Next</a>
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