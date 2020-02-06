<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo curso</h1>
<form method="POST" action="processa_curso.php">
    <div class="form-group">
        <label class="lead">Nome do Curso:</label>
        <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
    </div>
    <div class="form-group">   
        <label class="lead">Carga horária:</label>
        <input class="form-control" type="text" name="carga_hr" placeholder="Insira a carga horária">
    </div>    
        <input class="btn btn-primary" type="submit" value="Inserir Curso">    
</form> 

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
        <?php if($linha['ID_CURSO'] == $_GET['editar']){ ?>

            <h1>Editar curso</h1>
            <form method="POST" action="editar_curso.php">                
                <input type="hidden" name="id_curso" value="<?php echo $linha['ID_CURSO']; ?>">
                <div class="form-group">
                    <label class="lead">Nome do curso:</label>
                    <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['NOME_CURSO']; ?>">
                </div>
                <div class="form-group">   
                    <label class="lead">Carga horária:</label>
                    <input class="form-control" type="text" name="carga_hr" placeholder="Insira a carga horária" value="<?php echo $linha['DURACAO']; ?>">
                </div>
                    <input class="btn btn-primary" type="submit" value="Editar Curso">    
            </form>
        <?php } ?>    
    <?php } ?>
<?php } ?>