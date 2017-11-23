<?php

    # incluindo arquivo conexao
    include 'conexao.php';

    # incluindo arquivo de validaçao
    include 'valida_sessao.php';

# capturando valores
    echo $_SESSION["usuario"];
    $login = $_SESSION["usuario"];
    $protocolo = $_POST['protocolo'];
    $data = $_POST['data'];
    $observacoes = $_POST['observacoes'];
    $item =  $_POST['item'];
    $especificacoes = $_POST['especificacoes'];
    $justificativa = $_POST['justificativa'];
    $estrategia = $_POST['estrategia'];
    $criterio = $_POST['criterio'];
    $declaracao = $_POST['declaracao'];
    $veracidade = $_POST['veracidade'];

// BUSCA 1
    // realizando busca pelo nome do solicitante
    $sql = "SELECT nome_funcionario FROM usuario, funcionario WHERE funcionario.id_funcionario=usuario.id_funcionario AND usuario.login_usuario = '$login'";

    // montando consulta
    $result = mysqli_query($con, $sql);

    // capturando valor funcao usuario
    while($res = mysqli_fetch_assoc($result))
    {
        $funcionario = $res['nome_funcionario'];
    }

    echo "Solicitante: " . $funcionario. "<br>";

// BUSCA 2
    // realizando busca pelo siape do solicitante
    $sql = "SELECT siape_funcionario FROM usuario, funcionario WHERE funcionario.id_funcionario=usuario.id_funcionario AND usuario.login_usuario = '$login'";

    // montando consulta
    $result = mysqli_query($con, $sql);

    // capturando valor funcao usuario
    while($res = mysqli_fetch_assoc($result))
    {
        $siape = $res['siape_funcionario'];
    }

    echo "SIAPE: " . $siape. "<br>";

// BUSCA 3
    // realizando busca pelo setor do solicitante
    $sql = "SELECT nome_setor FROM usuario, setor WHERE setor.id_setor=usuario.id_setor AND usuario.login_usuario = '$login'";

    // montando consulta
    $result = mysqli_query($con, $sql);

    // capturando valor funcao usuario
    while($res = mysqli_fetch_assoc($result))
    {
        $setor = $res['nome_setor'];
    }

    echo "Setor: " . $setor. "<br>";    

// BUSCA 4
    // realizando busca pelo grupo do objeto solicitado
    $sql = "SELECT nome_grupo FROM objeto, grupo WHERE objeto.id_grupo=grupo.id_grupo AND objeto.id_grupo = '$item'";

    //montando consulta
    $result = mysqli_query($con, $sql);

    // capturando valor grupo objeto
    while($res = mysqli_fetch_assoc($result))
    {
        $grupo = $res['nome_grupo'];
    }

    echo "Grupo: " . $grupo. "<br>";        
    
    # mostrando variaveis
    echo "protocolo: " . $protocolo . "<br>";
    echo "data: " . $data . "<br>";

    echo "observacoes: " . $observacoes . "<br>";
    echo "item: " . $item . "<br>";
    echo "especificacoes: " . $especificacoes . "<br>";

    echo "justificativa: " . $justificativa . "<br>";
    echo "estrategia: " . $estrategia  . "<br>";
    echo "criterio: " . $criterio . "<br>";
    echo "declaracao: " . $declaracao . "<br>";
    echo "veracidade: " . $veracidade . "<br>";

////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////

    // $funcionario = "SELECT nome_funcionario FROM usuario, funcionario WHERE funcionario.id_funcionario=usuario.id_funcionario AND usuario.login_usuario = "lenon";"
    // $result = mysqli_query($con, $sql);

    // // capturando valor funcao usuario
    // while($res = mysqli_fetch_assoc($result))
    // {
    // $ultimo_funcionario = $res['nome_funcionario'];
    // }

    // echo $ultimo_funcionario;

////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////

    // salva usuario para ser mostrado no menu da pagina
    // echo $_SESSION["usuario"];
?>
