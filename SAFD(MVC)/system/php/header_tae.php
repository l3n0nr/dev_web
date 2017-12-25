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

<a href="system_tae.php" class="logo">
    <!-- logo for regular state and mobile devices -->
    <span class="logo-mini">SAFS</span>
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
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"> TAE: <?php echo $nome_funcionario ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="../index.html">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
