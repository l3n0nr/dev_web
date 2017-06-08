<?php
//conectando servidor
    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_USER', 'lenonr' );
    define( 'MYSQL_PASSWORD', ' ' );
    define( 'MYSQL_DB_NAME', 'safd' );

//incluindo arquivo conexao
    include_once 'conexao.php';
    
//realizando consulta no banco de dados
    $sql = "SELECT * FROM funcionario";
    $result = $PDO->query( $sql );

//criando repeticao para percorrer a tabela
    while ($linha = $result->fetch(PDO::FETCH_ASSOC)) 
    {
        #criando variavel para mostra colunas/linhas
            $visualizar = 
                    "<tr>
                        <td>".$linha['siape_funcionario']."</td>"."                                   
                        <td>".$linha['nome_funcionario']."</td>"."            
                        <td>".$linha['email_funcionario']."</td>"."
                        <td>".""."</td>
                        <td>".""."</td>
                        <td>"."</td>
                    </tr>";
                
        #mostrando colunas/linhas
            echo $visualizar;
    }
?>

<!--
    <html>
        <li>
            <i class="glyphicon glyphicon-minus"></i>
        </li>
    </html>
-->
