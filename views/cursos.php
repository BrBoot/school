<a class="btn btn-primary" href="?pagina=inserir_curso">Inserir novo curso</a>


<table class="table">
    <tr>
        <th>Nome do curso</th>
        <th>Carga Horária</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo '<tr><td>'.$linha['NOME_CURSO']. '</td>';
            echo '<td>'.$linha['DURACAO']. '</td>';
    ?>
        <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['ID_CURSO'];?>">Editar</a></td>
        <td><a href="deleta_curso.php?id_curso=<?php echo $linha['ID_CURSO'];?>">Deletar</a></td></tr>

    <?php
        }
    ?>    

</table>

  
