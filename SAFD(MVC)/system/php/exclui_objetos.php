<?php

	//incluindo arquivo conexao
	include 'conexao.php';

	//$sql = "SELECT id_funcionario, login_usuario, estado_usuario, nome_setor, descricao_funcao FROM usuario, setor, funcao WHERE usuario.id_setor = setor.id_setor AND usuario.id_funcao = funcao.id_funcao AND estado_usuario != 1";
	$sql = "SELECT nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto FROM objeto";

	$result = mysqli_query($con, $sql);

	//criando repeticao para percorrer a tabela
	while ($linha = mysqli_fetch_assoc($result))
	{
	    #criando variavel para mostra colunas/linhas
	    $visualizar = "<tr>
	                        <td>" . $linha['nome_objeto'] . "</td>" . "
	                        <td>" . $linha['estrategiafornecimento_objeto'] . "</td>" . "
	                        <td>" . $linha['especificacoestecnicas_objeto'] . "</td>" . "
	                        <td>" . $linha['preco_objeto'] . "</td>" . "
	                    </tr>";

	    #mostrando colunas/linhas
	    echo $visualizar;
	}

?>

