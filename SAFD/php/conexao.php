<?php

    # criando variaveis
    $servidor   = "localhost";    
    $usuario    = "root";
    $senha      = "lenonr";
    $banco      = "safd";
    
    # montando conexao
    $con        = mysqli_connect($servidor, $usuario, $senha, $banco);

    
//     $servidor = "localhost";
// $usuario = "usuario";
// $senha = "senha";
// $banco = "bdteste";

// $con = mysqli_connect($servidor, $usuario, $senha, $banco);

//conectando no servidor
//     define( 'MYSQL_HOST', 'localhost' );
//     define( 'MYSQL_DB_NAME', 'safd' );
//     define( 'MYSQL_USER', 'root' );
//     define( 'MYSQL_PASSWORD', 'lenonr' );
 
// //tentando realizar conexao
//     try
//     {
//         //realizando conexao atraves do objeto    
//         $db = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
// //         echo "[+] Conectou no banco. ";
//     }
//     //mostrando erro
//     catch ( PDOException $e )
//     {
//         //mostrando mensagem de erro
//         echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
//     }
?>