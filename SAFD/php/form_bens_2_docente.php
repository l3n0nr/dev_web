<?php
    # incluindo arquivo de conexao
    include 'conexao.php';
    include 'valida_sessao.php';

    # recebendo dados do formulario
    $observacoes = $_POST['observacoes'];
    $justificativa = $_POST['justificativa'];
    $especificacoes = $_POST['especificacoes'];
    $estrategia = $_POST['estrategia'];
    $criterio = $_POST['criterio'];
    $declaracao = $_POST['declaracao'];
    $veracidade = $_POST['veracidade'];    

    # verificando se variaveis estao vazias
    // if (isset($observacoes) 
    //     AND isset($justificativa) 
    //     AND isset($especificacoes) 
    //     AND isset($estrategia) 
    //     AND isset($criterio) 
    //     AND isset($declaracao) 
    //     AND isset($veracidade)) 
    // {
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

		echo $ultima_avaliacao;

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

		echo $usuario_sessao;

   		# montando consulta SQL - adicionando solicitacao - agora sim
   		$sql = "INSERT INTO solicitacao(numeroprotocolo_solicitacao, justificativa_solicitacao, criterio_aceitabilidade, consulta_estoque, id_usuario, id_status, id_avaliacaodpdi, id_avaliacaodad, id_avaliacaocoord, id_avaliacaodg) 
    			VALUES ("","","","", $usuario_sessao, 1, $ultima_avaliacao, $ultima_avaliacao, $ultima_avaliacao, $ultima_avaliacao);"

   		echo $sql;
    // }s
    // else
    // {
    // 	echo "teste";
    // }

?>


