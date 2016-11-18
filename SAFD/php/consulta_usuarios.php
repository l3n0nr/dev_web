<?php

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

    $sql_usuario    = 'SELECT * FROM usuario';
    $result = mysql_query($sql_usuario, $link);

    if (!$result) {
        echo "Erro do banco de dados, não foi possível consultar o banco d dados\n";
        echo "Erro MySQL: " . mysql_error();
        exit;
    }

    while ($row = mysql_fetch_assoc($result)) {
        $visualizar = 
            "<tr>
            <td>".$row['id_setor']."</td>"."                       
            <td>".$row['login_usuario']."</td>"."
            <td>".$row['siape_funcionario']."</td>"."
                
            </tr>";

        echo $visualizar;
    }

    mysql_free_result($result);

?>
