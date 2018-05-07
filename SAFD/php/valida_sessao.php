<?php

session_start();

if (!isset($_SESSION["usuario"]))
{
	// destruindo sessao do usuario
    session_destroy();
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    // redirecionando usuario
    header("Location: ../index.html");
}
else
{
//     echo "Sessao validada como ".$_SESSION["usuario"];
}
?>
