<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo aluno</h1>
<form method="POST" action="processa_aluno.php">
<h4><span class="label label-default">Nome do aluno:</span></h4>
    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
    <h4><span class="label label-default">Data de nascimento:</span></h4>
    <input class="form-control" type="text" name="data_nascimento" placeholder="YYYY-MM-DD">
    <h4><span class="label label-default">E-mail do aluno:</span></h4>
    <input class="form-control" type="email" name="email_aluno" placeholder="Insira o e-mail do aluno">
    <input class="btn btn-primary" type="submit" value="Inserir Aluno">    
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
        <?php if($linha['ID_ALUNO'] == $_GET['editar']){ ?>

            <h1>Editar aluno</h1>
            <form method="POST" action="editar_aluno.php">
                <input type="hidden" name="id_aluno" value="<?php echo $linha['ID_ALUNO']; ?>">
                <h4><span class="label label-default">Nome do aluno:</span></h4>
                <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['NOME_ALUNO']; ?>">
                <h4><span class="label label-default">Data de nascimento:</span></h4>
                <input class="form-control" type="text" name="data_nascimento" placeholder="YYYY-MM-DD" value="<?php echo $linha['DATA_NASCIMENTO']; ?>">
                <h4><span class="label label-default">E-mail do aluno:</span></h4>
                <input class="form-control" type="email" name="email_aluno" placeholder="Insira o e-mail do aluno" value="<?php echo $linha['EMAIL']; ?>">
                <input class="btn btn-primary" type="submit" value="Editar Aluno">    
            </form>
            <?php } ?>    
    <?php } ?>
<?php } ?>