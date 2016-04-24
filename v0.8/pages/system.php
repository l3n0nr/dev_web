<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAFD-IFFCA</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-green layout-boxed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <header class="main-header" >
        <!-- Logo -->
        <a href="../pages/system.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels-->
          <span class="logo-mini"><b>FD</b></span>

          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">SAFD-IFFCA</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Modificar usuários <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Trocar Login/Senha</a></li>
                    <li><a href="#">Trocar função</a></li>
                    <li><a href="#">Excluir usuário</a></li>
                </ul>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alterar Demandas <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Alterar Prazos</a></li>
                    <li><a href="#">Alterar Etapas</a></li>
                </ul>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Plano de Ação <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Ações Atendidas</a></li>
                    <li><a href="#">Demandas Pendentes</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Lista de Demandas - Coordenação</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Documentos <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="docs/solicitacaoBensServicos.php">Solicitação de Bens/Serviços</a></li>
                    <li><a href="#">Solicitação de Empenho</a></li>
                    <li class="divider"></li>
                    <li><a href="#"></a></li>
                </ul>
              </li>
            </ul>
            </div>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">100</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Você tem 10 ações pendentes</li>
                  <li>
                  </li>
                  <li class="footer"><a href="#">Ver Todas</a></li>
                </ul>
              </li>

              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>

              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>

              <!-- Tasks: style can be found in dropdown.less -->


              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../dist/img/logo.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">Lenon Ricardo</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/logo.png" class="img-circle" alt="User Image">
                    <p>
                      Administrador do Sistema
                      <small>Dominar o Mundo!</small>
                    </p>
                  </li>

                  <li class="user-footer">
                    <div class="pull-left">
                        <a href="#" data-toggle="" class="btn btn-default btn-flat"> Configurações </a>
                    </div>
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Ajuda</a>
                    </div>
                    <div class="pull-right">
                      <a href="../index.php" class="btn btn-default btn-flat">Sair</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <form action="#" method="get" class="sidebar-form">
          </form>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MODIFICAR USUARIOS</li>
              <li><a href="#"><i class="fa fa-circle text-gray"></i> <span>Trocar Login/Senha</span></a></li>
              <li><a href="#"><i class="fa fa-circle text-gray"></i> <span>Trocar Cargo</span></a></li>
              <li><a href="#"><i class="fa fa-circle text-gray"></i> <span>Excluir</span></a></li>

            <li class="header">ALTERAR DEMANDAS</li>
            <li><a href="#"><i class="fa fa-circle text-white"></i> <span> Prazos</span></a></li>
            <li><a href="#"><i class="fa fa-circle text-white"></i> <span>Etapas</span></a></li>

            <li class="header">PLANO DE AÇÃO</li>
            <li><a href="#"><i class="fa fa-circle text-green"></i> <span>Ações Atendidas</span></a></li>
            <li><a href="#"><i class="fa fa-circle text-red"></i> <span>Demandas Pendentes</span></a></li>
            <li><a href="#"><i class="fa fa-circle text-blue"></i> <span>Lista de Demandas</span></a></li>
            <li><a href="#"><i class="fa fa-circle text-yellow"></i> <span>Planejamento Coordenação</span></a></li>

            <li class="header">DOCUMENTOS</li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Solicitação de Bens/Serviços</span></a></li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Solicitação de Empenho</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
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
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Subtitulo</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              mensagem aqui
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <label> Base para o Desenvolvimento </label>
        <br>
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong>
        <br>
        <br>
        <label> Desenvolvimento do Sistema </label>
        <br>
        <div class="pull-right hidden-xs">
          <b>Version Alpha</b>
        </div>
        <strong>Copyright &copy; 2016 <a href="http://github.com/lenonr">Lenon Ricardo</a>.</strong>
      </footer>

      <!--menu da direita-->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
    
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->

          <!-- Stats tab content -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
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
