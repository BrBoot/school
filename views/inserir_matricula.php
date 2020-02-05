<h1>Inserir nova matrícula</h1>
<h5><span class="label label-default">Selecione um Aluno:</span></h5>
<form method="POST" action="processa_matricula.php">
    <select class="form-control" name="escolha_aluno">
        <option >Selecione um Aluno</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<option value="'.$linha['ID_ALUNO']. '">'.$linha['NOME_ALUNO'].'</option>';
            }        
        ?>
    </select>
    <h5><span class="label label-default">Selecione um curso:</span></h5>  
    <select class="form-control" name="escolha_curso">
    <option>Selecione um curso</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<option value="'.$linha['ID_CURSO']. '">'.$linha['NOME_CURSO'].'</option>';
            }        
        ?>
    </select>
    <input class="btn btn-primary" type="submit" value="Matricular aluno(a)">

</form>    