<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SAFD | Visual. User </title>
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
    <body class="hold-transition skin-green sidebar-collapse sidebar-mini">
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
                    <div class="dataTables_length" id="example1_length">
                        <label>
                            <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                <option value="2"> Listando Todos Usuários </option>
                                <option value="1"> Listando apenas Usuários Ativos </option>
                                <option value="0"> Listando apenas Usuários Desativados </option>
                            </select>
                        </label>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href=""><i class="fa fa-dashboard"></i> Inicio> Visualizando usuários do sistema </a></li>
                    </ol>
                    <!--</br>-->
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <!--<div class="box-header">
                                  <h3 class="box-title">Visualizando usuários</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                        <div class="row">
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-3"></div>
                                        </div><div class="row">
                                            <div class="col-sm-12">
                                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                    <thead>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                        SIAPE
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                        NOME
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                        SETOR
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                        FUNÇÃO
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                        DATA/HORA CADASTRO
                                                    </th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            include 'visualiza_usuarios.php';
                                                        ?>
                                                    </tbody>
                                                </table>
                                                <td>
                                                <!-- <div class="col-sm-4"> -->
                                                <!-- <div class="col-sm-4">
    >>>>>>> ff0da378a0b671f01036ca609f178ae1be197d1e
                                                    <div class="col-sm-6">
                                                        <form action="p_visualiza_usuarios.php">
                                                            <br>
                                                            <br>
                                                            <button type="submit" class="btn btn-sucess pull-right"> Atualizar lista </button>
                                                        </form>
                                                    </div>
    <<<<<<< HEAD
                                                <!-- </div> -->
                                                </div>
                                                <td>
                                                </td>
                                            </div>
                                        </div>
                                        </section>
                                    </div><!-- /.content-wrapper -->
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
