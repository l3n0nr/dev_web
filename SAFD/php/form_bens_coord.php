<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SAFD | Avaliac. Coord. </title>
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
                include 'header_user.php';
                ?>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <?php
                include 'menulat_user.php';
                ?>
            </aside>


            <!--FORMULARIO DE BENS-->
            <form onsubmit="alert('Solicitação enviada para avaliação para o DPDI!')" action="system_user.php">            
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->

                    <!--          <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">
                                  ×
                                </button>
                                <h4>
                                  <i class="icon fa fa-warning">
                                  </i>
                                  Informações importantes
                                  </h4>-->

                    <section class="content-header">
                        <h4>
                            REQUISIÇÃO DE COMPRA DA DEMANDA X - AVALIAÇÃO DO COORDENADOR DE Y
                        </h4>
                        <ol class="breadcrumb">
                            <li><a href=""><i class="fa fa-dashboard"></i> Inicio>Formulário para Solicitação de Bens </a></li>
                        </ol>
                    </section>

                    <!--PROTOCOLO-->
                    <div class="col-xs-8">
                        <label>Número do Protocolo: </label>
                        <input class="form-control" data-inputmask="&quot;mask&quot;: &quot;99.999.000999/2099-99&quot;" data-mask="" type="text" disabled="">
                    </div>

                    <!--DATA-->
                    <div class="input-group">
                        <div class="col-xs-4">
                            <br>
                            <i class="fa fa-calendar"></i>
                            <input class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="calendar" disabled="">
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
                        <br>
                        <br>
                        <select id="nivel" class="form-control" name="funcao" disabled="">
                            <?php
                            include 'setores.php';
                            ?>
                        </select>
                    </div>

                    <!--REQUISITANTE-->
                    <div class="col-xs-8">
                        <br>
                        <label>Nome do requisitante </label>
                        <input class="form-control" type="text" disabled="">
                    </div>

                    <!--SIAPE-->
                    <div class="col-xs-4">
                        <br>
                        <label>Número do SIAPE </label>
                        <input class="form-control" type="text" disabled="">
                    </div>

                    <div class="col-xs-12">
                        <br>
                        <textarea class="form-control" rows="2" disabled="">Solicitamos a/ao Ordenador(a) de Despesas autorização para instauração de procedimento licitatório para futura aquisição de material/contratação dos serviços(objeto, XXXXX) para (objetivo simplificado, XXXXX) conforme abaixo descritos.</textarea>
                    </div>

                    <br>
                    <div class="col-xs-1">
                        <label>Grupo</label>
                        <input class="form-control" type="number" disabled="">
                    </div>
                    <div class="col-xs-1">
                        <label>Item </label>
                        <input class="form-control" type="number" disabled="">
                    </div>
                    <br>
                    <div class="col-xs-7">
                        <label>Especificações </label>
                        <input class="form-control" type="text" disabled="">
                    </div>
                    <div class="col-xs-1">
                        <label>Quantidade</label>
                        <input class="form-control" type="number" disabled="">
                    </div>
                    <div class="col-xs-1">
                        <label>Média(R$) </label>
                        <input class="form-control" type="text" disabled="">
                    </div>
                    <div class="col-xs-1">
                        <label>Total(R$)</label>
                        <input class="form-control" type="text" disabled="">
                    </div>

                    <!--             
                                  <div id="item" class="item">
                                      <input type="number" id="quant" name="quant" disabled=""/>
                                  </div>
                                  <input type="hidden" id="itemCont" value="1"/>
                                  <input type="button" id="novoProd" value="Novo produto"/>-->

                    <div class="col-xs-12">
                        <label> Justificativa </label>
                        <textarea class="form-control" rows="3" disabled="true">Fundamentação bem elaborada da necessidade de compra, incluindo os motivos e os benefícios que se pretende alcançar com a aquisição.</textarea>
                    </div>

                    <div class="col-xs-12">
                        <label> Especificações técnicas do objeto e local de entrega/necessidade e justificativa pra agrupamento de itens </label>
                        <textarea class="form-control" rows="5" disabled="true">Indicar todos os requisitos desejados para o bem permanente ou material ed consumo que pretende adquirir. com descrições detalhadas, precisas e convincentes, incluindo as caracteristicas especificas. Indicar o(s) local(is) de entrega dos bens. Deverá ser indicado o endereço completo, bairro, CEP, inclusive número da sala ou prédio.</textarea>
                    </div>

                    <div class="col-xs-12">
                        <label>Estratégias de fornecimento, prazo de entrega ou prazo de execução.</label>
                        <textarea class="form-control" rows="5" disabled="true">Indicar o prazo da execução dos serviços e/ou prazo máximo de entrega dos materiais permanente/de consumo. Os materiais deverão ser entregues nos quantitativos e nas localidades indicadas acima no prazo máximo de 30 dias após a emissão do empenho. Os materiais deverão ter prazo de validade mínima de doze meses, contados a partir da data de entrega. Caso algum produto apresente defeito de fabricação quando em uso no decorrer do prazo de validade, o fornecedor deverá efetuar a troca do mesmo em cinco dias úteis, a contar da notificação, sem ônus adicional para o Instituto Federal Farroupilha.</textarea>
                    </div>

                    <div class="col-xs-12">
                        <label>Critérios de Aceitabilidade.</label>
                        <textarea class="form-control" rows="8" disabled="true">Neste campo deverá ser informado de que maneira será realixado o recebimento provisório e o recebimento definitivo com o respectivo prazo. Exemplo 01: na aquisição de um eletroeletrônico o recebimento provisório poderá ser com a simples conferência física do aparelho e o recebimento definitivo, no prazo de XX dias a contar do recebimento provisório, com o teste a fim de verificar se o mesmo está funcionando corretamente. Exemplo 02: na aquisição de material ed consumo o recebimento provisório poderia ser com a conferência da quantidade solicitada e o recebimento definitivo, n no prazo de XX dias a contar do recebimento provisório, com a análise se todos os materiais estão em perfeitas condições de utilização.</textarea>
                    </div>

                    <div class="col-xs-12">
                        <label>Declaração de consulta ao saldo/estoque - Confirmação de Solicitação.</label>
                        <textarea class="form-control" rows="3" disabled="true">Declaro para fins de instauração licitatório, que consultei as áreas pertinentes a estoque e controle de saldo de materiais e serviços e obtive confirmação que os itens pretendidos não encontram-se disponíveis para retirada ou emissão de empenho.</textarea>
                    </div>

                    <div class="col-xs-12">
                        <label>Da veracidade dos orçamentos</label>
                        <textarea class="form-control" rows="3" disabled="true">Venho firmar que os orçamentos que compõe o preço médio acima estipulado, foram por mim realizados e são verdadeiros.</textarea>
                    </div>

                    <div class="col-xs-12">
                        <label> Superior imediato do Requisitante </label>
                        <textarea class="form-control" rows="3"> Coordenação/Departamento/Direção/Pró-reitoria. Estou ciente da solicitação e autorizo o prosseguimento da solicitação.</textarea>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                Eu <b><?php echo $_SESSION["usuario"] ?></b> autorizo o prosseguimento desta solicitação
                            </label>
                            <label> Data:__</label>
                        </div>
                        <!--                    <button type="submit" class="btn btn-danger pull-left">Interromper pedido do Solicitante</button>-->
                        <button type="submit"class="btn btn-success pull-right">Enviar para a próxima etapa</button>
                        <button type="submit" class="btn btn-danger pull-left">Interromper pedido do Solicitante</button>
                    </div>
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
