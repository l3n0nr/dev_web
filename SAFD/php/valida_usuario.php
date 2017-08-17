<?php
  $login = $_POST["login"];
  $senha = $_POST["senha"];

//   echo "Login: " .$login. " ,Senha: ".$senha.".";
  echo "Entrada: " . $login."|".$senha;
  
  //incluindo arquivo conexao
    include_once 'conexao.php';
    
//realizando consulta no banco de dados
//     $consulta = "SELECT nome_administrador FROM administrador WHERE nome_administrador='$login' AND senha_administrador='$senha' AND habilitado_administrador != '0' ";
    $consulta = "SELECT nome_administrador, senha_administrador FROM administrador WHERE nome_administrador='$login' AND senha_administrador='$senha' ";        
    
    $result = $db->query($consulta);
    
//     $result = mysqli_query($db, $consulta);
    
//     //criando repeticao para percorrer a tabela
        while ($linha = $result->fetch(PDO::FETCH_ASSOC)) 
        {                               
            #criando variavel para mostra colunas/linhas
                $visualizar = 
                        "<tr>
                            <td>".$linha['nome_administrador']."</td>"."                                   
                            <td>".$linha['senha_administrador']."</td>"."            
                            <td>".$linha['habilitado_administrador']."</td>"."
                            <td>".""."</td>
                            <td>".""."</td>
                            <td>"."</td>
                        </tr>";
                        
            #mostrando colunas/linhas
                echo "<hr>".$visualizar;   
                                
            if(mysqli_num_rows($result)>0)	// usuário ok, conclui pedido
            {                
                echo "Usuário cadastro, agora você pode acessar o sistema";
                session_start();
                session_cache_expire(10);
                $_SESSION["usuario"]=$login;
                $_SESSION["senha"]=$senha;
                header("location:system_admin.php");
            }
            else
            {
                echo "<p class=\"erro\">Dados incorretos! Favor verificar seu e-mail e senha e tentar novamente!</p>";
            }
        }
        
        
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
