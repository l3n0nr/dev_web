<?php
    # incluindo arquivo conexao
    include_once "conexao.php";

    # recebendo dados do formulario
    $siape  = $_POST['siape_funcionario'];
    $nome   = $_POST['nome_funcionario'];
    $email  = $_POST['email_funcionario'];

    //     $setor  = $_POST['nome_setor'];   
    //     $funcao = $_POST['descricao_funcao'];
    //     $login  = $_POST['login_usuario'];
    //     $senha  = $_POST['senha_usuario'];    

    # mostrando dados inseridos
//    echo "Tabela Funcao - Setor: " .$setor. ".<hr>";
//    echo "Tabela Funcionario - Siape: " .$siape. ", Nome:" . $nome. ", Email:" .$email."<hr>";
    //     echo "Tabela Senção - Função: " .$funcao. ".<hr>";
    //     echo "Tabela Usuario - Usuario: " .$login. " Senha: " .$senha. ".<hr>";  
    
//     echo "<hr>";

    # mostando instrução SQL
    $sql  = "INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario) VALUES";   
    $sql .= "($siape, '$nome', '$email');" ;

//    try()
//    {
        # tentando executar inserção
	if(mysqli_query($con, $sql))
        {
//            echo "Dados inseridos com sucesso!";
		header("location:p_insere_usuarios.php");                    
        } 
        else
        {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
?>

