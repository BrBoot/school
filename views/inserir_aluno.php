<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo aluno</h1>
<form method="POST" action="processa_aluno.php">
    <div class="form-group">
        <label class="lead">Nome do aluno:</label>
        <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
    </div>
    <div class="form-group">
        <label class="lead">Data de nascimento:</label>
        <input class="form-control" type="text" name="data_nascimento" placeholder="YYYY-MM-DD">
    </div>
    <div class="form-group">   
        <label class="lead">E-mail do aluno:</label>
        <input class="form-control" type="email" name="email_aluno" placeholder="Insira o e-mail do aluno">
    </div>    
        <input class="btn btn-primary" type="submit" value="Inserir Aluno">    
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
        <?php if($linha['ID_ALUNO'] == $_GET['editar']){ ?>

            <h1>Editar aluno</h1>
            <form method="POST" action="editar_aluno.php">
                <input type="hidden" name="id_aluno" value="<?php echo $linha['ID_ALUNO']; ?>">
                <div class="form-group">
                    <label class="lead">Nome do aluno:</label>
                    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['NOME_ALUNO']; ?>">
                </div>
                <div class="form-group"> 
                    <label class="lead">Data de nascimento:</label>
                    <input class="form-control" type="text" name="data_nascimento" placeholder="YYYY-MM-DD" value="<?php echo $linha['DATA_NASCIMENTO']; ?>">
                </div>
                <div class="form-group"> 
                    <label class="lead">E-mail do aluno:</label>
                    <input class="form-control" type="email" name="email_aluno" placeholder="Insira o e-mail do aluno" value="<?php echo $linha['EMAIL']; ?>">
                </div>
                <input class="btn btn-primary" type="submit" value="Editar Aluno">    
            </form>
            <?php } ?>    
    <?php } ?>
<?php } ?>