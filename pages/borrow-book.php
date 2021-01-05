<?php
if (!isset($_SESSION["nama_admin"])) {
?>
    <script>
        alert("Anda Harus Login Terlebih Dahulu !");
        document.location = "index.php";
    </script>
<?php
}
?>
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
                    <form action="system/borrow-proses.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>ID Anggota</label>
                                <input type="text" class="form-control" name="ID_Anggota" placeholder="Masukkan ID Anggota" required>
                            </div>
                            <div class="form-group">
                                <label>ID Buku</label>
                                <input class="form-control" type="text" name="ID_Buku" placeholder="Masukkan ID Buku" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit Peminjaman</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.container-fluid -->

    </div>
</div>
<!-- /.content -->
<!-- /.content -->
</div>
<!-- /.content-wrapper -->