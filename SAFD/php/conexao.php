<?php

/**
*  Arquivo de conexão ao MySQL usando servidor local e externo
*/
    $n = -1;
    // Define os servidores e configurações de cada conexão
    $n++;
    $MySQL[$n]['dominios']  = array('127.0.0.1', 'localhost'); // Possíveis dominios
    $MySQL[$n]['servidor']  = '127.0.0.1'; // Servidor MySQL
    $MySQL[$n]['usuario']   = 'root'; // Usuário MySQL
    $MySQL[$n]['senha']     = 'lenonr'; // Senha MySQL
    $MySQL[$n]['banco']     = 'safd'; // Banco de dados
    $MySQL[$n]['persis']    = false; // Conexão persistente?
    
//     $n++;
//     $MySQL[$n]['dominios']  = array('thiagobelem.net', 'thiagobelem.com.br');
//     $MySQL[$n]['servidor']  = '127.0.0.1'; // Servidor MySQL
//     $MySQL[$n]['usuario']   = 'meu_usuario'; // Usuário MySQL
//     $MySQL[$n]['senha']     = 'minha_senha'; // Senha MySQL
//     $MySQL[$n]['banco']     = 'meu_banco'; // Banco de dados
//     $MySQL[$n]['persis']    = false; // Conexão persistente?
    
    // Decide qual conexão usar
    foreach ($MySQL as $key=>$servidor) 
    {
        if (!isset($_SERVER['HTTP_HOST']))
        {
            $usar = $key;
            break;
        } 
        else 
        {
            $encontrado = false;
            foreach ($servidor['dominios'] as $dominio) 
            {
                if (strpos($_SERVER['HTTP_HOST'], $dominio) !== false) 
                {
                    $usar = $key;
                    $encontrado = true;
                    break;  
                }
            }
            if ($encontrado)
                break;
        }
    }
    // Decide o tipo de conexão
    $MySQL['conexao'] = ($MySQL[$usar]['persis']) ? 'mysql_pconnect' : 'mysql_connect';
    
    // Conecta-se ao servidor usando o tipo de conexão definido
    $MySQL['link'] = $MySQL['conexao']($MySQL[$usar]['servidor'], $MySQL[$usar]['usuario'], $MySQL[$usar]['senha']) or die("Não foi possível se conectar ao servidor MySQL no endereço [".$MySQL[$usar]['servidor']."]");
    
    // Conecta-se ao banco de dados
    mysql_select_db($MySQL[$usar]['banco'], $MySQL['link']) or die("Não foi possível conectar-se ao banco de dados [".$MySQL[$usar]['banco']."] no servidor [".$MySQL[$usar]['servidor']."]");


//     # criando variaveis
//     $servidor   = "localhost";    
//     $usuario    = "root";
//     $senha      = "lenonr";
//     $banco      = "safd";
//     
//     # montando conexao
//     $con        = mysqli_connect($servidor, $usuario, $senha, $banco);
    
//     $servidor = "localhost";
// $usuario = "usuario";
// $senha = "senha";
// $banco = "bdteste";

// $con = mysqli_connect($servidor, $usuario, $senha, $banco);

// // conectando no servidor
//     define( 'MYSQL_HOST', 'localhost' );
//     define( 'MYSQL_DB_NAME', 'safd' );
//     define( 'MYSQL_USER', 'root' );
//     define( 'MYSQL_PASSWORD', 'lenonr' );
//  
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
    
// fechando conexao
//     mysqli_close($db);
?>