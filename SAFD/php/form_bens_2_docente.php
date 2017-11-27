<?php
    # incluindo arquivo de conexao
    include 'conexao.php';

    # recebendo dados do formulario
    // $observacoes = $_POST['observacoes'];
    // $justificativa = $_POST['justificativa'];
    // $especificacoes = $_POST['especificacoes'];
    // $estrategia = $_POST['estrategia'];
    // $criterio = $_POST['criterio'];
    // $declaracao = $_POST['declaracao'];
    // $veracidade = $_POST['veracidade'];

    # montando consulta SQL - ADICIONANDO OBJETO
    # $sql = "INSERT INTO solicitacao(nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto, id_grupo)
            // VALUES('$item', '$especificacoes', '$estrategia', '$preco', 1)";

    // # verificando se variaveis estao vazias
    // if (isset($observacoes) 
    //     AND isset($justificativa) 
    //     AND isset($especificacoes) 
    //     AND isset($estrategia) 
    //     AND isset($criterio) 
    //     AND isset($declaracao) 
    //     AND isset($veracidade)) 
    // {

    # criando avaliacoes automaticamente
    $sql = "INSERT INTO avaliacao_dad(recursos_avaliacaodad, comentarios_avaliacaodad. valorestimadodespesa_avaliacaodad, id_status, id_tipodespesa) 
     		VALUES('vazio', 'vazio', 0, 1, 1);";

    $sql .= "INSERT INTO avaliacao_dg(resposta_avaliacaodg, observacao_avaliacaodg, id_status)
            VALUES('', '', 1);";

    $sql .= "INSERT INTO avaliacao_dpdi(comentarios_avaliacaodpdi, planejamentoexercicio_avaliacaodpdi, id_status, id_unidadegestora)
    		VALUES('', '', 1, 1);";

	$sql .= "INSERT INTO avaliacao_coord(resposta_avaliacaocoord, observacao_avaliacaocoord, id_status)
			VALUES('', '', 1);";

    	echo $sql;

        // realizando inserção nas tabelas
        if(mysqli_query($con, $sql))
        {
        	# mostra mensagem e redireciona pagina
            // echo ("<script>alert('Alguns dados dessa solicitacao foram adicionados automaticamente!'); location.href='form_bens_2_docente.php';</script>");

            echo "funcionou!";

            // // // SEGUNDA INSERÇAO - ADICIONANDO AVALIACOES
            // // $sql = "INSERT INTO avaliacao_dad(recursos_avaliacaodad, comentarios_avaliacaodad, valorestimadodespesa_avaliacaodad, id_status, id_tipodespesa)    
            // //         VALUES("", "", 0, 1, 1)";

            // // // // realizando inserção na tabela - avaliacao dad 
            // // if(mysqli_query($con, $sql))
            // // {   
            // //     echo "teste";
            // // }

            // # mostra mensagem e redireciona pagina
            // echo ("<script>alert('Objeto adicionado com sucesso!'); location.href='form_bens_obj_docente.php';</script>");
        }
    // }
?>


