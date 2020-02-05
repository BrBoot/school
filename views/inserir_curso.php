<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo curso</h1>
<form method="POST" action="processa_curso.php">
    <h4><span class="label label-default">Nome do Curso:</span></h4>
    <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
    <h4><span class="label label-default">Carga horária:</span></h4>
    <input class="form-control" type="text" name="carga_hr" placeholder="Insira a carga horária">
    <input class="btn btn-primary" type="submit" value="Inserir Curso">    
</form> 

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
        <?php if($linha['ID_CURSO'] == $_GET['editar']){ ?>

            <h1>Editar curso</h1>
            <form method="POST" action="editar_curso.php">
                <input type="hidden" name="id_curso" value="<?php echo $linha['ID_CURSO']; ?>">
                <h4><span class="label label-default">Nome do curso:</span></h4>
                <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['NOME_CURSO']; ?>">
                <h4><span class="label label-default">Carga horária:</span></h4>
                <input class="form-control" type="text" name="carga_hr" placeholder="Insira a carga horária" value="<?php echo $linha['DURACAO']; ?>">
                <input class="btn btn-primary" type="submit" value="Editar Curso">    
            </form>
        <?php } ?>    
    <?php } ?>
<?php } ?>