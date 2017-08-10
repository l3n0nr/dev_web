<?php

//conectando no servidor
    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_DB_NAME', 'safd' );
    define( 'MYSQL_USER', 'root' );
    define( 'MYSQL_PASSWORD', 'lenonr' );
 
//tentando realizar conexao
    try
    {
        //realizando conexao atraves do objeto    
        $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
        echo "[+] Conectou no banco. Dados: ";
    }
    //mostrando erro
    catch ( PDOException $e )
    {
        //mostrando mensagem de erro
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
?>