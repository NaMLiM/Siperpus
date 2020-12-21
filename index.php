<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Siperpus | Dashboard</title>
  <link rel="shortcut icon" type="image/jpg" href="assets/img/SiperpusLogo.png"/>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="lib/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="lib/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-collapse ">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Sistem Informasi Perpustakaan</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="assets/img/SiperpusLogo.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">nama_user</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="assets/img/SiperpusLogo.png" class="img-circle elevation-2" alt="User Image">
            <p>
              nama_user
              <small>username</small>
            </p>
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-block">Logout</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Beranda</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Siperpus</a></li>
              <li class="breadcrumb-item active">Beranda</li>
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
          <div class="col-lg-6">
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
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-plus"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Anggota Baru Bulan Ini</span>
                <span class="info-box-number">null</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Anggota</span>
                <span class="info-box-number">null</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!--Content-->
    <div class="content">
      <div class="container">
          <div class="row">
              <!--Pendaftaran-Anggota-->
              <div class="col-lg-3">
                <div class="card">
                  <a href="addmember.php">
                    <div class="card-header border-1 ">
                      <!--icon-add-member-->
                      <div class="d-flex">
                        <div class="info-box col-lg-5 elevation-0">
                          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-plus"></i></span>
                        </div>
                      </div>
                      <!-- /.icon-add-member -->
                      <div class="d-flex">
                          <p class="d-flex flex-column">
                            <span class="text-bold text-lg">Pendaftaran Anggota</span>
                          </p>
                        </div>
                    </div>
                  </a>
                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span>Anggota Baru Bulan Ini :</span>
                        <span class="text-bold text-lg">null</span>
                      </p>
                    
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.Pendaftaran-Anggota-->

              <!--Peminjaman-Buku-->
              <div class="col-lg-3">
                <div class="card">
                  <a href="#">
                    <div class="card-header border-1 ">
                      <!--icon-book-->
                      <div class="d-flex">
                        <div class="info-box col-lg-5 elevation-0">
                          <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-book"></i></span>
                        </div>
                      </div>
                      <!--/.icon-book -->
                      <div class="d-flex">
                          <p class="d-flex flex-column">
                            <span class="text-bold text-lg">Peminjaman Buku</span>
                          </p>
                        </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- /.Peminjaman-Buku-->
            </div>
        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 Akiestow Team.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Siperpus Engine Version</b> 1.0a-preview
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="lib/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="lib/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="lib/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="lib/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="lib/js/pages/dashboard3.js"></script>
</body>
</html>
