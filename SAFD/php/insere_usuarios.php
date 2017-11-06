<?php

# incluindo arquivo conexao
include_once "conexao.php";

# recebendo dados do formulario
$siape = $_POST['siape_funcionario'];
$nome = $_POST['nome_funcionario'];
$email = $_POST['email_funcionario'];

$setor = $_POST['nome_setor'];
$funcao = $_POST['descricao_funcao'];
$login = $_POST['login_usuario'];
$senha = $_POST['senha_usuario'];

# mostrando dados inseridos
echo "Tabela Funcionario - Siape: " . $siape . ", Nome:" . $nome . ", Email:" . $email . "<hr>";
echo "Tabela Funcao - Setor: " . $setor . ".<hr>";
echo "Tabela Seção - Função: " . $funcao . ".<hr>";
echo "Tabela Usuario - Usuario: " . $login . " Senha: " . $senha . ".<hr>";

//     echo "<hr>";
# mostando instrução SQL
//    $sql  = "INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario) VALUES";   
//    $sql .= "($siape, '$nome', '$email');" ;
///////////////////VERIFICAR
//INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)
//VALUES(099898, "lenon", "lenonrmsouza@gmail.com") ;
//SELECT siape_funcionario, nome_funcionario, email_funcionario FROM funcionario WHERE id_funcionario = usuario.id_funcionario;
//INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, id_funcionario)
//VALUES(1, "lenon", "lenonr", 1, 1, 1) WHERE funcionario.id_funcionario = usuario.id_funcionario;
////////////////////////////////

//$sql = "INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)";
//$sql .= "VALUES($siape_funcionario, $nome_funcionario, $email_funcionario)"
//
//$sql .= "INSERT INTO usuario()"
//$sql .= "WHERE funcionario.id_funcionario = usuario.id_funcionario;"

//$sql  = "INSERT INTO funcionario, usuario(siape_funcionario, nome_funcionario, email_funcionario, nome_usuario, senha_usuario, estado_usuario) VALUES"
//$sql .= "($siape, '$nome', '$email', '$login', '$senha');" ;        

// TESTE 1
//$sql  = "INSERT INTO funcionario, usuario(siape_funcionario, nome_funcionario, email_funcionario, "
//                                        . "nome_usuario, senha_usuario, estado_usuario"
//                                        . "id_setor, id_funcao) VALUES";   
//$sql .= "($siape, '$nome', '$email', '$login', '$senha', 1, $setor, $funcao);" ;        

// TESTE 2
$sql = "INSERT INTO funcionario(id_funcionario, siape_funcionario, nome_funcionario, email_funcionario) VALUES";
$sql.= "($siape, '$nome', '$email');";

$sql.= "INSERT INTO usuario(id_usuario, id_setor, id_funcao, login_usuario, senha_usuario, estado_usuario) VALUES";
$sql.= "($setor, $funcao, '$login', '$senha', 1);";

// VERIFICAR LIGACAO TABELAS

echo $sql;

//echo $sql;
//INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, id_funcionario)
//    VALUES(1, $login_usuario, $senha_usuario, 1, 1, 1);
//    try()
//    {
//         # tentando executar inserção
// 	if(mysqli_query($con, $sql))
//         {
//             echo "Dados inseridos com sucesso!";
// //		header("location:p_insere_usuarios.php");                    
//         } 
//         else
//         {
//             echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
//         }
?>

