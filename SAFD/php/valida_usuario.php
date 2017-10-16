<?php
/*
    AÇÕES PENDENTES:
        -Criar um verificação para analisar o tipo do usuario cadastrado. Se "administrador" entra na parte de administrador do sistema, se usuario "padrao" entra na parte normal de sistema.
        -Criar posteriormente os niveis de Diretor, Coordenador, Chefe e Outros.
    
    ERROS: 
        -Usuário quando não está cadastrado, ele não é tratato pelo sistema.
*/
// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 
    # incluindo arquivo conexao
    include_once 'conexao.php';

    # capturando entrada
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    # mostrando entrada de dados
    echo "Login: " .$login. ", Senha: ".$senha.".";

    // realizando consulta banco
//     $consulta = "SELECT login_usuario, senha_usuario FROM usuario, funcao WHERE login_usuario='$login' AND senha_usuario='$senha'"
    $consulta = "SELECT login_usuario FROM usuario WHERE login_usuario='$login'";
    
    # criando repeticao para percorrer a tabela
    while ($consulta = $result->fetch(PDO::FETCH_ASSOC)) 
    {     
        # criando variavel para mostra colunas/linhas
            $visualizar = 
                    "<tr>
                        <td>".$linha['login_usuario']."</td>"."                                   
                        <td>".$linha['senha_usuario']."</td>"."            
                    </tr>";
                    
        # mostrando colunas/linhas
        echo "<hr>".$visualizar;
        
        if(mysqli_num_rows($result) != 0) 
        {                        
            //echo "Usuário cadastro, agora você pode acessar o sistema";
            session_start();
            session_cache_expire(10);            
            $_SESSION["usuario"]=$login;
            header("location:system_admin.php");                        
        }
        else
        {
            echo "erro";
            header("location:index.php");            
        }   
    }
        
// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 
//   $login = $_POST["login"];
//   $senha = $_POST["senha"];
// 
// //   echo "Login: " .$login. " ,Senha: ".$senha.".";
// //   echo "Entrada: " . $login."|".$senha;
//   
//   //incluindo arquivo conexao
//     include_once 'conexao.php';
//     
// //realizando consulta no banco de dados
//     //caso o usuario exista no banco(login/senha) e seu status nao seja 0(desativado) entra no sistema.
// //     $consulta = "SELECT nome_administrador, senha_administrador FROM administrador WHERE nome_administrador='$login' AND senha_administrador='$senha' AND habilitado_administrador != '0' ";    
// 
// //     $consulta = "SELECT login_usuario, senha_usuario, descricao_funcao FROM usuario, funcao WHERE login_usuario='$login' AND senha_usuario='$senha' AND estado_usuario != '0' ";    
// 
//     $consulta = "SELECT login_usuario FROM usuario WHERE login_usuario = $login";  
//     
// //     $sql = "SELECT siape_funcionario, login_usuario, estado_usuario, nome_setor, descricao_funcao FROM usuario, setor, funcao WHERE usuario.id_setor = setor.id_setor AND usuario.id_funcao = funcao.id_funcao";
//     
//     $result = $db->query($consulta);
//     
//     if (mysql_num_rows($query) != 1) {
//       // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
//       echo "Login inválido!"; exit;
//     } 
//     else 
//     {
//       // Salva os dados encontados na variável $resultado
// //       $resultado = mysql_fetch_assoc($query);
// //         echo "Usuário cadastro, agora você pode acessar o sistema";
//         session_start();
//         session_cache_expire(10);            
//         $_SESSION["usuario"]=$login;
//         header("location:system_admin.php");            
//     }
    
//     //criando repeticao para percorrer a tabela
//     while ($linha = $result->fetch(PDO::FETCH_ASSOC)) 
//     {                  
//         #criando variavel para mostra colunas/linhas
//             $visualizar = 
//                     "<tr>
//                         <td>".$linha['nome_administrador']."</td>"."                                   
//                         <td>".$linha['senha_administrador']."</td>"."            
//                         <td>".$linha['habilitado_administrador']."</td>"."
//                         <td>".""."</td>
//                         <td>".""."</td>
//                         <td>"."</td>
//                     </tr>";
//                     
//         #mostrando colunas/linhas
//         echo "<hr>".$visualizar;                          
//     }
        
//         if(mysqli_num_rows($result) != 0) 
//         {                        
//             //echo "Usuário cadastro, agora você pode acessar o sistema";
//             session_start();
//             session_cache_expire(10);            
//             $_SESSION["usuario"]=$login;
//             header("location:system_admin.php");            
//             
// //             # verificando tipo de usuario
// //             if ($descricao_funcao == "Administrador") 
// //             {                
// //                 header("location:system_admin.php");            
// //             }
// //             else
// //             {
// //                 echo "Erro!"
// //             }            
//         }
//         else
//         {
//             echo "erro";
//             header("location:index.php");            
//         }
//     {   
//         echo "<p class=\"erro\">Dados incorretos! Favor verificar seu e-mail e senha e tentar novamente!</p>";                
//         session_start();
//         session_destroy();
//         header("location:index.php");
//     }
//     else
//     {
//         echo "Usuário cadastro, agora você pode acessar o sistema";
//         session_start();
//         session_cache_expire(10);
//         $_SESSION["usuario"]=$login;
//         $_SESSION["senha"]=$senha;
//         header("location:system_admin.php");
//     }
        
//     // // VERIFICANDO USUARIO
//         if(mysqli_num_rows($result) != 1)	 
//         {  
//             echo "Teste 1";
//     //         session_start();
//     //         session_cache_expire(10);
//     //         $_SESSION["usuario"]=$login;
//     //         header("location:system_admin.php");                                                         
//         }
//         else
//         {   
//             echo "Teste 2"
//     //         //echo "Nao Entrou!";
//     //         session_start();
//     //         session_destroy();
//     //         header("location:index.php");        
//         }
//     }
  
//   if ($login =="admin" && $senha =="admin")
//   {
//     //echo "Usuário cadastro, agora você pode acessar o sistema";
//     session_start();
//     session_cache_expire(10);
//     $_SESSION["usuario"]=$login;
//     $_SESSION["senha"]=$senha;
//     header("location:system_admin.php");
//   }
//   else
//   if ($login =="lenonr" && $senha =="lenonr")
//   {
//     //echo "Usuário cadastro, agora você pode acessar o sistema";
//     session_start();
//     session_cache_expire(10);
//     $_SESSION["usuario"]=$login;
//     $_SESSION["senha"]=$senha;
//     header("location:system_user.php");
//   }
//   else
//   {
//     session_start();
//     session_destroy();
//     header("location:index.php");    
//   }

 ?>
