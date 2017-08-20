<?php

//incluindo arquivo conexao
    include_once 'conexao.php';
    
//realizando consulta no banco de dados
//     $sql = "SELECT * FROM funcionario";
//     $result = $db->query( $sql );
    
    /*
    Select Nome,uf_descricao as uf,uf_descricao as Localidade 
        From Servidor s inner join UF uf On (s."campo Localidade_codigo" = uf.codigo)
    */
    
//     $sql = "SELECT login_usuario, estado_usuario as usuario, nome_setor as setor 
//                 FROM usuario INNER JOIN setor ON (usuario.id_setor = setor.id_setor)";

//     $sql = "SELECT login_usuario, estado_usuario FROM usuario";
    $sql = "SELECT login_usuario, estado_usuario, nome_setor FROM usuario, setor WHERE usuario.id_setor = setor.id_setor";
    $result = $db->query( $sql );

//criando repeticao para percorrer a tabela
    while ($linha = $result->fetch(PDO::FETCH_ASSOC)) 
    {
        #criando variavel para mostra colunas/linhas
            $visualizar = 
                    "<tr>
                        <td>".""."</td>
                        <td>".$linha['login_usuario']."</td>"."                                   
                        <td>".""."</td>
                        <td>".$linha['nome_setor']."</td>"."                                   
                        <td>".""."</td>
                        <td>".$linha['estado_usuario']."</td>"."            
                        <td>"."</td>
                    </tr>";
                
        #mostrando colunas/linhas
            echo $visualizar;
    }
?>

