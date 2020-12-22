<?php
  include("system/koneksi.php");
  session_start();

  if(!$_SESSION["nama_admin"]){
    header("location:login.php");
  }
  if(!$_GET["page"]){
    header("location:index.php?page=home");
  }
?>
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
  <!-- Custom -->
  <link rel="stylesheet" href="lib/css/custom.css">
</head>
<body class="hold-transition sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <a href="index.php" class="navbar-brand">
          Sistem Informasi Perpustakaan
        </a>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="assets/img/SiperpusLogo.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php echo $_SESSION["nama_admin"]; ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="assets/img/SiperpusLogo.png" class="img-circle elevation-2" alt="User Image">
            <p>
              <?php echo $_SESSION["nama_admin"]; ?>
              <small><?php echo $_SESSION["username"]; ?></small>
            </p>
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="system/logout-proses.php" class="btn btn-default btn-block">Logout</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php
    include("pages/".$_GET["page"].".php");
  ?>

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
