<?php

  class consulta_usuarios
  {
    function consulta()
    {
      $servidor = 'localhost';
      $usuario =  'root';
      $senha  = '';
      $banco = 'safd';

      $conexao = mysql_connect($servidor, $usuario, $senha, $banco);

      if (!$link = mysql_connect($servidor, $usuario, $senha))
      {
          echo 'Não foi possível conectar ao mysql';
          exit;
      }

      if (!mysql_select_db($banco, $link)) {
          echo 'Não foi possível selecionar o banco de dados';
          exit;
      }

      $sql    = 'SELECT * FROM usuarios';
      $result = mysql_query($sql, $link);

      if (!$result)
      {
          echo "Erro do banco de dados, não foi possível consultar o banco d dados\n";
          echo "Erro MySQL: " . mysql_error();
          exit;
      }

      while ($row = mysql_fetch_assoc($result))
      {
          $visualizar =
            "<tr>
            <td>".$row['id']."</td>"."
            <td>".$row['nome_completo']."</td>"."
            <td>".$row['email']."</td>"."
            <td>".$row['setor']."</td>"."
            <td>".$row['funcao']."</td>"."
            <td>
              <ul > Excluir </ul>
            </td>"."
            </tr>";

          /*
            $usuarios = consulta_todos_usuarios();
            echo $usuarios;
          */

          echo $visualizar;
      }

      mysql_free_result($result);

    }
  }
?>
