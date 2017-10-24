<?php

/*
    AÇÕES PENDENTES:
        -Criar um verificação para analisar o tipo do usuario cadastrado. Se "administrador" entra na parte de administrador do sistema, se usuario "padrao" entra na parte normal de sistema.
        -Criar posteriormente os niveis de Diretor, Coordenador, Chefe e Outros.
    
    ERROS: 
        -Usuário quando não está cadastrado, ele não é tratato pelo sistema.
*/
    # iniciando sessao temporaria
//     session_start();
/*
    # capturando variavel
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if(isset($_POST["login"]) && isset($_POST["senha"])) 
    {
        include "conecta.php";
        
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $res = mysqli_query($con, "SELECT email FROM usuario WHERE email='$email' AND senha='$senha'");
        
        if(mysqli_num_rows($res) != 0 )	// usuário ok, conclui pedido
            header("location:system_admin.php");                    
        else
//             header("location:index.html");                    
            echo "erro dentro!";
    }
    else
    {
        echo "erro fora";
    }
*/
    # capturando variavel
    $login = $_POST["login"];
    $senha = $_POST["senha"];
  
    # arquivo conexao
    include 'conexao.php';    
    
    # definindo comando para consulta 
    $consulta = "SELECT * FROM usuario WHERE login = '".$login."' and senha = '". $senha."'";    
    
    # Verifica se usuário digitado está cadastrado
//      $consulta = "SELECT * FROM usuario";    
    
    # realiza consulta
     $res = mysqli_query($conexao, $consulta);
//     $result = mysqli_query($conexao, $consulta);        
    
    # realizando consulta
//     $res = mysqli_query($con, $consulta)
    
    #### NAO ESTA FUNCIONANDO   -   LOGICA ERRADA   
    # verifica se usuario foi digitado
     if (isset($login))
     {
         # verifica usuario
         if(mysqli_num_rows($res) != 1)	// usuário ok, conclui pedido
         {      
             # inicia sessao
             session_start();
             session_cache_expire(10);
             
             # salva usuario para ser mostrado no menu da pagina
             $_SESSION["usuario"]=$login;
             
             # redireciona pagina
             header("location:system_admin.php");                    
         }
         else
         {   
             # redireciona pagina
             header("location:index.php");                     
             echo "Erro Linha"; 
         }    
     }

//     else
//     {
//         # redireciona pagina
//         header("location:index.php");
//     }
    
//     # Verifica se usuário digitado está cadastrado
//     $consulta = "SELECT * FROM usuario";    
// //     $consulta = "SELECT * FROM usuario WHERE login = '".$login."' and senha = '". $senha."'";
// 
//     # realiza consulta
// //     $res = mysqli_query($consulta);
//     $result = mysqli_query($conexao, $consulta);        

//     $query = "SELECT * FROM usuario";
//     $usuario = mysqli_query($conexao, $query);
//     $dados = mysqli_fetch_assoc($usuario);
//         
//     $dados = mysqli_fetch_assoc($result);
//     
//     if (mysqli_num_rows($result) != 0)
//     {
// //         $_SESSION['logado'] = true;
//         header("Location: system_admin.php");
//     }
//     else
//     {
// //         echo $query;
// //         echo $conexao;
// //         echo $usuario;
// //         echo $dados;        
//         echo "<h1>Login ou senha incorretos!</h1><br>";
// //         echo "<a class='pull-right' href='login.php'>Voltar</a>";
//     }    
//     if (mysqli_num_rows($result) > 0) 
//     {
//         # verificando se existe o usuario
// 	while($row = mysqli_fetch_assoc($result)) 
// 	{
// 		$_SESSION['usuario'] = $row;
// 		$achou = true;
// 	}	
// 
// 	if($achou) 
// 	{				
// 		setcookie("logado", "ok", time()+60, "/");
// 
// 		//Se for admin vai para admin.php
// 		//Senão vai para index.php
// 		if ($_SESSION['Usuario']['acesso'] == "1") {
//                     header("Location: system_admin.php");   
// 		}
// 		else
// 		{
//                     header("Location: system_user.php");   
// 		}
// 	} 
// 	else 
// 	{   
//             session_destroy();
// //             header("Location: index.php?msg=Usuario ou Senha Inválidos!"); 
//             header("Location: index.php?msg=Entrou no IF!"); 
// 	}
//     }
//     else
//     {
// 	session_destroy();
// // 	header("Location: index.php?msg=Usuario ou Senha Inválidos!");                        
//         header("Location: index.php?msg=Nao entrou no IF!"); 
//     }

//     # fechando conexao temporaria
//     mysqli_close($conexao);
 ?>
