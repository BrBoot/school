<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome aluno</th>
        <th>Nome curso</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_matriculas)){
            echo '<tr><td>'.$linha['NOME_ALUNO']. '</td>';
            echo '<td>'.$linha['NOME_CURSO']. '</td></tr>';
        }
    ?>
</table>    