<a class="btn btn-primary" href="?pagina=inserir_matricula">Inserir nova matricula</a>

<table class="table">
    <tr>
        <th>Nome aluno</th>
        <th>Nome curso</th>
        <th>Deletar</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_matriculas)){
            echo '<tr><td>'.$linha['NOME_ALUNO']. '</td>';
            echo '<td>'.$linha['NOME_CURSO']. '</td>';
    ?>
        <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['ID_ALUNO_CURSO'];?>">Deletar</a></td></tr>

    <?php   
        }
    ?>
</table>    