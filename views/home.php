<h1>Bem vindos ao Cursos Online</h1>

<form method="POST" action="login.php">
    <label>Usuário</label>
    <input type="text" name="usuario" placeholder="Nome do Usuário" class="">

    <label>Senha</label>
    <input type="password" name="senha" placeholder="Digite a Senha" class="">

    <input type="submit" value="Logar" class="">
</form>

<?php if(isset($_GET['erro'])){ ?>
    <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos!
    </div>
<?php } ?>
