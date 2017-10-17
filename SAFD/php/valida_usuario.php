<?php

/*
    AÇÕES PENDENTES:
        -Criar um verificação para analisar o tipo do usuario cadastrado. Se "administrador" entra na parte de administrador do sistema, se usuario "padrao" entra na parte normal de sistema.
        -Criar posteriormente os niveis de Diretor, Coordenador, Chefe e Outros.
    
    ERROS: 
        -Usuário quando não está cadastrado, ele não é tratato pelo sistema.
*/

    # capturando variavel
    $login = $_POST["login"];
    $senha = $_POST["senha"];
  
    # arquivo conexao
    include_once 'conexao.php';
    
    # consulta sql
    $consulta = "SELECT * FROM usuario";    

    # realiza consulta
    $res = mysqli_query($consulta);
    
    ## NAO ESTA FUNCIONANDO
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
//             header("location:index.php");                     
            echo "Erro Linha"; 
        }    
    }
//     else
//     {
//         # redireciona pagina
//         header("location:index.php");
//     }
 ?>