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

            <!-- =============================================== -->
            <!--FORMULARIO DE BENS-->
            <!--             <form onsubmit="alert('Solicitação enviada para avaliação do seu coordenador!')" action="system.php"> -->
            <form action="gera_documento.php" method="post">
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
                        <!--<label> - Alguns campos serão preenchidos automaticamente pelo sistema. </label>-->
                        <!--<br>-->
                        <label> - É necessário que todos os outros campos, sejam preenchidos! </label>
                    </div>

                    <section class="content-header">
                        <h4>
                            REQUISIÇÃO DE COMPRA - SOLICITAÇÃO DE BENS
                        </h4>

                        <ol class="breadcrumb">
                            <li><a href=""><i class="fa fa-dashboard"></i> Inicio>Formulário para Solicitação de Bens </a></li>
                        </ol>
                    </section>

                    <!--PROTOCOLO-->
                    <div class="col-xs-8">
                        <!--                         <br> -->
                        <label>Número do Protocolo: </label>
                        <input class="form-control" min="1" max="10" data-inputmask="&quot;mask&quot;: &quot;99.999.000999/2099-99&quot;" data-mask="" type="text" disabled="" placeholder="***GERADO AUTOMATICAMENTE***">
                    </div>

                    <!--DATA-->
                    <div class="input-group">
                        <!--                         <br> -->
                        <div class="col-xs-4">
                            <label> Data </label>
                            <!--<i class="fa fa-calendar"></i>-->
                            <input class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="calendar" disabled="" placeholder="***PEGAR DA TABELA AUTOMATICAMENTE***">
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
                        <label>Selecione o setor, que você trabalha</label>
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
                        <input  class="form-control"
                                value="
                                <?php
                                    echo $_SESSION["usuario"]
                                    // $funcionario = "SELECT nome_funcionario FROM usuario, funcionario WHERE funcionario.id_funcionario=usuario.id_funcionario AND usuario.login_usuario = "lenon";"
                                    // $result = mysqli_query($con, $sql);
                                    //
                                    // // capturando valor funcao usuario
                                    // while($res = mysqli_fetch_assoc($result))
                                    // {
                                    //     $ultimo_funcionario = $res['nome_funcionario'];
                                    // }
                                    //
                                    // echo $nome_funcionario;
                                ?>
                                "
                                placeholder="***PEGAR DA TABELA AUTOMATICAMENTE***" disabled="" type="text">
                                <!-- verificar forma de capturar nome_funcionario, siape  -->
                                <!-- SELECT nome_funcionario FROM usuario, funcionario WHERE funcionario.id_funcionario=usuario.id_funcionario AND usuario.login_usuario = "lenon"; -->
                    </div>

                    <!--SIAPE-->
                    <div class="col-xs-4">
                        <br>
                        <label>Número do SIAPE </label>
                        <input class="form-control" placeholder="***PEGAR DA TABELA AUTOMATICAMENTE***" disabled="" type="text">
                    </div>

                    <div class="col-xs-12">
                        <br>
                        <label>Observações</label>
                        <textarea id="observacoes" class="form-control" rows="2" placeholder="Solicitamos a/ao Ordenador(a) de Despesas autorização para instauração de procedimento licitatório para futura aquisição de material/contratação dos serviços(objeto, XXXXX) para (objetivo simplificado, XXXXX) conforme abaixo descritos." ></textarea>
                    </div>

                    <hr>
                    <div class="col-xs-1">
                        <br>
                        <label>Grupo</label>
                        <input id="grupo" class="form-control" type="number" placeholder="0">
                    </div>

                    <div class="col-xs-2">
                        <br>
                        <label>Item </label>
                        <!--<input class="form-control" type="number">-->
                        <select id="nivel" class="form-control" name="funcao">
                            <option value="canetas"> Canetas </option>
                            <option value="lapis"> Lapis </option>
                        </select>


<!--<input class="select2-search__field" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Select a State" style="width: 519px;" type="search"></li></ul></span>-->

