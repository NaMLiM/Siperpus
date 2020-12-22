<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Beranda</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Siperpus</a></li>
            <li class="breadcrumb-item active">Beranda</li>
        </ol>
        </div>
    </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-1">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Statistik Peminjaman</h3>
            </div>
            </div>
            <div class="card-body">
            <div class="d-flex">
                <p class="d-flex flex-column">
                <span class="text-bold text-lg">null</span>
                <span>Peminjaman Bulan Ini</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                    <i class="fas fa-arrow-up"></i> null
                </span>
                <span class="text-muted">Preview</span>
                </p>
            </div>
            <div class="position-relative mb-4">
                <canvas id="visitors-chart" height="200"></canvas>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="info-box mb-3">
            <span class="info-box-icon btn-info elevation-1"><i class="fas fa-user"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Anggota Baru Bulan Ini</span>
            <span class="info-box-number">null</span>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Jumlah Anggota</span>
            <span class="info-box-number">null</span>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- /.content -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row justify-content-center">
        <h2 class="m-0">Control Panel</h2>
    </div>
    </div>
</div>
<div class="content">
    <div class="container">
    <div class="row">
        <!--Pendaftaran-Anggota-->
        <div class="col-lg-3">
        <div class="card">
            <a href="index.php?page=add-member">
            <div class="card-header border-1">
                <!--icon-->
                <div class="d-flex justify-content-center">
                <div class="info-box col-lg-5 elevation-0">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-plus"></i></span>
                </div>
                </div>
                <!--text-->
                <div class="d-flex justify-content-center">
                    <p class="d-flex flex-column">
                    <span class="text-bold text-lg">Pendaftaran Anggota</span>
                    </p>
                </div>
            </div>
            </a>
        </div>
        </div>
        <!-- /.Pendaftaran-Anggota-->

        <!--Peminjaman-Buku-->
        <div class="col-lg-3">
        <div class="card">
            <a href="#">
            <div class="card-header border-1">
                <!--icon-->
                <div class="d-flex justify-content-center">
                <div class="info-box col-lg-5 elevation-0">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-book-reader"></i></span>
                </div>
                </div>
                <!--text-->
                <div class="d-flex justify-content-center">
                <p class="d-flex flex-column">
                    <span class="text-bold text-lg">Peminjaman Buku</span>
                </p>
                </div>
            </div>
            </a>
        </div>
        </div>
        <!-- /.Peminjaman-Buku-->

        <!--Pengembalian-Buku-->
        <div class="col-lg-3">
        <div class="card">
            <a href="#">
            <div class="card-header border-1">
                <!--icon-->
                <div class="d-flex justify-content-center">
                <div class="info-box col-lg-5 elevation-0">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-book"></i></span>
                </div>
                </div>
                <!--text-->
                <div class="d-flex justify-content-center">
                <p class="d-flex flex-column">
                    <span class="text-bold text-lg">Pengembalian Buku</span>
                </p>
                </div>
            </div>
            </a>
        </div>
        </div>
        <!-- /.Pengembalian-Buku-->

        <!--Pencarian-Buku-->
        <div class="col-lg-3">
        <div class="card">
            <a href="#">
            <div class="card-header border-1">
                <!--icon-->
                <div class="d-flex justify-content-center">
                <div class="info-box col-lg-5 elevation-0">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-search"></i></span>
                </div>
                </div>
                <!--text-->
                <div class="d-flex justify-content-center">
                <p class="d-flex flex-column">
                    <span class="text-bold text-lg">Pencarian Buku</span>
                </p>
                </div>
            </div>
            </a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
<!-- /.content-wrapper -->