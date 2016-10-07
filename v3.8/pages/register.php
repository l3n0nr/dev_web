<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAFD - Registro</title>
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
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href=""> Sistema de Acompanhamento do Fluxo de Demandas<br>(SAFD)</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Cadastra-se para acessar o sistema</p>
        <form action="cadastra_usuario.php" method="post" >
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Nome Completo">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="E-mail" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <select id="setor" class="form-control" name="setor">
              <option value=""> Setor </option>
              <option value=""> DG </option>
              <option value=""> Gabinete </option>
              <option value=""> -- </option>

              <option value=""> DAD </option>
              <option value=""> Infraestrutura </option>
              <option value=""> Orçamento e Finanças </option>
              <option value=""> Licitações e Contratos </option>
              <option value=""> Patrimonio </option>
              <option value=""> -- </option>

              <option value=""> DE </option>
              <option value=""> Assistência Estudantil </option>
              <option value=""> Apoio Pedagógico </option>
              <option value=""> Centro de Saude </option>
              <option value=""> Secretaria </option>
              <option value=""> -- </option>

              <option value=""> DPDI </option>
              <option value=""> Tecnologia da Informação </option>
              <option value=""> Gestão de Pessoas </option>
              <option value=""> Protocolo </option>
              <option value=""> -- </option>

              <option value=""> DPEP </option>
              <option value=""> Extensão </option>
              <option value=""> Pesquisa </option>
              <option value=""> Produção </option>

            </select>
          </div>

          <div class="form-group has-feedback">
          	<select id="nivel" class="form-control" name="funcao">
            	<option value="0"> Função </option>
            	<option value="1"> Diretor </option>
            	<option value="2"> Coordenador </option>
              <option value="3"> Chefe </option>
              <option value="4"> Outro </option>
          	</select>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Login" name="login">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Senha" name="senha">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Confirme a senha">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Li os <a href="termos.php"> termos </a> e aceito </input>
                </label>
              </div>
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="../pages/login.php" class="text-center">Acho que já tenho cadastro, quero voltar a página de login.</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
