<?php
/*
  AÇÕES PENDENTES:
  -Criar um verificação para analisar o tipo do usuario cadastrado. Se "administrador" entra na parte de administrador do sistema, se usuario "padrao" entra na parte normal de sistema.
  -Criar posteriormente os niveis de Diretor, Coordenador, Chefe e Outros.
 */

# arquivo conexao
include 'conexao.php';

# capturando variavel
$login = $_POST["login"];
$senha = $_POST["senha"];

# definindo comando para consulta
$consulta = "SELECT login_usuario, senha_usuario, estado_usuario, id_funcao FROM usuario WHERE login_usuario = '$login' AND senha_usuario = '$senha' AND estado_usuario=1";

# realiza consulta
$res = mysqli_query($con, $consulta);

# verifica se usuario foi digitado
if (isset($login))
{
    # verifica usuario
    if (mysqli_num_rows($res) != 0)
    { // usuário ok, conclui pedido
        # inicia sessao
        session_start();
        session_cache_expire(10);

        # salva usuario para ser mostrado no menu da pagina
        $_SESSION["usuario"] = $login;

//        echo $login;

        // realizando busca pelo ultimo usuario cadastrado
        $funcionario = "SELECT id_funcao FROM usuario WHERE login_usuario = '$login'";

        // preparando variavel
        $result = mysqli_query($con, $funcionario);

        // pesquisando na lista - ultimo valor cadastrado
        while($res = mysqli_fetch_assoc($result))
        {
            $funcao = $res['id_funcao'];
        }
//             $consulta_tipo = "SELECT id_funcao FROM usuario WHERE login_usuario = '$login' ";
//
////             echo $consulta_tipo;
//
//             $res_tipo= mysqli_query($con, $consulta_tipo);
//
            if ($funcao == 1)
            {
                # redireciona pagina
                header("location:system_admin.php");
                // echo "administrador";
            }
            elseif ($funcao == 2)
            {
                # redireciona pagina
                header("location:system_user.php");
                // echo "diretor";
            }
            elseif ($funcao == 3)
            {
                echo "coordenador";
            }
            elseif ($funcao == 4)
            {
                echo "chefe";
            }
            else
            {
                echo "outro";
            }
    }
    else
    {
//      destruindo sessao
//	session_destroy();

        //ideal para utilizar depois do sistema estiver funcionar com os usuarios separados - funcoes
//        limpando sessao
//	unset ($_SESSION['login']);
//	unset ($_SESSION['senha']);

        # mostra mensagem e redireciona pagina
        echo ("<script>alert('Usuário ou Senha incorretos!'); location.href='index.html';</script>");
    }
}
?>
