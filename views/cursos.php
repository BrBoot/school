<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome curso</th>
        <th>Carga Horária</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo '<tr><td>'.$linha['NOME_CURSO']. '</td>';
            echo '<td>'.$linha['DURACAO']. '</td></tr>';
        }
    ?>

</table>

  
