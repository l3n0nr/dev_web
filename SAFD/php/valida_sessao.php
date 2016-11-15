<?php
  session_start();

  if(!isset($_SESSION["usuario"]))
  {
    session_destroy();
    header("Location: login.php");
  }
  else
  {
    /*
    FUNCIONANDO, POREM ESTA CHATO COLOCAR SENHA TODA HORA
    session_destroy();
    */
    //echo "mensagem valida sessao ".$_SESSION["usuario"];
  }
?>
