<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome Aluno</th>
        <th>Data de Nascimento</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_alunos)){
            echo '<tr><td>'.$linha['NOME_ALUNO']. '</td>';
            echo '<td>'.$linha['DATA_NASCIMENTO']. '</td></tr>';
        }
    ?>
</table>    