<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Inventory | Admin Gudang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/daterangepicker.css">
  <!-- Bootstrap Core CSS -->
  <!-- DataTables CSS -->
    

  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" role="button" href="#" data-widget="pushmenu"><i style = "color = : #339af0;" id= "icon" class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown">
            <!-- <img src="<?php echo base_url(); ?>assets/img/" class="img-circle" alt="User Image" width="25px" alt=""> -->
            <?= $this->session->username; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- <span class="dropdown-item dropdown-header">
              <img src="<?php echo base_url(); ?>assets/img/" width = "100px" class="img-circle" alt="User Image">
            </span> -->
            <div class="dropdown-divider"></div>
            <!-- <a class="dropdown-item" href="<?php echo base_url()."index.php/C_Awal/profil"?>">
              <i class="fas fa-file mr-2"></i> Profile
              <span class="float-right text-muted text-sm"></span>
            </a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item dropdown-footer" href="<?= base_url(); ?>logout.html">Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar elevation-4 sidebar-light-primary">
      <a href="<?= base_url(); ?>" class="brand-link">
        <img src="<?php echo base_url();?>assets/img/bpslogo.png" alt="Logo" width="60px" height= "50px" style="opacity: .8">
        <span class="brand-text font-weight-light"> <font size = "5" face= "Tahoma ">SI Inventory</font></span>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?= base_url(); ?>" class="nav-link">
                <i class="nav-icon fas fa-home" style="color :#339af0;"></i>
                <p>
                  Dashboard
                </p>
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
      <?php $this->load->view($konten); ?>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="<?php echo base_url();?>assets/http://adminlte.io"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- jQuery -->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url();?>assets/js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url();?>assets/js/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url();?>assets/js/jquery.vmap.min.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url();?>assets/js/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url();?>assets/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?php echo base_url();?>assets/js/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url();?>assets/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url();?>assets/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url();?>assets/js/demo.js"></script>

  <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/script.js"></script>
            
      <script>
      $(document).ready(function() {
          $('#dataTables-example').DataTable({
                  // responsive: true
          });
      });
      </script>                  <!-- /.table-responsive -->
</body>
</html>