<!--<span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-k5k9-container"><span class="select2-selection__rendered" id="select2-k5k9-container" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->

                    </div>

                    <div class="col-xs-6">
                        <br>
                        <label>Especificações </label>
                        <input class="form-control" type="text">
                    </div>

                    <div class="col-xs-1">
                        <br>
                        <label>Quantidade</label>
                        <input class="form-control" type="number" placeholder="0">
                    </div>

                    <!--
                    <div class="col-xs-1">
                        <br>
                        <label>Média(R$) </label>
                        <input class="form-control" type="text">
                    </div>

                    <div class="col-xs-1">
                        <br>
                        <label>Total(R$)</label>
                        <input class="form-control" type="text">
                    </div>

                    <div id="item" class="item">
                        <input type="number" id="quant" name="quant"/>
                    </div>
                    <input type="hidden" id="itemCont" value="1"/>
                    <input type="button" id="novoProd" value="Novo produto"/>-->

                    <div class="col-xs-2">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-sucess pull-right"> Adicionar na lista </button>
                    </div>

                    <div class="col-xs-12">
                        <div class="box-body">
                            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                Grupo
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                Item
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                Especificações
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                Quantidade
                                            </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>".."</td>
                                                    <td>".."</td>
                                                    <td>".."</td>
                                                    <td>".."</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--<td> </td>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <br>
                        <label> Justificativa </label>
                        <textarea class="form-control" rows="3" placeholder="Fundamentação bem elaborada da necessidade de compra, incluindo os motivos e os benefícios que se pretende alcançar com a aquisição." ></textarea>
                    </div>

                    <div class="col-xs-12">
                        <br>
                        <label> Especificações técnicas do objeto e local de entrega/necessidade e justificativa pra agrupamento de itens </label>
                        <textarea class="form-control" rows="5" placeholder="Indicar todos os requisitos desejados para o bem permanente ou material ed consumo que pretende adquirir. com descrições detalhadas, precisas e convincentes, incluindo as caracteristicas especificas. Indicar o(s) local(is) de entrega dos bens. Deverá ser indicado o endereço completo, bairro, CEP, inclusive número da sala ou prédio."></textarea>
                    </div>

                    <div class="col-xs-12">
                        <br>
                        <label>Estratégias de fornecimento, prazo de entrega ou prazo de execução.</label>
                        <textarea class="form-control" rows="5" placeholder="Indicar o prazo da execução dos serviços e/ou prazo máximo de entrega dos materiais permanente/de consumo. Os materiais deverão ser entregues nos quantitativos e nas localidades indicadas acima no prazo máximo de 30 dias após a emissão do empenho. Os materiais deverão ter prazo de validade mínima de doze meses, contados a partir da data de entrega. Caso algum produto apresente defeito de fabricação quando em uso no decorrer do prazo de validade, o fornecedor deverá efetuar a troca do mesmo em cinco dias úteis, a contar da notificação, sem ônus adicional para o Instituto Federal Farroupilha."></textarea>
                    </div>

                    <div class="col-xs-12">
                        <br>
                        <label>Critérios de Aceitabilidade.</label>
                        <textarea class="form-control" rows="8" placeholder="Neste campo deverá ser informado de que maneira será realixado o recebimento provisório e o recebimento definitivo com o respectivo prazo. Exemplo 01: na aquisição de um eletroeletrônico o recebimento provisório poderá ser com a simples conferência física do aparelho e o recebimento definitivo, no prazo de XX dias a contar do recebimento provisório, com o teste a fim de verificar se o mesmo está funcionando corretamente. Exemplo 02: na aquisição de material ed consumo o recebimento provisório poderia ser com a conferência da quantidade solicitada e o recebimento definitivo, n no prazo de XX dias a contar do recebimento provisório, com a análise se todos os materiais estão em perfeitas condições de utilização."></textarea>
                    </div>

                    <div class="col-xs-12">
                        <br>
                        <label>Declaração de consulta ao saldo/estoque - Confirmação de Solicitação.</label>
                        <textarea class="form-control" rows="3" placeholder="Declaro para fins de instauração licitatório, que consultei as áreas pertinentes a estoque e controle de saldo de materiais e serviços e obtive confirmação que os itens pretendidos não encontram-se disponíveis para retirada ou emissão de empenho."> </textarea>
                    </div>

                    <div class="col-xs-12">
                        <br>
                        <label>Da veracidade dos orçamentos</label>
                        <textarea class="form-control" rows="3" placeholder="Venho firmar que os orçamentos que compõe o preço médio acima estipulado, foram por mim realizados e são verdadeiros."></textarea>
                    </div>

                    <!--SIAPE-->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-warning pull-right">Enviar para Avaliação</button>
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
