<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SAFD | Avaliac. DPDI </title>
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
                    include 'header_diretor.php';
                ?>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <?php
                    include 'menulat_diretor.php';
                ?>
            </aside>


            <!-- =============================================== -->
            <!--FORMULARIO DE BENS-->
            <!--<form onsubmit="alert('Solicitação enviada para avaliação para o DAD!')">-->
            <form>
                <div class="content-wrapper">
                    <section class="content-header">
                        <h4>
                            REQUISIÇÃO DE COMPRA - DIREÇÃO DE PLANEJAMENTO E DESENVOLVIMENTO INSTITUCIONAL
                        </h4>
                        <ol class="breadcrumb">
                            <li><a href=""><i class="fa fa-dashboard"></i> Inicio>Formulário para Solicitação de Bens>Avaliação DPDI</i> </a></li>
                        </ol>
                    </section>

                    <div class="box-footer">
                        <div class="form-group">
                            <label>Seleção de Tipos de Despeja</label>
                            <select multiple="" class="form-control">
                                <option> 1- Contemplado no Planejamento do Exercicio </option>
                                <option> 2- Não Contemplado no Planejamento do Exercicio </option>
                                <option> 3- Contemplado em Projeto Extraorçamentário </option>
                                <option> 3.1- Descentralização </option>
                                <option> 3.2- Convenio </option>
                                <option> 3.3- Acordo de Cooperação Tecnica </option>
                                <option> 3.4- Outros, Especificar8 </option>
                            </select>
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">
                            Eu 
                            <b>
                                <?php echo $_SESSION["usuario"] ?>
                            </b> 
                            autorizo o prosseguimento desta solicitação
                        </label>
                    </div>
                    <div class="col-xs-12">
                        <br>
                        <label>Observações da Avaliação</label>
                        <textarea name="observacoes" class="form-control" required="" rows="2" placeholder="" ></textarea>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-warning pull-right">Enviar para a próxima etapa</button>
                    <button type="submit" class="btn btn-danger pull-left">Interromper pedido do Solicitante</button>
            </form>
        </div>


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
