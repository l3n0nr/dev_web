<?php
  include 'valida_sessao.php';
?>
<a href="system_user.php" class="logo">
  <!-- logo for regular state and mobile devices -->
  <span class="logo-mini">AFD</span>
  <span class="logo-lg">SAFD</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
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
                  <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION["usuario"]?>
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="../config.php">Configurações</a></li>
                    <li class="divider"></li>
                    <li><a href="../index.php">Sair</a></li>
                  </ul>
                </li>
    </ul>
  </div>
</nav>