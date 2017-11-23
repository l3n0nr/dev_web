<?php

session_start();

if (!isset($_SESSION["usuario"]))
{
    session_destroy();
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    
    header("Location: ../index.html");
}
else
{
//     echo "Sessao validada como ".$_SESSION["usuario"];
}
?>
