<?php

//incluindo arquivo conexao
include 'conexao.php';

//$sql = "SELECT id_funcionario, login_usuario, estado_usuario, nome_setor, descricao_funcao FROM usuario, setor, funcao WHERE usuario.id_setor = setor.id_setor AND usuario.id_funcao = funcao.id_funcao AND estado_usuario != 1";
$sql = "SELECT id_funcionario, login_usuario, estado_usuario, nome_setor, descricao_funcao FROM usuario, setor, funcao WHERE usuario.id_setor = setor.id_setor AND usuario.id_funcao = funcao.id_funcao";

// 	$sql = "SELECT id_funcionario, login_usuario, estado_usuario, nome_setor, descricao_funcao, siape_funcionario FROM usuario, setor, funcao, funcionario WHERE usuario.id_setor = setor.id_setor AND usuario.id_funcao = funcao.id_funcao AND funcionario.id_funcionario = usuario.id_funcionario";
$result = mysqli_query($con, $sql);

//criando repeticao para percorrer a tabela
while ($linha = mysqli_fetch_assoc($result))
{
    #criando variavel para mostra colunas/linhas
    $visualizar = "<tr>
                        <td>" . $linha['id_funcionario'] . "</td>" . "
                        <td>" . $linha['siape_funcionario'] . "</td>" . "
                        <td>" . $linha['login_usuario'] . "</td>" . "
                        <td>" . $linha['nome_setor'] . "</td>" . "
                        <td>" . $linha['descricao_funcao'] . "</td>" . "
                        <td>" . $linha['estado_usuario'] . "</td>" . "
                    </tr>";

    #mostrando colunas/linhas
    echo $visualizar;
}
?>
