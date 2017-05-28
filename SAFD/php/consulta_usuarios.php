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
    $rows = $result->fetchAll( PDO::FETCH_ASSOC );
    
    while ($rows == TRUE) 
    {
        $visualizar = 
            "<tr>
                <td>".$rows['siape_funcionario']."</td>"."                                   
                <td>".$rows['nome_funcionario']."</td>"."            
                <td>".$rows['email_funcionario']."</td>"."
            </tr>";

        echo $visualizar;
    }
    

//     print_r( $rows );
    
    


/* //servidor
        $servidor = 'localhost';
        $usuario = 'lenonr';
        $senha = ' ';
        $banco = 'safd';

    //conectando banco
        $con = new mysqli($servidor, $usuario, $senha, $banco);
    
    //verificando conexao
        if ($con->connect_error) 
        {
            die("Connection failed: " . $con->connect_error);
        }
        else
        {
            echo "Conectou no servidor!!";    
            $sql_usuario    = 'SELECT * FROM funcionario';
            $result = mysqli_query($sql_usuario, $con);

//             if (!$result) 
//             {
//                 echo "Erro do banco de dados, não foi possível consultar o banco d dados\n";
//                 echo "Erro MySQL: " . mysql_error();
//                 exit;
//             }

            while ($row = mysqli_fetch_assoc($result)) 
            {
                $visualizar = 
                    "<tr>
                        <td>".$row['siape_funcionario']."</td>"."                                   
                        <td>".$row['nome_funcionario']."</td>"."            
                        <td>".$row['email_funcionario']."</td>"."
                    </tr>";

                echo $visualizar;
            }

            mysql_free_result($result);
            
            echo "teste";
        }           */     

// // // // // // // // // // // // // // // 

//     $servidor = 'localhost';
//     $usuario = 'root';
//     $senha = '';
//     $banco = 'safd';
// 
//     $conexao = mysql_connect($servidor, $usuario, $senha, $banco);
// 
//     if (!$link = mysql_connect($servidor, $usuario, $senha)) {
//         echo 'Não foi possível conectar ao mysql';
//         exit;
//     }
// 
//     if (!mysql_select_db($banco, $link)) {
//         echo 'Não foi possível selecionar o banco de dados';
//         exit;
//     }
// 
//     $sql_usuario    = 'SELECT * FROM funcionario';
//     $result = mysql_query($sql_usuario, $link);
// 
//     if (!$result) {
//         echo "Erro do banco de dados, não foi possível consultar o banco d dados\n";
//         echo "Erro MySQL: " . mysql_error();
//         exit;
//     }
// 
//     while ($row = mysql_fetch_assoc($result)) {
//         $visualizar = 
//             "<tr>
//             <td>".$row['siape_funcionario']."</td>"."                                   
//             <td>".$row['nome_funcionario']."</td>"."            
//             <td>".$row['email_funcionario']."</td>"."
//             </tr>";
// 
//         echo $visualizar;
//     }
// 
//     mysql_free_result($result);

?>
