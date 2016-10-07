<?php
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  if ($login =="admin" && $senha =="admin")
  {
    //echo "Usuário cadastro, agora você pode acessar o sistema";
    session_start();
    $_SESSION["usuario"]=$login;
    $_SESSION["senha"]=$senha;
    header("location:system.php");
  }
  else
  if ($login =="lenonr" && $senha =="lenonr")
  {
    //echo "Usuário cadastro, agora você pode acessar o sistema";
    session_start();
    $_SESSION["usuario"]=$login;
    $_SESSION["senha"]=$senha;
    header("location:system.php");
  }
  else
  {
    session_start();
    session_destroy();
    header("location:login.php");
  }
 ?>
