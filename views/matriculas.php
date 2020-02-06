<a class="btn btn-primary mb-3" href="?pagina=inserir_matricula">Inserir nova matricula</a>

<table class="table table-hover" id="matriculas">
    <thead>
        <tr>
            <th>Nome aluno</th>
            <th>Nome curso</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_matriculas)){
                echo '<tr><td>'.$linha['NOME_ALUNO']. '</td>';
                echo '<td>'.$linha['NOME_CURSO']. '</td>';
        ?>
            <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['ID_ALUNO_CURSO'];?>"><span style="color: #FFA069"><i class="fas fa-trash-alt"></i></a></td></tr>

        <?php   
            }
        ?>
    </tbody>    
</table>    