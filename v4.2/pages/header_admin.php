<?php
  include 'valida_sessao.php';
?>
<a href="../pages/system_admin.php" class="logo">
  <!-- logo for regular state and mobile devices -->
  <span class="logo-mini">SAFD</span>
  <span class="logo-lg">SAFD</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"> Alterar Usuários <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="">Modificar Usuário</a></li>
          <li><a href="">Excluir Usuário</a></li>
        </ul>
      </li>
      <form class="navbar-form navbar-left" role="search" action="../pages/busca.php">
        <div class="form-group">
            <input name="busca" id="navbar-search-input" class="form-control" placeholder="Pesquise algo aqui.." type="text" width="200">
        </div>
      </form>

      <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">?</span>
        </a>
        <ul class="dropdown-menu" href="../pages/dem_pendentes.php">
          <!--<li class=""><a href="../pages/dem_pendentes.php"></a></li>-->
        </ul>
      </li>
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <li class="dropdown">
          <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php echo $_SESSION["usuario"]?> /
            <?php echo $_SESSION["senha"]?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../pages/config.php">Configurações</a></li>
            <li class="divider"></li>
            <li><a href="../index.php">Sair</a></li>
          </ul>
        </li>
    </ul>
  </div>
</nav>
