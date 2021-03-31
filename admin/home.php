 <?php
  error_reporting(0);
 include '../config/koneksi.php';
 session_start();

if(isset($_COOKIE['username']) && $_COOKIE['username'] != ''){
	$id = $_COOKIE['username'];
}else if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
	$id = $_SESSION['username'];
}else{
	header('location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Rawat Inap | 11 </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link href="build/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="build/css/styleku.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i> <img src="build/images/logonobg.png" width='50px'></i> <span>Rawat Inap</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php
                $query = mysqli_query($konek, "SELECT * FROM dokter WHERE username = '".$id."'");
                $data = mysqli_fetch_array($query);
                // menghitung data dokter
               
            ?>
            <div class="profile clearfix">
               <div class="profilnav">
                <img src="build/images/dokter/<?php echo $data['foto']; ?>"  >


                <h2>Welcome,</h2>
                <h2><?php echo $data['nama_lengkap']; ?></h2>
                </div>
             
            </div>
            <!-- /menu profile quick info -->


            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a href="?module=dokter" class="nav-link"><i class="fa fa-user-md"></i> Dokter </span></a>
                   
                  </li>
                  <li><a href="?module=pasien" class="nav-link"><i class="fa fa-users"></i> Pasien</a>
                   
                  </li>
                  <li><a href="?module=kamar" class="nav-link"><i class="fa fa-bed"></i> Kamar </a>
                  </li>

                  <li><a href="?module=diagnosa" class="nav-link"><i class="fa fa-stethoscope"></i> Diagnosa</a>
                  </li>

                  <li><a href="?module=pembayaran" class="nav-link"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Pembayaran </a>
                  </li>
                           
                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="build/images/dokter/<?php echo $data['foto']; ?>"><?php echo $data['nama_lengkap']; ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                   </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user-md fa-2x"></i> Jumlah Dokter</span>
              <div class="count">
              <?php
                  $data2 = mysqli_query($konek,"SELECT * FROM dokter");
                  $jmlh_dokter = mysqli_num_rows($data2);
                  echo $jmlh_dokter;?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-users fa-2x"></i> Jumlah Pasien</span>
              <div class="count">
              <?php
                  $data2 = mysqli_query($konek,"SELECT * FROM pasien");
                  $jmlh_pasien = mysqli_num_rows($data2);
                  echo $jmlh_pasien;?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-bed fa-2x"></i> Total Kamar</span>
              <div class="count">
              <?php
                  $data3 = mysqli_query($konek,"SELECT * FROM kamar");
                  $jmlh_kamar = mysqli_num_rows($data3);
                  echo $jmlh_kamar;?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-credit-card-alt fa-2x"></i> Total Transaksi</span>
              <div class="count">
              <?php
                  $data4 = mysqli_query($konek,"SELECT * FROM pembayaran");
                  $jmlh_pembayaran = mysqli_num_rows($data4);
                  echo $jmlh_pembayaran;?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">
              <div class="table-responsive">
                  <?php
                  include'content.php';
                  ?>
              </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="footer1 pull-left">
            <h6>Pelayanan Rawat Inap By <span color:black>Kelompok 11</span></h6>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <script src="build/js/jquery.dataTables.min.js"></script>
    <script src="build/js/dataTables.bootstrap.min.js"></script>
    <script>
     $(document).ready(function() {
    $('#rawat').DataTable();
      } );
    </script>
  </body>
</html>
