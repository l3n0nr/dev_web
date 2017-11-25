<?php

# arquivo conexao
include 'conexao.php';

# capturando variavel
$login = $_POST["login"];
$senha = $_POST["senha"];

# definindo comando para consulta
$consulta = "SELECT login_usuario, senha_usuario, estado_usuario, id_funcao
             FROM usuario
             WHERE login_usuario = '$login'
             AND senha_usuario = '$senha';
            --  AND estado_usuario=1";

# verifica se usuario foi digitado
if (isset($login))
{
    // verificando estado usuario
    $estado = "SELECT estado_usuario FROM usuario WHERE login_usuario = '$login'";

    // preparando variavel
    $valor_estado = mysqli_query($con, $estado);

    // pesquisando na lista - ultimo valor cadastrado
    while($res = mysqli_fetch_assoc($valor_estado))
    {
        // capturando valor - estado usuario
        $valor_estado = $res['estado_usuario'];
    }

    // tratando usuario desativado
    if ($valor_estado == 0)
    {
        # mostra mensagem e redireciona pagina
        echo ("<script>alert('Por favor, entre em contato com o Administrador do Sistema!'); location.href='index.html';</script>");
    }
    else
    {
        # realiza consulta
        $res = mysqli_query($con, $consulta);

        # verifica usuario
        if (mysqli_num_rows($res) != 0)
        {
            # iniciando sessao
            session_start();
            session_cache_expire(10);

            # salva usuario para ser mostrado no menu da pagina
            $_SESSION["usuario"] = $login;

            // realizando busca pelo ultimo usuario cadastrado
            $funcionario = "SELECT id_funcao FROM usuario WHERE login_usuario = '$login'";

            // preparando variavel
            $result = mysqli_query($con, $funcionario);

            // pesquisando na lista - ultimo valor cadastrado
            while($res = mysqli_fetch_assoc($result))
            {
                $funcao = $res['id_funcao'];
            }

            // controle de acesso dos usuarios
            if ($funcao == 1)
            {
                # redireciona pagina
                header("location:system_admin.php");
                // echo "administrador";
            }
            elseif ($funcao == 2)
            {
                # redireciona pagina
                header("location:system_diretor.php");
                // echo "diretor";
            }
            elseif ($funcao == 3)
            {
                # redireciona pagina
                header("location:system_coord.php");
                // echo "coordenador";
            }
            elseif ($funcao == 4)
            {
                header("location:system_tae.php");
                // echo "chefe";
            }
            elseif ($funcao == 5)
            {
                header("location:system_docente.php");
                // echo "professor";
            }
            else
            {
                header("location:index.html");
                // echo "SAIU";
            }
        }
        else
        {
            // destruindo sessao
        	session_destroy();

            //ideal para utilizar depois do sistema estiver funcionar com os usuarios separados - funcoes
            // limpando sessao
        	unset ($_SESSION['login']);
        	unset ($_SESSION['senha']);

            # mostra mensagem e redireciona pagina
            echo ("<script>alert('Usuário ou Senha incorretos!'); location.href='index.html';</script>");
        }
    }
}
?>
