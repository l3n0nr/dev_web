<?php

    echo "teste";
    
    # incluindo arquivo conexao
    include "conexao.php";
    
    # recebendo dados do formulario
    $siape  = $_POST['siape_funcionario'];
    $nome   = $_POST['nome_funcionario'];
    $email  = $_POST['email_funcionario'];
    
    $setor  = $_POST['nome_setor'];
    
    $funcao = $_POST['descricao_funcao'];
    
    $login  = $_POST['login_usuario'];
    $senha  = $_POST['senha_usuario'];    
    
    # mostrando dados inseridos
    echo "Tabela Functor - Setor: " .$setor. ".<hr>";
    echo "Tabela Funcionario - Siape: " .$siape. ", Nome:" . $nome. ", Email:" .$email. ".<hr>";    
    echo "Tabela Senção - Função: " .$funcao. ".<hr>";
    echo "Tabela Usuario - Usuario: " .$login. " Senha: " .$senha. ".<hr>";
    
//     # mostando instrução SQL
//     $sql  = "INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)" 
//     $sql .= "VALUES($siape_funcionario, "$nome_funcionario", "$email_funcionario")"; 
// 
//     $sql .= "INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, siape_funcionario)" 
//     $sql .= "VALUES(1, "$login_usuario", "$senha_usuario", $nome_setor, $descricao_funcao, $siape_funcionario);"
//      
//     # preparando variavel para commit 
//     $create = $db->prepare($sql);
//     
//     # criando referencias para inserção dos dados
//     $create->bindValue(':siape',$siape, PDO::PARAM_STR);
//     $create->bindValue(':nome',$nome, PDO::PARAM_STR);
//     $create->bindValue(':email',$email, PDO::PARAM_STR);
//     $create->bindValue(':nome_setor',$setor, PDO::PARAM_STR);
//     $create->bindValue(':descricao_funcao',$funcao, PDO::PARAM_STR);
//     $create->bindValue(':login_usuario',$login, PDO::PARAM_STR);
//     $create->bindValue(':senha_usuario',$senha, PDO::PARAM_STR);
    
    # tentando executar instrução    
    try()
    {
        if($create->execute())
        }
            echo "[+] Registro efetuado com sucesso!";
        {
        else
        {
            echo "[-] Erro ao cadastrar dados";
        }
    }
    //mostrando erro
    catch ( PDOException $e )
    {
        //mostrando mensagem de erro
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
    
    
// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // //      
     
     //     echo "teste";
     
//     $setor  = $_POST['nome_setor'];
//     
//     $funcao = $_POST['descricao_funcao'];
//     
//     $login  = $_POST['login_usuario'];
//     $senha  = $_POST['senha_usuario'];        
         
    # mostrando dados inseridos
//     echo "Tabela Functor - Setor: " .$setor. ".<hr>";
//     echo "Tabela Fuionario - Siape: " .$siape. ", Nome:" . $nome. ", Email:" .$email. ".<hr>";    
//     echo "Tabela Senção - Função: " .$funcao. ".<hr>";
//     echo "Tabela Usuario - Usuario: " .$login. " Senha: " .$senha. ".<hr>";
    
// INSERÇÃO - campo siape_funcionario irá ser usado futuramente como campo de preenchimento manual
//     $sql  = "INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario) ";
//     $sql .= "VALUES($siape, $nome, $email)";        
     
//     # variavel para insercao
//     $sql  = "INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario) ";
//     $sql .= "VALUES($siape, $nome, $email) ";
    
//     $sql .= "INSERT INTO setor(nome_setor) ";
//     $sql .= "VALUES($nome_setor) ";        
//     
//     $sql .= "INSERT INTO funcao(descricao_funcao) ";
//     $sql .= "VALUES($descricao_funcao) ";        
//     
//     $sql .= "INSERT INTO usuario(login_usuario, senha_usuario, ) ";
    
// // // // // // // // // // // // // // FUNCIONANDO 
    
//     INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario) 
//         VALUES(1, "lenon", "lenonr"); 
//     
//     INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, siape_funcionario) 
//         VALUES(1, "lenon", "lenon", 1, 1, 5);
    
// // // // // // // // // // // // // //     
    
//     $sql .= "VALUES($login_usuario, $senha_usuario)";        
    
    # preparando variavel para commit 
//     $create = $db->prepare($sql);
//     
//     /*
//         bindValue() pode receber referências e valores como argumento.
//         bindParam() não pode ser um tipo primitivo como uma string ou número solto, retorno de função/método 
//     */ 
//     
//     $create->bindValue(':siape',$siape, PDO::PARAM_STR);
//     $create->bindValue(':nome',$nome, PDO::PARAM_STR);
//     $create->bindValue(':email',$email, PDO::PARAM_STR);
//     $create->bindValue(':nome_setor',$setor, PDO::PARAM_STR);
//     $create->bindValue(':descricao_funcao',$funcao, PDO::PARAM_STR);
//     $create->bindValue(':login_usuario',$login, PDO::PARAM_STR);
//     $create->bindValue(':senha_usuario',$senha, PDO::PARAM_STR);
         
//     # tentando executar instrução    
//     try()
//     {
//         if($create->execute())
//         }
//             echo "[+] Registro efetuado com sucesso!";
//         {
//         else
//         {
//             echo "[-] Erro ao cadastrar dados";
//         }
//     }
//     //mostrando erro
//     catch ( PDOException $e )
//     {
//         //mostrando mensagem de erro
//         echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
//     }
?>

