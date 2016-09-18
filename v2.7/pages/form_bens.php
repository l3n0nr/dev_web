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

        <div class="form-group">
          <textarea class="form-control" rows="2">Solicitamos a/ao Ordenador(a) de Despesas autorização para instauração de procedimento licitatório para futura aquisição de material/contratação dos serviços(objeto, XXXXX) para (objetivo simplificado, XXXXX) conforme abaixo descritos.</textarea>
        </div>

        <label>TABELA DOS MATERIAIS AQUI!!</label>

        <div class="form-group">
          <label> Justificativa </label>
          <textarea class="form-control" rows="3">Fundamentação bem elaborada da necessidade de compra, incluindo os motivos e os benefícios que se pretende alcançar com a aquisição.</textarea>
        </div>

        <div class="form-group">
          <label> Especificações técnicas do objeto e local de entrega/necessidade e justificativa pra agrupamento de itens </label>
          <textarea class="form-control" rows="5">Indicar todos os requisitos desejados para o bem permanente ou material ed consumo que pretende adquirir. com descrições detalhadas, precisas e convincentes, incluindo as caracteristicas especificas. Indicar o(s) local(is) de entrega dos bens. Deverá ser indicado o endereço completo, bairro, CEP, inclusive número da sala ou prédio.</textarea>
        </div>

        <div class="form-group">
          <label>Estratégias de fornecimento, prazo de entrega ou prazo de execução.</label>
          <textarea class="form-control" rows="5">Indicar o prazo da execução dos serviços e/ou prazo máximo de entrega dos materiais permanente/de consumo. Os materiais deverão ser entregues nos quantitativos e nas localidades indicadas acima no prazo máximo de 30 dias após a emissão do empenho. Os materiais deverão ter prazo de validade mínima de doze meses, contados a partir da data de entrega. Caso algum produto apresente defeito de fabricação quando em uso no decorrer do prazo de validade, o fornecedor deverá efetuar a troca do mesmo em cinco dias úteis, a contar da notificação, sem ônus adicional para o Instituto Federal Farroupilha.</textarea>
        </div>

        <div class="form-group">
          <label>Critérios de Aceitabilidade.</label>
          <textarea class="form-control" rows="8">Neste campo deverá ser informado de que maneira será realixado o recebimento provisório e o recebimento definitivo com o respectivo prazo. Exemplo 01: na aquisição de um eletroeletrônico o recebimento provisório poderá ser com a simples conferência física do aparelho e o recebimento definitivo, no prazo de XX dias a contar do recebimento provisório, com o teste a fim de verificar se o mesmo está funcionando corretamente. Exemplo 02: na aquisição de material ed consumo o recebimento provisório poderia ser com a conferência da quantidade solicitada e o recebimento definitivo, n no prazo de XX dias a contar do recebimento provisório, com a análise se todos os materiais estão em perfeitas condições de utilização.</textarea>
        </div>

        <div class="form-group">
          <label>Declaração de consulta ao saldo/estoque - Confirmação de Solicitação.</label>
          <textarea class="form-control" rows="3">Declaro para fins de instauração licitatório, que consultei as áreas pertinentes a estoque e controle de saldo de materiais e serviços e obtive confirmação que os itens pretendidos não encontram-se disponíveis para retirada ou emissão de empenho.</textarea>
        </div>

        <div class="form-group">
          <label>Da veracidade dos orçamentos</label>
          <textarea class="form-control" rows="3">Venho firmar que os orçamentos que compõe o preço médio acima estipulado, foram por mim realizados e são verdadeiros.</textarea>
        </div>

        <!--SIAPE-->
        <div class="box-footer">
          <button type="submit" class="btn btn-success" disabled="">Salvar</button>
          <button type="submit" class="btn btn-warning pull-right">Enviar para Avaliação</button>
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
