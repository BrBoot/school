<a class="btn btn-primary" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table class="table">
    <tr>
        <th>Nome Aluno</th>
        <th>Data de Nascimento</th>
        <th>E-mail</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_alunos)){
            echo '<tr><td>'.$linha['NOME_ALUNO']. '</td>';
            echo '<td>'.$linha['DATA_NASCIMENTO']. '</td>';
            echo '<td>'.$linha['EMAIL']. '</td>';
    ?>

    <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['ID_ALUNO'];?>">Editar</a></td>
    <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['ID_ALUNO'];?>">Deletar</a></td></tr>

    <?php    
        }
    ?>


</table>    