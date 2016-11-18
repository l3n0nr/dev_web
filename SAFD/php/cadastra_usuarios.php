<?php

include 'register.php';

$servidor = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'safd';

//  <!--RECEBENDO DADOS DO FORMULARIO-->
$nome   = $_POST ["nome"];
$email  = $_POST["email"];
$siape  = $_POST["siape"];
//$setor  = $_POST["setor"];
//$funcao = $_POST["funcao"];
//$login  = $_POST["login"];
//$senha  = $_POST["senha"];

//conectando com o localhost - mysql
$conexao = mysql_connect($servidor, $usuario, $senha, $banco);
    if (!$link = mysql_connect($servidor, $usuario, $senha)) 
    {
       die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
    }
    else
    {        
        echo "conectou localhost";
    }
	
    if (!mysql_select_db($banco, $link)) 
    {
        echo 'Não foi possível selecionar o banco de dados';
        exit;
    }
    else
    {        
        echo "conectou banco de dados";
    }

    $query = 
            "INSERT INTO `funcionario` ( 'nome_funcionario', 'email_funcionario', 'siape_funcionario'
                VALUES ('$nome', '$email', '$siape')";

    mysql_query($query,$conexao);
 
    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
//
//
//if (!$link = mysql_connect($servidor, $usuario, $senha)) {
//    echo 'Não foi possível conectar ao mysql';
//    exit;
//}
//
//if (!mysql_select_db($banco, $link)) {
//    echo 'Não foi possível selecionar o banco de dados';
//    exit;
//}
//
////      $cadastra = "INSERT INTO funcionario(siape_funcionario, nome_funcionario)"
////              . " VALUES("administrador")"
//$sql = 'SELECT * FROM usuarios';
//$result = mysql_query($sql, $link);
//
//if (!$result) {
//    echo "Erro do banco de dados, não foi possível consultar o banco d dados\n";
//    echo "Erro MySQL: " . mysql_error();
//    exit;
//}
//
//while ($row = mysql_fetch_assoc($result)) {
//    $visualizar = "<tr>
//            <td>" . $row['id'] . "</td>" . "
//            <td>" . $row['nome_completo'] . "</td>" . "
//            <td>" . $row['email'] . "</td>" . "
//            <td>" . $row['setor'] . "</td>" . "
//            <td>" . $row['funcao'] . "</td>" . "
//            <td>
//              <ul > Excluir </ul>
//            </td>" . "
//            </tr>";
//
//    /*
//      $usuarios = consulta_todos_usuarios();
//      echo $usuarios;
//     */
//
//    echo $visualizar;
//}
//
//mysql_free_result($result);
?>

