<?php
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  if ($login =="admin" && $senha =="admin")
  {
    //echo "Usuário cadastro, agora você pode acessar o sistema";
    session_start();
    $_SESSION["usuario"]=$login;
    $_SESSION["senha"]="$senha";
    header("location:system.php");
  }
  else
  {
    #iniciando sessao
    #para garantir que nenhuma sessao seja mantida aberta
    //session_start();
    #destruindo sessao
    //session_destroy();
    #definindo pagina de redirecionamento
    //header("location: index.php");
    //header("location:login.php");
  }
 ?>
