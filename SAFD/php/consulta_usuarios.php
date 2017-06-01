<?php

//conectando servidor
    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_USER', 'lenonr' );
    define( 'MYSQL_PASSWORD', ' ' );
    define( 'MYSQL_DB_NAME', 'safd' );

//tentando realizar conexao
    try
    {
        //realizando conexao atraves do objeto    
        $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
    }
    catch ( PDOException $e )
    {
        //mostrando mensagem de erro
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
    
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
