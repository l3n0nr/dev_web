<?php

    # criando variaveis
    $servidor   = '127.0.0.1';    
//     $servidor   = 'localhost';    
    $usuario    = 'root';
    $senha      = 'lenonr';
    $banco      = 'safd';
    
//     # montando conexao
//     $con        = mysqli_connect($servidor, $usuario, $senha, $banco);
//     
//     $servidor = "localhost";
//     $usuario = "usuario";
//     $senha = "senha";
//     $banco = "bdteste";

//tentando realizar conexao
    try
    {
//         echo "[+] Conectou no banco. ";
        
        # criando variavel para conexao
        $con = mysqli_connect($servidor, $usuario, $senha, $banco);
    }
    //mostrando erro
    catch ( PDOException $e )
    {
        //mostrando mensagem de erro
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
    
// fechando conexao
//     mysqli_close($db);
?>