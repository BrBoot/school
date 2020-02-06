<h1>Inserir nova matrícula</h1>

<form method="POST" action="processa_matricula.php">
    <div class="form-group">
        <label class="lead">Selecione um Aluno:</label>
        <select class="form-control" name="escolha_aluno">
            <option >Selecione um Aluno</option>
            <?php
                while($linha = mysqli_fetch_array($consulta_alunos)){
                    echo '<option value="'.$linha['ID_ALUNO']. '">'.$linha['NOME_ALUNO'].'</option>';
                }        
            ?>
        </select>
    </div>
    <div class="form-group">  
        <label class="lead">Selecione um curso:</label>    
        <select class="form-control" name="escolha_curso">
        <option>Selecione um curso</option>
            <?php
                while($linha = mysqli_fetch_array($consulta_cursos)){
                    echo '<option value="'.$linha['ID_CURSO']. '">'.$linha['NOME_CURSO'].'</option>';
                }        
            ?>
        </select>
    </div>    
    <input class="btn btn-primary" type="submit" value="Matricular aluno(a)">

</form>    