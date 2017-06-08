<?php
//tentando realizar conexao
    try
    {
        //realizando conexao atraves do objeto    
        $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
        echo "conectou!";
    }
    catch ( PDOException $e )
    {
        //mostrando mensagem de erro
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
?>