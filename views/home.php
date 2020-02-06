

<h1>Bem vindos ao Cursos Online</h1>
<p class="lead">Site "cursos online" é um simples projeto para fins de aprendizado, com intuito de adquirir conhecimentos/práticas de desenvolvimento de sites e programação vistos em sala de aula (faculdade de Análise e Desenvolvimento de Sistemas em andamento), abordando tecnologias como Banco de dados (MySql), PHP e Javascrip. Site esse desenvolvido em aula no site da Udemy com o instrutor Diego Mariano.</p>
<p class="h4">Para saber mais sobre o instrutor acesse:</p>
    <div class="mx-auto" style="width: 150px">
        <a href="https://twitter.com/diiegomariano"><span style="font-size: 24px"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/professordiegomariano"><span style="font-size: 24px"><i class="fab fa-facebook"></i></a>
        <a href="https://www.linkedin.com/in/diego-mariano-9182b623/"><span style="font-size: 24px"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.youtube.com/user/dcbmariano"><span style="font-size: 24px"><i class="fab fa-youtube"></i></i></a>
        <a href="https://diegomariano.com/home/"><span style="font-size: 24px"><i class="fas fa-globe"></i></a>        
    </div>
</p>
    
        
            <form method="POST" action="login.php">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario" placeholder="Nome do Usuário" class="form-control">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite a Senha" class="form-control">
                </div>                
                    <input type="submit" value="Logar" class="btn btn-primary btn-lg">
            </form>
            
    
<?php if(isset($_GET['erro'])){ ?>
    <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos!
    </div>
<?php } ?>
