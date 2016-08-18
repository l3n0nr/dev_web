<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sist. Acomp. Flux. Demnd. </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  </head>
  <body class="hold-transition skin-green layout-boxed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <header class="main-header" >
        <?php
          include 'base/header.php';
        ?>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <?php
        include 'base/menuLat.php';
      ?>
    </aside>
        

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Página Inicial
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
          </ol>
        </br>
          <div class="col-xs-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a aria-expanded="true" href="#fa-icons" data-toggle="tab">Demandas Gerais</a></li>
                </ul>
                
                <div class="tab-content">
                  <!-- Font Awesome Icons -->
                  <div class="tab-pane active" id="fa-icons">
                    <section id="new">
                    <div class="row fontawesome-icon-list">
                      <ul>
                        <a href="#">
                          04/04/16 - Canetas - Lenon
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          06/06/16 - Cadeiras - João
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          04/01/15 - Carimbos - Carlos
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          04/04/16 - Canetas - Lenon
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          06/06/16 - Cadeiras - João
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          05/10/13 - Mesa - Pedro
                        </a>
                      </ul>
                      
                      <ul>
                        <a href="#">
                          04/04/16 - Canetas - Lenon
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          06/06/16 - Cadeiras - João
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          04/01/15 - Carimbos - Carlos
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          04/04/16 - Canetas - Lenon
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          06/06/16 - Cadeiras - João
                        </a>
                      </ul>
                      <ul>
                        <a href="#">
                          05/10/13 - Mesa - Pedro
                        </a>
                      </ul>
                      
                    </div>
                  </div>
                </div>
            
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
              
              
          </div>
        </section>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <?php
          include 'base/footer.php';
        ?>
      </footer>

          <!-- Stats tab content -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>
