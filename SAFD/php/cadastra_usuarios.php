<?php

//conectando servidor
    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_USER', 'lenonr' );
    define( 'MYSQL_PASSWORD', ' ' );
    define( 'MYSQL_DB_NAME', 'safd' );
    
//incluindo arquivo conexao
    include_once "conexao.php";
    
// recebendo dados do formulario
    $siape  = $_POST['siape_funcionario'];
    $nome   = $_POST['nome_funcionario'];
    $email  = $_POST['email_funcionario'];    
    
//tentando realizar insercao dos dados     
    try
    {    
    //inserindo dados
        $ins = "INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario) VALUES ($siape, $nome, $email)";

        $stmte->bindParam(1,$siape, PDO::PARAM_STR);
        $stmte->bindParam(2,$nome, PDO::PARAM_STR);
        $stmte->bindParam(3,$email, PDO::PARAM_STR);

        if($ins)
        {
            echo 'Dados inseridos com sucesso';
        }
        else
        {
            echo 'Erro ao inserir os dados';
        }
    }
//mostrando mensangem erro
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
//executando insercao
//     $exec = $pdo->exec($ins);            
    
?>

<!--

try
//     {
//         $stmte = $pdo->prepare(" INSERT INTO usuarios (nome,senha) VALUES (?,?)");
//         $stmte->bindParam(1,$nome, PDO::PARAM_STR);
//         $stmte->bindParam(2,$senha, PDO::PARAM_STR);
//         $executa = $stmte->execute();
// 
//         if($executa){
//             echo 'Dados inseridos com sucesso';
//         }
//         else{
//         echo 'Erro ao inserir os dados';
//         }
//     }
//     catch(PDOException $e)
//     {
//         echo $e->getMessage();
//     }

// echo "teste"; 

// // include "inserir_usuarios.php";
// 
// //recebendo dados do formulario
//     $nome   = $_POST["nome_funcionario"];
//     $email  = $_POST["email_funcionario"];
//     $siape  = $_POST["siape_funcionario"];
// 
//     echo $nome, $email, $siape;
// 
// //conectando servidor
//     define( 'MYSQL_HOST', 'localhost' );
//     define( 'MYSQL_USER', 'lenonr' );
//     define( 'MYSQL_PASSWORD', ' ' );
//     define( 'MYSQL_DB_NAME', 'safd' );
// 
// //tentando realizar conexao
//     try
//     {
//         //realizando conexao atraves do objeto    
//         $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
//         echo "conectou!";
//     }
//     catch ( PDOException $e )
//     {
//         //mostrando mensagem de erro
//         echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
//     }
//     
//     
// //realizando inserçao no banco de dados
//     $sql = "INSERT INTO funcionario (nome_funcionario, email_funcionario, siape_funcionario) VALUES ('$nome', '$email', '$siape')";
//     $result = $PDO->query( $sql );
//      
// //inserindo dados     
//     $linha = $result->fetch(PDO::FETCH_ASSOC);
    
    
// //inserindo dados nas tabelas        
//     $query = 
//         "INSERT INTO funcionario (nome_funcionario, email_funcionario, siape_funcionario)
//             VALUES ('$nome', '$email', '$siape')"
// //                 INSERT INTO setor (nome_setor)
// //                     VALUES('$setor')
// //                 INSERT INTO funcao (descricao_funcao)   
// //                     VALUES('$funcao')"
// 
//     mysql_query($query,$con);
//         
//     include 'inserir_usuarios.php';
    } 

    
    


//     //servidor
//         $servidor = 'localhost';
//         $usuario = 'lenonr';
//         $senha = ' ';
//         $banco = 'safd';
//         
// //     //recebendo dados do formulario
// //         $nome   = $_POST["nome"];
// //         $email  = $_POST["email"];
// //         $siape  = $_POST["siape"];
// //         $setor  = $_POST["setor"];
// //         $funcao = $_POST["funcao"];
// //         $login  = $_POST["login"];
// //         $senha  = $_POST["senha"];
// 
//     //conectando banco
//         $con = new mysqli($servidor, $usuario, $senha, $banco);
//     
//     //verificando conexao
//         if ($con->connect_error) 
//         {
//             die("Connection failed: " . $con->connect_error);
//         }
//         else
//         {
//             echo "Conectou no servidor!!";                 
//         }
//                 
//         if (!mysql_select_db($banco, $con)) 
//         {
//             echo 'Não foi possível selecionar o banco de dados';
// //             exit;
//             
//             echo "Mostra erro banco..";
//         }
//         else
//         {        
//             echo "Conectou no banco de dados! \n";
//             
//             $query = 
//                 "INSERT INTO funcionario (nome_funcionario, email_funcionario, siape_funcionario)
//                     VALUES ('$nome', '$email', '$siape')"
// //                 INSERT INTO setor (nome_setor)
// //                     VALUES('$setor')
// //                 INSERT INTO funcao (descricao_funcao)   
// //                     VALUES('$funcao')"
// 
//              mysql_query($query,$con);
//              
//              include 'inserir_usuarios.php';
//         } 
        
        
//     echo "Conexao com mysql_connect";
//     
//         if (!$link = mysql_connect($servidor, $usuario, $senha)) 
//         {
//             die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//         }
//         else
//         {        
//             echo "Conectou no Servidor! \n";
//         }
//             
//         if (!mysql_select_db($banco, $link)) 
//         {
//             echo 'Não foi possível selecionar o banco de dados';
// //             exit;
//             
//             echo "Mostra erro banco..";
//         }
//         else
//         {        
//             echo "Conectou no banco de dados! \n";
//             $query = 
//                 "INSERT INTO funcionario (nome_funcionario, email_funcionario, siape_funcionario)
//                     VALUES ('$nome', '$email', '$siape')";
//     //             INSERT INTO setor (nome_setor)
//     //                 VALUES('$setor')
//     //             INSERT INTO funcao (descricao_funcao)   
//     //                 VALUES('$funcao')
// 
//             mysql_query($query,$conexao);
//             
// //             include 'inserir_usuarios.php';
//     
//     echo "Mostrando dados..";
//     
//             echo "<br><br>";
//             echo "nome:" ."$nome";
//             echo "<br>";
//             echo "email:" ."$email";
//             echo "<br>";
//             echo "siape:" ."$siape";
//             echo "<br><br>";
//     
//             echo "Seu cadastro foi realizado com sucesso! Agradecemos a atenção. <br>";
//             echo "<hr>";
//             echo "Aguarde um email de confirmação em "."$email";
//       }    -->


