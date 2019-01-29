<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Dishub Surakarta</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url() ?>assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url() ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url() ?>" class="logo"><b>Dishub</b>Surakarta</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="" alt="Keluar" title="Keluar">
                <a href="<?php echo base_url() ?>admin/logout" class="" >
                  <i class="fa fa-power-off"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url() ?>assets/images/logo-dinas-perhubungan-1-150x150.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('username') ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">NAVIGASI UTAMA</li>
            <li>
              <a href="<?php echo base_url() ?>admin">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            <li>
              <a href="<?php echo base_url() ?>admin/posts">
                <i class="fa fa-paper"></i> <span>Berita</span>
              </a>
            </li>
            <li><a href=""><i class="fa fa-gear"></i> Pengaturan</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">



