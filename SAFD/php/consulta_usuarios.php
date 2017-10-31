<?php

//incluindo arquivo conexao
    include 'conexao.php';
    
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
//     $sql = "SELECT login_usuario, estado_usuario, nome_setor FROM usuario, setor WHERE usuario.id_setor = setor.id_setor";
    $sql = "SELECT id_funcionario, login_usuario, estado_usuario, nome_setor, descricao_funcao FROM usuario, setor, funcao WHERE usuario.id_setor = setor.id_setor AND usuario.id_funcao = funcao.id_funcao ";
//     $sql = "SELECT * FROM usuario";
    
//     $result = mysqli_query($sql);
    $result = $con->query($sql);

//criando repeticao para percorrer a tabela
//     while ($linha = $result->fetch(PDO::FETCH_ASSOC)) 
    while($linha= mysql_fetch_array($result))
    {
        #criando variavel para mostra colunas/linhas
            $visualizar = 
                    "<tr>
                        <td>".$linha['id_funcionario']."</td>"."                                   
                        <td>".$linha['login_usuario']."</td>"."                                   
                        <td>".$linha['nome_setor']."</td>"."                                   
                        <td>".$linha['descricao_funcao']."</td>"."                                   
                        <td>".$linha['estado_usuario']."</td>"."            
                    </tr>";
                
        #mostrando colunas/linhas
            echo $visualizar;
    }
?>

