<?php
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'safd';

//  <!--RECEBENDO DADOS DO FORMULARIO-->
$nome   = $_POST["nome"];
$email  = $_POST["email"];
$siape  = $_POST["siape"];
$setor  = $_POST["setor"];
$funcao = $_POST["funcao"];
$login  = $_POST["login"];
$senha  = $_POST["senha"];

//conectando com o localhost - mysql
$conexao = mysql_connect($servidor, $usuario, $senha, $banco);
    if (!$link = mysql_connect($servidor, $usuario, $senha)) 
    {
       die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
    }
    else
    {        
        echo "Conectou no Servidor! \n";
    }
	
    if (!mysql_select_db($banco, $link)) 
    {
        echo 'Não foi possível selecionar o banco de dados';
        exit;
    }
    else
    {        
        echo "Conectou no banco de dados! \n";
        $query = 
            "INSERT INTO funcionario (nome_funcionario, email_funcionario, siape_funcionario)
                VALUES ('$nome', '$email', '$siape')";
            INSERT INTO setor (nome_setor)
                VALUES('$setor')
            INSERT INTO funcao (descricao_funcao)   
                VALUES('$funcao')

        mysql_query($query,$conexao);
        
        include 'inserir_usuarios.php';
        
        echo "<br><br>";
        echo "nome:" ."$nome";
        echo "<br>";
        echo "email:" ."$email";
        echo "<br>";
        echo "siape:" ."$siape";
        echo "<br><br>";
 
        echo "Seu cadastro foi realizado com sucesso! Agradecemos a atenção. <br>";
        echo "<hr>";
        echo "Aguarde um email de confirmação em "."$email";
    }    
?>

