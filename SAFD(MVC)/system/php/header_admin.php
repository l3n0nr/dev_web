<?php
    include 'valida_sessao.php';

    // evitando erro - Document Expired
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);

    //incluindo arquivo conexao
    include 'conexao.php';

    $sessao = $_SESSION["usuario"];

    // echo $sessao;

    $sql="SELECT nome_funcionario 
            FROM usuario, funcionario 
            WHERE usuario.id_funcionario = funcionario.id_funcionario 
            AND login_usuario = '$sessao'"; 

    $result = mysqli_query($con, $sql);

    if($result)
    {
        // echo "ok!";

        while($res = mysqli_fetch_assoc($result))
        {
            $nome_funcionario = $res['nome_funcionario'];

            // echo $nome_funcionario;
        }        
    }    
    else
    {
        echo "erro!";
    }
?>

<a href="system_admin.php" class="logo">
    <!-- logo for regular state and mobile devices -->
    <span class="logo-mini">SAFS</span>
    <span class="logo-lg">SAFSB</span>
</a>
<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown notifications-menu">
                <ul class="dropdown-menu" href="../pages/dem_pendentes.php">
                </ul>
            </li>
            <!-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input class="form-control" id="navbar-search-input" placeholder="Pesquisar" type="text">
                </div>
            </form> -->
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Administrador: <?php echo $nome_funcionario ?>
                    <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="config.php">Configurações</a></li>
                    <li class="divider"></li>
                    <li><a href="destroi_sessao.php"> Sair </a></li> 
                </ul>
            </li>            
        </ul>
    </div>
</nav>
