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
    <body class="hold-transition skin-green layout-boxed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <header class="main-header" >
        <?php
          include 'header.php';
        ?>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <?php
        include 'menulat.php';
      ?>
    </aside>


      <!-- =============================================== -->
      <!--FORMULARIO DE BENS-->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">
            ×
          </button>
          <h4>
            <i class="icon fa fa-warning">
            </i>
            Informações importantes
            </h4>
            bla bla bla
        </div>
        
        <section class="content-header">
          <h4>
            REQUISIÇÃO DE COMPRA - BENS
          </h4>
          <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Inicio>Formulário para Solicitação de Bens </a></li>
          </ol>
        </section>

        <!--PROTOCOLO-->
        <div class="col-xs-8">
          <br>
          <label>Número do Protocolo: </label>
          <input class="form-control" data-inputmask="&quot;mask&quot;: &quot;99.999.000999/2099-99&quot;" data-mask="" type="text" disabled="">
        </div>

        <!--DATA-->
        <div class="input-group">
          <div class="col-xs-4">
            <br>
            <i class="fa fa-calendar"></i>
            <input class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text">
          </div>
        </div>

        <!--IFF-->
        <div class="col-xs-8">
          <br>
          <label>Campus/Unidade</label>
          <input class="form-control" placeholder="Reitoria/Campus Alegrete" disabled="" type="text">
        </div>

        <!--SETORES-->
        <div class="col-xs-4">
          <br><label>Selecione o setor, que você trabalha</label>
          <select class="form-control">
            <option>Direção Geral</option>
            <option>Direção de Administração</option>
            <option>Direção de Ensino</option>
            <option>Direção de Planejamento e Desenvolvimento Institucional</option>
            <option>Direção de Pesquisa, Extensão e Produção</option>
          </select>
        </div>
        
        <!--REQUISITANTE-->
        <div class="col-xs-8">
          <br>
          <label>Nome do requisitante </label>
          <input class="form-control" type="text">
        </div>
        
        <!--SIAPE-->
        <div class="col-xs-4">
          <br>
          <label>Número do SIAPE </label>
          <input class="form-control" type="text">
        </div>
        
        <!--SIAPE-->
        <div class="col-xs-12">
          <br>
          <label>Objeto </label>
          <input class="form-control" type="text">
        </div>	
        
        
        <!--SIAPE-->
        <div class="col-xs-1">
         <br>
        	<button>
        	 <label> Enviar para a próxima etapa</label>           
        	</button>          
        </div>	

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