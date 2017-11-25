<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SAFD | Form. Bens </title>
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
                    include 'header_coord.php';
                ?>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <?php
                    include 'menulat_coord.php';
                ?>
            </aside>

            <!-- =============================================== -->
            <!--FORMULARIO DE BENS-->
            <!--             <form onsubmit="alert('Solicitação enviada para avaliação do seu coordenador!')" action="system.php"> -->
            <form action="form_bens_obj.php" method="post">
                <div class="content-wrapper">
                    <section class="content-header">
                        <h4>
                            REQUISIÇÃO DE COMPRA - SOLICITAÇÃO DE BENS
                        </h4>
                        <ol class="breadcrumb">
                            <li><a href=""><i class="fa fa-dashboard"></i> Inicio>Formulário para Solicitação de Bens </a></li>
                        </ol>
                    </section>                                                                                         
                    <div class="box-footer">
                        <h4>
                            Através dessa opção voçê iniciará o processo de uma nova solicitacão de bens no sistema.
                            <br>
                            <br>
                            Este processo consiste nas mesmas etapas executadas no processo realizado manualmente atualmente, onde procura-se otimizá-las através de um sistema informatizado. 
                            <br>
                            <br>
                            Clique no botao verde, para iniciar o processo de solicitação. Antes de iniciar o processo recomenda-se verificar a lista de solicitações já realizadas, para evitar processos duplicados.                    
                        </h4>
                        <div class="col-sm-6">
                            <br>
                            <button type="submit" class="btn btn-success pull-right">Iniciar Solicitação</button>
                        </div>
                    </div>
                </div>
            </form>


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
