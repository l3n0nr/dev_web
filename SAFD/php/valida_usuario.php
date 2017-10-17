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
    
    # comando sql
    $consulta = "SELECT login_usuario FROM usuario";    

    # realiza consulta
    $res = mysqli_query($consulta);
    
    # verifica se usuario e senha foram digitados
    if (isset($login)) 
    {
        # verifica usuario
        if(mysqli_num_rows($res) <= 0)	// usuário ok, conclui pedido
        {      
            # redireciona pagina
            header("location:index.php");    
        }
        else
        {                
            # inicia sessao
            session_start();
            session_cache_expire(10);
            
            # salva usuario para ser mostrado no menu da pagina
            $_SESSION["usuario"]=$login;
            
            # redireciona pagina
            header("location:system_admin.php");                    
        }    
    }
    else
    {
        # redireciona pagina
        header("location:index.php");
    }
 ?>