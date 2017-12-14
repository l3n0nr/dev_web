<?php
    include 'valida_sessao.php';
?>
<a href="system_docente.php" class="logo">
    <!-- logo for regular state and mobile devices -->
    <span class="logo-mini">SAFSB</span>
    <span class="logo-lg">SAFSB</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"> Docente: <?php echo $_SESSION["usuario"] ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="destroi_sessao.php"> Sair </a></li> 
                </ul>
            </li>
        </ul>
    </div>
</nav>
