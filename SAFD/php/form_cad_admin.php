<div class="form-group has-feedback">
<<<<<<< HEAD
    <input type="text" min="000001" max="999999" class="form-control" placeholder="Siape" name="siape_funcionario" required="" autocomplete="off">
=======
    <input type="text" class="form-control" placeholder="Siape" autofocus name="siape_funcionario" required="" autocomplete="off">
>>>>>>> ff0da378a0b671f01036ca609f178ae1be197d1e
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <input type="text" class="form-control" placeholder="Nome Completo" name="nome_funcionario" required="" autocomplete="off">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <input type="email" class="form-control" placeholder="E-mail" name="email_funcionario" required="" autocomplete="off">
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>

<div class="form-group has-feedback">
    <select id="setor" class="form-control" name="nome_setor" required="" autocomplete="off">
        <?php
        include 'setores_admin.php';
        ?>
    </select>
</div>

<div class="form-group has-feedback">
    <select id="nivel" class="form-control" name="descricao_funcao" required="" autocomplete="off">
        <?php
        include 'funcao_admin.php';
        ?>
    </select>
</div>
<div class="form-group has-feedback">
    <input type="text" class="form-control" placeholder="Login" name="login_usuario" required="" autocomplete="off">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <input type="password" class="form-control" placeholder="Senha" name="senha_usuario" required="" autocomplete="off">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<!--<div class="form-group has-feedback">
    <input type="password" class="form-control" placeholder="Confirme a senha" name="confirma_senha" required="" autocomplete="off">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>-->

<div class="row">
    <div class="col-xs-12">
        <button type="submit" class="btn btn-success btn-block btn-flat">Registrar</button>
    </div>
</div>
