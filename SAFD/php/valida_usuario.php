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
    
    # realizando consulta no banco de dados
    $consulta = "SELECT login_usuario FROM usuario";    
      
    # variavel para realizar pesquisa
    $result = $db->query($consulta);
    
    # criando repeticao para percorrer a tabela
    while ($linha = $result->fetch(PDO::FETCH_ASSOC)) 
    {                  
        #criando variavel para mostra colunas/linhas
//             $visualizar = 
//                     "<tr>
//                         <td>".$linha['nome_administrador']."</td>"."                                   
//                         <td>".$linha['senha_administrador']."</td>"."            
//                         <td>".$linha['habilitado_administrador']."</td>"."
//                         <td>".""."</td>
//                         <td>".""."</td>
//                         <td>"."</td>
//                     </tr>";
                    
        #mostrando colunas/linhas
//         echo "<hr>".$visualizar;                          
        
        # verificando se existe usuario
        if(mysqli_num_rows($result) != 0)   # usuario nao existe
        {            
            # redireciona pagina
            header("location:index.php");            
        }
        else    # usuario cadastrado
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
 ?>