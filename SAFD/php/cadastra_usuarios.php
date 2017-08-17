<?php
    //incluindo arquivo conexao
    include_once "conexao.php";

    //recebendo dados do formulario
//     $siape  = $_POST['siape_funcionario'];
    $nome   = $_POST['nome_funcionario'];
    $email  = $_POST['email_funcionario'];
    
    //mostrando dados inseridos
//     echo "Dados - Siape:" . $siape . ", Nome:" . $nome . ", Email:" . $email. ".<hr>";    
   
// INSERÇÃO - campo siape_funcionario irá ser usado futuramente como campo de preenchimento manual
    $sql  = 'INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario) ';
    $sql .= 'VALUES(:siape, :nome, :email)';
    
    /*
    diferença entre query e prepare 
    prepare é com passagem de parametros,já o query não possibilita
    */
    
    $create = $db->prepare($sql);
    /*
    bindValue() pode receber referências e valores como argumento.
    bindParam() não pode ser um tipo primitivo como uma string ou número solto, retorno de função/método 
    */ 
    
    $create->bindValue(':siape',$siape, PDO::PARAM_STR);
    $create->bindValue(':nome',$nome, PDO::PARAM_STR);
    $create->bindValue(':email',$email, PDO::PARAM_STR);
            
    if($create->execute())
    {
        echo "[+] Registro efetuado com sucesso!";
    }
    else
    {
        echo "[-] Erro ao cadastrar dados";
    }
      
?>

