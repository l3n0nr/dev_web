<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SAFD | Form. Bens </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta charset="utf-8" />
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
                    include 'header_docente.php';
                ?>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <?php
                    include 'menulat_docente.php';
                ?>
            </aside>

            <!-- =============================================== -->
            <!--FORMULARIO DE BENS-->
            <!--             <form onsubmit="alert('Solicitação enviada para avaliação do seu coordenador!')" action="system.php"> -->
            <form action="form_bens_2_docente.php" method="post">
                <div class="content-wrapper">
                    <!-- MENSAGEM INICIAL -->
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">
                            Fechar
                        </button>
                        <h4>
                            <i class="icon fa fa-warning"> </i>
                            Informações importantes
                        </h4>
                        <label> - Alguns campos serão preenchidos automaticamente pelo sistema. </label> <br>                        
                        <label> - É necessário que todos os outros campos, sejam preenchidos!</label>
                    </div>

                    <section class="content-header">
                        <h4>
                            Solicitacao de Bens - Parte 1 - Compra de Objetos;
                        </h4>
                        <ol class="breadcrumb">
                            <li><a href=""><i class="fa fa-dashboard"></i> Inicio>Formulário para Solicitação de Bens </a></li>
                        </ol>
                    </section>                                                                        
                    <form action="form_bens_obj_docente.php" method="post">
                        <div class="col-xs-5">
                            <br>
                            <label>Selecione o Objeto</label>
                            <select class="form-control" required="" name="item"> 
                                <?php include "lista_objetos.php" ?>
                            </select>                            
                        </div>                                         

                        <div class="col-xs-4">
                            <br>
                            <label>Estrategia de Fornecimento</label>
                            <input name="estrategia" class="form-control" type="text" required="" placeholder="forma de aquisição do objeto" value="licitaçao" >
                        </div>                                

                        <div class="col-xs-2">
                            <br>
                            <label>Preco Objeto</label>
                            <select class="form-control" required="" name="preco"> 
                                <?php include "lista_preco.php" ?>
                            </select>
                        </div>                                                           

                        <div class="col-xs-1">
                            <br>
                            <label>Quantidade</label>
                            <input name="quantidade" class="form-control" type="number" required="" placeholder="0" value="1">
                        </div>

                        <div class="col-xs-12">
                            <br>
                            <label>Especificações </label>
                            <!-- <textarea name="especificacoes" class="form-control" type="text" required="" placeholder="teste" rows="5"> </textarea> -->
                            <select class="form-control" required="" name="especificacoes"> 
                                <?php include "lista_especificacoes.php" ?>
                            </select>
                        </div> 

                    <div class="row">
                        <div class="col-xs-12">
                            <br>
                            <button type="submit" class="btn btn-success btn-block btn-flat">Adicionar na lista</button>
                        </div>
                    </div>                    

                    </form>                   
                </div>
            </div>
        </div>
    </body>

    <footer class="main-footer">
        <?php
        include 'footer.php';
        ?>
    </footer>
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
