<?php
    session_start();
    if(!isset($_SESSION["username"])) {    
      header("Location:../login.php");    
    }
    $pengunjung=$_SESSION['username'];
    $username=$_SESSION['username'];
    
    include("connection.php");
    $query="SELECT nama_user,role_user from user where username='$username'";

    $result=mysqli_query($link,$query);
    $data=mysqli_fetch_assoc($result);

    //error_reporting(E_ALL ^ (E_NOTICE|E_WARNING));
    date_default_timezone_set('Asia/Jakarta');
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Arsip</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- NAVBAR -->
<header class="main-header">
<!-- Logo -->
<a href="index.php" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-lg"><b>e-Surat</b></span>
    <i class="fa fa-envelope-o fa-lg"></i>
  <!-- logo for regular state and mobile devices -->      
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="asset/img/logo.png" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs" class="profile-username text-center"><?php echo "$data[nama_user]";?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="asset/img/logo.png" class="profile-user-img img-responsive img-circle" alt="User Image">

            <p>
                <?php echo "$data[nama_user]";?>
                  <small><?php echo "$data[role_user]";?></small>
                </p>
          </li>
          
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Ganti Password</a>
            </div>
            <div class="pull-right">
              <a href="logout.php" class="btn btn-default btn-flat">Log out</a>
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->

    </ul>
  </div>
</nav>
</header>

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img class="profile-user-img img-responsive img-circle" src="asset/img/logo.png" alt="User Image">
        </div>
        <div class="pull-left info">
        <h3 class="profile-username text-center"><?php echo "$data[nama_user]";?></h3>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <br>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGASI UTAMA</li>
        <!-- Optionally, you can add icons to the links -->
        <li>

          <a href="?page=home&aksi"><i class="fa fa-dashboard"></i> <span>Home</span></a>
        </li>
        <li>
          <a href="?page=surat_masuk&aksi"><i class="fa fa-inbox"></i> <span>Surat Masuk</span></a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Agenda Surat Keluar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=surat_keluar&aksi"><i class="fa fa-inbox"></i> <span>Data Surat Keluar</span></a></li> 
            <li><a href="?page=Ekssurat_keluar&aksi"><i class="fa fa-inbox"></i> <span>Ekspedisi Surat Keluar</span></a></li> 
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
<!-- NAVBAR END -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Selamat Datang
        <small><h3 class="profile-username text-center"><?php echo "$data[nama_user]";?></h3></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-calendar"></i> <?php $tgl=date('l, d M Y'); echo $tgl; ?></a></li>
      </ol>
    </section>    

    <!-- Main content -->
    <section class="content">
<!-- FUNGSI PAGE -->
  <?php
    if(isset($_GET["page"])){
      //if(isset($_GET["aksi"])){
       $page=trim($_GET["page"]);
       $aksi=trim($_GET["aksi"]);
        if($page == "surat_masuk"){
          if ($aksi ==""){
            include 'pages/surat_masuk.php';
            } elseif ($aksi == "tambahsurat_masuk") {
                include 'pages/tambahsurat_masuk.php';
            } elseif ($aksi == "editsurat_masuk") {
                include 'pages/editsurat_masuk.php';
            } elseif ($aksi == "hapussurat_masuk") {
                include 'pages/hapussurat_masuk.php';
            } elseif ($aksi == "cetaksurat_masuk") {
                include 'pages/cetaksurat_masuk.php';
            }elseif ($aksi == "rekapsurat_masuk") {
                include 'pages/rekapsurat_masuk.php';
            }
        }
        if($page == "surat_keluar"){
          if($aksi == ""){
            include 'pages/surat_keluar.php';
            }elseif ($aksi == "tambahsurat_keluar") {
                include 'pages/tambahsurat_keluar.php';
            } elseif ($aksi == "editsurat_keluar") {
                include 'pages/editsurat_keluar.php';
            } elseif ($aksi == "hapussurat_keluar") {
                include 'pages/hapussurat_keluar.php';
            }elseif ($aksi == "rekapsurat_keluar") {
                include 'pages/rekapsurat_keluar.php';
            } elseif ($aksi == "editekssurat_keluar") {
                include 'pages/editekssurat_keluar.php';
            }
        }  
        if($page == "user"){
          if ($aksi == "") {
            include 'pages/user.php';
            } elseif ($aksi == "tambah_user") {
                include 'pages/tambah_user.php';
            } elseif ($aksi == "edit_user") {
                include 'pages/edit_user.php';
            } elseif ($aksi == "hapus_user") {
                include 'pages/hapus_user.php';
            }
        }
        if($page == "Ekssurat_keluar"){
          if ($aksi == "") {
            include 'pages/Ekssurat_keluar.php';
            } elseif ($aksi == "tambah_Ekssurat_keluar") {
                include 'pages/tambah_Ekssurat_keluar.php';
            } elseif ($aksi == "edit_Ekssurat_keluar") {
                include 'pages/edit_Ekssurat_keluar.php';
            } elseif ($aksi == "hapus_Ekssurat_keluar") {
                include 'pages/hapus_Ekssurat_keluar.php';
            }
        }
        if($page == "home"){
          include 'pages/home.php';
          } 


         
        
    }
  
  ?>
      <!-- BOX -->

      <!-- BOX END -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          
          <!-- /.nav-tabs-custom -->    

                  
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      e-Surat
    </div>
    <!-- Default to the left -->
    <strong>Sistem Surat Dinas &copy; 2019 .</strong>
  </footer>

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>

