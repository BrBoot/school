<a class="btn btn-primary mb-3" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table class="table table-hover" id="alunos">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Data de Nascimento</th>
            <th>E-mail</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<tr><td>'.$linha['NOME_ALUNO']. '</td>';
                echo '<td>'.$linha['DATA_NASCIMENTO']. '</td>';
                echo '<td>'.$linha['EMAIL']. '</td>';
        ?>

        <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['ID_ALUNO'];?>"><i class="fas fa-user-edit"></i></a></td>
        <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['ID_ALUNO'];?>"><span style="color: #FFA069"><i class="fas fa-trash-alt"></i></a></td></tr>

        <?php    
            }
        ?>
    </tbody>    
</table>    