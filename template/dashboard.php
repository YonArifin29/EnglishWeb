<?php
  include("sidebar.php");
  include("topbar.php");
  include("footer.php");
  echo"
    <!DOCTYPE html>
    <html lang='en'>
        <head>
          <meta charset='utf-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <title>$title</title>
          <!-- My css -->
          <link rel='stylesheet' href='../assets/dist/css/style1.css'>
          <!-- Google Font: Source Sans Pro -->
          <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'>
          <!-- Font Awesome -->
          <link rel='stylesheet' href='../assets/plugins/fontawesome-free/css/all.min.css'>
          <!-- Ionicons -->
          <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
          <!-- Tempusdominus Bootstrap 4 -->
          <link rel='stylesheet' href='../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'>
          <!-- iCheck -->
          <link rel='stylesheet' href='../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'>
          <!-- JQVMap -->
          <link rel='stylesheet' href='../assets/plugins/jqvmap/jqvmap.min.css'>
          <!-- Theme style -->
          <link rel='stylesheet' href='../assets/dist/css/adminlte.min.css'>
          <!-- overlayScrollbars -->
          <link rel='stylesheet' href='../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'>
          <!-- Daterange picker -->
          <link rel='stylesheet' href='../assets/plugins/daterangepicker/daterangepicker.css'>
          <!-- summernote -->
          <link rel='stylesheet' href='../assets/plugins/summernote/summernote-bs4.min.css'>
        </head>
        <body class='hold-transition sidebar-mini layout-fixed'>
          <div class='wrapper'>
          <!--<div class='preloader flex-column justify-content-center align-items-center'>
                <img class='animation__shake' src='../assets/dist/img/AdminLTELogo.png' alt='AdminLTELogo' height='60' width='60'>
              </div> -->

            <!-- topNavbar -->
                  $topbar
            <!-- end topnavbar -->
          
            <!-- Main Sidebar Container -->
                  $sidebar
            <!-- Content Wrapper. Contains page content -->
            <div class='content-wrapper'>
              <!-- Main content -->
              <section class='content'>
                <div class='container-fluid'>
                  <div class='content-header'>
                      <div class='container-fluid'>
                      <div class='row mb-1'>
                          <div class='col-sm-6 mt-3'>
                              <h1 class='m-0 judul ml-4'>$judul</h1>
                              <h4><b>$judul2</b></h4>
                          </div>
                      </div>
                      </div>
                  </div>
                  $konten
                  <div class='text-center mt-3'>
                  <h5>$hal</h5>
                    $tombol
                  </div>
                </div>
              </section>
              <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            $footer
            <!-- Control Sidebar -->
            <aside class='control-sidebar control-sidebar-dark'>
              <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->
        
          <!-- jQuery -->
          <script src='../assets/plugins/jquery/jquery.min.js'></script>
          <!-- jQuery UI 1.11.4 -->
          <script src='../assets/plugins/jquery-ui/jquery-ui.min.js'></script>
          <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
          <script>
            $.widget.bridge('uibutton', $.ui.button)
          </script>
          <!-- Bootstrap 4 -->
          <script src='../assets/plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
          <!-- ChartJS -->
          <script src='../assets/plugins/chart.js/Chart.min.js'></script>
          <!-- Sparkline -->
          <script src='../assets/plugins/sparklines/sparkline.js'></script>
          <!-- JQVMap -->
          <script src='../assets/plugins/jqvmap/jquery.vmap.min.js'></script>
          <script src='../assets/plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
          <!-- jQuery Knob Chart -->
          <script src='../assets/plugins/jquery-knob/jquery.knob.min.js'></script>
          <!-- daterangepicker -->
          <script src='../assets/plugins/moment/moment.min.js'></script>
          <script src='../assets/plugins/daterangepicker/daterangepicker.js'></script>
          <!-- Tempusdominus Bootstrap 4 -->
          <script src='../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
          <!-- Summernote -->
          <script src='../assets/plugins/summernote/summernote-bs4.min.js'></script>
          <!-- overlayScrollbars -->
          <script src='../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
          <!-- AdminLTE App -->
          <script src='../assets/dist/js/adminlte.js'></script>
          <!-- AdminLTE for demo purposes -->
          <script src='../assets/dist/js/demo.js'></script>
          <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
          <script src='../assets/dist/js/pages/dashboard.js'></script>
        </body>
    </html>
    
  ";
?>