<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAFD | Inser. Usuários </title>
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
    <!--<body class="hold-transition skin-green fixed sidebar-mini">-->
    <body class="hold-transition skin-green layout-fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <header class="main-header" >
        <?php
          include 'header_admin.php';
        ?>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <?php
        include 'menulat_admin.php';
      ?>
    </aside>


      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Inicio> Inserindo usuários no sistema</a></li>
          </ol>
        </br>
        </section>
        <section class="content">

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Adicionando Usuários</h3>
                </div><!-- /.box-header -->
                
                <form action="cadastra_usuarios.php" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Siape" name="siape_funcionario" required="" autocomplete="off">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Nome Completo" name="nome_funcionario" required="" autocomplete="off">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="E-mail" name="email_funcionario" required="" autocomplete="off">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>                    
                    <!--<div class="form-group has-feedback">
                        <select id="setor" class="form-control" name="setor" required="" autocomplete="off">
                            <?php
                            include 'setores.php';
                            ?>
                        </select>
                    </div>

                    <div class="form-group has-feedback">
                        <select id="nivel" class="form-control" name="funcao" required="" autocomplete="off">
                            <?php
                            include 'funcao.php';
                            ?>
                        </select>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Login" name="login" required="" autocomplete="off">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Senha" name="senha" required="" autocomplete="off">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Confirme a senha" required="" autocomplete="off">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>-->
                    <div class="row">          
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success btn-block btn-flat">Registrar</button>
                        </div>            
                    </div>
                </form>
                
          </section>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <?php
          include 'footer.php';
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
