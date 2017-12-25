<?php

# incluindo arquivo conexao
include "conexao.php";

# recebendo dados do formulario
$siape = $_POST['siape_funcionario'];
$portaria = $_POST['n_portaria_funcionario'];
$nome = $_POST['nome_funcionario'];
$email = $_POST['email_funcionario'];

$setor = $_POST['nome_setor'];
$funcao = $_POST['descricao_funcao'];
$login = $_POST['login_usuario'];
$senha = $_POST['senha_usuario'];

// montando SQL - PRIMEIRA PARTE
$sql = "INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario, n_portaria_funcionario) VALUES";
$sql.= "($siape, '$nome', '$email', '$portaria');";

// realizando busca pelo ultimo usuario cadastrado
$usuario = "SELECT id_funcionario FROM funcionario ORDER BY id_funcionario DESC limit 1";

// preparando variavel
$result = mysqli_query($con, $usuario);

// capturando valor funcao usuario
while($res = mysqli_fetch_assoc($result))
{
    $ultimo_funcionario = $res['id_funcionario'];
}

// realizando inserção do funcionario
if(mysqli_query($con, $sql))
{
    // SEGUNDA PARTE DA INSERÇÃO
    $sql= "INSERT INTO usuario(id_setor, id_funcao, id_funcionario, login_usuario, senha_usuario, estado_usuario, verificado_usuario) VALUES";
    $sql.= "($setor, $funcao, $ultimo_funcionario, '$login', '$senha', 1, 0);";

    // realizando inserção da tabela usuario
    if(mysqli_query($con, $sql))
    {
        // echo "<br><br> Dados inseridos com sucesso!";
        // echo ("<script>alert('Usuário cadastrado com sucesso!'); location.href='p_insere_usuarios.php';</script>");
    	// header("location:p_insere_usuarios.php");

        echo ("<script>alert('Usuário cadastrado com sucesso!'); location.href='p_insere_usuarios.php';</script>");
    }
    else
    {
        echo "<br><br> ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}
else
{
    echo "<br><br> ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
?>
