<?php

//incluindo arquivo conexao
include 'conexao.php';

$sql = "SELECT nome_funcionario, nome_objeto, nome_setor, data_solicitacao, descricao_status
        FROM funcionario, objeto, solicitacao, setor, usuario, solicitacao_itens, status
        WHERE usuario.id_usuario = solicitacao.id_usuario 
        AND usuario.id_setor = setor.id_setor 
        AND usuario.id_funcionario = funcionario.id_funcionario 
        AND solicitacao_itens.id_solicitacao = solicitacao.id_solicitacao
        AND solicitacao_itens.id_objeto = objeto.id_objeto
        AND solicitacao.id_status = status.id_status";

$result = mysqli_query($con, $sql);

//criando repeticao para percorrer a tabela
while ($linha = mysqli_fetch_assoc($result))
{
    #criando variavel para mostra colunas/linhas
    $visualizar = "<tr>
                        <td>" . $linha['nome_funcionario'] . "</td>" . "
                        <td>" . $linha['nome_setor'] . "</td>" . "
                        <td>" . $linha['nome_objeto'] . "</td>" . "
                        <td>" . $linha['data_solicitacao'] . "</td>" . "
                        <td>" . $linha['descricao_status'] . "</td>" . "
                    </tr>";

    #mostrando colunas/linhas
    echo $visualizar;
}
?>
