<?php
    include 'valida_sessao.php';
?>
<a href="system_coord.php" class="logo">
    <!-- logo for regular state and mobile devices -->
    <span class="logo-mini">SAFD</span>
    <span class="logo-lg">SAFD</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Coordenador: <?php echo $_SESSION["usuario"] ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="../index.html">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
