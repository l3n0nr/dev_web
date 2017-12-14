<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SAFD | Modif. User. </title>
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
    <!-- <body class="hold-transition skin-green layout-fixed sidebar-mini"> -->
    <body class="hold-transition skin-green fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header" >
                <?php
                    include 'header_admin.php';
                ?>
            </header>

            <aside class="main-sidebar">
                <?php
                    include 'menulat_admin.php';
                ?>
            </aside>

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href=""><i class="fa fa-dashboard"></i> Inicio> Alterando usuários do sistema </a></li>
                    </ol>
                </section>
                <section class="content">
                    <br>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <!--<div class="box-header">
                                  <h3 class="box-title">Alterando usuarios</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form action="teste.php" method="post">   
                                        <div class="form-group">
                                          <label>Login</label>
                                          <input class="form-control" id="login" placeholder="nome" type="text" 
                                          value="teste">

                                          <label>Setor</label>
                                          <select id="setor" class="form-control" name="nome_setor" required="" autocomplete="off">
                                            
                                            <?php                                            
                                                include 'setores.php';
                                            ?>
                                                
                                            </select>

                                          <label>Funcao</label>
                                          <select id="funcao" class="form-control" name="nome_funcao" required="" autocomplete="off">
                                            
                                            <?php                                            
                                                include 'funcao.php';
                                            ?>
                                                
                                            </select>

                                        <br>
                                        <a href="p_edita_usuarios.php"> VOLTAR </a>
                                        <button type="submit" class="btn btn-success pull-right">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

        <footer class="main-footer">
            <?php
                include 'footer.php';
            ?>
        </footer>
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

<!-- Criando funcoes javascript -->
<script language="javascript">
  // mostrando todos usuarios
  function todos()
  {
    alert("teste");
    // document.getElementById("Todos").select();
  }

  // mostrando usuarios ativos
  function ativos()
  {
    document.getElementById("Ativos").select();
  }

  // mostrando usuarios desativados
  function desativados()
  {
    document.getElementById("Desativados").select();
  }
</script>
