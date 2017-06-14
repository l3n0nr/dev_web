<?php

//conectando no servidor
    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_DB_NAME', 'safd' );
    define( 'MYSQL_USER', 'lenonr' );
    define( 'MYSQL_PASSWORD', ' ' );

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