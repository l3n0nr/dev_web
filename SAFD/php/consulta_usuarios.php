<?php

function consulta() {
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'safd';

    $conexao = mysql_connect($servidor, $usuario, $senha, $banco);

    if (!$link = mysql_connect($servidor, $usuario, $senha)) {
        echo 'Não foi possível conectar ao mysql';
        exit;
    }

    if (!mysql_select_db($banco, $link)) {
        echo 'Não foi possível selecionar o banco de dados';
        exit;
    }

//      $sql    = 'SELECT * FROM usuario';
    $sql = 'SELECT * FROM funcionario';
    $result = mysql_query($sql, $link);

    if (!$result) {
        echo "Erro do banco de dados, não foi possível consultar o banco d dados\n";
        echo "Erro MySQL: " . mysql_error();
        exit;
    }

    while ($row = mysql_fetch_assoc($result)) {
        $visualizar = "<tr>
                <td>" . $row['id_funcionario'] . "</td>" . "
                <td>" . $row['siape_funcionario'] . "</td>" . "
                </td>" . "
            </tr>";

//            "<tr>
//            <td>".$row['id_setor']."</td>"."
//            <td>".$row['estado_usuario']."</td>"."
//            <td>".$row['login_usuario']."</td>"."
//            <td>".$row['senha_usuario']."</td>"."
//            <td>".$row['siape_funcionario']."</td>"."
//            <td>
//              <ul > Excluir </ul>
//            </td>"."
//            </tr>";

        /*
          $usuarios = consulta_todos_usuarios();
          echo $usuarios;
         */

        echo $visualizar;
    }

    mysql_free_result($result);
}

?>
