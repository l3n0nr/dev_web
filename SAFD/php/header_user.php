<?php
    include 'valida_sessao.php';
?>
<a href="system_user.php" class="logo">
    <!-- logo for regular state and mobile devices -->
    <span class="logo-mini">SAFD</span>
    <span class="logo-lg">SAFD</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">?</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">Mensagens</li>
                    <li class="footer"><a href="dem_pendentes.php">Ver todas demadas</a></li>
                </ul>
            </li>
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only"></span>
            </a>
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION["usuario"] ?>
                    <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <!--                    <li><a href="config.php">Configurações</a></li>-->
                    <!--                    <li class="divider"></li>-->
                    <li><a href="../index.php">Sair</a></li>                                        
                </ul>
                
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </li>
        </ul>
    </div>    
</nav>
