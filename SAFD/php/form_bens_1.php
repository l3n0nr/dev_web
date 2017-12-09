<?php
    # incluindo arquivo de conexao
    include 'conexao.php';
    include 'valida_sessao.php';
    
    // include 'form_bens_1';
    include 'form_bens_1_docente';
    include 'form_bens_1_tae';

    // include 'form_bens_2_docente';
    // include 'form_bens_2_tae';

    // include 'adiciona_objeto';

    # recebendo dados do formulario
    $item = $_POST['item'];
    $estrategia = $_POST['estrategia'];
    $especificacoes = $_POST['especificacoes'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $observacoes = $_POST['observacoes'];
    $justificativa = $_POST['justificativa'];
    $especificacoes = $_POST['especificacoes'];
    $estrategia = $_POST['estrategia'];
    $criterio = $_POST['criterio'];
    $declaracao = $_POST['declaracao'];
    $veracidade = $_POST['veracidade']; 

    # verificando se variaveis estao vazias
    if (isset($item) 
        // AND isset($estrategia) 
        // AND isset($especificacoes) 
        // AND isset($preco)
        AND isset($quantidade)

        AND isset($observacoes) 
        AND isset($justificativa) 
        AND isset($especificacoes) 
        AND isset($estrategia) 
        AND isset($criterio) 
        AND isset($declaracao) 
        AND isset($veracidade))         
    {

<<<<<<< HEAD
        // // echo $item;
        // // echo $estrategia;
        // // echo $especificacoes;
        // // echo $preco;
        // // echo $quantidade;

        // # montando consulta SQL - ADICIONANDO OBJETO
        // $sql = "
        //     SELECT id_objeto FROM objeto 
        //     WHERE nome_objeto='$item';";

        //  // INSERT INTO objeto(nome_objeto)
        //          // -- VALUES('$item') ORDER BY `objeto`.`id_objeto` limit 1";

        // // echo $sql;

        // // preparando variavel
        // $result = mysqli_query($con, $sql);

        // // capturando valor funcao usuario
        // while($res = mysqli_fetch_assoc($result))
        // {
        //     $objeto = $res['id_objeto'];
        // }

        // // echo "teste: " . $objeto;

        // // realizando inserção da tabela objeto
        // if ($objeto)
        // {
        //     // echo "funcionou!";

        //     echo ("<script>alert('Objeto selecionado com sucesso!'); 
        //             location.href='';</script>");

        //     // echo "funcionou";

        //     // SEGUNDA INSERÇAO - ADICIONANDO AVALIACOES
        //     // $sql = "INSERT INTO avaliacao_dad(recursos_avaliacaodad, comentarios_avaliacaodad, valorestimadodespesa_avaliacaodad, id_status, id_tipodespesa)    
        //     //         VALUES("", "", 0, 1, 1)";

        //     // // realizando inserção na tabela - avaliacao dad 
        //     // if(mysqli_query($con, $sql))
        //     // {   
        //     //     echo "teste";
        //     // }
        // }
        // else
        // {
        //     echo ("<script>alert('ERRO!'); location.href='';</script>");
        // }
    }    
?>
=======
            // echo $item;
            // echo $estrategia;
            // echo $especificacoes;
            // echo $preco;
            // echo $quantidade;

            # montando consulta SQL - ADICIONANDO OBJETO
            $sql = "SELECT id_objeto FROM objeto WHERE nome_objeto='$item';";

             // INSERT INTO objeto(nome_objeto)
                     // -- VALUES('$item') ORDER BY `objeto`.`id_objeto` limit 1";

            // echo $sql;

            // preparando variavel
            $result = mysqli_query($con, $sql);

            // capturando valor funcao usuario
            while($res = mysqli_fetch_assoc($result))
            {
                $objeto = $res['id_objeto'];
            }

            // echo "teste: " . $objeto;

            // realizando inserção da tabela objeto
            if ($objeto)
            {
                // echo "funcionou!";

                echo ("<script>alert('Solicitaçao adicionado com sucesso!'); 
                        location.href='';</script>");

                // echo "funcionou";

                // SEGUNDA INSERÇAO - ADICIONANDO AVALIACOES
                // $sql = "INSERT INTO avaliacao_dad(recursos_avaliacaodad, comentarios_avaliacaodad, valorestimadodespesa_avaliacaodad, id_status, id_tipodespesa)    
                //         VALUES("", "", 0, 1, 1)";

                // // realizando inserção na tabela - avaliacao dad 
                // if(mysqli_query($con, $sql))
                // {   
                //     echo "teste";
                // }
            }
            else
            {
                echo ("<script>alert('ERRO OBJETO!'); location.href='';</script>");
            }      

        # criando avaliacoes automaticamente   
        # avaliacao_dad
        $sql = "INSERT INTO avaliacao_dad(recursos_avaliacaodad, comentarios_avaliacaodad, valorestimadodespesa_avaliacaodad, id_status, id_tipodespesa)    
                VALUES('', '', 0, 1, 1)";

        if(mysqli_query($con, $sql))
        {
            // echo "teste 1";
        }
        else
        {
            echo "Erro tabela avaliacao_dad";
        }

        # avaliacao_dg
        $sql = "INSERT INTO avaliacao_dg(resposta_avaliacaodg, observacao_avaliacaodg, id_status)
                VALUES('', '', 1);";

        if(mysqli_query($con, $sql))
        {
            // echo "teste 2";
        }
        else
        {
            echo "Erro tabela avaliacao_dg";
        }

        # avaliacao_dpdi
        $sql = "INSERT INTO avaliacao_dpdi(comentarios_avaliacaodpdi, planejamentoexercicio_avaliacaodpdi, id_status, id_unidadegestora)
                VALUES('', '', 1, 1)";

        if(mysqli_query($con, $sql))
        {
            // echo "teste 3";
        }
        else
        {
            echo "Erro tabela avaliacao_dpdi";
        }

        # avaliacao_coord
        $sql = "INSERT INTO avaliacao_coord(resposta_avaliacaocoord, observacao_avaliacaocoord, id_status)
                VALUES('', '', 1);";

        if(mysqli_query($con, $sql))
        {
            // echo "teste 4";
        }
        else
        {
            echo "Erro tabela avaliacao_coord";
        }   

        # consultando ultima avaliacao cadastrada 
        $avaliacao = "SELECT id_avaliacaodad FROM avaliacao_dad ORDER BY id_avaliacaodad DESC limit 1";

        // preparando variavel
        $result = mysqli_query($con, $avaliacao);

        // capturando valor funcao usuario
        while($res = mysqli_fetch_assoc($result))
        {
            $ultima_avaliacao = $res['id_avaliacaodad'];
        }

        // echo $ultima_avaliacao;

        $sessao = $_SESSION["usuario"];

        # consultando usuario do sistema
        $usuario = "SELECT id_usuario FROM usuario 
                    WHERE login_usuario = '$sessao';";

        // echo $usuario;

        // preparando variavel
        $result = mysqli_query($con, $usuario);

        // capturando valor funcao usuario
        while($res = mysqli_fetch_assoc($result))
        {
            $usuario_sessao = $res['id_usuario'];
        }

        // echo $usuario_sessao;

        # montando instrucao SQL - adicionando solicitacao - agora sim
        $sql = "INSERT INTO solicitacao(numeroprotocolo_solicitacao, justificativa_solicitacao, criterio_aceitabilidade, consulta_estoque, id_usuario, id_status, id_avaliacaodpdi, id_avaliacaodad, id_avaliacaocoord, id_avaliacaodg) 
                VALUES ('00000','$justificativa','$criterio','$declaracao', '$usuario_sessao', 1, '$ultima_avaliacao', '$ultima_avaliacao', '$ultima_avaliacao', '$ultima_avaliacao');";

        // echo $sql;

        # cadastrando nova solicitacao
        if(mysqli_query($con, $sql))
        {
            // echo "Solicitacao cadastrada com sucesso!";
        }
        else
        {
            echo "Erro tabela avaliacao_coord";
        }    

        # consultando ultima solicitacao cadastrada 
        $solicitacao = "SELECT id_solicitacao FROM solicitacao ORDER BY id_solicitacao DESC limit 1";

        // preparando variavel
        $result = mysqli_query($con, $solicitacao);

        // capturando valor funcao usuario
        while($res = mysqli_fetch_assoc($result))
        {
            $ultima_solicitacao = $res['id_solicitacao'];
        }

        // echo $ultima_solicitacao;     

        # consultando objetos cadastrados pelo usuario X[VERIFICAR]  
        # existem duas opções possiveis
        # ou, cria-se um campo dentro de tabela com o id_usuario para fazer uma referencia
        # ou, cadastra-se apenas o ultimo objeto listado

        // $objeto = "SELECT id_objeto FROM objeto ORDER BY id_objeto DESC limit 1";

        // $objeto = "SELECT id_objeto FROM objeto WHERE nome_objeto='$item'";

        // // $objeto = 

        // // preparando variavel
        // $result = mysqli_query($con, $objeto);

        // // capturando valor objeto
        // while($res = mysqli_fetch_assoc($result))
        // {
        //     $ultimo_objeto = $res['id_objeto'];
        // }

        // echo $ultimo_objeto;     

        # montando instrucao SQL - solicitacao itens
        $sql = "INSERT INTO solicitacao_itens(quantidade_objeto, prazoentrega_objeto, prazoexecucao_objeto, id_solicitacao, id_objeto) 
                VALUES ('0','','', $ultima_solicitacao, '$objeto');";

        // echo $sql;

        // # cadastrando nova solicitacao-item
        if(mysqli_query($con, $sql))
        {
            // echo "Solicitacao cadastrada com sucesso!";

            # mostra mensagem e redireciona pagina
            // echo ("<script>alert('Solicitacao adicionada com sucesso!'); location.href='form_bens_2_docente.php';</script>");

            // echo ("<script>alert('Solicitacao adicionada com sucesso!'); location.href='';</script>");
        }
        else
        {
            echo ("<script>alert('ERRO SOLICITACAO! '); location.href='';</script>");
        }  
    }

?>
>>>>>>> d155db68a3a8a0dbe3b7706c11a5507780d5c70a
