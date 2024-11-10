<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Memanggil public ke adminlte -->
  <link rel="stylesheet" href="public/AdminLTE/plugins/fontawesome-free/css/all.min.css"> 
  <!-- Theme style Memanggil public ke adminlte -->
  <link rel="stylesheet" href="public/AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="public/AdminLTE/index3.html" class="brand-link">
      <img src="public/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p class="text">Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?navbar=Barang" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?navbar=Pelanggan" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?navbar=Transaksi" class="nav-link">
              <i class="nav-icon far fa-circle text-success"></i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="container">
    <div class="container-fluid bg-success">
    <div class="container mt-3">
    <nav class="navbar navbar-expand-lg bg-success">
        <a class="navbar-brand text-light" href="index.php"><h4>Home</h4></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ms-5" >
              <a class="nav-link active text-light " href="index.php?navbar=Barang"><h4>Barang</h4></a>
            </li>
            <li class="nav-item ms-5">
              <a class="nav-link active text-light"  href="index.php?navbar=Pelanggan"><h4>Pelanggan</h4></a>
            </li>
            <li class="nav-item ms-5">
              <a class="nav-link active text-light"  href="index.php?navbar=Transaksi"><h4>Transaksi</h4></a>
            </li>
          </ul>
        </div>
        </div>
    </nav>  
  </div>
    <div class="container mt-3">
        <h2>Tambah Customer</h2>
    <form action="transaksi.php?transaksi=AddTransaksi" method="POST">
        <div class="mb-3">
        <label for="nama_pelanggan" class="form-label">Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan" required>
        </div>
        <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang:</label>
        <input type="text" name="nama_barang" class="form-control" id="nama_barang" required>
        </div>
        <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah:</label>
        <input type="number" name="jumlah" class="form-control" id="jumlah" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
    </form>
    </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>