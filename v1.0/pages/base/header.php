<!-- Logo -->
<a href="../pages/system.php" class="logo">
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">SAFD</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
  <div class="navbar-custom-menu">
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input class="form-control" id="navbar-search-input" placeholder="Pesquise algo aqui..." type="text">
      </div>
    </form>
    <ul class="nav navbar-nav">
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">1</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Você tem 1 ações pendentes</li>
          <li>
          </li>
          <li class="footer"><a href="#">Ver Todas</a></li>
        </ul>
      </li>
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="hidden-xs">Lenon Ricardo</span> </a>
        <ul class="dropdown-menu">
          <include 'userlog.php'>
          <li class="user-body">
            <div class="col-xs-4 text-center">
              <a href="#">Configuções</a>
            </div>
            <div class="col-xs-4 text-center">
              <a href="#"></a>
            </div>
            <div class="col-xs-4 text-center">
              <a href="#">Ajuda</a>
            </div>
          </li>
          <li class="user-footer">
            <div class="pull-right">
              <a href="../index.php" class="btn btn-block btn-danger btn-lg">Sair</a>
            </div>
          </li>
          
        </ul>
      </li>
    </ul>
  </div>
</nav>
